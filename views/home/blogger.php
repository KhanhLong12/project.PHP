<?php require_once 'headerblogger.php'; ?>
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Hi! <?=$_SESSION['employee']['name']?></h1>
          <?php 
        if (isset($_COOKIE['msg'])) {
            echo "<div class='alert alert-success' role='alert'>".$_COOKIE['msg']."</div>";
        	}
        ?>
          <?php if ($_SESSION['employee']['role']==1){ ?>
              <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng lượt xem</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $viewpost['view']; ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-laugh-beam fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Số người đăng ký</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dk4['dk'] ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Số bài đã viết</div>
                          <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $pblog['post'] ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Số lượt bình luận</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">2340</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <?php } ?>
      </div>
        <!-- /.container-fluid -->

      </div>
<?php require_once 'footerblogger.php'; ?>