<?php
//Theo 00P
//Taoj 1 class
class database{
public $conn = null;
public $serverName = 'localhost';
public $userName = 'root';
public $password = '';
public $databaseName = 'pro_banhang';
//Tao phuong thuc khoi tao
public function __construct(){
    //Goi connect
    $this->connect();
}
                      
//Tao 1 phuong thuc ket noi
public function connect(){
    $this->conn = new mysqli($this->serverName, $this->userName, $this->password, $this->databaseName);
    if (!$this->conn) {
        echo "Loi ket noi database";
        exit();
}
else {
    echo "Ket noi thanh cong";
}
}
//Tao phuong thuc lay du lieu

public function get($table, $condition = array()){ 
    //Bước 1: Tạo câu truy vấn SQL
    $sql = "SELECT * FROM $table";
    //Kiem tra xem co dieu kien khong va cộng chuỗi
    if (!empty($condition)) {
        $sql.=" WHERE";
        foreach ($condition as $key => $value) {
           $sql.=" $key = '$value' AND";
        }
        //Cat AND ở cuối câu lệnh sql
        $sql = trim($sql, "AND");
    }
              
    //Chạy câu lệnh SQL
    $query = mysqli_query($this->conn, $sql);
    //Khởi tạo 1 biến mảng để lưu trữ kết quả của bảng muốn lấy dữ liệu
    $result = array();
    if ($query) {
        while ($row = mysqli_fetch_assoc($query)) { 
             $result[] = $row; 
            }
        }
    //Tra ve gia tri
    return $result;
}


    }


?>