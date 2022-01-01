<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_testi_title = "SELECT * FROM testi_title";
    $select_testi_title_result = mysqli_query($dbconnect, $select_testi_title);

    $select_testimonial = "SELECT * FROM testimoni";
    $select_testimonial_result = mysqli_query($dbconnect, $select_testimonial);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Testimonial View</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">FrontEnd</a></li>
                <li><a href="#">Testimonial</a></li>
                <li class="active">Testimonial Info</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
        <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Testimonial Title</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_testi_title_result as $key => $testi_title) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $testi_title['category']?></td>
                                        <td><?= $testi_title['title']?></td>
                                        <td>
                                            <?php if($testi_title['status'] == 0) {?>
                                            <a href="testi_title_active.php?id=<?= $testi_title['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="testi_title_active.php?id=<?= $testi_title['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="testi_title_delete.php?id=<?= $testi_title['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
                        <h4 class="panel-title">Testimonial</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Post</th>
                                        <th>Description</th>
                                        <th>Star Rating</th>
                                        <th>Testimonial Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_testimonial_result as $key => $testimonial) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $testimonial['name']?></td>
                                        <td><?= $testimonial['post']?></td>
                                        <td><?= $testimonial['description']?></td>
                                        <td><?= $testimonial['star_rating']?></td>
                                        <td><img src="/probiz/admin/uploads/testimonial/<?= $testimonial['testi_image']?>" width="250" alt=""></td>
                                        <td>
                                            <?php if($testimonial['status'] == 0) {?>
                                            <a href="testimonial_active.php?id=<?= $testimonial['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="testimonial_active.php?id=<?= $testimonial['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="testimonial_delete.php?id=<?= $testimonial['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
<?php if (isset($_SESSION['delete_testimonial'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_testimonial']);?>

<?php if (isset($_SESSION['delete_testi_title'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_testi_title']);?>