<?php
//setcookie('name','giatriCookie', 'thoi gian ton tai cua Cookie')
setcookie('us','login', time() +5000);
//Kiem tra xem cookie us ton tai chua?
if(isset($_COOKIE['us'])){
    echo "Cookie da ton tai";
 } else {
    //neu chua co thi tao cookie us voi gia tri la login
    setcookie('us','login', time() +5000);
    echo "Tao cookie thanh cong";
 }
 echo "<pre>";
print_r($_COOKIE);
 echo "</pre>";
 ?>