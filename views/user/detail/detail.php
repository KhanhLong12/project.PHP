<?php 
	require_once 'views/home/header.php';
 ?>
<section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            <img src="public/images/<?=$post3['thumbnail']?>" alt="Image" class="img-fluid mb-5">
             <div class="post-meta">
                        <span class="author mr-2"><img src="public/images/person_1.jpg" alt="Colorlib" class="mr-2"> <?=$post3['title']?></span>&bullet;
                        <span class="mr-2"><?=$post3['created_at']?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-eye"></span> <?=$post3['view_count']?></span>
                      </div>
            <h1 class="mb-4"><?=$post3['description']?></h1>
            <a class="category mb-5" href="#">Food</a> <a class="category mb-5" href="#">Travel</a>
           
            <div class="post-content-body">
              <p><?=$post3['content']?></p>
            <p>Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.</p>
            <div class="row mb-5">
              <div class="col-md-12 mb-4">
                <img src="public/images/img_7.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="col-md-6 mb-4">
                <img src="public/images/img_9.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="col-md-6 mb-4">
                <img src="public/images/img_11.jpg" alt="Image placeholder" class="img-fluid">
              </div>
            </div>
            <p>Quibusdam autem, quas molestias recusandae aperiam molestiae modi qui ipsam vel. Placeat tenetur veritatis tempore quos impedit dicta, error autem, quae sint inventore ipsa quidem. Quo voluptate quisquam reiciendis, minus, animi minima eum officia doloremque repellat eos, odio doloribus cum.</p>
            </div>

            
            <div class="pt-5">
              <p>Categories:  <a href="#">Food</a>, <a href="#">Travel</a>  Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
            </div>


            <div class="pt-5">
              <h3 class="mb-5">3 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard">
                    <img src="public/images/person_1.jpg" alt="Image placeholder">
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
                    <img src="public/images/person_1.jpg" alt="Image placeholder">
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
                        <img src="public/images/person_1.jpg" alt="Image placeholder">
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
                            <img src="public/images/person_1.jpg" alt="Image placeholder">
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
                <img src="public/images/<?=$user1['avatar']?>" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2><?=$user1['name']?></h2>
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
                  <?php foreach ($posts_ as $item2){ ?>
                      <li>
                        <a href="index.php?mod=user&act=detail&user_id=<?=$item2['user_id']?>&id=<?=$item2['id']?>&slug=<?=$item2['slug']?>">
                          <img src="public/images/<?=$item2['thumbnail']?>" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4><?=limit_text($item2['description'],10)?></h4>
                            <div class="post-meta">
                              <span class="mr-2"><?=$item2['created_at']?></span>
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
                <?php foreach ($categories as $item13){ ?>
                       <li><a href="index.php?mod=user&act=list&id=<?=$item13['id']?>"><?=$item13['name']?><span>(12)</span></a></li>
                  <?php } ?>
              </ul>
            </div>
            <!-- END sidebar-box -->

           
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
          <?php foreach ($posts2 as $item4){ ?>
             <div class="col-md-6 col-lg-4">
                <a href="index.php?mod=user&act=detail&user_id=<?=$item4['user_id']?>&id=<?=$item4['id']?>&slug=<?=$item4['slug']?>" class="a-block sm d-flex align-items-center height-md" style="background-image: url('public/images/<?=$item4['thumbnail']?>'); ">
                  <div class="text">
                    <div class="post-meta">
                      <span class="category"><?=$category1['name']?></span>
                      <span class="mr-2"><?=$item4['created_at']?></span> &bullet;
                      <span class="ml-2"><span class="fa fa-eye"></span><?=$item4['view_count']?></span>
                    </div>
                    <h3><?=$item4['title']?></h3>
                  </div>
                </a>
              </div>
          <?php } ?>
        </div>
      </div>


    </section>



 <?php 
	require_once 'views/home/footer.php';
 ?>