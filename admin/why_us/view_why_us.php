<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_why_choose_title = "SELECT * FROM why_choose_title";
    $select_why_choose_title_result = mysqli_query($dbconnect, $select_why_choose_title);
    
    $select_reason = "SELECT * FROM reasons";
    $select_reason_result = mysqli_query($dbconnect, $select_reason);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Why Choose</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">FrontEnd</a></li>
                <li><a href="#">Why Choose</a></li>
                <li class="active">Why Us Info</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
        <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Reasons</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Reason</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_reason_result as $key => $reason) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $reason['reasons']?></td>
                                        <td>
                                            <?php if($reason['status'] == 0) {?>
                                            <a href="reason_active.php?id=<?= $reason['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="reason_active.php?id=<?= $reason['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="reason_delete.php?id=<?= $reason['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
                        <h4 class="panel-title">Why Us Title</h4>
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
                                    foreach($select_why_choose_title_result as $key => $why_choose) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $why_choose['category']?></td>
                                        <td><?= $why_choose['title']?></td>
                                        <td><?= $why_choose['description']?></td>
                                        <td><img src="/probiz/admin/uploads/why_choose/<?= $why_choose['why_choose_image']?>" width="150" alt=""></td>
                                        <td>
                                            <?php if($why_choose['status'] == 0) {?>
                                            <a href="why_us_active.php?id=<?= $why_choose['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="why_us_active.php?id=<?= $why_choose['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="why_us_delete.php?id=<?= $why_choose['id']?>" class="btn btn-danger delete_btn">Delete</button>
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

<?php if (isset($_SESSION['delete_why_us'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_why_us']);?>

<?php if (isset($_SESSION['delete_reasons'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_reasons']);?>