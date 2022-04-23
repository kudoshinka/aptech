<?php 

require_once('./model/database.php');
 
$db = new database();


if(isset($_GET['controller'])){
    
    $controller = $_GET['controller'];
}

else{
    $controller = 'trangchu';
}


switch ($controller) {
    case 'trangchu':
        require_once('./controller/C_trangchu.php');
        break;
    case 'chitiet':
        require_once('./controller/C_chitiet.php');
        break;
	case 'add_product':
	    require_once('./controller/C_add_product.php');
		break;    
    default:
        
        break;
}








 ?>