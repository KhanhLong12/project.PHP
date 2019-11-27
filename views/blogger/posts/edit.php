<?php 
require_once 'views/home/headerblogger.php';
 ?>
	<div class="container-fluid">
		<div class="container">
		    <h3 align="center">DevMind - Education And Technology Group</h3>
		    <h3 align="center">edit New Post</h3>
		    <hr>
		        <form action="index.php?mod=blogger&act=updatepost" method="POST" role="form" enctype="multipart/form-data">
		            <div class="form-group">
		                <label for="">title</label>
		                <input value="<?=$post1['title']?>" type="text" class="form-control" id="" name="title">
		                <input type="hidden" value="<?=$post1['id']?>" class="form-control" name="id">
		            </div>
		            <div class="form-group">
		                <label for="">description</label>
		                <input value="<?=$post1['description']?>" type="text" class="form-control" id="" name="description">
		            </div>
		            <div class="form-group" method="post" enctype="multipart/form-data">
		                <label for="">thumbnail</label>
		                <img src="public/images/<?=$post1['thumbnail']?>" width=100px height=100px>
		                <input value="<?=$post1['thumbnail']?>" type="file" class="form-control" name="thumbnail">
		            </div>
		            <div class="form-group">
		                <label for="">content</label>
		                <textarea name="demo"  cols="30" rows="10">
		                	<?php echo (isset($post1['content'])) ? $post1['content']:""; ?>
		                </textarea>
		            
		            </div>

		            <div class="form-group">
		                <label for="">slug</label>
		                <input value="<?=$post1['slug']?>" type="text" class="form-control" id="" name="slug">
		            </div>
		            <div class="form-group">
		                <label for="">category_id</label>
		                <select class="form-control" name="category_id">
		                    <?php foreach ($categories1 as $category) { ?>
		                       <option <?php if ($category['id']== $post1['category_id']) echo "Selected" ?> value="<?=$category['id']?>"><?=$category['name']?></option>
		                    <?php } ?>
		                </select>
		            </div>
		           <div class="form-group">
		                <label for="">created_at</label>
		                <input value="<?=$post1['created_at']?>" type="text" class="form-control" id="" name="created_at">
		            </div>
		            <button type="submit" value="Upload Image" name="submit" class="btn btn-primary">Save</button>
		        </form>

		    </div>
		    
		    </div>
        <!-- /.container-fluid -->

      </div>
 <?php 
require_once 'views/home/footerblogger.php';
 ?>