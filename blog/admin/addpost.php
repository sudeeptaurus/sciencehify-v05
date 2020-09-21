<?php include("../../path.php"); ?>

<?php

include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();

?>

<?php include(ROOT_PATH . "/blog/admin/includes/_header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add New Post</h1>
        </div>
    </div>
</div>

<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="addpost.php" method="post" class="add-new-post" enctype="multipart/form-data">
                <div>
                    <label>Title</label>
                    <input class="form-control form-control-lg mb-3 text-input" type="text" name="title" value="<?php echo $title; ?>" placeholder="Your Post Title">
                </div>
                <div>
                    <label>Body</label>
                    <textarea class="form-control form-control-lg mb-3 text-input" name="body" value="<?php echo $body; ?>" id="body"></textarea>
                </div>
                <div>
                    <label>Image</label>
                    <input type="file" name="image" id="" class="form-control form-control-lg mb-3 text-input">
                </div>
                <div>
                    <label>Topic</label>
                    <select name="topic_id" class="form-control form-control-lg mb-3 text-input">
                        <option value=""></option>

                        <?php foreach ($topics as $key => $topic) : ?>
                            <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                                <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                            <?php else : ?>
                                <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </select>
                </div>
                <div>

                    <?php if (empty($published)) : ?>
                        <label>
                            <input type="checkbox" name="published">
                            Publish
                        </label>
                    <?php else : ?>
                        <label>
                            <input type="checkbox" name="published" checked>
                            Publish
                        </label>
                    <?php endif; ?>

                </div>
                <div>
                    <button type="submit" name="add-post" class="btn btn-big btn-info">Add Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include(ROOT_PATH . "/blog/admin/includes/_footer.php"); ?>