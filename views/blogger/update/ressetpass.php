<?php 
	require_once 'views/home/headerblogger.php';
 ?>
 <div class="container-fluid">
	<div class="container">
	    <h3 align="center">DevMind - Education And Technology Group Update</h3>
	    <h3 align="center">reset password</h3>
	    <?php if(isset($_SESSION['success'])): ?>
	    	 <div class='alert alert-success'>
			  	 	<?php
			  	 		 echo $_SESSION['success'];
			  	 		 unset($_SESSION['success']); 
			  	 	 ?>
			</div>
		<?php endif ?>
		<?php if(isset($_SESSION['error'])): ?>
			<div class='alert alert-danger'>
			<?php
			  	 		 echo ($_SESSION['error']);
			  	 		 unset($_SESSION['error']); 
			  	 	 ?>
			  	 	 </div>
		<?php endif ?>
	    <hr>
	        <form action="" method="POST" role="form" enctype="multipart/form-data">
	        	<input type="hidden" name="id" value="<?php echo $_SESSION['employee']['id'] ?>">
	            <div class="form-group">
	                <label for="">Mật khẩu cũ</label>
	                <input type="text" class="form-control"  id=""  name="mkc">
	            </div>
	            <div class="form-group">
	                <label for="">Mật khẩu mới</label>
	                <input type="text" class="form-control"  id="" name="mkm">
	            </div>
	            <div class="form-group">
	                <label for="">Nhập lại mật khẩu</label>
	                <input type="text" class="form-control"  id="" name="nlmk">
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