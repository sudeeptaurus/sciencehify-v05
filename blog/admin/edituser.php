<?php include("../../path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>

<?php include(ROOT_PATH . "/blog/admin/includes/_header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h1>Edit User</h1>
            </div>
        </div>
    </div>
</div>

<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <form action="edituser.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="">User Name</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="form-control" placeholder="Password">
                </div>
                <div>
                    <?php if (isset($admin) && $admin == 1) : ?>
                        <label>
                            <input type="checkbox" name="admin" checked>
                            Admin
                        </label>
                    <?php else : ?>
                        <label>
                            <input type="checkbox" name="admin">
                            Admin
                        </label>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <button type="submit" name="update-user" class="btn btn-big btn-info">Update User</button>
                </div>
            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>

<?php include(ROOT_PATH . "/blog/admin/includes/_footer.php"); ?>