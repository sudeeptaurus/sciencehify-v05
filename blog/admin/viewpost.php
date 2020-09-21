<?php include("../../path.php"); ?>

<?php

include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();

?>

<?php include(ROOT_PATH . "/blog/admin/includes/_header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>View All Posts</h1>
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
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($posts as $key => $post) : ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $post['title']; ?></td>
                            <td>Sudeep</td>
                            <td><a href="editpost.php?id=<?php echo $post['id']; ?>"><button class="btn btn-success btn-sm">Edit</button></a></td>
                            <td><a href="editpost.php?delete_id=<?php echo $post['id']; ?>"><button class="btn btn-danger btn-sm">Delete</button></a></td>
                            <?php if ($post['published']) : ?>
                                <td><a href="editpost.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish"><button class="btn btn-warning btn-sm">unpublish</button></a></td>
                            <?php else : ?>
                                <td><a href="editpost.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish"><button class="btn btn-primary btn-sm">publish</button></a></td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include(ROOT_PATH . "/blog/admin/includes/_footer.php"); ?>