<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
      
        .container{
            margin: auto;
  width: 50%;
  border: 1px solid black;
  padding: 10px;
  text-align: center;

        }

        ul li {
            list-style-type: none;
}
       
    </style>


    <body>
    <div class='container'> 
        <form method="post" id="mophong">
           
                <h1 style="color: red; text-align: center;">Xem chòm sao của bạn</h1>
                <ul>
                    <?php
                 if(isset($_POST['result'])){
                     $month = $_POST['month'];
                     $day = $_POST['day'];
                     }
                         
                 ?>
                    <li>Ngày <input type="number" name="day" value="<?php echo $day?>"></li>
                    <li>Tháng <input type="number" name="month" value="<?php echo $month?>"></li>
                    <li><input type="submit" name="result" value="Xem kết quả"></li>
                    <li id="print">
                        <?php
                         if (isset($_POST['result'] ) && $_POST['day'] && $_POST['month'] ) {
                              $month =$_POST['month'];
                              $day = $_POST['day'];
                              switch ($month) {
                        case 1:

                        if( $day<=19 && $day>0){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/capricorn.jpg"/>
                            <p> Bạn thuộc cung Ma Kết (22/12 - 19/1) </p>
                            </div>';
                        }
                        else if ($day>19 && $day <=31){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/aquarius.jpg"/>
                            <p> Bạn thuộc cung Bảo Bình (20/1 - 18/2) </p>
                            </div>';
                        }
                        else{
                        echo "không có ngày mà Bạn nhập,\n Bạn ngu vl";
                        }break;

                        case 2:

                        if( $day<=18 && $day>0){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/aquarius.jpg"/>
                            <p> Bạn thuộc cung Bảo Bình (20/1 - 18/2) </p>
                            </div>';
                            }
                            else if ($day>18 && $day <=29){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/pisces.jpg"/>
                            <p> Bạn thuộc cung Song Ngư (19/2 - 20/3) </p>
                            </div>';
                            }
                            else{
                            echo "không có ngày mà Bạn nhập,\n Bạn ngu vl";
                            }break;
                        case 3:

                        if( $day<=20 && $day>0){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/pisces.jpg"/>
                            <p> Bạn thuộc cung Song Ngư (19/2 - 20/3) </p>
                            </div>';
                            }
                            else if ($day>20 && $day <=31){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/aries.jpg"/>
                            <p> Bạn thuộc cung Bạch Dương (21/3 - 19/4) </p>
                            </div>';
                            }
                            else{
                            echo "không có ngày mà Bạn nhập,\n Bạn ngu vl";
                            }break;
                        case 4:

                        if( $day<=19 && $day>0){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/aries.jpg"/>
                            <p> Bạn thuộc cung Bạch Dương (21/3 - 19/4) </p>
                            </div>';
                            }
                            else if ($day>19 && $day <=30){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/taurus.jpg"/>
                            <p> Bạn thuộc cung Kim Ngưu (20/4 - 20/5) </p>
                            </div>';
                            }
                            else{
                            echo "không có ngày mà Bạn nhập,\n Bạn ngu vl";
                            }break;
                        case 5:

                        if( $day<=20 && $day>0){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/taurus.jpg"/>
                            <p> Bạn thuộc cung Kim Ngưu (20/4 - 20/5) </p>
                            </div>';
                            }
                            else if ($day>20 && $day <=31){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/gemini.jpg"/>
                            <p> Bạn thuộc cung Song Tử (21/5 - 21/6) </p>
                            </div>';
                            }
                            else{
                            echo "không có ngày mà Bạn nhập,\n Bạn ngu vl";
                            }break;
                        case 6:

                        if( $day<=21 && $day>0){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/gemini.jpg"/>
                            <p> Bạn thuộc cung Song Tử (21/5 - 21/6) </p>
                            </div>';
                            }
                            else if ($day>21 && $day <=30){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/cancer.jpg"/>
                            <p> Bạn thuộc cung Cự Giải (22/6 - 22/7) </p>
                            </div>';
                            }
                            else{
                            echo "không có ngày mà Bạn nhập,\n Bạn ngu vl";
                            }break;
                        case 7:

                        if( $day<=22 && $day>0){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/cancer.jpg"/>
                            <p> Bạn thuộc cung Cự Giải (22/6 - 22/7) </p>
                            </div>';
                            }
                            else if ($day>21 && $day <=31){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/leo.jpg"/>
                            <p> Bạn thuộc cung Sư Tử (23/7 - 22/8) </p>
                            </div>';
                            }
                            else{
                            echo "không có ngày mà Bạn nhập,\n Bạn ngu vl";
                            }break;
                        case 8:

                        if( $day<=22 && $day>0){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/leo.jpg"/>
                            <p> Bạn thuộc cung Sư Tử (23/7 - 22/8) </p>
                            </div>';
                            }
                            else if ($day>22 && $day <=31){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/virgo.jpg"/>
                            <p> Bạn thuộc cung Xử Nữ (23/8 - 22/9) </p>
                            </div>';
                            }
                            else{
                            echo "không có ngày mà Bạn nhập,\n Bạn ngu vl";
                            }break;
                        case 9:

                        if( $day<=22 && $day>0){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/virgo.jpg"/>
                            <p> Bạn thuộc cung Xử Nữ (23/8 - 22/9) </p>
                            </div>';
                            }
                            else if ($day>22 && $day <=30){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/libra.jpg"/>
                            <p> Bạn thuộc cung Thiên Bình (23/9 - 22/10) </p>
                            </div>';
                            }
                            else{
                            echo "không có ngày mà Bạn nhập,\n Bạn ngu vl";
                            }break;
                        case 10:

                        if( $day<=22 && $day>0){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/libra.jpg"/>
                            <p> Bạn thuộc cung Thiên Bình (23/9 - 22/10) </p>
                            </div>';
                            }
                            else if ($day>22 && $day <=31){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/scorpio.jpg"/>
                            <p> Bạn thuộc cung Thiên Yết (23/10 - 22/11) </p>
                            </div>';
                            }
                            else{
                            echo "không có ngày mà Bạn nhập,\n Bạn ngu vl";
                            }break;
                        case 11:

                        if( $day<=22 && $day>0){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/scorpio.jpg"/>
                            <p> Bạn thuộc cung Thiên Yết (23/10 - 22/11) </p>
                            </div>';
                            }
                            else if ($day>22 && $day <=30){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/sagittarius.jpg"/>
                            <p> Bạn thuộc cung Nhân Mã (23/11 - 21/12) </p>
                            </div>';
                            }
                            else{
                            echo "không có ngày mà Bạn nhập,\n Bạn ngu vl";
                            }break;
                        case 12:

                        if( $day<=21 && $day>0){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/sagittarius.jpg"/>
                            <p> Bạn thuộc cung Nhân Mã (23/11 - 21/12) </p>
                            </div>';
                            }
                            else if ($day>22 && $day <=31){
                            echo '<div id="cung">
                            <img src="./CungHoangDao/images/sagittarius.jpg"/>
                            <p> Bạn thuộc cung Ma Kết (22/12 - 19/1) </p>
                            </div>';
                            }
                            else{
                            echo "không có ngày mà Bạn nhập,\n Bạn ngu vl";
                            }break;
                                
                        
                    }
                }
             
                ?>
                </ul>
                </form>

            </div>

    </body>

</html>