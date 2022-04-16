<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 
//Cần xây dựng 1 mảng chứa danh sách các câu hỏi, 
//và danh sách các câu trả lời. đểm mỗi câu trả lời dùng vòng lặp foreach
 Đẻ xây dựng được 1 mảng như vậy ta phải xây dựng 1 cấu trúc như thế này
 
<div class="content">
	<h1>Trắc nghiệm tính cách</h1>
	<form action="result.php" method="post">
		<div class="question">
			<p>
			//id, chính là question id, đối với câu hỏi 1, câu hỏi 2 ta biến i,
			mỗi vòng lặp i tăng lên 1,
				<span>Câu hỏi 1: </span> Bạn cảm thấy dễ chịu nhất khi nào?
			</p>
			<ul>
			//Danh sách các câu trả lời nó nằm trong mảng sentences
			ta thực hiện tuần tự để giải quyết vấn đề này
			Ta tạo ra 1 phần xử lý đọc danh sách các câu hỏi từ file question
				<li><label><input type="radio" name="11" value="2">Vào buổi sáng</label></li>
				<li><label><input type="radio" name="11" value="4">Vào buổi chiều</label></li>
				<li><label><input type="radio" name="11" value="6">Vào đêm muộn</label></li>
			</ul>
		</div>
			<div class="question">
			<p>
				<span>Câu hỏi 2: </span> Bạn từng bước đi
			</p>
			<ul>
				<li><label><input type="radio" name="11" value="2">Khá nhanh với bước chân</label></li>
				<li><label><input type="radio" name="11" value="4">Khá nhanh với bước chân nhỏ/label></li>
				<li><label><input type="radio" name="11" value="6">Không nhanh lắm</label></li>
				<li><label><input type="radio" name="11" value="6">Rất chậm</label></li>
			</ul>
		</div>
		<input type="submit" value="Kiểm tra" name="submit"></input>
	</form>
</div>
</body>
</html>