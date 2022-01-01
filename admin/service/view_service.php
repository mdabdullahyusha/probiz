<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_service_title = "SELECT * FROM service_title";
    $select_service_title_result = mysqli_query($dbconnect, $select_service_title);

    $select_service = "SELECT * FROM services";
    $select_service_result = mysqli_query($dbconnect, $select_service);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Features & Service View</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">FrontEnd</a></li>
                <li><a href="#">Service</a></li>
                <li class="active">Service Info</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
        <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Service Title</h4>
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
                                    foreach($select_service_title_result as $key => $service_title) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $service_title['category']?></td>
                                        <td><?= $service_title['name']?></td>
                                        <td><?= $service_title['description']?></td>
                                        <td>
                                            <?php if($service_title['status'] == 0) {?>
                                            <a href="service_title_active.php?id=<?= $service_title['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="service_title_active.php?id=<?= $service_title['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="service_title_delete.php?id=<?= $service_title['id']?>" class="btn btn-danger delete_btn">Delete</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Services</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Service Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_service_result as $key => $service) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $service['title']?></td>
                                        <td><?= $service['description']?></td>
                                        <td><img src="/probiz/admin/uploads/services/<?= $service['service_image']?>" width="150" alt=""></td>
                                        <td>
                                            <?php if($service['status'] == 0) {?>
                                            <a href="service_active.php?id=<?= $service['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="service_active.php?id=<?= $service['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="service_delete.php?id=<?= $service['id']?>" class="btn btn-danger delete_btn">Delete</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Features</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Service Image</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_service_result as $key => $service) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $service['title']?></td>
                                        <td><?= $service['description']?></td>
                                        <td><img src="/probiz/admin/uploads/services/<?= $service['service_image']?>" width="150" alt=""></td>
                                        <td>
                                            <?php if($service['features_status'] == 0) {?>
                                            <a href="f_service_active.php?id=<?= $service['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="f_service_active.php?id=<?= $service['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
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
<?php if (isset($_SESSION['delete_service_title'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_service_title']);?>

<?php if (isset($_SESSION['delete_service'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_service']);?>