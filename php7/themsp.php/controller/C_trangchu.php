<?php 
	//Lấy dữ liệu ở trong bảng product
	$product = $db->get('sanpham',array());
	require_once('./view/V_trangchu.php');
?>