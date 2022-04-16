<?php
$serverName = 'localhost';
$userName = 'root';
$password ='';
//$databaseName = 'demo1'; 
$conn = mysqli_connect($serverName, $userName, $password);
//Tao database
    $sql = 'CREATE DATABASE demo2';
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo "Tao database that bai";
    }
    else{
        echo "Tao database thanh cong";
    }
         
           
    //TAO BANR USERNAME (id, user, pass, email)
 ?>

<!-- Tao table user name -->
<?php
$conn = mysqli_connect($serverName, $userName, $password, 'demo2');


$sql = "CREATE TABLE USERNAME( 
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
user VARCHAR(1000) NOT NULL,
pass int not null,
email VARCHAR(1000)
)";
$query = mysqli_query($conn, $sql);
if(!$query ){
echo "table that bai";
}
else{
echo "table thanh cong";
}
$conn->close();
?>