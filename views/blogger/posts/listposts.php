<?php 
    require_once 'views/home/headerblogger.php';
 ?>

<body>
    <div class="container">
        <h3 class="text-center">Danh sách tất cả các bài viết</h3>
        <?php if (isset($_COOKIE['msg1'])){ ?>
                    <?php echo "<div class='alert alert-success' role='alert'>".$_COOKIE['msg1']."</div>" ?>
                <?php } ?>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>title</th>
                <th>description</th>
                <th>thumbnail</th>
                <th>action</th>
                <th>status</th>
                <th>action</th>
            </thead>
            <?php foreach ($posts as $post){ ?>
                        <?php if ($post['status'] != '0') { ?>
                            <tr>
                                <td><?=$post['id']?></td>
                                <td><?=$post['title']?></td>
                                <td><?=limit_text($post['description'],12)?></td>
                                <td>
                                    <img src="public/images/<?=$post['thumbnail']?>" width="100px" height="100px">
                                </td>
                                <td>
                                    <a href="index.php?mod=blogger&act=postdetail&slug=<?=$post['slug']?>"><i style="color: black" class="far fa-eye"></i></a>
                                    <a href="index.php?mod=blogger&act=editposts&id=<?=$post['id']?>"><i style="color: blue" class="far fa-edit"></i></a>
                                    <a href="index.php?mod=blogger&act=deleteposts&id=<?=$post['id']?>"><i style="color: red" class="fas fa-trash-alt"></i></a>
                                </td>
                                <td>
                                    <?php if ($post['approved']==1){ ?>
                                        <h6><i class="fas fa-check-circle" style="color: green;"></i> Đã duyệt</h6>
                                    <?php }else {?>
                                        <a href="?mod=blogger&act=approved&id=<?=$post['id']?>" class="btn btn-success"><h6>Duyệt</h6></a>
                                    <?php } ?>
                                </td>
                                <td><a  href="index.php?mod=blogger&act=hiddenpost&id=<?=$post['id']?>"><i class="fas fa-eye-slash"></i></a></td>
                            </tr>
                        <?php } ?>
                <?php } ?>
        </table>
    </div>
</body>

 <?php 
    require_once 'views/home/footerblogger.php';
 ?>