<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="#">
    Username: <input type="text" name="user"><br><br>
    Password: <input type="password" name="pass"><br><br>
    <input type="submit" name="btlogin" value="Login"><br><br>
</form>
<?php
if (isset($_POST['btlogin'])){
    if(isset($_COOKIE['us1'])){
        echo 'Ban da dang nhap';
    }else{
        setcookie('us1',$_POST['user'],time() +5000);
        header ('location: hienthi.php');
    }
}


 ?>


    
</body>
</html>