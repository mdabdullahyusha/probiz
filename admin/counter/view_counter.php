<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_counter = "SELECT * FROM counter";
    $select_counter_result = mysqli_query($dbconnect, $select_counter);

    $select_counter_image = "SELECT * FROM counter_image";
    $select_counter_image = mysqli_query($dbconnect, $select_counter_image);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Counter View</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">FrontEnd</a></li>
                <li><a href="#">Counter</a></li>
                <li class="active">Counter Info</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
        <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Counter Background Image</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Counter Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_counter_image as $key => $counter_image) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><img src="/probiz/admin/uploads/counter/<?= $counter_image['counter_image']?>" width="250" alt=""></td>
                                        <td>
                                            <?php if($counter_image['status'] == 0) {?>
                                            <a href="counter_image_active.php?id=<?= $counter_image['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="counter_image_active.php?id=<?= $counter_image['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="counter_image_delete.php?id=<?= $counter_image['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
                        <h4 class="panel-title">Counter</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Icon</th>
                                        <th>Description</th>
                                        <th>Service Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_counter_result as $key => $counter) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><i class="<?= $counter['icon_link']?>" style="font-size: 40px;"></i></td>
                                        <td><?= $counter['number']?></td>
                                        <td><?= $counter['description']?></td>
                                        <td>
                                            <?php if($counter['status'] == 0) {?>
                                            <a href="counter_active.php?id=<?= $counter['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="counter_active.php?id=<?= $counter['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="counter_delete.php?id=<?= $counter['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
<?php if (isset($_SESSION['delete_counter_image'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_counter_image']);?>

<?php if (isset($_SESSION['delete_counter'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_counter']);?>