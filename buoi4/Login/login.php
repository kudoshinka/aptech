<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="xuly.php">
    Username: <input type="text" name="user"><br><br>
    Password: <input type="password" name="pass"><br><br>
    <input type="submit" name="btlogin" value="Login"><br><br>
</form>
<?php if (isset($_SESSION['user'])) {?>
    <h5>Xin chao: <?php echo $_SESSION['user']; ?>
   <a href="logout.php">Logout</a>
    </h5>
<?php } ?>


    
</body>
</html>