<?php include("../../path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();
?>

<?php include(ROOT_PATH . "/blog/admin/includes/_header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Category</h1>
        </div>
    </div>
</div>

<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="editcategory.php" method="post" class="add-new-post">
                <input value="<?php echo $id; ?>" type="hidden" name="id">
                <div>
                    <label>Name</label>
                    <input class="form-control form-control-lg mb-3 text-input" value="<?php echo $name; ?>" type="text" name="name">
                </div>
                <div>
                    <label>Description</label>
                    <textarea class="form-control form-control-lg mb-3 text-input" name="description" id="body"><?php echo $description; ?></textarea>
                </div>
                <div>
                    <button type="submit" name="update-topic" class="btn btn-big btn-info">Update Category</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?php include(ROOT_PATH . "/blog/admin/includes/_footer.php"); ?>