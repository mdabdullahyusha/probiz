<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_blog = "SELECT * FROM blogs";
    $select_blog_result = mysqli_query($dbconnect, $select_blog);
    
    $select_blog_title = "SELECT * FROM blog_title";
    $select_blog_title_result = mysqli_query($dbconnect, $select_blog_title);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Blogs</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">FrontEnd</a></li>
                <li><a href="#">Team</a></li>
                <li class="active">Team Info</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
        <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">See Blog Title</h4>
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
                                    foreach($select_blog_title_result as $key => $blog_title) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $blog_title['category']?></td>
                                        <td><?= $blog_title['title']?></td>
                                        <td><?= $blog_title['description']?></td>
                                        <td>
                                            <?php if($blog_title['status'] == 0) {?>
                                            <a href="blog_title_active.php?id=<?= $blog_title['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="blog_title_active.php?id=<?= $blog_title['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="blog_title_delete.php?id=<?= $blog_title['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
                        <h4 class="panel-title">See Blogs</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Posted From</th>
                                        <th>Description</th>
                                        <th>Total Like</th>
                                        <th>Total Comment</th>
                                        <th>Created At</th>
                                        <th>Blog Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_blog_result as $key => $blog) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $blog['title']?></td>
                                        <td><?php if($blog['posted_from'] == 1) {echo 'Admin';} else {echo 'Moderator';}?></td>
                                        <td><?= $blog['description']?></td>
                                        <td><?= $blog['blog_like']?></td>
                                        <td><?= $blog['comment']?></td>
                                        <td><?= $blog['created_at']?></td>
                                        <td><img src="/probiz/admin/uploads/blogs/<?= $blog['blog_image']?>" width="150" alt=""></td>
                                        <td>
                                            <?php if($blog['status'] == 0) {?>
                                            <a href="blog_active.php?id=<?= $blog['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="blog_active.php?id=<?= $blog['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="blog_delete.php?id=<?= $blog['id']?>" class="btn btn-danger delete_btn_2">Delete</button>
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
<?php if (isset($_SESSION['delete_team_title'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_team_title']);?>

<script>

$('.delete_btn_2').click(function(){
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
<?php if (isset($_SESSION['delete_blogs'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_blogs']);?>