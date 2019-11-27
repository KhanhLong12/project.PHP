<?php 
require_once 'views/home/header.php';
 ?>
 <section class="site-section pt-5">
      <div class="container">
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row">
              <div class="col-md-12">
                <h2 class="mb-4">Hi There! I'm Khanh Long</h2>
                <p class="mb-5"><img src="public/images/img_6.jpg" alt="Image placeholder" class="img-fluid"></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum minima eveniet recusandae suscipit eum laboriosam fugit amet deleniti iste et. Ad dolores, necessitatibus non saepe tenetur impedit commodi quibusdam natus repellat, exercitationem accusantium perferendis officiis. Laboriosam impedit quia minus pariatur!</p>
                <p>Dignissimos iste consectetur, nemo magnam nulla suscipit eius quibusdam, quo aperiam quia quae est explicabo nostrum ab aliquid vitae obcaecati tenetur beatae animi fugiat officia id ipsam sint? Obcaecati ea nisi fugit assumenda error totam molestiae saepe fugiat officiis quam?</p>
                <p>Culpa porro quod doloribus dolore sint. Distinctio facilis ullam voluptas nemo voluptatum saepe repudiandae adipisci officiis, explicabo eaque itaque sed necessitatibus, fuga, ea eius et aliquam dignissimos repellendus impedit pariatur voluptates. Dicta perferendis assumenda, nihil placeat, illum quibusdam. Vel, incidunt?</p>
                <p>Dolorum blanditiis illum quo quaerat, possimus praesentium perferendis! Quod autem optio nobis, placeat officiis dolorem praesentium odit. Vel, cum, a. Adipisci eligendi eaque laudantium dicta tenetur quod, pariatur sunt sed natus officia fuga accusamus reprehenderit ratione, provident possimus ut voluptatum.</p>
              </div>
            </div>
            <div class="row mb-5 mt-5">
              <div class="col-md-12 mb-5">
                <h2>My Latest Posts</h2>
              </div>
              <div class="col-md-12">
                
                <?php foreach ($posts as $item12){?>
                <div class="post-entry-horzontal">
                  <a href="index.php?mod=user&act=detail&user_id=<?=$item12['user_id']?>&id=<?=$item12['id']?>&slug=<?=$item12['slug']?>">
                    <div class="image" style="background-image: url(public/images/<?=$item12['thumbnail']?>);"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="public/images/<?=$item12['thumbnail']?>" alt="Colorlib"> <?=$item12['title']?></span>&bullet;
                        <span class="mr-2"><?=$item12['created_at']?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-eye"></span><?=$item12['view_count']?></span>
                      </div>
                      <h2><?=limit_text($item12['description'],11)?></h2>
                    </span>
                  </a>
                </div>
                 <?php } ?>
                <!-- END post -->
              </div>
            </div>
            <div class="row">
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
                <img src="public/images/av.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2>Khánh Long</h2>
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
                  <?php foreach ($posts_ as $item12){ ?>
                      <li>
                        <a href="index.php?mod=user&act=detail&user_id=<?=$item12['user_id']?>&id=<?=$item12['id']?>&slug=<?=$item12['slug']?>">
                          <img src="public/images/<?=$item12['thumbnail']?>" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4><?=limit_text($item12['description'],8)?></h4>
                            <div class="post-meta">
                              <span class="mr-2"><?=$item12['created_at']?></span> &bullet;
                              <span class="ml-2"><span class="fa fa-eye"></span><?=$item12['view_count']?></span>
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
                <?php foreach ($categories as $item11){ ?>
                       <li><a href="index.php?mod=user&act=list&id=<?=$item11['id']?>"><?=$item11['name']?><span>(12)</span></a></li>
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