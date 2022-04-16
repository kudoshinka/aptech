<?php
if(isset($_POST['btlogin'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];
if($user == 'admin' && $pass == 'admin'){
    echo 'dang nhap thanh cong<br>';
    
}
else{
    echo 'dang nhap that bai<br>';
}

echo "Username la: " .$user;
echo "<br>Password la: " .$pass;

}
 else{
     echo "nham nut roi";
 }
 
?>