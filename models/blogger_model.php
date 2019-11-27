<?php 

	require_once 'connection.php';

	class blogger_model{
		function __construct(){}

		function getByEmail($email){
			$conn_obj = new Connection();
			$query = "SELECT * FROM users WHERE delete_at is null AND email='".$email."'";
		    $user = $conn_obj->conn->query($query)->fetch_assoc();
		    return $user;
		}
		function checkuser($request){
			$conn_obj = new Connection();
			$query = "SELECT * FROM users WHERE delete_at is null AND email = '{$request['email']}' AND password = '{$request['password']}'";
			$result = $conn_obj->conn->query($query);
			if($result->num_rows == 0){
				$user = '0';
			}else{
				$user = '1';
			}
		    return $user;
		}
		//tự tạo slug
		function to_slug($str) {
		    $str = trim(mb_strtolower($str));
		    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
		    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
		    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
		    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
		    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
		    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
		    $str = preg_replace('/(đ)/', 'd', $str);
		    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
		    $str = preg_replace('/([\s]+)/', '-', $str);
		    return $str;
		}
		function getlistcategory(){
			$conn_obj = new Connection();
				$query = "SELECT * FROM categories WHERE delete_at is null AND approved = 1";
			    //thực thi câu lệnh truy vấn
			    $result = $conn_obj->conn->query($query);
			    //tạo mảng lưu dữ liệu
			    $categories = array();

			    while ($row = $result->fetch_assoc()) {
			        $categories[] = $row;
			    }
			    return $categories;
			}
			// //lấy ra category được tạo của chính tài khoản ý
			// function getlistcategory3(){
			// $conn_obj = new Connection();
			// 	$query = "SELECT * FROM categories WHERE delete_at is null and id = ".$_SESSION['employee']['id'];
			//     //thực thi câu lệnh truy vấn
			//     $result = $conn_obj->conn->query($query);
			//     //tạo mảng lưu dữ liệu
			//     $categories = array();

			//     while ($row = $result->fetch_assoc()) {
			//         $categories3[] = $row;
			//     }
			//     return $categories3;
			// }
			function getlistcategory2(){
			$conn_obj = new Connection();
				$query = "SELECT * FROM categories WHERE delete_at is null ";
			    //thực thi câu lệnh truy vấn
			    $result = $conn_obj->conn->query($query);
			    //tạo mảng lưu dữ liệu
			    $categories2 = array();

			    while ($row = $result->fetch_assoc()) {
			        $categories2[] = $row;
			    }
			    return $categories2;
			}
			function getlistcategory1(){
			$conn_obj = new Connection();
				$query = "SELECT * FROM categories WHERE parent_id is null AND approved = 1";
			    //thực thi câu lệnh truy vấn
			    $result = $conn_obj->conn->query($query);
			    //tạo mảng lưu dữ liệu
			    $categories1 = array();

			    while ($row = $result->fetch_assoc()) {
			        $categories1[] = $row;
			    }
			    return $categories1;
			}
			//thông báo cái category chưa duyệt
			function getcategoryapp(){
				$conn_obj = new Connection();
				$query = "SELECT COUNT(*) as demcate FROM categories WHERE approved is Null and delete_at is Null";
				$result = $conn_obj->conn->query($query);
				$categories4 = $result->fetch_assoc();
			    return $categories4;
			}
			//thông báo bài post chưa duyệt
			function getpostapp(){
				$conn_obj = new Connection();
				$query = "SELECT COUNT(*) as dempost FROM posts WHERE approved is Null and delete_at is Null";
				$result = $conn_obj->conn->query($query);
				$post4 = $result->fetch_assoc();
			    return $post4;
			}
			//thông báo bài viết mới
			function getpostappanou(){
				$conn_obj = new Connection();
				$query = "SELECT * FROM posts WHERE approved is Null and delete_at is Null";
				$result = $conn_obj->conn->query($query);
				$post5 = $result->fetch_assoc();
			    return $post5;
			}
			//lấy ra 1 bản ghi của category
			function editcategories($id){
				$conn_obj = new Connection();
				$query = "SELECT * FROM categories WHERE id=".$id;
				$result = $conn_obj->conn->query($query);
				$category = $result->fetch_assoc();
				return $category;
			}
			//xử lý edit categories
			function editprocesscate($data){
				$conn_obj = new Connection();
				$target_dir = "public/images/";  // thư mục chứa file upload

		        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
		        
		        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		        	$file_name = basename($_FILES["thumbnail"]["name"]);
		        	if ($data['parent_id'] != 0) {
		                $query = "UPDATE categories SET name='".$data['name']."',Parent_id='".$data['parent_id']."',thumbnail='".$file_name."',slug='".$data['slug']."',description='".$data['description']."',created_at='".$data['created_at']."' WHERE id=".$data['id'];
		            } else{
		                $query = "UPDATE categories SET name='".$data['name']."',thumbnail='".$file_name."',slug='".$data['slug']."',description='".$data['description']."',created_at='".$data['created_at']."' WHERE id=".$data['id'];
		            }
		        } else { // Upload file có lỗi 
		           if ($data['parent_id'] != 0) {
		                $query = "UPDATE categories SET name='".$data['name']."',Parent_id='".$data['parent_id']."',slug='".$data['slug']."',description='".$data['description']."',created_at='".$data['created_at']."' WHERE id=".$data['id'];
		            } else{
		                $query = "UPDATE categories SET name='".$data['name']."',slug='".$data['slug']."',description='".$data['description']."',created_at='".$data['created_at']."' WHERE id=".$data['id'];
		            }
		        }
		        $status = $conn_obj->conn->query($query);
		        setcookie('msg2','cập nhật category thành công',time()+2);
		        return $status;
			}
			// thêm mới bài category
		function getaddimgcategory($data){
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date = date("Y/m/d h:i:s");
			$conn_obj = new Connection();
				$target_dir = "public/images/";  // thư mục chứa file upload
					$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
		        
			        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
			        	$file_name =  basename($_FILES["thumbnail"]["name"]);
			        	if ($data['parent_id'] != 0) {
			        		if ($_SESSION['employee']['role']==1) {
			        			$query = "INSERT INTO categories (name,parent_id,thumbnail,slug,description,created_at,approved) VALUES ('".$data['name']."','".$data['parent_id']."','".$file_name."','".$data['slug']."','".$data['description']."','".$date."',1)";
			        		}else {
			        		 $query = "INSERT INTO categories (name,parent_id,thumbnail,slug,description,created_at) VALUES ('".$data['name']."','".$data['parent_id']."','".$file_name."','".$data['slug']."','".$data['description']."','".$date."')";	
			        		}
			        	}else{
			        		if ($_SESSION['employee']['role']==1) {
			        			$query = "INSERT INTO categories (name,thumbnail,slug,description,created_at,approved) VALUES ('".$data['name']."','".$file_name."','".$data['slug']."','".$data['description']."','".$date."',1)";
			        		}else {
			        		 $query = "INSERT INTO categories (name,thumbnail,slug,description,created_at) VALUES ('".$data['name']."','".$file_name."','".$data['slug']."','".$data['description']."','".$date."')";
			        		}

			        	}
						$status = $conn_obj->conn->query($query);

						return $status;
			        }
			        else { // Upload file có lỗi 
		            echo "Sorry, there was an error uploading your file.";
		        	}
		}

		function delete($id){
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date = date("Y/m/d h:i:s");
			$conn_obj = new Connection();
			$query= "UPDATE posts SET delete_at='".$date."' WHERE '[category_id IN (SELECT id FROM categories WHERE category_id=".$id.")]' OR category_id=".$id;
			$query_ = "UPDATE categories SET delete_at='".$date."' WHERE  parent_id=".$id." OR id=".$id;
			$status = $conn_obj->conn->query($query);
			$status_ = $conn_obj->conn->query($query_);
			if ($query==true && $query_==true) {
				return true;
			}

		}
		function getuserpost(){
			$conn_obj = new Connection();
			$query = "SELECT * FROM posts WHERE user_id='".$_SESSION['employee']['id']."' AND delete_at is null";
			$user = $conn_obj->conn->query($query);
			return $user;
		}
		function getlistpost(){
			$conn_obj = new Connection();
				$query = "SELECT * FROM posts WHERE delete_at is null";
			    //thực thi câu lệnh truy vấn
			    $result = $conn_obj->conn->query($query);
			    //tạo mảng lưu dữ liệu
			    $posts = array();

			    while ($row = $result->fetch_assoc()) {
			        $posts[] = $row;
			    }
			    return $posts;
			}
			//bài đăng bị ẩn
			function viewhidden(){
			$conn_obj = new Connection();
				$query = "SELECT * FROM posts WHERE delete_at is null AND status = '0'";
			    //thực thi câu lệnh truy vấn
			    $result = $conn_obj->conn->query($query);
			    //tạo mảng lưu dữ liệu
			    $posts = array();

			    while ($row = $result->fetch_assoc()) {
			        $posts[] = $row;
			    }
			    return $posts;
			}
			//lấy ra tất cả users
			function getlistuser(){
			$conn_obj = new Connection();
				$query = "SELECT * FROM users WHERE delete_at is null";
			    //thực thi câu lệnh truy vấn
			    $result = $conn_obj->conn->query($query);
			    //tạo mảng lưu dữ liệu
			    $users = array();

			    while ($row = $result->fetch_assoc()) {
			        $users[] = $row;
			    }
			    return $users;
			}
			//danh sách tài khoản bị khóa
			function listdeactive(){
				$conn_obj = new Connection();
					$query = "SELECT * FROM users WHERE delete_at is NOT Null";
				    //thực thi câu lệnh truy vấn
				    $result = $conn_obj->conn->query($query);
				    //tạo mảng lưu dữ liệu
				    $users1 = array();

				    while ($row = $result->fetch_assoc()) {
				        $users1[] = $row;
				    }
				    return $users1;
			}
			//thêm mới 1 bài posts
		function getaddimgposts($data){
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date = date("Y/m/d h:i:s");
			$conn_obj = new Connection();
			$target_dir = "public/images/";  // thư mục chứa file upload
				$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
		        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		            $file_name = basename($_FILES["thumbnail"]["name"]);
		            if ($_SESSION['employee']['role']==1) {
		            	$query = "INSERT INTO posts (title,description,thumbnail,content,user_id,slug,category_id,view_count,created_at,status,approved) VALUES ('".$data['title']."','".$data['description']."','".$file_name."','".$data['demo']."','".$_SESSION['employee']['id']."','".$data['slug']."','".$data['category_id']."',0,'".$date."',1,1)";
	        		}else{
		            	$query = "INSERT INTO posts (title,description,thumbnail,content,user_id,slug,category_id,view_count,created_at,status,approved) VALUES ('".$data['title']."','".$data['description']."','".$file_name."','".$data['demo']."','".$_SESSION['employee']['id']."','".$data['slug']."','".$data['category_id']."',0,'".$date."',Null,Null)";
					}
					$status = $conn_obj->conn->query($query);
					return $status;
		        } else { // Upload file có lỗi 
		            echo "Sorry, there was an error uploading your file.";
		        }	
		}
		//xóa bài post
		function deletepost($id){
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date = date("Y/m/d h:i:s");
			$conn_obj = new Connection();
			$query= "UPDATE posts SET delete_at='".$date."' WHERE id=".$id;
			$status = $conn_obj->conn->query($query);
			return $status;

		}
		//xóa bài categories
		function deletecategory($id){
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date = date("Y/m/d h:i:s");
			$conn_obj = new Connection();
			$query= "UPDATE categories SET delete_at='".$date."' WHERE id=".$id;
			$status = $conn_obj->conn->query($query);
			return $status;

		}
		//khóa tài khoản
		function userdeactive($id){
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date = date("Y/m/d h:i:s");
			$conn_obj = new Connection();
			$query= "UPDATE users SET delete_at='".$date."' WHERE id=".$id;
			$query_ = "UPDATE posts SET delete_at='".$date."' WHERE user_id= ".$id;
			$status = $conn_obj->conn->query($query);
			$status_ = $conn_obj->conn->query($query_);
			if ($query==true && $query_==true) {
				return true;
			}
		}
		//lấy tất cả 1 bản posts theo id
		function getpost($id){
			$conn_obj = new Connection();
			$query = "SELECT * FROM posts WHERE id=".$id;
   			$post = $conn_obj->conn->query($query)->fetch_assoc();
   			 return $post;
		}
		//xem chi tiết bài post
		function postdetail($slug){
			$conn_obj = new Connection();
			$query = "SELECT * FROM posts WHERE slug='".$slug."'";
   			$post1 = $conn_obj->conn->query($query)->fetch_assoc();
   			 return $post1;
		}
		//chỉnh sửa bài posts
		function editpost($data){
			$conn_obj = new Connection();
			$target_dir = "public/images/";  // thư mục chứa file upload
		       $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
	        
		        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		            $file_name = basename($_FILES["thumbnail"]["name"]);
		            $query = "UPDATE posts SET title='".$data['title']."',description='".$data['description']."',thumbnail='".$file_name."',content='".$data['demo']."',user_id='".$_SESSION['employee']['id']."',slug='".$data['slug']."',category_id='".$data['category_id']."',created_at='".$data['created_at']."' WHERE id=".$data['id'];
		        } else { // Upload file có lỗi 
		           $query = "UPDATE posts SET title='".$data['title']."',description='".$data['description']."',content='".$data['demo']."',user_id='".$_SESSION['employee']['id']."',slug='".$data['slug']."',category_id='".$data['category_id']."',created_at='".$data['created_at']."' WHERE id=".$data['id'];

		        }
		        $status = $conn_obj->conn->query($query);
		        setcookie('msg1','cập nhật bài viết thành công',time()+2);
				return $status;

		}
		//lấy 1 bản ghi tất cả các thông tin từ bảng users theo id
		function getuser($id){
			$conn_obj = new Connection();
			$query = "SELECT * FROM users WHERE id=".$id;
		 	$user = $conn_obj->conn->query($query)->fetch_assoc();
		 	return $user;
		}
		//chỉnh sửa thông tin user
		function updateuser($data){
			$conn_obj = new Connection();
			$target_dir = "public/images/";  // thư mục chứa file upload
		        $target_file = $target_dir . basename($_FILES['avatar']['name']); // link sẽ upload file lên
		        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		           $file_name = basename($_FILES['avatar']['name']);
		          	$query = "UPDATE users SET name='".$data['name']."',email='".$data['email']."',avatar='".$file_name."',phone='".$data['phone']."' WHERE id=".$data['id'];
		        } else { // Upload file có lỗi 
		           $query = "UPDATE users SET name='".$data['name']."',email='".$data['email']."',phone='".$data['phone']."' WHERE id=".$data['id'];
		        }
		        // echo "<pre>";
		        // print_r();
		        // echo "</pre>";
		        $_SESSION['employee']['avatar'] = basename($_FILES['avatar']['name']);

		        $status = $conn_obj->conn->query($query);
		        setcookie('msg','cập nhật thông tin thành công',time()+2);
		        return $status;
		}
		//tạo 1 tài khoản mới
		function create($data){
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date = date("Y/m/d h:i:s");
			$conn_obj = new Connection();
			$query = "INSERT INTO users (name,email,password,created_at) VALUES ('".$data['name']."','".$data['email']."','".md5($data['password'])."','".$date."')";
			$status1 = $conn_obj->conn->query($query);
			setcookie('create','bạn đã tạo tài khoản thành công! hãy đăng nhập để tạo những bài viết độc đáo',time()+2);
			return $status1;
		}
		//duyệt bài đăng
		function approved($id){
			$conn_obj = new Connection();
			$query = "UPDATE posts SET approved = 1 ,status = 1 WHERE id=".$id;
			$status = $conn_obj->conn->query($query);
			return $status;
		}
		//lấy ra tổng số lượt xem
		function viewposts(){
			$conn_obj = new Connection();
			$view_count = "SELECT SUM(view_count) as view FROM posts WHERE delete_at is NULL";
			$result = $conn_obj->conn->query($view_count);
			$viewpost = $result->fetch_assoc();
			return $viewpost;
		}
		//lấy ra số người đăng ký trang blog
		function getdkblog(){
			$conn_obj = new Connection();
			$query = "SELECT COUNT(id) as dk FROM users WHERE role is NULL";
			$result = $conn_obj->conn->query($query);
			$dk4 = $result->fetch_assoc();
			return $dk4;
		}
		//lấy ra số bài đã viết
		function getpostblog(){
			$conn_obj = new Connection();
			$query = "SELECT COUNT(id) as post FROM posts WHERE delete_at is NULL";
			$result = $conn_obj->conn->query($query);
			$pblog = $result->fetch_assoc();
			return $pblog;
		}
		//duyệt categories
		function approvedcate($id){
			$conn_obj = new Connection();
			$query = "UPDATE categories SET approved = 1 WHERE id=".$id;
			$status = $conn_obj->conn->query($query);
			return $status;
		}
		//ẩn bài viết
		function hiddenpost($id){
			$conn_obj = new Connection();
			$query = "UPDATE posts SET status = 0 WHERE id=".$id;
			$status = $conn_obj->conn->query($query);
			return $status;
		}
		//hiển thị bài đăng bị ẩn
		function showhidden($id){
			$conn_obj = new Connection();
			$query = "UPDATE posts SET status = 1 WHERE id=".$id;
			$status = $conn_obj->conn->query($query);
			return $status;
		}
		//bài viết đã xóa
		function showdeletepost(){
			$conn_obj = new Connection();
				$query = "SELECT * FROM posts WHERE delete_at is NOT null";
			    //thực thi câu lệnh truy vấn
			    $result = $conn_obj->conn->query($query);
			    //tạo mảng lưu dữ liệu
			    $posts = array();

			    while ($row = $result->fetch_assoc()) {
			        $posts[] = $row;
			    }
			    return $posts;
		}
		//mở tài khoản
		function openuser($id){
			$conn_obj = new Connection();
			$query = "UPDATE users SET delete_at = NuLL WHERE id=".$id;
			$status = $conn_obj->conn->query($query);
			return $status;
		}
		function checkpassword($password,$newpassword,$id){
			$conn_obj = new Connection();
			$query = "SELECT * from users WHERE id={$id} AND password = '{$password}'";
			$password = $conn_obj->conn->query($query);
			if($password->num_rows == 1){
				$password = "UPDATE users SET password = '$newpassword'";
				$conn_obj->conn->query($password);
				return '1';
			}else{
				return '2';
			}
		}

	}
 ?>