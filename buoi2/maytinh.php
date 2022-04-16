<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
         $n1='';
         $n2='';
         $pt='';
         $ketqua='';

if(isset($_POST['rset'])){
    $n1='';
    $n2='';
    $pt='';
    $ketqua='';

}
     if(isset($_POST['number1']) && ($_POST['number2']) && ($_POST['caculate'])) {
         $n1 = $_POST['number1'];
         $n2 = $_POST['number2'];
         $pt = $_POST['caculate'];

         switch ($pt) {
            case '+':
                 $ketqua = $n1 + $n2;
                 break;
            case '-':
                 $ketqua = $n1 - $n2;
                 break;     
            case '*':
                 $ketqua = $n1 * $n2;
            break;
            case '/':
                $ketqua = $n1 / $n2;
            break;         
            case '%':
                $ketqua = $n1 % $n2;
            break;  

                 
             default:
                 echo 'Lỗi không thực hiện được';
                 break;
         }
     }
else{
    echo 'Dữ liệu không hợp lệ';
}

?>

    <div class="content">
        <h1 style="color:red;">Mô phỏng máy tính điện tử</h1>

        <form action="#" method="post" name="main-form">
            <div class="row">
                <span>Số thứ nhất</span>
                <input type="text" name="number1" value="<?php echo $n1 ?>">
            </div>
            <div class="row">
                <span>Phép toán</span>
                <input type="text" name="caculate" value="<?php echo $pt ?>">
            </div>
            <div class="row">
                <span>Số thứ hai</span>
                <input type="text" name="number2" value="<?php echo $n2 ?>">
            </div>
            <div class="row">
                <input type="submit" name="submit" value="Xem kết quả">
            </div>
            <div class="row">
                <input type="reset" name="rset" value="Reset">
            </div>
            <div class="row">
                <p>
                    <?php
                      echo 'Kết quả là: '.$n1 .$pt .$n2 .'='  .$ketqua;
                    
                     ?>
                </p>
            </div>

        </form>

    </div>

</body>

</html>