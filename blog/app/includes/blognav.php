<div class="wrap">


    <div class="top-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.html">ScienceHiFY</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo BASE_URL . '/index.php'; ?>">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL . '/about.php'; ?>">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL . '/forum/index.php'; ?>">Forum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL . '/blog/index.php'; ?>">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Journals</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo BASE_URL . '/journals.php'; ?>">About Journals</a>
                                    <a class="dropdown-item" href="<?php echo BASE_URL . '/currentscience.php'; ?>">Current Science</a>
                                </div>
                            </li>
                            <li class="nav-item" active>
                                <a class="nav-link" href="<?php echo BASE_URL . '/subscriptions.php'; ?>">Subscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL . '/contact.php'; ?>">Contact</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <button class="btn btn-warning my-2 my-sm-0" type="submit"> <a href="<?php echo BASE_URL . '/login.php'; ?>">Login</a></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- END header -->