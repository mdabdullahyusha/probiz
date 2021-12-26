<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_about = "SELECT * FROM abouts";
    $select_about_result = mysqli_query($dbconnect, $select_about);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Contact View</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">FrontEnd</a></li>
                <li><a href="#">Navigation</a></li>
                <li class="active">Navigation Info</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
        <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Logo Field</h4>
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
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_about_result as $key => $about) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $about['category']?></td>
                                        <td><?= $about['title']?></td>
                                        <td><?= $about['description']?></td>
                                        <td><img src="/probiz/admin/uploads/abouts/<?= $about['about_image']?>" width="150" alt=""></td>
                                        <td>
                                            <?php if($about['status'] == 0) {?>
                                            <a href="about_active.php?id=<?= $about['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="about_active.php?id=<?= $about['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="about_delete.php?id=<?= $about['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
<?php if (isset($_SESSION['delete_about'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_about']);?>