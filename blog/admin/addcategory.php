<?php include("../../path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();
?>

<?php include(ROOT_PATH . "/blog/admin/includes/_header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add New Category</h1>
        </div>
    </div>
</div>

<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="addcategory.php" method="post" class="add-new-post">
                <div>
                    <label>Name</label>
                    <input class="form-control form-control-lg mb-3 text-input" type="text" name="name" value="<?php echo $name; ?>">
                </div>
                <div>
                    <label>Description</label>
                    <textarea class="form-control form-control-lg mb-3 text-input" name="description" id="body" value="<?php echo $description; ?>"></textarea>
                </div>
                <br>
                <div>
                    <button type="submit" name="add-topic" class="btn btn-big btn-info">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?php include(ROOT_PATH . "/blog/admin/includes/_footer.php"); ?>