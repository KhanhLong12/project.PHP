<?php 
	require_once 'header.php';
 ?>
 <section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel owl-theme home-slider">
                <?php foreach ($posts_ as $post){ ?>
                    <div>
                      <a href="index.php?mod=user&act=detail&user_id=<?=$post['user_id']?>&id=<?=$post['id']?>&slug=<?=$post['slug']?>" class="a-block d-flex align-items-center height-lg" style="background-image: url('public/images/<?=$post['thumbnail']?>'); ">
                        <div class="text half-to-full">
                          <span class="category mb-5"><?=$post['title']?></span>
                          <div class="post-meta">
                            <span class="author mr-2"><img src="public/images/<?=$post['thumbnail']?>" alt="Colorlib"> Colorlib</span>&bullet;
                            <span class="mr-2"><?=$post['created_at']?></span> &bullet;
                            <span class="ml-2"><span class="fa fa-eye"></span> <?=$post['view_count']?></span>
                          </div>
                          <p><?=$post['description']?></p>
                        </div>
                      </a>
                    </div>
                <?php } ?>
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
              <h2 class="mb-4">Latest Posts</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
                <?php foreach ($posts as $item){?>
                  <div class="col-md-6">
                  <a href="index.php?mod=user&act=detail&user_id=<?=$item['user_id']?>&id=<?=$item['id']?>&slug=<?=$item['slug']?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img height="300px" width="100%" src="public/images/<?=$item['thumbnail']?>" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="public/images/<?=$item['thumbnail']?>" alt="Colorlib"> <?=$item['title']?></span>&bullet;
                        <span class="mr-2"><?=$item['created_at']?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-eye"></span> <?=$item['view_count']?></span>
                      </div>
                      <h2><?=limit_text($item['description'],8)?></h2>
                    </div>
                  </a>
                </div>
                <?php } ?>
                
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
                  <img src="public/images/<?=$user['avatar']?>" alt="Image Placeholder" class="img-fluid">
                  <div class="bio-body">
                    <h2><?=$user['name']?></h2>
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
                    <?php foreach ($posts_ as $item1){ ?>
                        <li>
                          <a href="index.php?mod=user&act=detail&user_id=<?=$item1['user_id']?>&id=<?=$item1['id']?>&slug=<?=$item1['slug']?>">
                            <img src="public/images/<?=$item1['thumbnail']?>" alt="Image placeholder" class="mr-4">
                            <div class="text">
                              <h4><?=limit_text($item1['description'],8)?></h4>
                              <div class="post-meta">
                                <span class="mr-2"><?=$item1['created_at']?></span>
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
                  <?php foreach ($categories as $item7){ ?>
                       <li><a href="index.php?mod=user&act=list&id=<?=$item7['id']?>"><?=$item7['name']?><span>12</span></a></li>
                  <?php } ?>
                  
                </ul>
              </div>
            </div>
            <!-- END sidebar -->
          </div>
        </div>
      </section>

 <?php 
	require_once 'footer.php';
 ?>