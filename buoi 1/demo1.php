 <?php

$a=0;
$b=20;

//nếu a>0 thì thông báo a là số dương
$check1 = ($a>=0 && $b>=0)?'a và b là số dương' : 'a hoặc b là số âm';
echo '<br>';
//nếu a>0 thì a là số dương, nếu a<0 thì a là số âm, còn lại hiển thị ra dữ liệu không hợp lệ
$check = ($a>0)? "a là số dương" : (($a<0) ? "a là số âm" : "du lieu sai");

echo $check;
echo '<br>';

$n='18';
$re = ($n>0)? "so duong" : (($n<0)? "so am" : "so 0");
echo $re;

echo '<br>';

/**viết chương trình kiểm tra thông tin người dùng như sau:
nếu name = admin và pass = admin hoặc và > 18 thì thông báo đăng nhập thành công
nếu name = admin và pass = admin và tuổi < 18 thì thông báo
 đăng nhập thành công và bạn chưa đủ tuổi đăng nhập
 còn lại thông báo đăng nhập thất bại
**/


$name='admin';
$pass='admin';
$tuoi= 'admin';
$check2 = ($name=='admin' && $pass=='admin' && $tuoi>18)?'đăng nhập thành công và bạn đủ tuổi truy cập'
:(($name=='admin' && $pass=='admin' && $tuoi<18)?'đăng nhập thành công và bạn không đủ tuổi đăng nhập':'đăng nhập thất bại');
echo $check2;
?>
