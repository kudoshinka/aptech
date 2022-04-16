<?php
session_start();
if (isset($_POST['btlogin'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
        
    if ($user == "Admin" && $pass == "12345678") {
        echo "Dang nhap thanh cong";
        $_SESSION['user'] = $user;
    }
    else{ echo "Dang nhap that bai";
    }
}
?>