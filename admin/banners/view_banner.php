<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_banner = "SELECT * FROM banners";
    $select_banner_result = mysqli_query($dbconnect, $select_banner);
    
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
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Btn 01</th>
                                        <th>Btn 01 Link</th>
                                        <th>Btn 02</th>
                                        <th>Btn 02 Link</th>
                                        <th>Background Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_banner_result as $key => $banner) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $banner['title']?></td>
                                        <td><?= $banner['description']?></td>
                                        <td><?= $banner['btn_1']?></td>
                                        <td><?= $banner['btn_1_link']?></td>
                                        <td><?= $banner['btn_2']?></td>
                                        <td><?= $banner['btn_2_link']?></td>
                                        <td><img src="/probiz/admin/uploads/banners/<?= $banner['bg_image']?>" width="150" alt=""></td>
                                        <td>
                                            <?php if($banner['status'] == 0) {?>
                                            <a href="banner_active.php?id=<?= $banner['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="banner_active.php?id=<?= $banner['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="banner_edit.php?id=<?= $banner['id']?>" class="btn btn-info" style="margin-bottom:5px;">Edit</a>
                                            <button id="banner_delete.php?id=<?= $banner['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
<?php if (isset($_SESSION['delete_user'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_user']);?>