<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $newsletter_mail = "SELECT * FROM newsletter_mail ORDER BY status=0 DESC, status=1 ASC, id DESC";
    $newsletter_mail_result = mysqli_query($dbconnect, $newsletter_mail);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Newsletter</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Sended Mail</a></li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
        <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Sended Email Field</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($newsletter_mail_result as $key => $mail) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $mail['newsletter_mail']?></td>
                                        <td>
                                            <?php if($mail['status'] == 0) {?>
                                            <a href="mail_post.php?id=<?= $mail['id']?>" class="btn btn-info">Unreaded</a>
                                            <?php } else {?>
                                            <a class="btn btn-default disabled">AllReady Readed</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="mail_delete.php?id=<?= $mail['id']?>" class="btn btn-danger delete_btn">Delete</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- Row -->
    </div><!-- Main Wrapper -->
</div>

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
<?php if (isset($_SESSION['delete_newsletter_mail'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_newsletter_mail']);?>