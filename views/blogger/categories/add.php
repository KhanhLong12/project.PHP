<?php 
    require_once 'views/home/headerblogger.php';
 ?>
     <div class="container-fluid">
            <div class="container">
                <h3 align="center">DevMind - Education And Technology Group</h3>
                <h3 align="center">Add New Category</h3>
                <hr>
                    <form action="index.php?mod=blogger&act=addcategory" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="" name="name">
                        </div>
                        <div class="form-group">
                             <label for="">parent category</label>
                                 <select class="form-control" id="" name="parent_id">
                                    <option value="0">danh mục cha</option>
                                <?php foreach ($categories1 as $category){ ?>
                                    <option value="<?=$category['id']?>"><?=$category['name']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">thumbnail</label>
                            <input type="file" class="form-control" id="" name="thumbnail">
                        </div>
                        <div class="form-group">
                            <label for="">slug</label>
                            <input type="text" class="form-control" id="" name="slug">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" class="form-control" id="" name="description">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
        </div>
        <!-- /.container-fluid -->

      </div>
 <?php 
    require_once 'views/home/footerblogger.php';
 ?>