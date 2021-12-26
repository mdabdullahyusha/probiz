<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $newsletterr = "SELECT * FROM newsletter";
    $newsletter_result = mysqli_query($dbconnect, $newsletterr);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Newsletter</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">FrontEnd</a></li>
                <li><a href="#">Newsletter</a></li>
                <li class="active">Newsletter Info</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
        <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Contact Now Field</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($newsletter_result as $key => $newsletter) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $newsletter['category']?></td>
                                        <td><?= $newsletter['title']?></td>
                                        <td><?= $newsletter['description']?></td>
                                        <td>
                                            <?php if($newsletter['status'] == 0) {?>
                                            <a href="newsletter_active.php?id=<?= $newsletter['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="newsletter_active.php?id=<?= $newsletter['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="newsletter_delete.php?id=<?= $newsletter['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
<?php if (isset($_SESSION['delete_newsletter'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_newsletter']);?>