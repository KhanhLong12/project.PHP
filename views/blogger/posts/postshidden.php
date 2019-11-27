<?php 
    require_once 'views/home/headerblogger.php';
 ?>

<body>
    <div class="container">
        <h3 class="text-center">Danh sách</h3>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>title</th>
                <th>description</th>
                <th>thumbnail</th>
                <th>slug</th>
                <th>active</th>
            </thead>
            <?php foreach ($posts as $post){ ?>
                        <tr>
                            <td><?=$post['id']?></td>
                            <td><?=$post['title']?></td>
                            <td><?=limit_text($post['description'],12)?></td>
                            <td>
                                <img src="public/images/<?=$post['thumbnail']?>" width="100px" height="100px">
                            </td>
                            <td>
                                <a href="index.php?mod=blogger&act=editposts&id=<?=$post['id']?>" ><i style="color: blue" class="far fa-edit"></i></a>
                                <a href="index.php?mod=blogger&act=deleteposts&id=<?=$post['id']?>" ><i style="color: red" class="fas fa-trash-alt"></i></a>
                            </td>
                            <td>
                                    <a  href="index.php?mod=blogger&act=showhidden&id=<?=$post['id']?>" class="btn btn-primary">show</a>
                            </td>
                        </tr>
                <?php }  ?>
        </table>
    </div>
</body>

 <?php 
    require_once 'views/home/footerblogger.php';
 ?>