<?php 
	require_once 'views/home/header.php';
 ?>
	<div class="col-md-12">
		<?php foreach ($postsfind as $item14): ?>
			<div class="post-entry-horzontal">
                  <a href="index.php?mod=user&act=detail&user_id=<?=$item14['user_id']?>&id=<?=$item14['id']?>&slug=<?=$item14['slug']?>">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(public/images/<?=$item14['thumbnail']?>);"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><?=$item14['title']?></span>&bullet;
                        <span class="mr-2"><?=$item14['created_at']?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-eye"></span><?=$item14['view_count']?></span>
                      </div>
                      <h2><?=limit_text($item14['content'],8)?></h2>
                    </span>
                  </a>
                </div>
		<?php endforeach ?>

        </div>


  <?php 
	require_once 'views/home/footer.php';
 ?>