<?php include("../path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/topics.php"); ?>

<?php include(ROOT_PATH . "/app/includes/_header.php"); ?>

<?php include(ROOT_PATH . "/app/includes/_navigation.php"); ?>

<?php

$posts = array();
$postsTitle = 'All Posts';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
  // dd($posts);
}


?>

<section class="site-section pt-5 pb-5">
  <div class="container py-2">
    <div class="row">
      <div class="col-md-12">

        <div class="owl-carousel owl-theme home-slider">

          <?php foreach ($posts as $post) : ?>

            <div>
              <a href="blog-single.php?id=<?php echo $post['id']; ?>" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?php echo BASE_URL . '/blog/assets/images/' . $post['image']; ?>'); ">
                <div class="text half-to-full">
                  <span class="category mb-5">Food</span>
                  <div class="post-meta">

                    <span class="author mr-2"><img src="<?php echo BASE_URL . '/blog/assets/images/person_1.jpg'; ?>" alt="Colorlib"> <?php echo $post['username']; ?></span>&bullet;
                    <span class="mr-2"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>

                  </div>
                  <h3><?php echo $post['title']; ?></h3>
                  <p><?php echo html_entity_decode(substr($post['body'], 0, 100) . '...'); ?></p>
                </div>
              </a>
            </div>

          <?php endforeach; ?>

        </div>

      </div>
    </div>

  </div>


</section>
<!-- END section -->

<section class="site-section py-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="mb-4"><?php echo $postsTitle; ?></h2>
      </div>
    </div>

    <div class="row blog-entries">

      <div class="col-md-12 col-lg-8 main-content">

        <div class="row">

          <?php foreach ($posts as $post) : ?>

            <div class="col-md-6">
              <a href="blog-single.php?id=<?php echo $post['id']; ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="<?php echo BASE_URL . '/blog/assets/images/' . $post['image']; ?>" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="<?php echo BASE_URL . '/blog/assets/images/person_1.jpg'; ?>" alt="Colorlib"> <?php echo $post['username']; ?></span>&bullet;
                    <span class="mr-2"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2><?php echo $post['title']; ?></h2>
                  <div class="preview-text">
                    <p>
                      <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                    </p>
                  </div>
                </div>
              </a>
            </div>

          <?php endforeach; ?>

        </div>

        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <nav aria-label="Page navigation" class="text-center">
              <ul class="pagination">
                <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
              </ul>
            </nav>
          </div>
        </div>






      </div>

      <!-- END main-content -->

      <div class="col-md-12 col-lg-4 sidebar">
        <div class="sidebar-box search-form-wrap">
          <form action="<?php BASE_URL . '/blog/index.php'; ?>" class="search-form" method="post">
            <div class="form-group">
              <span class="icon fa fa-search"></span>
              <input type="text" class="form-control" name="search-term" id="s" placeholder="Type a keyword and hit enter">
            </div>
          </form>
        </div>
        <!-- END sidebar-box -->
        <div class="sidebar-box">
          <div class="bio text-center">
            <img src="<?php echo BASE_URL . '/blog/assets/images/person_1.jpg'; ?>" alt="Image Placeholder" class="img-fluid">
            <div class="bio-body">
              <h2><?php echo $_SESSION['username']; ?></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus
                excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
              <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
              <p class="social">
                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
              </p>
            </div>
          </div>
        </div>
        <!-- END sidebar-box -->

        <div class="sidebar-box">
          <h3 class="heading">Recent Posts</h3>
          <div class="post-entry-sidebar">
            <ul>

              <?php foreach ($posts as $post) : ?>
                <li>
                  <a href="blog-single.php?id=<?php echo $post['id']; ?>">
                    <img src="<?php echo BASE_URL . '/blog/assets/images/' . $post['image']; ?>" alt="Image placeholder" class="mr-4">
                    <div class="text">
                      <h4><?php echo $post['title']; ?></h4>
                      <div class="post-meta">
                        <span class="mr-2"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></span>
                      </div>
                    </div>
                  </a>
                </li>
              <?php endforeach; ?>

            </ul>
          </div>
        </div>
        <!-- END sidebar-box -->

        <div class="sidebar-box">
          <h3 class="heading">Categories</h3>
          <ul class="categories">

            <?php foreach ($topics as $key => $topic) : ?>
              <li><a href="<?php echo BASE_URL . '/blog/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
            <?php endforeach; ?>

          </ul>
        </div>
        <!-- END sidebar-box -->

        <div class="sidebar-box">
          <h3 class="heading">Tags</h3>
          <ul class="tags">
            <li><a href="#">Travel</a></li>
            <li><a href="#">Adventure</a></li>
            <li><a href="#">Food</a></li>
            <li><a href="#">Lifestyle</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Freelancing</a></li>
            <li><a href="#">Travel</a></li>
            <li><a href="#">Adventure</a></li>
            <li><a href="#">Food</a></li>
            <li><a href="#">Lifestyle</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Freelancing</a></li>
          </ul>
        </div>
      </div>
      <!-- END sidebar -->

    </div>
  </div>
</section>

<?php include(ROOT_PATH . "/blog/app/includes/blogfooter.php"); ?>