<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_menu = "SELECT * FROM menus";
    $select_menu_result = mysqli_query($dbconnect, $select_menu);
    
    $select_logo = "SELECT * FROM logos";
    $select_logo_result = mysqli_query($dbconnect, $select_logo);
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
                                        <th>Logo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_logo_result as $key => $logo) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><img src="/probiz/admin/uploads/logos/<?= $logo['logo_name']?>" width="200" alt=""></td>
                                        <td>
                                            <?php if($logo['status'] == 0) {?>
                                            <a href="logo_active.php?id=<?= $logo['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="logo_active.php?id=<?= $logo['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="logo_delete.php?id=<?= $logo['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
                        <h4 class="panel-title">Menu Field</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Menu</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_menu_result as $key => $menu) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $menu['menu_name']?></td>
                                        <td>
                                            <?php if($menu['status'] == 0) {?>
                                            <a href="menu_active.php?id=<?= $menu['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="menu_active.php?id=<?= $menu['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                        <button id="menu_delete.php?id=<?= $menu['id']?>" class="btn btn-danger delete_btn">Delete</button></td>
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