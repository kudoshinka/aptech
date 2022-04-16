<?php 
//Lay id tu url luu ve 1 bien

$id = $_GET['id'];

//Lay du lieu theo id da duoc GET ve o tren
$product = $db->get('product',array('id'=>$id));

//Lay san pham lien quan theo catolog_id

$product_lienquan = $db->get_limit('product', array('catalog_id'=>$product[0]['catalog_id']),4);

require_once('./view/V_chitiet.php');

 ?>