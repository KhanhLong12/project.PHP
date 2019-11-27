<?php require_once 'views/home/headerblogger.php'; ?>
<div class="container">
        <h3 class="text-center">--- user ---</h3>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>phone</th>
                <th>avatar</th>
                <th>status</th>
                <th>action</th>
            </thead>
            <?php foreach ($users as $item){ ?>
            <?php if ($item['role']!=1){ ?>
                <tr>
                    <td><?=$item['id']?></td>
                    <td><?=$item['name']?></td>
                    <td><?=$item['email']?></td>
                    <td><?=$item['phone']?></td>
                    <td>
                        <img src="public/images/<?=$item['avatar']?>" width="100px" height="100px">
                    </td>
                    <td>
                        <?php if ($item['status'] == Null){ ?>

                            <h6 style="color: "><i class="fas fa-circle" style="color: green;"></i>Active</h6>
                        <?php } else { ?>
                            <h6 style="color: black"><i class="fas fa-circle"></i>Inactive</h6>
                        <?php } ?>
                    </td>
                    <td><a href="index.php?mod=blogger&act=userdeactive&id=<?=$item['id']?>"><i class="fas fa-lock" style="color:red;"></i></a></td>
                </tr>
            <?php } ?>
            <?php } ?>
        </table>
    </div>
<?php require_once 'views/home/footerblogger.php'; ?>