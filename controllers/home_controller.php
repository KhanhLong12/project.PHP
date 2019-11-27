<?php
require_once 'models/home_model.php';
	class home_controller{
		function __construct(){

		}
		function home(){
			$model_obj = new home_model();
			$categories = $model_obj->getmenu();
			$posts = $model_obj->getposts();
			// $post_cate = $model_obj->getpost_in_category();
			$posts_ = $model_obj->getpostnew();
			$posts_1 = $model_obj->getpostold();
			$user = $model_obj->getauthor();
			require_once 'views/home/homepage.php';
		}
		function list(){
			$id = $_GET['id'];
			$model_obj = new home_model();
			$categories = $model_obj->getmenu();
			$posts_1 = $model_obj->getpostold();
			$posts_ = $model_obj->getpostnew();
			$posts2 = $model_obj->getPost($id);
			$category1 = $model_obj->findPost($id);
			require_once 'views/user/list/list.php';
		}
		function detail(){
			// $category_id = $_GET['category_id'];
			$user_id = $_GET['user_id'];
			$slug = $_GET['slug'];
			$id = $_GET['id'];
			$model_obj = new home_model();
			$categories = $model_obj->getmenu();
			$posts_1 = $model_obj->getpostold();
			$post3 =  $model_obj->getdetail($slug);
			$posts2 = $model_obj->getPost($id);
			$category1 = $model_obj->findPost($id);
			$posts_ = $model_obj->getpostnew();
			$user1 = $model_obj->getauthor1($user_id);
			// $demposts = $model_obj->demposts($category_id);
			require_once 'views/user/detail/detail.php';
		}
		function about(){
			$model_obj = new home_model();
			$categories = $model_obj->getmenu();
			$posts = $model_obj->getposts();
			$posts_1 = $model_obj->getpostold();
			$posts_ = $model_obj->getpostnew();
			require_once 'views/user/about/about.php';
		}
		function contact(){
			$model_obj = new home_model();
			$categories = $model_obj->getmenu();
			$posts_1 = $model_obj->getpostold();
			$posts_ = $model_obj->getpostnew();	
			require_once 'views/user/contact/contact.php';
		}
		function sendMessages()
		{
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$message =$_POST['message'];
			$email =$_POST['email'];
			ob_start();
			require_once('views/email/contact.php');
			$content = ob_get_contents();
			require_once('public/sendMail.php');
			$result = send_email('basturlong@gmail.com','Long',$content,'Phản hồi từ người đọc');
			header('location: index.php?mod=user&act=contact');
		}
		//tìm kiếm theo bài posts
		 function search(){
		 	$model_obj = new home_model();
		 	$posts = $model_obj->getposts();
		 	$categories = $model_obj->getmenu();
		 	$posts_1 = $model_obj->getpostold();
		 	if (isset($_POST['find'])) {
		 		$search = $_POST['search'];
		 		if (empty($search)) {
		 			$_SESSION['error'] = 'bạn chưa nhập thông tin cần tìm';
		 			header('location: index.php?mod=user&act=home');
		 		}
		 		else {
		 			$postsfind = $model_obj->getsearch($search);
		 			require_once 'views/user/result/result.php';
		 		}
		 	}
		 }


	}
 ?>