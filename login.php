<?php include("path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>

<?php include(ROOT_PATH . "/app/includes/_header.php"); ?>

<?php include(ROOT_PATH . "/app/includes/_navigation.php"); ?>

<div class="container">

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Login</h1>
      <p class="lead">Please login to access privileged contents.</p>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-5">
        <div class="form-group">
          <h2></h2>
          <form action="login.php" method="post">
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" value="<?php echo $username; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" value="<?php echo $password; ?>" class="form-control">
            </div>
            <div class="g-recaptcha" data-sitekey="6Lcj7soZAAAAAEa7Tlj27robmMZSFpJbvXLRoa_q"></div>
            <br>
            <div class="input-group">

              <input type="submit" class="btn btn-primary " value="Login" name="login-btn" />

            </div>
            <br>
            <p>If Not Yet Registered. Please click <a href="<?php echo BASE_URL . '/register.php' ?>">here</a></p>
          </form>
        </div>
      </div>
      <div class="col-3"></div>
    </div>
  </div>
</div>


<script>
  function onSubmit(token) {
    document.getElementById("demo-form").submit();
  }
</script>


<?php include(ROOT_PATH . "/app/includes/_footer.php"); ?>