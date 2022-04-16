<?php
//kiem tra xem may ng dung da bat cookie chua?

if(count($_COOKIE)>0){
    echo "Cookie da duoc bat";
}
else {
    echo "Ban da tat Cookie, hay bat Cookie de dang nhap";
}
?>