<?php 
    require_once 'views/home/headerblogger.php';
 ?>
    <div class="container-fluid">
        <div class="container">
                <h3 class="text-center">Danh sách bài viết của bạn</h3>
                <?php if (isset($_COOKIE['msg1'])){ ?>
                    <?php echo "<div class='alert alert-success' role='alert'>".$_COOKIE['msg1']."</div>" ?>
                <?php } ?>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>title</th>
                        <th>description</th>
                        <th>thumbnail</th>
                        <th>slug</th>
                        <?php if ($_SESSION['employee']['role']!=1) { ?>
                            <th>status</th>
                        <?php } ?>
                    </thead>
                    <?php foreach ($user as $user1){ ?>                                    
                    <tr>
                        <td><?=$user1['id']?></td>
                        <td><?=$user1['title']?></td>
                        <td><?=$user1['description']?></td>
                        <td>
                            <img src="public/images/<?=$user1['thumbnail']?>" width="100px" height="100px">
                        </td>
                        <td>
                            <a href="index.php?mod=blogger&act=editpost&id=<?=$user1['id']?>"><i style="color: blue" class="far fa-edit"></i></a>
                            <a href="index.php?mod=blogger&act=deletepost&id=<?=$user1['id']?>"><i style="color: red" class="fas fa-trash-alt"></i></a>
                        </td>
                        <?php if ($_SESSION['employee']['role']!=1) { ?>
                            <td>
                                <?php if ($user1['approved'] == 1) { ?>
                                    <h6><i class="fas fa-check-circle" style="color: green;"></i> Đã duyệt</h6>
                                <?php } else { ?>
                                     <h6><i class="fas fa-user-lock"></i>chưa duyệt</h6>
                                <?php } ?>
                            </td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </table>
            </div>
    </div>
        <!-- /.container-fluid -->

      </div>

 <?php 
    require_once 'views/home/footerblogger.php';
 ?>