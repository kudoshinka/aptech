<?php 
//Theo OOP
//Taoj 1 class
class database{
public $conn = null;
public $serverName = 'localhost';
public $userName = 'root';
public $password = '';
public $databaseName = 'maytinh';
//Taoj phuong thuc khoi tao: 
public function __construct(){
	//Goi connect
	$this->connect();
}//Tao 1 phuong thuc ket noi
public function connect(){
	$this->conn = new mysqli($this->serverName, $this->userName, $this->password, $this->databaseName);
	if (!$this->conn) {
		echo "Loi ket noi database";
		exit();
	}
}
//Tạo phương thức lấy dữ liệu: TỔNG QUÁT
//Lấy DL không có điều kiện
//Lấy dữ liệu theo điều kiện
//Lấy từ bất kì bảng nào
public function get($table, $condition = array()){
	//Bước 1: Tạo câu truy vấn SQL
	$sql = "SELECT * FROM $table";
	//Kiem tra xem co dieu kien khong va cộng chuỗi 
	if (!empty($condition)) {
		$sql.=" WHERE";
		foreach ($condition as $key => $value) {
		   $sql.=" $key = '$value'  AND";
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
	}	//Tra ve gia tri
	return $result;
}
//Xay dung ham lay du lieu theo gioi han

public function get_limit($table, $condition = array(), $limit){
	//Bước 1: Tạo câu truy vấn SQL
	$sql = "SELECT * FROM $table";
	//Kiem tra xem co dieu kien khong va cộng chuỗi 
	if (!empty($condition)) {
		$sql.=" WHERE";
		foreach ($condition as $key => $value) {
		   $sql.=" $key = '$value'  AND";
		}
		//Cat AND ở cuối câu lệnh sql
		$sql = trim($sql, "AND");
	}
	//Cộng chuỗi thêm điều kiện LIMIT
		$sql .= " LIMIT $limit";
	//Chạy câu lệnh SQL
	$query = mysqli_query($this->conn, $sql);
	//Khởi tạo 1 biến mảng để lưu trữ kết quả của bảng muốn lấy dữ liệu
	$result = array();
	if ($query) {
		while ($row = mysqli_fetch_assoc($query)) {
			$result[] = $row;
		}
	}	//Tra ve gia tri
	return $result;
}

		//hàm thêm dữ liệu vào Bảng
		public function insert($table,$data=array())
		{
			//Bước 1:Lấy giá trị của key cho vòa 1 mảng
			$keys = array_keys($data);
			//Bước 2: xử lí chuỗi với mảng ở trên
			$fields =  implode(",", $keys);

			//Bước 3: xử lí giá trị value
			$value_str ='';
			foreach ($data as $key => $value) {
				$value_str .="'$value',"; 
			}
			//Bước 4: xóa dấu phẩy ở cuối đi
			$value_str = trim($value_str, ",");
			//Bước 5: Lên cấu trúc câu lệnh sql
			$sql = "INSERT INTO $table ($fields) VALUES ($value_str)";
			//Bước 6: Chạy câu lệnh sql
			$query = mysqli_query($this->conn,$sql);
			//Bước 7: Trả về giá trị boolean true/false
			return $query;
		}

		//Hàm update dữ liệu vào 1 bảng theo điều kiện
		public function update($table,$data=array(),$condition=array())
		{	
			//Bước 1: Xử lí chuỗi giá trị
			$str = '';
			foreach ($data as $key => $value) {
				$str .="$key = '$value',"; 
			}
			//Bước 2: Xóa dấu phẩy ở cuối
			$str = trim($str,",");
			//Bước 3: Viết cấu trúc câu lênh sql
			$sql = "UPDATE $table SET $str WHERE ";
			foreach ($condition as $key => $value) {
				$sql.= "$key = '$value' AND";
			}
			$sql = trim($sql,'AND');
			//Bước 4: chạy câu lệnh sql
			$query = mysqli_query($this->conn,$sql);
			//Bước 5: trả về giá trị boolean true/false
			return $query;
		}

		//hàm xóa dữ liệu
		public function delete($table,$condition=array())
		{
			//Bước 1: lên cấu trúc câu lệnh sql
			$sql = " DELETE FROM $table WHERE ";
			//Bước 2: Cộng chuỗi theo điều kiện
			foreach ($condition as $key => $value) {
				$sql.= "$key = '$value' AND";
			}
			$sql = trim($sql,'AND');
			//Bước 3: Chạy câu lệnh sql
			$query = mysqli_query($this->conn,$sql);
			//Bước 4: Trả về giá trị boolean
			return $query;
		}

}


 ?>