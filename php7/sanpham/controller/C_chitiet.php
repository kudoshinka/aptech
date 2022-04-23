<?php 
//Lay id tu url luu ve 1 bien

$id = $_GET['id'];

//Lay du lieu theo id da duoc GET ve o tren
$product = $db->get('sanpham',array('Mahang'=>$id));

//Lay san pham lien quan theo catolog_id



require_once('./view/V_chitiet.php');

 ?>