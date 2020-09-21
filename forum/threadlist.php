<?php include("../path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<?php

include(ROOT_PATH . "/app/includes/_header.php");
include(ROOT_PATH . "/app/includes/_navigation.php");

$id = $_GET['catid'];
$sql = "SELECT * FROM forumcategory WHERE category_id=$id";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $catname = $row['category_name'];
    $catdesc = $row['category_description'];
}

$showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    $th_title = $_POST['title'];
    $th_title = str_replace("<", "&lt", $th_title);
    $th_title = str_replace(">", "&gt", $th_title);
    $th_desc = $_POST['desc'];
    $th_desc = str_replace("<", "&lt", $th_desc);
    $th_desc = str_replace(">", "&gt", $th_desc);
    $thread_user_id = $_SESSION['id'];
    $sql = "INSERT INTO threads (thread_title, thread_desc, thread_cat_id, thread_user_id, timestamp) VALUES ('$th_title', '$th_desc', '$id', '$thread_user_id', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    $showAlert = true;
    if ($showAlert) {
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your thread has been added.. Please wait for the community to respond.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        ';
    }
}
// echo $method;

?>

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to <?php echo $catname; ?> Forum</h1>
        <p class="lead"><?php echo $catdesc; ?></p>
        <hr class="my-4">
        <h4>Please follow the below Forum Rules</h4>
        <br>
        <p style="line-height:.5">No Spam / Advertising / Self-promote in the forums.</p>
        <p style="line-height:.5">Do not post copyright-infringing material.</p>
        <p style="line-height:.5">Do not post “offensive” posts, links or images.</p>
        <p style="line-height:.5">Do not cross post questions.</p>
        <p style="line-height:.5">Do not PM users asking for help.</p>
        <p style="line-height:.5">Remain respectful of other members at all times.</p>

        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
</div>

<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo '<div class="container">
    <h2>Start a discussion</h2>
    <br>
    <form action="' . $_SERVER["REQUEST_URI"] . '" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Problem Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Keep your title short and crisp to the point.</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Ellaborate your concern</label>
            <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>';
} else {
    echo '
    <div class="container" id="ques">
    <h2>Start a discussion</h2>
    <p class="lead">You are not logged in. Please <a href="login.php">login</a> to be able to start a Discussion</p>
</div>
    ';
}


?>

<div class="container my-2">
    <br>
    <h2 class="py-2">Browse Questions</h2>
    <br>

    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM threads WHERE thread_cat_id=$id";
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    while ($row = mysqli_fetch_assoc($result)) {
        $noResult = false;
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $id = $row['thread_id'];
        $thread_time = $row['timestamp'];
        $thread_user_id = $row['thread_user_id'];
        $sql2 = "SELECT email FROM signin WHERE id='$thread_user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);

        echo '<div class="media my-3">
        <img src="img/user_img.png" width="50px" class="mr-3" alt="...">
        <div class="media-body">
        <p class="font-weight-bold my-0">' . $row2['email'] . ' at ' . $thread_time . '</p>
            <h5 class="mt-0"> <a href="thread.php?threadid=' . $id . '">' . $title . '</a></h5>
            ' . $desc . '
        </div>
    </div>';
    }
    if ($noResult) {
        echo '<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">No Results Found</h1>
            <p class="lead">Be first to Start a thread for the Subject.</p>
        </div>
        </div>';
    }

    ?>
</div>

<?php include(ROOT_PATH . "/app/includes/_footer.php"); ?>