<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_port_title = "SELECT * FROM portfolio_title";
    $select_port_title_result = mysqli_query($dbconnect, $select_port_title);
    
    $select_port_img = "SELECT * FROM portfolio_image ORDER BY class_name ASC";
    $select_port_img_result = mysqli_query($dbconnect, $select_port_img);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Portfolio</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">FrontEnd</a></li>
                <li><a href="#">Portfolio</a></li>
                <li class="active">Portfolio Info</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
        <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Portfolio Title</h4>
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
                                    foreach($select_port_title_result as $key => $port_title) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $port_title['category']?></td>
                                        <td><?= $port_title['title']?></td>
                                        <td><?= $port_title['description']?></td>
                                        <td>
                                            <?php if($port_title['status'] == 0) {?>
                                            <a href="port_title_active.php?id=<?= $port_title['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="port_title_active.php?id=<?= $port_title['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="port_title_delete.php?id=<?= $port_title['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
        
        
        <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Portfolio Image</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Portfolio Image</th>
                                        <th>Class Link</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_port_img_result as $key => $port_img) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><img src="/probiz/admin/uploads/portfolio_image/<?= $port_img['port_img']?>" width="200" alt=""></td>
                                        <td><?= $port_img['class_name']?></td>
                                        <td>
                                            <?php if($port_img['status'] == 0) {?>
                                            <a href="port_img_active.php?id=<?= $port_img['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="port_img_active.php?id=<?= $port_img['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="port_img_delete.php?id=<?= $port_img['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
<?php if (isset($_SESSION['delete_port_title'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_port_title']);?>

<?php if (isset($_SESSION['delete_port_img'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_port_img']);?>