<?php 
session_start();
//Goi model
require_once('./model/database.php');
//Taoj doi tuong 
$db = new database();

//Kiem tra xem tren url co controller chua?
//Neu da ton tai bien controller
if(isset($_GET['controller'])){
    //Lay gia tri cua controller
    $controller = $_GET['controller'];
}
//Neu chua ton tai controller thi dieu huong trang ve trang chu
else{
    $controller = 'trangchu';
}
//Kieemr tra gia tri cua $controller  de goi file tuong ung

switch ($controller) {
    case 'trangchu':
        require_once('./controller/C_trangchu.php');
        break;
    case 'chitiet':
        require_once('./controller/C_chitiet.php');
        break;
    case 'add_giohang':
          require_once('./controller/C_add_giohang.php');
           break;
    case 'giohang':
          require_once('./controller/C_giohang.php');      
    case 'xuli_cart':
          require_once('./controller/C_xuli_cart.php');      
            break;     
    default:
        
        break;
}


 ?>