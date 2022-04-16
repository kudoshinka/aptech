<?php 
if(isset($_SESSION['ss_admin_nhanvien'])){
	//neu dang nhap roi thi lay thong thin nguoi dung theo session da luu
	$user = $db->get('admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']) );
	;

}else{
	//neu chua dang nhap thi dieu huong ve trang login de yeu cau ngui dung dang nhap
	header('location: ?controller=login');
}
require_once('./view/V_trangchu.php');
 ?>