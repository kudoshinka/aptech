<?php
    //Lay du lieu thong qua ham get();
    $product = $db->get('product',array());
    require_once('./view/V_trangchu.php');
 ?>