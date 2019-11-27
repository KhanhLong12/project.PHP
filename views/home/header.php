<?php 
  session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>travel Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/animate.css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/fonts/ionicons/public/css/ionicons.min.css">
    <link rel="stylesheet" href="public/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/fonts/flaticon/font/flaticon.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="public/css/style.css">
    <style type="text/css">
    .navbar .nav-item .sub-menu{
      display: none;
      position: absolute;
      top: 0;
      left: 100%;
      background-color: pink;
    }
  </style>
  </head>
  <body>
    <div class="wrap">
      <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-9 social">
                <form method="post" action="?mod=user&act=search">
                    <input type="text" name="search" placeholder="Nhập tìm kiếm">
                      <button style="cursor: pointer;" type="submit" name="find" class="fa fa-search"></button>
              </form>
            </div>
              <div class="col-3 search-top">
                <?php if (isset($_SESSION['employee'])){ ?>
                    <a href="?mod=blogger&act=manageblogger" style="color: white;">xin chào <?=$_SESSION['employee']['name']?></a>
                <?php } else { ?>
                   <a href="http://php20.devmind/php20.devmind/project/?mod=blogger&act=login" style="color: white;"><span class="fa fa-apple" ></span> Đăng nhập</a>
                <?php }
                   ?>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container logo-wrap" style="text-align: center;">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a href="http://php20.devmind/php20.devmind/project/"><img src="public/images/logo2.jpg" width="40%"></a>
            </div>
        </div>
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            </div>
          </div>
        </div>
        <nav class="navbar navbar-expand-md  navbar-light bg-light" style="margin-top: 45px;">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="http://php20.devmind/php20.devmind/project/">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown05">
                    <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <?php $i=0; foreach ($categories as $item) { ?>
                    <a class="dropdown-item" onmouseover="show('<?=$item['name']?>',<?=$i?>)" onmouseout="hide('<?=$item['name']?>')" href="index.php?mod=user&act=list&id=<?=$item['id']?>"><?=$item['name']?></a>

                    <ul class="sub-menu navbar-nav mx-auto" onmouseover="show('<?=$item['name']?>',<?=$i?>)" onmouseout="hide('<?=$item['name']?>')" id="<?=$item['name']?>">
                      <?php 
                      require_once 'models/connection.php';
                      $connection=new connection();
                      $query="SELECT * FROM categories WHERE delete_at is NULL AND parent_id=".$item['id'];
                      $result=$connection->conn->query($query);
                      $categories_con=array();
                      while ($row=$result->fetch_assoc()) {
                        $categories_con[]=$row;
                      }
                      foreach ($categories_con as $key) {?>
                        <li  ><a href="index.php?mod=user&act=list&id=<?=$key['id']?>" class="dropdown-item"><?=$key['name']?></a></li>
                      <?php }


                        ?>
                        <!--  -->

                      </ul>
                      <?php $i++; } ?>

                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?mod=user&act=about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?mod=user&act=contact">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <?php 
  function limit_text($text, $limit) {
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }
 ?>