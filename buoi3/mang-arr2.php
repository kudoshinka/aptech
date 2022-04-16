<?php
        /* Aptech cần quản lý thông tin của học viên gồm các thông tin:
        ten, gioitinh, diem (diem php, html, sql).
        Tao 1 mảng lưu trữ các thông tin trên.
        giả sử chỉ lưu trữ 3 hv, key không được trùng nhau */

        $sv = array(
            "sv1" => array('ten' => 'Hoa', 'gt'=>0, 'diem'=>array('html'=>5,'sql'=>3,'php'=>5)),
            "sv2" => array('ten' => 'Hung', 'gt'=>1, 'diem'=>array(9,7,8)),
            "sv3" => array('ten' => 'Truong', 'gt'=>1, 'diem'=>array(8,4,5))
    
    );
   //In ra thông tin mảng
    echo "<pre>";
    print_r($sv);
    echo "</pre>";

    //lay ten cua sv2;
    echo $sv['sv2']['ten'];

    //lay diem
    echo "<br>Diem sql cua sv1 la:". $sv['sv1']['diem']['sql'] ."<br>";

    //thay doi ten cua sv2 => Thanh
    echo $sv['sv2']['ten'] = "Thanh";

    //Mang sau khi doi ten
    echo "<pre>";
    print_r($sv);
    echo "</pre>";

//kiem tra gt neu gt = 1, hien thi la nam, neu gt = 0 thi hien thi la Nu
//B1: Ktra xem mảng có rỗng không
//Neu muon tinh tong diem su dung ham array_sum()
if (!empty($sv)) {
    foreach($sv as $key => $value){
        $name = $value['ten'];
        $gt = ($value['gt']==1)?"Nam":"Nu";
        $diem = array_sum($value['diem']);
        echo "Tên:" .$name. "- Gioi tinh: ".$gt." Tong diem: ". $diem ."<br>";
    }
}
  ?>