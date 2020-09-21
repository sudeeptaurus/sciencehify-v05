<?php include("path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<?php include(ROOT_PATH . "/app/includes/_header.php"); ?>

<?php include(ROOT_PATH . "/app/includes/_navigation.php"); ?>

<div class="container py-2">

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Contact Us</h1>
      <p class="lead">Please fill out the form and we will get in touch with you.</p>
    </div>
  </div>

  <form action="./php/contactus.php" method="POST">
    <div class="form-group">
      <label for="exampleFormControlInput1">Name</label>
      <input type="name" class="form-control" name="fullname" id="fullname" placeholder="Full Name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Contact Number</label>
      <input type="number" name="phone_num" class="form-control" id="phone_num" placeholder="Phone Number">
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Input Your Query</label>
      <textarea name="message" class="form-control" id="message" rows="3"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary my-2">Submit</button>
  </form>

  <br>

  <div class="container text-center">
    <p>
      <h3><b>Contact Info</b></h3>
    </p>
    <p>Taurus Hard Soft Solutions Pvt Ltd
      <br>No 13, Hamdh Court,2nd Floor
      <br>Mother Theresa Road, Austin Town
      <br>Bengaluru - 560047
      <br><b>Email: </b>sciencehify@taurusonline.net
      <br><b>Phone: </b>080 40988995 , 080 40988994</p>
  </div>
</div>


<?php include(ROOT_PATH . "/app/includes/_footer.php"); ?>