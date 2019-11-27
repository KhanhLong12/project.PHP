<?php 
require_once 'views/home/header.php';
 ?>

	<section class="site-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> Yên Phong -Bắc Ninh</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">0979087475</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:basturlong@gmail.com">basturlong@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">surge.surger</a></p>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-md-6">
            <h1>Contact Me</h1>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <form action="?mod=user&act=sendMessages" method="post">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Name</label>
                      <input type="text" id="name" name='name' class="form-control ">
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" name="phone" class="form-control ">
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write Message</label>
                      <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                  </div>
                </form>
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14900.218514571554!2d105.8466552!3d20.9904472!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1567392358602!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;width: 100%;" allowfullscreen="" ></iframe>
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
                <img src="public/images/av.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2>Khánh Long</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Read my bio</a></p>
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
                  <?php foreach ($posts_ as $item8){ ?>
                      <li>
                        <a href="index.php?mod=user&act=detail&user_id=<?=$item8['user_id']?>&id=<?=$item8['id']?>&slug=<?=$item8['slug']?>">
                          <img src="public/images/<?=$item8['thumbnail']?>" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4><?=limit_text($item8['description'],8)?></h4>
                            <div class="post-meta">
                              <span class="mr-2"><?=$item8['created_at']?></span> &bullet;
                              <span class="ml-2"><span class="fa fa-eye"></span><?=$item8['view_count']?></span>
                            </div>
                          </div>
                        </a>
                      </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <h3 class="heading">Categories</h3>
              <ul class="categories">
                <?php foreach ($categories as $item9){ ?>
                       <li><a href="index.php?mod=user&act=list&id=<?=$item9['id']?>"><?=$item9['name']?><span>(12)</span></a></li>
                  <?php } ?>
                
              </ul>
            </div>
            <!-- END sidebar-box -->
          </div>
          <!-- END sidebar -->
        </div>
      </div>
    </section>


 <?php 
require_once 'views/home/footer.php';
 ?>