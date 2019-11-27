<?php 
require_once 'views/home/headerblogger.php';
 ?>
<body>
	<div class="container-fluid">
 	<h1 style="text-align: center;">Thông tin post</h1>
	<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">title</th>
		      <th scope="col">description</th>
		      <th scope="col">thumbnail</th>
		      <th scope="col">content</th>
		      <th scope="col">user_id</th>
		      <th scope="col">category_id</th>
		      <th scope="col">created_at</th>	
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><?=$post1['id']?></td>
		      <td><?=$post1['title']?></td>
		      <td><?=$post1['description']?></td>
		      <td><img width="90%" src="public/images/<?=$post1['thumbnail']?>"></td>
		      <td><?=$post1['content']?></td>
		      <td><?=$post1['user_id']?></td>
		      <td><?=$post1['category_id']?></td>
		      <td><?=$post1['created_at']?></td>
		    </tr>
		  </tbody>
	</table>
	<a class="btn btn-primary" href="index.php?mod=blogger&act=listposts">Back</a>
 </body>
</div>
        <!-- /.container-fluid -->

      </div>
 <?php 
require_once 'views/home/footerblogger.php';
 ?>