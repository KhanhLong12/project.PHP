<?php 
	class connection{
		//thuộc tính
		var $conn;
		function __construct(){
			$servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

			$username = "root";   // Tên đăng nhập
				
			$password = "";    // Mật khẩu truy cập
				
			$dbname = "long_blog";   // Tên cơ sở dữ liệu muốn kết nối đến

				
			// Tạo kết nối đến CSDL
				
			$this->conn = new mysqli($servername, $username, $password, $dbname);


			$this->conn->set_charset("utf8");//đọc tiếng việt
			//check connection
			if ($this->conn->connect_error) {
				die("connection failed:" . $conn->connect_error);
			}else{
				// echo "connection";
			}
		}
	}

 ?>