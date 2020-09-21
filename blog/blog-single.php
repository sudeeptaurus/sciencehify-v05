<?php include("../path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>

<?php include(ROOT_PATH . "/app/includes/_header.php"); ?>

<?php include(ROOT_PATH . "/app/includes/_navigation.php"); ?>

<?php

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>


<section class="site-section py-lg">
  <div class="container">

    <div class="row blog-entries element-animate">

      <div class="col-md-12 col-lg-8 main-content">
        <img src="<?php echo BASE_URL . '/blog/assets/images/' . $post['image']; ?>" alt="Image" class="img-fluid mb-5">
        <div class="post-meta">
          <span class="author mr-2"><img src="<?php echo BASE_URL . '/blog/assets/images/person_1.jpg'; ?>" alt="Colorlib" class="mr-2"> ColorLib</span>&bullet;
          <span class="mr-2"><?php echo date('F j, Y', strtotime($post['created_at'])); ?> </span> &bullet;
          <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
        </div>
        <h1 class="mb-4"><?php echo $post['title']; ?></h1>
        <a class="category mb-5" href="#">Food</a> <a class="category mb-5" href="#">Travel</a>

        <div class="post-content-body">
          <?php echo html_entity_decode($post['body']); ?>
        </div>


        <div class="pt-5">
          <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
        </div>


        <div class="pt-5">
          <h3 class="mb-5">6 Comments</h3>
          <ul class="comment-list">
            <li class="comment">
              <div class="vcard">
                <img src="<?php echo BASE_URL . '/blog/assets/images/person_1.jpg'; ?>" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>Jean Doe</h3>
                <div class="meta">January 9, 2018 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply rounded">Reply</a></p>
              </div>
            </li>

            <li class="comment">
              <div class="vcard">
                <img src="<?php echo BASE_URL . '/blog/assets/images/person_1.jpg'; ?>" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>Jean Doe</h3>
                <div class="meta">January 9, 2018 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply rounded">Reply</a></p>
              </div>

              <ul class="children">
                <li class="comment">
                  <div class="vcard">
                    <img src="<?php echo BASE_URL . '/blog/assets/images/person_1.jpg'; ?>" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                  </div>


                  <ul class="children">
                    <li class="comment">
                      <div class="vcard">
                        <img src="<?php echo BASE_URL . '/blog/assets/images/person_1.jpg'; ?>" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply rounded">Reply</a></p>
                      </div>

                      <ul class="children">
                        <li class="comment">
                          <div class="vcard">
                            <img src="<?php echo BASE_URL . '/blog/assets/images/person_1.jpg'; ?>" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>Jean Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply rounded">Reply</a></p>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="comment">
              <div class="vcard">
                <img src="<?php echo BASE_URL . '/blog/assets/images/person_1.jpg'; ?>" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>Jean Doe</h3>
                <div class="meta">January 9, 2018 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply rounded">Reply</a></p>
              </div>
            </li>
          </ul>
          <!-- END comment-list -->

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="#" class="p-5 bg-light">
              <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>

              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>

            </form>
          </div>
        </div>

      </div>

      <!-- END main-content -->

      <div class="col-md-12 col-lg-4 sidebar">
        <div class="sidebar-box search-form-wrap">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon fa fa-search"></span>
              <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
            </div>
          </form>
        </div>
        <!-- END sidebar-box -->
        <div class="sidebar-box">
          <div class="bio text-center">
            <img src="<?php echo BASE_URL . '/blog/assets/images/person_2.jpg'; ?>" alt="Image Placeholder" class="img-fluid">
            <div class="bio-body">
              <h2>Craig David</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
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
          <h3 class="heading">Popular Posts</h3>
          <div class="post-entry-sidebar">
            <ul>
              <?php foreach ($posts as $post) : ?>
                <li>
                  <a href="">
                    <img src="<?php echo BASE_URL . '/blog/assets/images/' . $post['image']; ?>" alt="Image placeholder" class="mr-4">
                    <div class="text">
                      <h4><?php echo $post['title']; ?></h4>
                      <div class="post-meta">
                        <span class="mr-2"><?php echo date('F j, Y', strtotime($post['created_at'])); ?> </span>
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

<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mb-3 ">Related Post</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('<?php echo BASE_URL . '/blog/assets/images/img_2.jpg'; ?>'); ">
          <div class="text">
            <div class="post-meta">
              <span class="category">Lifestyle</span>
              <span class="mr-2">March 15, 2018 </span> &bullet;
              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('<?php echo BASE_URL . '/blog/assets/images/img_3.jpg'; ?>'); ">
          <div class="text">
            <div class="post-meta">
              <span class="category">Travel</span>
              <span class="mr-2">March 15, 2018 </span> &bullet;
              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('<?php echo BASE_URL . '/blog/assets/images/img_4.jpg'; ?>'); ">
          <div class="text">
            <div class="post-meta">
              <span class="category">Food</span>
              <span class="mr-2">March 15, 2018 </span> &bullet;
              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
          </div>
        </a>
      </div>
    </div>
  </div>


</section>
<!-- END section -->

<?php include(ROOT_PATH . "/blog/app/includes/blogfooter.php"); ?>