<?php
$khoaHoc = array("C++", "PHP", ".NET", "JAVA", "C++");
//Loại bỏ các phần tử trùng nhau
echo "Mång trước khi loại bỏ phần tử trùng nhau: ";
    echo "<pre>";
    print_r($khoaHoc);
    echo "</pre>";
    $newKH = array_unique($khoaHoc);
echo "Mång SAU loại bỏ phần tử trùng nhau: ";
    echo "<pre>";
    print_r($newKH);
    echo "</pre>";
//Xóa toàn bộ mạng sử dụng unset(ten_mång);
// xóa theo phần tử
   // unset ($khoaHoc[1]);
   // echo "<pre>";
   // print_r($khoaHoc);
   // echo "</pre>";
//Thêm phần tử vào cuối mảng
    echo $kh = array_push($khoaHoc, "HMTL", "PYTHON");
    echo "<pre>";
    print_r($khoaHoc);
    echo "</pre>";
//Thêm các phần tử vào đầu mảng
    echo $kh = array_unshift($khoaHoc, "HMTL", "PYTHON");
    echo "<pre>";
    print_r($khoaHoc);
    echo "</pre>";
//Đảo mảng
    echo $nkh = array_reverse($khoaHoc);
    echo "<pre>";
    print_r($nkh);
    echo "</pre>";
 ?>