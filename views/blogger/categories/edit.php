<?php 
    require_once 'views/home/headerblogger.php';
 ?>
<div class="container">
    <h3 align="center">DevMind - Education And Technology Group Update</h3>
    <h3 align="center">Update Category</h3>
    <hr>
        <form action="index.php?mod=blogger&act=editprocesscate" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control"  id="" value="<?=$category['name']?>" name="name">
                <input type="hidden" value="<?=$category['id']?>" name="id">
            </div>
            <div class="form-group">
                 <label for="">parent category</label>
                 <select class="form-control" id="" name="parent_id">
                    <option value="0">danh mục cha</option>
                <?php foreach ($categories1 as $cate){ ?>
                    <option <?php if ($cate['id']== $category['parent_id']) echo "Selected" ?> value="<?=$cate['id']?>"><?=$cate['name']?></option>
                <?php } ?>
            </select>
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <img src="public/images/<?=$category['thumbnail']?>" width=100px height=100px>
                <input type="file" value="<?=$category['thumbnail']?>" class="form-control" id="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">slug</label>
                <input type="text" class="form-control" value="<?=$category['slug']?>" id="" name="slug">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control"  id="" value="<?=$category['description']?>" name="description">
            </div>
            <div class="form-group">
                <label for="">created_at</label>
                <input type="text" class="form-control"  id="" value="<?=$category['created_at']?>" name="created_at">
            </div>
            <button class="btn btn-primary" name="submit" type="submit" >update</button>
        </form>
    </div>
 <?php 
    require_once 'views/home/footerblogger.php';
 ?>