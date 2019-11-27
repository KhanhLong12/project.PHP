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
                                <h6><?=$post['delete_at']?></h6>
                            </td>
                        </tr>
                <?php }  ?>
        </table>
    </div>
</body>

 <?php 
    require_once 'views/home/footerblogger.php';
 ?>