<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    // For Pricing Title
    $select_pricing_title = "SELECT * FROM pricing_title";
    $select_pricing_title_result = mysqli_query($dbconnect, $select_pricing_title);

    // For Basic Pricing
    $select_basic_pricing = "SELECT * FROM basic_pricing";
    $select_basic_pricing_result = mysqli_query($dbconnect, $select_basic_pricing);

    $select_basic_pricing_facility = "SELECT * FROM basic_pricing_facility";
    $select_basic_pricing_facility_result = mysqli_query($dbconnect, $select_basic_pricing_facility);

    // For Standard Pricing
    $select_standard_pricing = "SELECT * FROM standard_pricing";
    $select_standard_pricing_result = mysqli_query($dbconnect, $select_standard_pricing);

    $select_standard_pricing_facility = "SELECT * FROM standard_pricing_facility";
    $select_standard_pricing_facility_result = mysqli_query($dbconnect, $select_standard_pricing_facility);
    
    
    // For Premium Pricing
    $select_premium_pricing = "SELECT * FROM premium_pricing";
    $select_premium_pricing_result = mysqli_query($dbconnect, $select_premium_pricing);

    $select_premium_pricing_facility = "SELECT * FROM premium_pricing_facility";
    $select_premium_pricing_facility_result = mysqli_query($dbconnect, $select_premium_pricing_facility);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Pricing</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">FrontEnd</a></li>
                <li><a href="#">Pricing</a></li>
                <li class="active">Pricing Info</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Pricing Title</h4>
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
                                    foreach($select_pricing_title_result as $key => $pricing_title) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $pricing_title['category']?></td>
                                        <td><?= $pricing_title['title']?></td>
                                        <td><?= $pricing_title['description']?></td>
                                        <td>
                                            <?php if($pricing_title['status'] == 0) {?>
                                            <a href="pricing_title_active.php?id=<?= $pricing_title['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="pricing_title_active.php?id=<?= $pricing_title['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="pricing_title_delete.php?id=<?= $pricing_title['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
                        <h4 class="panel-title">Basic Pricing</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Button</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_basic_pricing_result as $key => $basic_pricing) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $basic_pricing['title']?></td>
                                        <td><?= $basic_pricing['price']?></td>
                                        <td><?= $basic_pricing['btn']?></td>
                                        <td>
                                            <?php if($basic_pricing['status'] == 0) {?>
                                            <a href="basic_pricing_active.php?id=<?= $basic_pricing['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="basic_pricing_active.php?id=<?= $basic_pricing['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="basic_pricing_delete.php?id=<?= $basic_pricing['id']?>" class="btn btn-danger delete_btn">Delete</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Basic Pricing Facility</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Facility</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_basic_pricing_facility_result as $key => $basic_pricing_facility) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $basic_pricing_facility['facility']?></td>
                                        <td>
                                            <?php if($basic_pricing_facility['status'] == 0) {?>
                                            <a href="basic_facility_active.php?id=<?= $basic_pricing_facility['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="basic_facility_active.php?id=<?= $basic_pricing_facility['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="basic_facility_delete.php?id=<?= $basic_pricing_facility['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
                        <h4 class="panel-title">Standard Pricing</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Button</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_standard_pricing_result as $key => $standard_pricing) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $standard_pricing['title']?></td>
                                        <td><?= $standard_pricing['price']?></td>
                                        <td><?= $standard_pricing['btn']?></td>
                                        <td>
                                            <?php if($standard_pricing['status'] == 0) {?>
                                            <a href="standard_pricing_active.php?id=<?= $standard_pricing['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="standard_pricing_active.php?id=<?= $standard_pricing['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="standard_pricing_delete.php?id=<?= $standard_pricing['id']?>" class="btn btn-danger delete_btn">Delete</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Standard Pricing Facility</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Facility</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_standard_pricing_facility_result as $key => $standard_pricing_facility) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $standard_pricing_facility['facility']?></td>
                                        <td>
                                            <?php if($standard_pricing_facility['status'] == 0) {?>
                                            <a href="standard_facility_active.php?id=<?= $standard_pricing_facility['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="standard_facility_active.php?id=<?= $standard_pricing_facility['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="standard_facility_delete.php?id=<?= $standard_pricing_facility['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
                        <h3 class="panel-title">Premium Pricing</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Button</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_premium_pricing_result as $key => $premium_pricing) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $premium_pricing['title']?></td>
                                        <td><?= $premium_pricing['price']?></td>
                                        <td><?= $premium_pricing['btn']?></td>
                                        <td>
                                            <?php if($premium_pricing['status'] == 0) {?>
                                            <a href="premium_pricing_active.php?id=<?= $premium_pricing['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="premium_pricing_active.php?id=<?= $premium_pricing['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="premium_pricing_delete.php?id=<?= $premium_pricing['id']?>" class="btn btn-danger delete_btn">Delete</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Premium Pricing Facility</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Facility</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_premium_pricing_facility_result as $key => $premium_pricing_facility) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $premium_pricing_facility['facility']?></td>
                                        <td>
                                            <?php if($premium_pricing_facility['status'] == 0) {?>
                                            <a href="premium_facility_active.php?id=<?= $premium_pricing_facility['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="premium_facility_active.php?id=<?= $premium_pricing_facility['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="premium_facility_delete.php?id=<?= $premium_pricing_facility['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
<?php if (isset($_SESSION['delete_pricing_title'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_pricing_title']);?>


<?php if (isset($_SESSION['delete_basic_pricing'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_basic_pricing']);?>

<?php if (isset($_SESSION['delete_standard_pricing'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_standard_pricing']);?>

<?php if (isset($_SESSION['delete_premium_pricing'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_premium_pricing']);?>

<?php if (isset($_SESSION['delete_basic_pricing_facility'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_basic_pricing_facility']);?>

<?php if (isset($_SESSION['delete_standard_pricing_facility'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_standard_pricing_facility']);?>

<?php if (isset($_SESSION['delete_premium_pricing_facility'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_premium_pricing_facility']);?>