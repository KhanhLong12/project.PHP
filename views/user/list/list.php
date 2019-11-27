<?php 
	require_once 'views/home/header.php';
 ?>
<section class="site-section pt-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h2 class="mb-4">Category: <?=$category1['name']?></h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row mb-5 mt-5">

              <div class="col-md-12">
              	<?php foreach ($posts2 as $post2){ ?>
              		<div class="post-entry-horzontal">
	                  <a href="index.php?mod=user&act=detail&user_id=<?=$post2['user_id']?>&id=<?=$post2['id']?>&slug=<?=$post2['slug']?>">
	                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(public/images/<?=$post2['thumbnail']?>);"></div>
	                    <span class="text">
	                      <div class="post-meta">
	                        <span class="author mr-2"><img src="public/images/person_1.jpg" alt="Colorlib"> <?=$post2['title']?></span>&bullet;
	                        <span class="mr-2"><?=$post2['created_at']?></span> &bullet;
	                        <span class="mr-2"><?=$category1['name']?></span> &bullet;
	                        <span class="ml-2"><span class="fa fa-eye"></span><?=$post2['view_count']?> </span>
	                      </div>
	                      <h2><?=$post2['title']?></h2>
	                    </span>
	                  </a>
	                </div>
              	<?php } ?>

              </div>
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
                <img src="public/images/person_2.jpg" alt="Image Placeholder" class="img-fluid">
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
                  <?php foreach ($posts_ as $item5){ ?>
                      <li>
                        <a href="index.php?mod=user&act=detail&user_id=<?=$item5['user_id']?>&id=<?=$item5['id']?>&slug=<?=$item5['slug']?>">
                          <img src="public/images/<?=$item5['thumbnail']?>" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4><?=$item5['title']?></h4>
                            <div class="post-meta">
                              <span class="mr-2"><?=$item5['created_at']?></span>
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
                <?php foreach ($categories as $item10){ ?>
                       <li><a href="index.php?mod=user&act=list&id=<?=$item10['id']?>"><?=$item10['name']?><span>12</span></a></li>
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