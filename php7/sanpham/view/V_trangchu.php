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
 
    <li class="nav-item">
      <a class="nav-link" href="?controller=add_product"><b>Thêm Sản Phẩm</b></a>
    </li>
   
  </ul>
  <form class="form-inline ml-sm-4" action="#">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>
	<div class="container">
	
		<!-- Body -->
		<div class="row mt-5">
			<h2 class=" text-center col-md-12 text-primary font-weight-bold ">Danh Sách Sản Phẩm</h2>
		</div>
		<!-- Phần hiển thị sản phẩm -->
		<div class="row">
		<?php foreach ($product as $key => $value) {?>
			<div class="col-md-3 mt-5">
				<div class="card">
					<a href="?controller=chitiet&id=<?php echo $value['Mahang'] ?>"><img style="width: 250px; height: 200px;" src="<?php echo $value['Hinhanh'] ?>" class="card-img-top img-thumbnail"></a>
					<h5 class="card-title text-center text-secondary"><?php echo $value['Tenhang'] ?></h5>
					<p class="card-text">Đơn giá: <?php echo number_format($value['Giahang']) ?>đ</p>
					<p class="card-text">Mô tả: <?php echo $value['Mota'] ?>đ</p>
				
				</div>
			</div>	
		<?php } ?>
		</div>
	</div>
</body>
</html>