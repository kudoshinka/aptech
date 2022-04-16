<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
		<?php 
		//gọi file connection
		include ('connection.php');
		//Lấy database ra:
		$sql = "SELECT * FROM product";
		$product = mysqli_query($conn, $sql);
			// print_r($product);
	 ?>
<!-- Container-->
<div id="container">
	<!-- Banner-->
	<div id="banner">
		<img src="../img/banner/1.jpg" style="height: 400px; width: 100%">
	</div> <!-- Ket thuc banner-->
	<!-- Products-->
	<div id="products">
			<?php 
				while($row = mysqli_fetch_array($product)){
			 ?>
		<div id="product"> 	<!-- Product-->
			
			<img src="<?=$row['img_link'] ?>"><br>
			<strong class="detail"><?=$row['name'] ?></strong>
			<p class="detail1"><strong>Giá:</strong><span style="color: red"><?=$row['price'] ?></span></p>
			<p class="detail2"><?=$row['content'] ?></p>
			<a href="#">Add to cart</a><br>
			<hr>
		</div> 	<!-- Ket thuc Product-->
	<?php } ?>
	</div><!-- Ket thuc products-->
</div>
<!-- Ket thuc Container-->
</body>
</html>