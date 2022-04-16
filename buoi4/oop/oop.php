<?php
//Tạo class
class sinhVien{
    //tiền tố: public, protected, private (only me)
    public $masv;
    public $ten;
    public $gioitinh;
//Phuong thuc khoi tao;
   function __construct($masv, $ten, $gioitinh){
        $this->masv = $masv;         
        $this->ten = $ten;
        $this->gioitinh = $gioitinh;
    }

    //Method: phương thức
    //Phương thức hiển thị:
    //public function setGiatri($masv,$ten, $gioitinh)
    public function hienthi(){
        echo "Ma sv: ".$this->masv."<br>Ho ten: ".$this->ten. "<br>gioi tinh: ".$this->gioitinh;
    }
}
///Khởi tạo đối tượng
$sv = new sinhVien('sv01','Nguyen Van A','Nam');
//Gọi phương thức hiển thị
$sv->hienthi();
                            
 ?>