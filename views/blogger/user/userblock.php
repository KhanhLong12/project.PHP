<?php require_once 'views/home/headerblogger.php'; ?>
<div class="container">
        <h3 class="text-center">--- user lock ---</h3>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>phone</th>
                <th>avatar</th>
                <th>action</th>
            </thead>
            <?php foreach ($users1 as $item3){ ?>
            <?php if ($item3['role']!=1){ ?>
                <tr>
                    <td><?=$item3['id']?></td>
                    <td><?=$item3['name']?></td>
                    <td><?=$item3['email']?></td>
                    <td><?=$item3['phone']?></td>
                    <td>
                        <img src="public/images/<?=$item3['avatar']?>" width="100px" height="100px">
                    </td>
                    <td>
                        <?php if ($item3['status'] == Null){ ?>
                            <a href="index.php?mod=blogger&act=openuser&id=<?=$item3['id']?>" class="btn btn-success">open an account</a>
                        <?php } else {?>
                            <a href="index.php?mod=blogger&act=openuser&id=<?=$item3['id']?>"><i class="fas fa-lock-open"></i></a>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
            <?php } ?>
        </table>
    </div>
<?php require_once 'views/home/footerblogger.php'; ?>