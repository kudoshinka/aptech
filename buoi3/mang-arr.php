<?php
//ví dụ: Tạo 1 mảng chứa thông tin các khóa học aptch
// $a= 'C++';
// $b = 'PHP'
// $c = '.NET'
      
$khoaHoc = array("C++", "PHP", ".NET", "JAVA");
$khoaHoc1 = array('P' =>'PHP','N'=>'.NET','j'=>'JAVA' );
//Hiển thị toàn bộ giá trị của mảng
    //var_dump($khoaHoc);
    echo "<pre>";
    print_r($khoaHoc);
    echo "</pre>";

    echo "<pre>";
    print_r($khoaHoc1);
    echo "</pre>";
//Duyệt mảng
//Kiểm tra mảng có rỗng không.
if (!empty($khoaHoc)) {
    foreach ($khoaHoc as $key =>$value){
        echo $key ." = ". $value. "<br>";
}
}
//lay gia tri khoa hoc tai key = 2
echo $khoaHoc[2];
 ?>