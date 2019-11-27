<?php 
	require_once 'views/home/headerblogger.php';
 ?>

	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="container">
		        <h3 class="text-center">danh sách</h3>
		        <table class="table">
		            <thead>
		                <th>ID</th>
		                <th>Name</th>
		                <th>Thumbnail</th>
		                <th>Description</th>
		                <th>Status</th>
		            </thead>
		            <?php foreach ($categories2 as $item){ ?>
		                
		            
		            <tr>
		                <td><?=$item['id']?></td>
		                <td><?=$item['name']?></td>
		                <td>
		                    <img src="public/images/<?=$item['thumbnail']?>" width="100px" height="100px"></td>
		                <td><?=$item['description']?></td>
		                <td>
		                    <?php if ($item['approved']==1){ ?>
		                    	<h6><i class="fas fa-check-circle" style="color: green;"></i>Đã duyệt</h6>
		                    <?php } else { ?>
		                    	<h6><i class="fas fa-eye-slash" style="color: red;"></i>chưa duyệt</h6>
		                    <?php } ?>
		                </td>
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