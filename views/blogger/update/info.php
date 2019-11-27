<?php 
	require_once 'views/home/headerblogger.php';
 ?>
 <div class="container-fluid">
	<div class="container">
	    <h3 align="center">DevMind - Education And Technology Group Update</h3>
	    <h3 align="center">Update New user</h3>
	    <hr>
	        <form action="?mod=blogger&act=updateuser" method="POST" role="form" enctype="multipart/form-data">
	            <div class="form-group">
	                <label for="">Name</label>
	                <input type="text" class="form-control"  id="" value="<?=$user['name']?>" name="name">
	                <input type="hidden" value="<?=$user['id']?>" name="id">
	            </div>
	            <div class="form-group">
	                <label for="">email</label>
	                <input type="text" class="form-control" value="<?=$user['email']?>" id="" name="email">
	            </div>
	            <div class="form-group">
	                <label for="">avatar</label>
	                <img src="public/images/<?=$user['avatar']?>" width=100px height=100px>
	                <input type="file" class="form-control" id="" name="avatar">
	            </div>
	            <div class="form-group">
	                <label for="">phone</label>
	                <input type="text" class="form-control"  id="" value="<?=$user['phone']?>" name="phone">
	            </div>
	            <button class="btn btn-primary" name="submit" type="submit" >update</button>
	        </form>
	    </div>
	</div>
	        <!-- /.container-fluid -->

</div>
 <?php 
	require_once 'views/home/footerblogger.php';
 ?>