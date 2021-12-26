<?php
    session_start();
    require '../db.php';
    require '../session_check.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $contact_now = "SELECT * FROM contact_now";
    $contact_now_result = mysqli_query($dbconnect, $contact_now);
    
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Contact View</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">FrontEnd</a></li>
                <li><a href="#">Contact Now</a></li>
                <li class="active">Contact Info</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
        <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Contact Now Field</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title 01</th>
                                        <th>Title 02</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($contact_now_result as $key => $contact_now) { ?>
                                    <tr>
                                        <th scope="row"><?= $key+1?></th>
                                        <td><?= $contact_now['title_01']?></td>
                                        <td><?= $contact_now['title_02']?></td>
                                        <td><img src="/probiz/admin/uploads/contact_now/<?= $contact_now['contact_now_image']?>" width="150" alt=""></td>
                                        <td>
                                            <?php if($contact_now['status'] == 0) {?>
                                            <a href="contact_now_active.php?id=<?= $contact_now['id']?>" class="btn btn-default">Deactivated</a>
                                            <?php } else {?>
                                            <a href="contact_now_active.php?id=<?= $contact_now['id']?>" class="btn btn-info">Activated</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button id="contact_now_delete.php?id=<?= $contact_now['id']?>" class="btn btn-danger delete_btn">Delete</button>
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
<?php if (isset($_SESSION['delete_contact_now'])) {?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_contact_now']);?>