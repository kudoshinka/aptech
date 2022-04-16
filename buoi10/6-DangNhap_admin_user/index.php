<?php 
	//Bắt đầu session
	session_start();
	//require fle database.php vào
	require('./model/database.php');
	//Tạo dối tượng $db
	$db = new database();
	//kiểm tra xem trên đường link có controller= chưa
	if (isset($_GET['controller'])) {
		//Nếu có thì lấy giá trị đó
		$controller = $_GET['controller'];
	}else{
		//nếu không thì mặc định là login
		$controller = 'login';
	}
	//Kiểm tra biến $controller bằng gì để require file tương ứng
	switch ($controller) {
		case 'login':
			require_once('./controller/c_login.php');
			break;
		case 'trangchu':
			require_once('./controller/c_trangchu.php');
			break;
		case 'log_out':
			require_once('./controller/c_logout.php');
			break;
	
	
	}
?>