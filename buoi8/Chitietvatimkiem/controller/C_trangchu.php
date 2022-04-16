<?php 

	//Kiem tra co ton tai keyword tren url khong
if (isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
	//Hien thi du lieu ma nguoi dung tim kiem

	$product = $db->get_like('product', 'name', $keyword);
}
else
{
	//Neu khong co keyword Lấy dữ liệu ở trong bảng product
	$product = $db->get('product',array());
}

	
	require_once('./view/V_trangchu.php');
?>