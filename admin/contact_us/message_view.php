<?php
    session_start();
    require '../db.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $id = $_GET['id'];
    $select_contact_us = "SELECT * FROM contact_us_mail WHERE id= $id";
    $select_contact_us_result = mysqli_query($dbconnect, $select_contact_us);
    $after_assoc = mysqli_fetch_assoc($select_contact_us_result);

    $select_contact_us_mail = "SELECT COUNT(*) as unreaded_message FROM contact_us_mail";
    $select_contact_us_mail_result = mysqli_query($dbconnect, $select_contact_us_mail);
    $after_assoc3 = mysqli_fetch_assoc($select_contact_us_mail_result);
?>
    <body class="page-header-fixed">
        <div class="overlay"></div>
        <main class="page-content content-wrap">
            
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row m-t-md">
                        <div class="col-md-12">
                            <div class="row mailbox-header">
                                <div class="col-md-2"></div>
                                <div class="col-md-6">
                                    <h2>View Message</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <ul class="list-unstyled mailbox-nav">
                                <li><a href="/probiz/admin/contact_us/view_contact_info.php"><i class="fa fa-inbox"></i>Inbox <span class="badge badge-success pull-right"><?= $after_assoc3['unreaded_message']?></span></a></li>
                            </ul>
                        </div>
                        <div class="col-md-10">
                            <div class="mailbox-content">
                                <div class="message-header">
                                    <h3><span>Subject:</span><?= $after_assoc['subject']?></h3>
                                    <p class="message-date"><?= $after_assoc['created_at']?></p>
                                </div>
                                <div class="message-sender">
                                    <img src="/probiz/admin/assets/images/avatar2.png" alt="">
                                    <p><?= $after_assoc['name']?> <span>&lt;<?= $after_assoc['email']?>&gt;</span></p>
                                </div>
                                <div class="message-content">
                                    <p><?= $after_assoc['message']?></p>
                                </div>
                                <div class="message-options pull-right">
                                   <a id="/probiz/admin/contact_us/message_view_delete.php?id=<?= $after_assoc['id']?>" class="btn btn-default delete_btn"><i class="fa fa-trash m-r-xs"></i>Delete</a> 
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        
<?php
    require '../includes/footer.php';
?>
<script>
$('.delete_btn').click(function(){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = $(this).attr('id');
        }
        })
});
</script>
<?php if (isset($_SESSION['delete_team_title'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_team_title']);?>
