<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_team = "SELECT * FROM teams";
    $select_team_result = mysqli_query($dbconnect, $select_team);
    
    $select_teams_title = "SELECT * FROM teams_title";
    $select_teams_title_result = mysqli_query($dbconnect, $select_teams_title);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Contact View</h3>
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
                        <h4 class="panel-title">See Teams Title</h4>
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
                                    foreach($select_teams_title_result as $key => $teams_title) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $teams_title['category']?></td>
                                        <td><?= $teams_title['title']?></td>
                                        <td><?= $teams_title['description']?></td>
                                        <td>
                                            <?php if($teams_title['status'] == 0) {?>
                                            <a href="team_title_active.php?id=<?= $teams_title['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="team_title_active.php?id=<?= $teams_title['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="team_title_delete.php?id=<?= $teams_title['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
                        <h4 class="panel-title">See Teams</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Job Post</th>
                                        <th>Icon 01</th>
                                        <th>Icon 01 Link</th>
                                        <th>Icon 02</th>
                                        <th>Icon 02 Link</th>
                                        <th>Icon 03</th>
                                        <th>Icon 03 Link</th>
                                        <th>Icon 04</th>
                                        <th>Icon 04 Link</th>
                                        <th>Profile Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_team_result as $key => $team) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $team['name']?></td>
                                        <td><?= $team['job_post']?></td>
                                        <td><i class="<?= $team['icon_01']?>" style="font-size: 40px;"></i></td>
                                        <td><?= $team['icon_01_link']?></td>
                                        <td><i class="<?= $team['icon_02']?>" style="font-size: 40px;"></i></td>
                                        <td><?= $team['icon_02_link']?></td>
                                        <td><i class="<?= $team['icon_03']?>" style="font-size: 40px;"></i></td>
                                        <td><?= $team['icon_03_link']?></td>
                                        <td><i class="<?= $team['icon_04']?>" style="font-size: 40px;"></i></td>
                                        <td><?= $team['icon_04_link']?></td>
                                        <td><img src="/probiz/admin/uploads/teams/<?= $team['profile_image']?>" width="150" alt=""></td>
                                        <td>
                                            <?php if($team['status'] == 0) {?>
                                            <a href="team_active.php?id=<?= $team['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="team_active.php?id=<?= $team['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="team_edit.php?id=<?= $team['id']?>" class="btn btn-info" style="margin-bottom:5px;">Edit</a>
                                            <button id="team_delete.php?id=<?= $team['id']?>" class="btn btn-danger delete_btn_2">Delete</button>
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
<?php if (isset($_SESSION['delete_teams'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_teams']);?>