<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css">
<title>Trắc nghiệm tính cách</title>
</head>
<body>
<?php
	// Đọc file question, lấy id và cộng theo id để
//	tính tổng điểm
	$data = file("question.txt") or die("Cannot read file");
	//Tạo 1 biến để tính tổng số điểm
	$point = 0;
//Xoá bỏ phần tử đầu tiên trong file $data.
	array_shift($data);
	
	//Duyệt qua mảng $data
	
	foreach($data as $key => $value){
	//Tách chuỗi
		$tmp = explode("|",$value);
		//id chính là tmp[0]
		$id	= $tmp[0];
		// point sẽ được tính như sau:
		$point = $point + $_POST[$id];
	}
	
	// Đọc file result
	$data = file("result.txt") or die("Cannot read file");
	array_shift($data);
	
	foreach($data as $key => $value){
		$tmp 	= explode("|",$value);
		
		$min		= $tmp[0];
		$max		= $tmp[1];
		$content	= $tmp[2];
		if($point >= $min && $point <= $max) {
			$result = $content;
			break;
		}
	}
	
?>
	<div class="content">
		<h1>Kết quả trắc nghiệm tính cách</h1>
		<p>
			<b> Tổng số điểm của bạn là: </b><?php echo $point;?></p>
			<p style='margin-top: 10px; text-align:justify'><?php echo $result;?>
	</div>
</body>
</html>

