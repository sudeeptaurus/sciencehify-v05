<?php include("path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>

<?php include(ROOT_PATH . "/app/includes/_header.php"); ?>

<?php include(ROOT_PATH . "/app/includes/_navigation.php"); ?>



<div class="container">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Register</h1>
            <p class="lead">Please Register to access privileged contents.</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-7">
                <div class="form-group">
                    <h2></h2>
                    <form py-2 action="register.php" method="post">
                        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Full Name" required />
                        </div>

                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" value="<?php echo $username; ?>" name="username" placeholder="User Name" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" value="<?php echo $email; ?>" placeholder="Email" name="email" />
                        </div>

                        <div class="form-group">
                            <label for="inputMobile">Mobile Number</label>
                            <input type="phone" class="form-control" name="mnumber" placeholder="Mobile Number" />
                        </div>

                        <div class="form-group">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" value="<?php echo $password; ?>" name="password" placeholder="Password" />
                        </div>

                        <div class="form-group">
                            <label for="inputPassword4">Confirm Password</label>
                            <input type="password" class="form-control" name="passwordConf" value="<?php echo $passwordConf; ?>" placeholder="Confirm Password" />
                        </div>


                        <div class="form-group">
                            <label for="state">How do you know about us?</label>
                            <select class="custom-select d-block w-100" id="fwhere" name="fwhere">
                                <option value="">Choose...</option>
                                <option>Google & Other Search Engines</option>
                                <option>Facebook</option>
                                <option>Linkedin</option>
                                <option>Instagram</option>
                                <option>Twitter</option>
                                <option>Direct Mailer</option>
                                <option>Friends & Colleagues</option>
                                <option>School/College</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state">Select Your Area of Interest</label>
                            <select class="custom-select d-block w-100" id="ainterest" name="ainterest">
                                <option value="">Choose...</option>
                                <option>Astronomy</option>
                                <option>Behavioral Sciences</option>
                                <option>Biomedical Sciences</option>
                                <option>Business & Management</option>
                                <option>Chemistry</option>
                                <option>Climate</option>
                                <option>Computer Science</option>
                                <option>Earth Sciences</option>
                                <option>Economics</option>
                                <option>Education & Language</option>
                                <option>Energy</option>
                                <option>Engineering</option>
                                <option>Environmental Sciences</option>
                                <option>Food Sciences & Nutrition</option>
                                <option>Geography</option>
                                <option>Law</option>
                                <option>Life Sciences</option>
                                <option>Materials</option>
                                <option>Mathematics</option>
                                <option>Medicine</option>
                                <option>Philosophy</option>
                                <option>Physics</option>
                                <option>Popular Science</option>
                                <option>Public Health</option>
                                <option>Social Sciences</option>
                                <option>Statistics</option>
                                <option>Water</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <button type="submit" name="register-btn" class="btn btn-primary">
                                Sign Up
                            </button>
                        </div>
                        <p>Already a Registered User. Please click<a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>
                    </form>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</div>


<?php include(ROOT_PATH . "/app/includes/_footer.php"); ?>