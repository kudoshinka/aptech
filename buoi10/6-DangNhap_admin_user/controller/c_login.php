<?php 
//kiem tra nguoi dung da dang nhap chua
if(isset($_SESSION['ss_admin_nhanvien'])){
	//neu dang nhap roi thi chuyen toi trang chu
	header('location: ?controller=trangchu');

}
//neu chua dang nhap thi kiem tra nguoi dung co click vao nut dang nhap khong?
if (isset($_POST['btn_login'])) {
	//lay du lieu tu o input username va pass
	$username = $_POST['username'];
	$password = $_POST['password'];
	//kiem tra tai khoan va mat khau
	//b1; tao 1 mang loi 
	$error = array();
		//b2; kiem tra username co rong khong
	if ($username =='') {

		$error['username']='Username khong duoc de trong';
	}
	//b3; kiem tra pass co rong khong
	if ($password =='') {

		$error['password']='Password khong duoc de trong';
	}
	//b4: neu khong co loi tren thi kiem tra user va pass co ton tai trong database khong
	if (!$error) {
		//Lay du lieu tu trong database ra
		$user = $db->get('admin_nhanvien',array('username'=>$username) );
		if (empty($user)) {
			$error['username']='Username khong dung';
		}else{   
		//b5: neu usrname dung thi kiem tra mat khau
		if ($password!=$user[0]['password']) {
			$error['password']='Password khong dung';
		}
		}
	}
	//sau khi nguio dung dang nhap thanh cong thi lay gia tri cua nguoi dung luu vao session de luu tru ket qua dang nhap
	if (!$error) {
		$_SESSION['ss_admin_nhanvien']=$user[0]['id'];
		//dieu huong nguoi dung den trang chu
		header('location: ?controller=trangchu');
	}
}
require_once('./view/V_login.php');

 ?>
