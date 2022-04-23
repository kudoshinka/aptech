<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 400px;
  }
  </style>
</head>
<body>

<!-- MENU -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="?controller=trangchu"><b>Trang chủ</b></a>
    </li>

  <form class="form-inline ml-sm-4" action="#">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>
	<div class="container">
	
	<div class="container mt-2">
		<!-- Phần hiển thị sản phẩm chính -->
		<div class="row mt-4">
			<h3 class="col-md-12 text-center">Chi tiết sản phẩm</h3>
		
			<div class="col-md-4 mt-5">
				<div class="card">
					<img style="width: 350px; height: 300px;" src="<?php echo $product[0]['Hinhanh'] ?>" class="card-img-top img-thumbnail">
				</div>
			</div>
			<div class="col-md-4 mt-5">
				<h4 class="card-title text-secondary">Danh mục :</h4>
				<h5 class="card-title text-secondary">Tên sản phẩm :<?php echo $product[0]['Tenhang'] ?></h5>
				<p class="card-text">Tồn kho: <?php echo number_format($product[0]['Soluong']) ?></p>
				<p class="card-text">Đơn giá: <?php echo number_format($product[0]['Giahang']) ?>đ</p>
				<p class="card-text">Mô tả: <?php echo $product[0]['Mota'] ?>đ</p>
				<a href="" class="btn btn-success">+Giỏ hàng</a>
			</div>	
		</div>
		
</body>
</html>