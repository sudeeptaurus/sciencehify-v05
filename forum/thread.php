<?php include("../path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<?php

include(ROOT_PATH . "/app/includes/_header.php");
include(ROOT_PATH . "/app/includes/_navigation.php");


$id = $_GET['threadid'];
$sql = "SELECT * FROM threads WHERE thread_id=$id";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['thread_title'];
    $desc = $row['thread_desc'];
    $thread_user_id = $row['thread_user_id'];

    $sql2 = "SELECT email FROM signin WHERE id='$thread_user_id'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $posted_by = $row2['email'];
}

$showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    $comment = $_POST['comment'];
    $comment = str_replace("<", "&lt", $comment);
    $comment = str_replace(">", "&gt", $comment);
    $comment_by = $_SESSION['id'];
    $sql = "INSERT INTO comment (comment_content, thread_id, comment_by, comment_time) VALUES ('$comment', '$id', '$comment_by', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    $showAlert = true;
    if ($showAlert) {
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Comment has been added
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
        <h1 class="display-4"><?php echo $title; ?></h1>
        <p class="lead"><?php echo $desc; ?></p>
        <hr class="my-4">
        <p><b>Posted By:</b> <em><?php echo $posted_by; ?></em></p>
        <hr class="my-4">
        <h4>Please follow the below Forum Rules</h4>
        <br>
        <p style="line-height:.5">No Spam / Advertising / Self-promote in the forums.</p>
        <p style="line-height:.5">Do not post copyright-infringing material.</p>
        <p style="line-height:.5">Do not post “offensive” posts, links or images.</p>
        <p style="line-height:.5">Do not cross post questions.</p>
        <p style="line-height:.5">Do not PM users asking for help.</p>
        <p style="line-height:.5">Remain respectful of other members at all times.</p>
    </div>
</div>

<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo '<div class="container">
    <h2>Post a Comment</h2>
    <br>
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Type your comment here</label>
            <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Post Comment</button>
    </form>
</div>';
} else {
    echo '<div class="container" id="ques">
    <h2>Post a Comment</h2>
    <p class="lead">You are not logged in. Please <a href="login.php">login</a> to be able to post comments</p>
</div>
    ';
}

?>

<div class="container my-2" id="ques">
    <h1 class="py-2">Discussions</h1>

    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM comment WHERE thread_id=$id";
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    while ($row = mysqli_fetch_assoc($result)) {
        $noResult = false;
        $id = $row['comment_id'];
        $content = $row['comment_content'];
        $comment_time = $row['comment_time'];
        $comment_by = $row['comment_by'];
        $sql2 = "SELECT email FROM signin WHERE id='$comment_by'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);

        echo '<div class="media my-3">
        <img src="img/user_img.png" width="50px" class="mr-3" alt="...">
        <div class="media-body">
            <p class="font-weight-bold my-0">' . $row2['email'] . ' at ' . $comment_time . '</p>
            ' . $content . '
        </div>
    </div>';
    }
    if ($noResult) {
        echo '<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">No comment(s) Found</h1>
    <p class="lead">Be first to comment on the discussion.</p>
  </div>
</div>';
    }

    ?>
</div>

<?php include(ROOT_PATH . "/app/includes/_footer.php"); ?>