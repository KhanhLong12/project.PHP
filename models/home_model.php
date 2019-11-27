<?php
require_once 'connection.php';
	class home_model{
		function __construct(){

		}
	function getmenu(){
		$conn_obj = new Connection();
			$query = "SELECT * FROM categories WHERE parent_id is NULL AND approved =1";
			$result = $conn_obj->conn->query($query);
		    //tạo mảng lưu dữ liệu
		    $categories = array();

		    while ($row = $result->fetch_assoc()) {
		        $categories[] = $row;
		    }
		    return $categories;
	}
	function getposts(){
			$conn_obj = new Connection();
			$query = "SELECT * FROM posts WHERE delete_at is NULL AND approved = 1 AND status = 1";
		    //thực thi câu lệnh truy vấn
		   $result = $conn_obj->conn->query($query);
		    //tạo mảng lưu dữ liệu
		    $posts = array();

		    while ($row = $result->fetch_assoc()) {
		        $posts[] = $row;
		    }
		    return $posts;
		}
	// //hiển thị các post trong category
	// 	function getpost_in_category(){
	// 		$conn_obj = new Connection();
	// 		$query = "SELECT count(*) FROM posts WHERE category_id='".$category_id."'";
	// 		$result = $conn_obj->conn->query($query);
	// 		$post_cate = $result->fetch_assoc();
	// 		return $post_cate;
	// 	}
	function getpostnew(){
		$conn_obj = new Connection();
			$query = "SELECT * FROM posts WHERE delete_at is NULL AND approved = 1 AND status = 1 ORDER BY created_at DESC LIMIT 3";
		    //thực thi câu lệnh truy vấn
		   $result = $conn_obj->conn->query($query);
		    //tạo mảng lưu dữ liệu
		    $posts_ = array();

		    while ($row = $result->fetch_assoc()) {
		        $posts_[] = $row;
		    }
		    return $posts_;
	}
	//các bài viết từ cũ đến mới
	function getpostold(){
		$conn_obj = new Connection();
			$query = "SELECT * FROM posts WHERE delete_at is NULL AND approved = 1 AND status = 1 ORDER BY created_at ASC LIMIT 3";
		    //thực thi câu lệnh truy vấn
		   $result = $conn_obj->conn->query($query);
		    //tạo mảng lưu dữ liệu
		    $posts_1 = array();

		    while ($row = $result->fetch_assoc()) {
		        $posts_1[] = $row;
		    }
		    return $posts_1;
	}
	function getPost($id){
			$conn_obj = new Connection();
			$query = "SELECT * FROM posts WHERE category_id=".$id." AND delete_at is NULL AND approved = 1 AND delete_at is NULL";
			$result = $conn_obj->conn->query($query);
		    //tạo mảng lưu dữ liệu
		    $posts2= array();

		    while ($row = $result->fetch_assoc()) {
		        $posts2[] = $row;
		    }
		    return $posts2;
		}
	function findPost($id){
			$conn_obj = new Connection();
			$query = "SELECT * FROM categories WHERE id=".$id." AND approved = 1 AND status = 1 AND delete_at is NULL";
			$result = $conn_obj->conn->query($query);
		    //tạo mảng lưu dữ liệu
		    $category1 = $result->fetch_assoc();
		    return $category1;
			}

		function getdetail($slug){
			$conn_obj = new Connection();
			$query = "SELECT * FROM posts WHERE slug='".$slug."' AND delete_at is NULL";
			
			$result = $conn_obj->conn->query($query);
			$post3 = $result->fetch_assoc();
			if ($post3==true) {
				$query = "UPDATE posts SET view_count = view_count+1 WHERE slug ='".$slug."'";
				$result = $conn_obj->conn->query($query);
			}
			return $post3;
		}
		//hàm đếm số lượng bài posts có cùng category
		function demposts($category_id){
			$conn_obj = new Connection();
			$query ="SELECT COUNT(category_id) FROM posts WHERE category_id=".$category_id;
			$demposts = $conn_obj->conn->query($query)->fetch_assoc();
			return $demposts;
		}
		function getauthor(){
			$conn_obj = new Connection();
			$query = "SELECT * FROM posts p JOIN users u ON p.user_id=u.id WHERE p.delete_at is NULL AND p.status = 1 AND p.approved = 1 ORDER BY view_count DESC LIMIT 1";
			$result = $conn_obj->conn->query($query);
		    //tạo mảng lưu dữ liệu
		    $user = $result->fetch_assoc();
		    return $user;
		}
		function getauthor1($user_id){
			$conn_obj = new Connection();
			$query ="SELECT * FROM posts p JOIN users u ON p.user_id=u.id WHERE user_id = ".$user_id;
			$result = $conn_obj->conn->query($query);
		    //tạo mảng lưu dữ liệu
		    $user1 = $result->fetch_assoc();
		    return $user1;
		}
		function getsearch($search){
			$conn_obj = new Connection();
			$query = "SELECT * FROM posts p JOIN users u ON p.user_id=u.id WHERE p.delete_at is NULL AND p.status = 1 AND p.approved = 1 AND title like '%$search%' or name like '%$search%'";
			$result = $conn_obj->conn->query($query);
			$postsfind = array();
			while ($row = $result->fetch_assoc()) {
		        $postsfind[] = $row;
		    }
		    return $postsfind;
		}
	}
 ?>	