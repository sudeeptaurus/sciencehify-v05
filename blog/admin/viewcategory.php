<?php include("../../path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();
?>

<?php include(ROOT_PATH . "/blog/admin/includes/_header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>View All Categories</h1>
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
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($topics as $key => $topic) : ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $topic['name']; ?></td>
                            <td><a href="editcategory.php?id=<?php echo $topic['id']; ?>"><button class="btn btn-success btn-sm">Edit</button></a></td>
                            <td><a href="viewcategory.php?del_id=<?php echo $topic['id']; ?>"><button class="btn btn-danger btn-sm">Delete</button></a></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include(ROOT_PATH . "/blog/admin/includes/_footer.php"); ?>