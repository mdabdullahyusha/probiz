<?php
    session_start();
    require '../db.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_contact_us_mail = "SELECT COUNT(*) as unreaded_message FROM contact_us_mail";
    $select_contact_us_mail_result = mysqli_query($dbconnect, $select_contact_us_mail);
    $after_assoc3 = mysqli_fetch_assoc($select_contact_us_mail_result);
    
    $select_contact_us = "SELECT * FROM contact_us_mail ORDER BY id DESC";
    $select_contact_us_result = mysqli_query($dbconnect, $select_contact_us);
?>
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row m-t-md">
                        <div class="col-md-12">
                            <div class="row mailbox-header">
                                <div class="col-md-6">
                                    <h2>Inbox</h2>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-2">
                            <ul class="list-unstyled mailbox-nav">
                                <li class="active"><a href="view_contact_info.php"><i class="fa fa-inbox"></i>Inbox <span class="badge badge-success pull-right"><?= $after_assoc3['unreaded_message']?></span></a></li>
                            </ul>
                        </div>
                        <div class="col-md-10">
                            <div class="mailbox-content">
                            <table class="table">
                                <thead>
                                    <h3>Inbox</h3>
                                </thead>
                                <tbody>
                                <?php foreach($select_contact_us_result as $contact_us_mail) {?>
                                    <tr>
                                        <td><?= $contact_us_mail['name']?></td>
                                        <td><?= $contact_us_mail['message']?></td>
                                        <td><?= $contact_us_mail['created_at']?></td>
                                        <td><a href="message_view.php?id=<?= $contact_us_mail['id']?>" class="btn btn-primary">View</a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                
<?php
    require '../includes/footer.php';
?>

<?php if (isset($_SESSION['delete_contact_us_mail'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_contact_us_mail']);?>