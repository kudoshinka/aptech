<?php
$so_thu_nhat ='';
$so_thu_hai ='';
$toan_tu ='';
if(isset($_POST['submit'])){
$so_thu_nhat=$_POST['so_thu_nhat'];
$so_thu_hai=$_POST['so_thu_hai'];
$toan_tu=$_POST['toan_tu'];



if ($toan_tu == '+') {
    $ketqua=$so_thu_nhat + $so_thu_hai;
    
}
else if ($toan_tu == '-') {
    $ketqua=$so_thu_nhat - $so_thu_hai;
    
}
else if ($toan_tu == '/') {
    $ketqua=$so_thu_nhat / $so_thu_hai;
    
}
else if ($toan_tu == '*') {
    $ketqua=$so_thu_nhat * $so_thu_hai;
   
}
else {
    echo 'Canh bao: Toan tu ban nhap vao khong chinh xac !!!';
    exit();
}
}
?>