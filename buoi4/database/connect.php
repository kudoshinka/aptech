<?php
$serverName = 'localhost';
$userName = 'root';
$password =  '';
$databaseName = 'demo1';
            
$conn = mysqli_connect($serverName, $userName, $password, $databaseName);
//Kiem tra ket noi
if (!$conn) {
    echo "Ket noi that bai";
    exit();
}else{
    echo "Ket noi thanh cong";
    mysqli_close($conn);
}
?>