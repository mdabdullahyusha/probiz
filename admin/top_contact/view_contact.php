<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_top_contact = "SELECT * FROM top_contact";
    $select_top_contact_result = mysqli_query($dbconnect, $select_top_contact);
    
    $select_social_icon = "SELECT * FROM social_icon";
    $select_social_icon_result = mysqli_query($dbconnect, $select_social_icon);
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Contact View</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">FrontEnd</a></li>
                <li><a href="#">Top Contact</a></li>
                <li class="active">Contact Info</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Left Bar</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Phone Icon</th>
                                        <th>Phone</th>
                                        <th>Email Icon</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_top_contact_result as $key => $top_contact) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><i class="<?= $top_contact['phone_icon']?>" style="font-size: 28px;"></i></td>
                                        <td><?= $top_contact['phone_number']?></td>
                                        <td><i class="<?= $top_contact['email_icon']?>" style="font-size: 28px;"></i></td>
                                        <td><?= $top_contact['email']?></td>
                                        <td>
                                        <button id="contact_delete.php?id=<?= $top_contact['id']?>" class="btn btn-danger delete_btn">Delete</button></td>
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
                        <h4 class="panel-title">Social Icon</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Social Icon</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_social_icon_result as $key => $social) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><i class="<?= $social['social_icon']?>" style="font-size: 28px;"></i></td>
                                        <td>
                                            <?php if($social['status'] == 0) {?>
                                            <a href="contact_active.php?id=<?= $social['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="contact_active.php?id=<?= $social['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td><button id="contact_delete_02.php?id=<?= $social['id']?>" class="btn btn-danger delete_btn">Delete</button></td>
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