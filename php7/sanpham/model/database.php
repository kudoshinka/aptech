<?php 

class database{
public $conn = null;
public $serverName = 'localhost';
public $userName = 'root';
public $password = '';
public $databaseName = 'maytinh';
 
public function __construct(){

	$this->connect();
}
public function connect(){
	$this->conn = new mysqli($this->serverName, $this->userName, $this->password, $this->databaseName);
	if (!$this->conn) {
		echo "Loi ket noi database";
		exit();
	}
}

public function get($table, $condition = array()){
	
	$sql = "SELECT * FROM $table";
	
	if (!empty($condition)) {
		$sql.=" WHERE";
		foreach ($condition as $key => $value) {
		   $sql.=" $key = '$value'  AND";
		}
		
		$sql = trim($sql, "AND");
	}

	$query = mysqli_query($this->conn, $sql);

	$result = array();
	if ($query) {
		while ($row = mysqli_fetch_assoc($query)) {
			$result[] = $row;
		}
	}	
	return $result;
}


public function get_limit($table, $condition = array(), $limit){
	
	$sql = "SELECT * FROM $table";

	if (!empty($condition)) {
		$sql.=" WHERE";
		foreach ($condition as $key => $value) {
		   $sql.=" $key = '$value'  AND";
		}

		$sql = trim($sql, "AND");
	}

		$sql .= " LIMIT $limit";
	
	$query = mysqli_query($this->conn, $sql);

	$result = array();
	if ($query) {
		while ($row = mysqli_fetch_assoc($query)) {
			$result[] = $row;
		}
	}	
	return $result;
}

		
		public function insert($table,$data=array())
		{
		
			$keys = array_keys($data);
		
			$fields =  implode(",", $keys);

		
			$value_str ='';
			foreach ($data as $key => $value) {
				$value_str .="'$value',"; 
			}
			
			$value_str = trim($value_str, ",");
		
			$sql = "INSERT INTO $table ($fields) VALUES ($value_str)";
			
			$query = mysqli_query($this->conn,$sql);
		
			return $query;
		}

	
		public function update($table,$data=array(),$condition=array())
		{	
		
			$str = '';
			foreach ($data as $key => $value) {
				$str .="$key = '$value',"; 
			}
			
			$str = trim($str,",");
		
			$sql = "UPDATE $table SET $str WHERE ";
			foreach ($condition as $key => $value) {
				$sql.= "$key = '$value' AND";
			}
			$sql = trim($sql,'AND');
			
			$query = mysqli_query($this->conn,$sql);
			
			return $query;
		}

	
		public function delete($table,$condition=array())
		{
		
			$sql = " DELETE FROM $table WHERE ";
		
			foreach ($condition as $key => $value) {
				$sql.= "$key = '$value' AND";
			}
			$sql = trim($sql,'AND');
			
			$query = mysqli_query($this->conn,$sql);
			
			return $query;
		}

}


 ?>