<?php include("../../path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>

<?php include(ROOT_PATH . "/blog/admin/includes/_header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>View All Users</h1>
        </div>
    </div>
</div>

<?php include(ROOT_PATH . "/app/includes/_messages.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admin_users as $key => $user) : ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $user['username']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><a href="edituser.php?id=<?php echo $user['id']; ?>"><button class="btn btn-success btn-sm">Edit</button></a></td>
                            <td><a href="viewuser.php?delete_id=<?php echo $user['id']; ?>"><button class="btn btn-danger btn-sm">Delete</button></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include(ROOT_PATH . "/blog/admin/includes/_footer.php"); ?>