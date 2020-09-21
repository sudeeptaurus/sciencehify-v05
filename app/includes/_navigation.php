<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo BASE_URL . '/index.php'; ?>">ScienceHiFY</a>
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
                <?php if (isset($_SESSION['id'])) : ?>
                    <li class="nav-item" active>
                        <a class="nav-link" href="<?php echo BASE_URL . '/subscriptions.php'; ?>">Subscription</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL . '/contact.php'; ?>">Contact</a>
                </li>
                <?php if (isset($_SESSION['id'])) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['username']; ?>
                            <!-- <i class="fa fa-chevron-down"></i> -->
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php if ($_SESSION['admin']) : ?>
                                <a class="dropdown-item" href="<?php echo BASE_URL . '/blog/admin/dashboard.php' ?>">Dashboard</a>
                            <?php endif; ?>
                            <a class="dropdown-item" href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a>
                        </div>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL . '/login.php'; ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</nav>