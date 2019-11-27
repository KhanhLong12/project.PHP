<?php 
session_start();
	require_once 'models/blogger_model.php';


	class blogger_controller{
		function __construct(){
		}

		function login(){
			if(!isset($_SESSION['employee'])){
				if (isset($_POST['login'])) {
					$email = $_POST['email'];
					$password = $_POST['password'];

					$request = [
						'email' => $email,
						'password' => md5($password)
					];
					$model_obj = new blogger_model();
					$result = $model_obj->checkuser($request);
					
					if($result == 1){
							$userInfo = new blogger_model();
							$userInfomation = $userInfo-> getByEmail($email);
							$_SESSION['employee'] = $userInfomation;
									header('location:?mod=blogger&act=manageblogger');

						}else{
						$_SESSION['error'] = "Nhập sai tài khoản hoặc mật khẩu";
					require_once 'views/homelogin/login.php';
				}
			}
			require_once 'views/homelogin/login.php';
			}else{
				require_once 'views/home/blogger.php';
			}
		}

		function logout(){
			session_destroy();
			header('location: ?mod=user&act=home');
		}
		function manageblogger(){
			$model_obj = new blogger_model();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			// $post5 = $model_obj->getpostappanou();
			$viewpost = $model_obj->viewposts();
			$dk4 = $model_obj->getdkblog();
			$pblog = $model_obj->getpostblog();
			// echo "<pre>";
			// print_r($post4);
			// echo "</pre>";
			// die();	
			require_once 'views/home/blogger.php';
		}
		function listcategory(){
			$model_obj = new blogger_model();
			$categories2 = $model_obj->getlistcategory2();
			require_once 'views/blogger/categories/list.php';
		}
		//thông báo category chưa duyệt
		function categoryapp(){
			$model_obj = new blogger_model();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			require_once 'view/home/headerblogger.php';
		}
		//thông báo post chưa duyệt
		function postapp(){
			$model_obj = new blogger_model();
			$post4 = $model_obj->getcategoryapp();
			require_once 'view/home/headerblogger.php';
		}
		function addcategory(){
			$data = $_POST;
			$model_obj = new blogger_model();
			$categories1 = $model_obj->getlistcategory1();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			if (isset($data['parent_id'])) {
				$data['parent_id']=($data['parent_id']==0)?'(Null)':$data['parent_id'];
				$status = $model_obj->getaddimgcategory($data);
				if ($status == true) {
					header('Location: index.php?mod=blogger&act=listcategory');
				} else{
					echo "error";
				}
			}
			require_once 'views/blogger/categories/add.php';
		}
		function delete(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$status = $model_obj->delete($id);
			
			if ($status == true) {
				header('Location: index.php?mod=blogger&act=listcategory');
			} else{
				echo "error";
			}
		}
		function listpost(){
			$model_obj = new blogger_model();
			// $posts = $model_obj->getlistpost();
			$user = $model_obj->getuserpost();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			require_once 'views/blogger/posts/list.php';
		}

		function addpost(){
			$model_obj = new blogger_model();
			$categories = $model_obj->getlistcategory();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			$users = $model_obj->getlistuser();
			require_once 'views/blogger/posts/add.php';
		}
		//add bài post
		function addprocesspost(){
			$data = $_POST;
			$model_obj = new blogger_model();
			$status = $model_obj->getaddimgposts($data);
			header("Location: index.php?mod=blogger&act=listpost");
		}
		function deletepost(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$status = $model_obj->deletepost($id);
			header('location:index.php?mod=blogger&act=listpost');
		}
		function deleteposts(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$status1 = $model_obj->deletepost($id);
			header('location:index.php?mod=blogger&act=listposts');
		}
		//xóa bài categories
		function deletecategory(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$status = $model_obj->delete($id);
			if ($status == true) {
				header('location:index.php?mod=blogger&act=listcategories');
			} else{
				echo "error";
			}
		}
		function editpost(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$post1 = $model_obj->getpost($id);
			$categories1 = $model_obj->getlistcategory();
			$users1 = $model_obj->getlistuser();
			require_once 'views/blogger/posts/edit.php';
		}
		function editposts(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$post = $model_obj->getpost($id);
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			$categories = $model_obj->getlistcategory();
			$users = $model_obj->getlistuser();
			require_once 'views/blogger/posts/editposts.php';
		}
		function updatepost(){
			$data = $_POST;
			$model_obj = new blogger_model();
			$status= $model_obj->editpost($data);
			 header('location:index.php?mod=blogger&act=listpost');
		}
		function updateposts(){
			$data = $_POST;
			$model_obj = new blogger_model();
			$status1 = $model_obj->editpost($data);
			header('location: index.php?mod=blogger&act=listposts');
		}
		function edituser(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			$user = $model_obj->getuser($id);
			require_once 'views/blogger/update/info.php';
		}
		function updateuser(){
			$data = $_POST;
			$model_obj = new blogger_model();
			$status = $model_obj->updateuser($data);
			header('location:index.php?mod=blogger&act=manageblogger');
		}
		function viewcreate(){
			require_once 'views/homelogin/create1.php';
		}
		function create(){
			$data = $_POST;
			$model_obj = new blogger_model();
			$status1 = $model_obj->create($data);
			header('location: index.php?mod=blogger&act=login');
		}
		function listuser(){
			$model_obj = new blogger_model();
			$users = $model_obj->getlistuser();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			require_once 'views/blogger/user/user.php';
		}
		function listposts(){
			$model_obj = new blogger_model();
			$posts = $model_obj->getlistpost();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			require_once 'views/blogger/posts/listposts.php';
		}
		//duyệt bài posts
		function approved(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$status = $model_obj->approved($id);
			header('location: ?mod=blogger&act=listposts');
		}
		//tất cả bài categories
		function listcategories(){
			$model_obj = new blogger_model();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			// echo "<pre>";
			// print_r($categories4);
			// echo "</pre>";
			// die();
			$categories = $model_obj->getlistcategory2();
			require_once 'views/blogger/categories/listcategories.php';
		}
		//duyệt bài categories
		function approvedcate(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$status = $model_obj->approvedcate($id);
			header('location: index.php?mod=blogger&act=listcategories');
		}
		//ẩn bài viết
		function hiddenpost(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$status = $model_obj->hiddenpost($id);
			header('location: ?mod=blogger&act=listposts');
		}
		//bài đăng bị ẩn
		function viewhidden(){
			$model_obj = new blogger_model();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			$posts = $model_obj->viewhidden();
			require_once 'views/blogger/posts/postshidden.php';
		}
		//hiển thị bài đăng bị ẩn
		function showhidden(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$status = $model_obj->showhidden($id);
			header('location: ?mod=blogger&act=viewhidden');
		}
		//bài viết đã xóa
		function showdeletepost(){
			$model_obj = new blogger_model();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			$posts = $model_obj->showdeletepost();
			require_once 'views/blogger/posts/deletepost.php';
		}
		//khóa tài khoản
		function userdeactive(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			$status= $model_obj->userdeactive($id);
			if ($status == true) {
				header('location: index.php?mod=blogger&act=listuser');
			} else{
				echo "error";
			}
			
		}
		//danh sách tài khoản bị khóa
		function listdeactive(){
			$model_obj = new blogger_model();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			$users1 = $model_obj->listdeactive();
			require_once 'views/blogger/user/userblock.php';
		}
		//mở tài khoản
		function openuser(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$status = $model_obj->openuser($id);
			header('location: index.php?mod=blogger&act=listdeactive');
		}
		//xem chi tiết bài post
		function postdetail(){
			$slug = $_GET['slug'];
			$model_obj = new blogger_model();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			$post1 = $model_obj->postdetail($slug);
			require_once 'views/blogger/posts/detail.php';
		}
		//lấy value của categories để sửa
		function editcategories(){
			$id = $_GET['id'];
			$model_obj = new blogger_model();
			$categories1=$model_obj->getlistcategory1();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			$category = $model_obj->editcategories($id);
			require_once 'views/blogger/categories/edit.php';
		}
		//xử lý edit actegories
		function editprocesscate(){
			$data = $_POST;
			$model_obj = new blogger_model();
			$status=$model_obj->editprocesscate($data);
			header('location: index.php?mod=blogger&act=listcategories');
		}
		function resetpassword(){
			$model_obj = new blogger_model();
			$categories4 = $model_obj->getcategoryapp();
			$post4 = $model_obj->getpostapp();
			if(isset($_POST['submit'])){
				$id      = $_POST['id'];
				$password = $_POST['mkc'];
				$newpassword = $_POST['mkm'];
				$repassword = $_POST['nlmk'];
				if(empty($password) || empty($newpassword) || empty($repassword)){//empty($ten) == $ten = "";
					$_SESSION['error'] = 'Trường mật khẩu không được để trống';
				}elseif($newpassword != $repassword){
					$_SESSION['error'] = 'Mật khẩu mới phải trùng nhau';
				}else{
					$status=$model_obj->checkpassword(md5($password),md5($newpassword),$id);
					if($status == '1'){
						$_SESSION['success'] = 'đổi mật khẩu thành công';
					}else{
						$_SESSION['error'] = 'Mật khẩu không khớp với mật khẩu ban đầu';
					}
				}
			}
			require_once 'views/blogger/update/ressetpass.php';
		}
}

 ?>
