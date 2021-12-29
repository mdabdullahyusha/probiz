<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $select_contact_us = "SELECT * FROM contact_us";
    $select_contact_us_result = mysqli_query($dbconnect, $select_contact_us);
    
    $select_contact_us_title = "SELECT * FROM contact_title";
    $select_contact_us_title_result = mysqli_query($dbconnect, $select_contact_us_title);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Contact Us</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">FrontEnd</a></li>
                <li><a href="#">Contact Us</a></li>
                <li class="active">Contact Us Info</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
        <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">See Contact Title</h4>
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
                                    foreach($select_contact_us_title_result as $key => $contact_title) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $contact_title['category']?></td>
                                        <td><?= $contact_title['title']?></td>
                                        <td><?= $contact_title['description']?></td>
                                        <td>
                                            <?php if($contact_title['status'] == 0) {?>
                                            <a href="contact_title_active.php?id=<?= $contact_title['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="contact_title_active.php?id=<?= $contact_title['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="contact_title_delete.php?id=<?= $contact_title['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
                        <h4 class="panel-title">See Contacts</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Address Icon</th>
                                        <th>Address</th>
                                        <th>Mail Icon</th>
                                        <th>Mail</th>
                                        <th>Mobile Icon</th>
                                        <th>Mobile</th>
                                        <th>Telephone Icon</th>
                                        <th>Telephone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($select_contact_us_result as $key => $contact_us) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $contact_us['address_icon']?></td>
                                        <td><?= $contact_us['address']?></td>
                                        <td><?= $contact_us['mail_icon']?></td>
                                        <td><?= $contact_us['mail']?></td>
                                        <td><?= $contact_us['mobile_icon']?></td>
                                        <td><?= $contact_us['mobile']?></td>
                                        <td><?= $contact_us['telephone_icon']?></td>
                                        <td><?= $contact_us['telephone']?></td>
                                        <td>
                                            <?php if($contact_us['status'] == 0) {?>
                                            <a href="contact_active.php?id=<?= $contact_us['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="contact_active.php?id=<?= $contact_us['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="contact_delete.php?id=<?= $contact_us['id']?>" class="btn btn-danger delete_btn_2">Delete</button>
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
<?php if (isset($_SESSION['delete_contact_title'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_contact_title']);?>

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
<?php if (isset($_SESSION['delete_contact'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_contact']);?>