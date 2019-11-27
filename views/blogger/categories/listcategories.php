<?php 
    require_once 'views/home/headerblogger.php';
 ?>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <?php if (isset($_COOKIE['msg2'])){ ?>
            <?php echo "<div class='alert alert-success' role='alert'>".$_COOKIE['msg2']."</div>" ?>
        <?php } ?>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
                <th>status</th>
            </thead>
            <?php foreach ($categories as $item){ ?>
                
            
            <tr>
                <td><?=$item['id']?></td>
                <td><?=$item['name']?></td>
                <td>
                    <img src="public/images/<?=$item['thumbnail']?>" width="100px" height="100px">
                </td>
                <td><?=$item['description']?></td>
                <td>
                    <a href="?mod=blogger&act=editcategories&id=<?=$item['id']?>"><i style="color: blue" class="far fa-edit"></i></a>
                    <a href="index.php?mod=blogger&act=deletecategory&id=<?=$item['id']?>"><i style="color: red" class="fas fa-trash-alt"></i></a>
                </td>
                <td>
                    <?php if ($item['approved']==1){ ?>
                        <h6><i class="fas fa-check-circle" style="color: green;"></i>Đã duyệt</h6>
                    <?php }else {?>
                        <a href="?mod=blogger&act=approvedcate&id=<?=$item['id']?>" class="btn btn-success"><h6>Duyệt</h6></a>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
 <?php 
    require_once 'views/home/footerblogger.php';
 ?>