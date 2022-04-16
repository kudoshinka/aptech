<?php
//Không Có tham số
//Tao ham
function taoBox(){
        echo '<div style="width: 200px; height: 50px;">
        <p>Hinh 1 <span>(200 x 50)</span></p>
        </div>';
    }
//Hamf co tham so;
        function taoBox1($width = 250, $height=400)
    {
        echo '<div style="width:'. $width.'px; height:'. $height.'px;">
        <p>Hinh 1 <span>(200 x 50)</span></p>
        </div>';
        }
//xay dung fn kiem tra xem a co phai la so chan khong
    function check($a = 41){
        if($a%2==0){
            return true;
                      
        }
        else{
            return false;
        }
    }
    $ketqua = check();
    if ($ketqua == true) {
        echo "So chan";
    }
    else{
        echo "So le";
    }
    //Goi ham trong PHP
   taoBox();
   taoBox1();
  taoBox1(200, 100);