<?php 
    require_once 'views/home/headerblogger.php';
 ?>    
    <div class="container-fluid">
        <div class="container">
            <h3 align="center">DevMind - Education And Technology Group</h3>
            <h3 align="center">Add New Post</h3>
            <hr>
                <form action="index.php?mod=blogger&act=addprocesspost" method="POST" role="form" enctype="multipart/form-data">
                 <div class="form-group">
                    <label for="">title</label>
                    <input type="text" class="form-control" id="" name="title">
                </div>
                <div class="form-group">
                    <label for="">description</label>
                    <input type="text" class="form-control" id="" name="description">
                </div>
                <div class="form-group" method="post" enctype="multipart/form-data">
                    <label for="">thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail">
                </div>
                <div class="form-group">
                    <label for="">content</label>
                    <textarea name="demo" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="">slug</label>
                    <input type="text" class="form-control" id="" name="slug">
                </div>
                <div class="form-group">
                    <label for="">category_id</label>
                    <select class="form-control" name="category_id">
                        <?php foreach ($categories as $category) { ?>
                            <option value="<?=$category['id']?>"><?=$category['name']?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" value="Upload Image" name="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
       </div>
        <!-- /.container-fluid -->

      </div>

 <?php
     require_once 'views/home/footerblogger.php';
 ?>

