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
	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/banner/1.jpg" alt="Điện thoại thông minh" width="1100" height="500">
      <div class="carousel-caption">
        <h3>OPPO</h3>
        <p>Điện thoại thông minh</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../img/banner/2.jpg" alt="Điện thoại thông minh" width="1100" height="500">
      <div class="carousel-caption">
        <h3>SAMSUNG</h3>
        <p>Điện thoại thông minh</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../img/banner/2.jpg" alt="Điện thoại thông minh" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Iphone</h3>
        <p>Điện thoại thông minh</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- MENU -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="?controller=trangchu"><b>Trang chủ</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><b>Sản phẩm</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><b>Giới thiệu</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><b>Liên hệ</b></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="?controller=giohang"><b>Giỏ hàng</b></a>
    </li>
  </ul>
  <form class="form-inline ml-sm-4" action="#">
    <input class="form-control mr-sm-2" name="keyword" type="text" placeholder="Search" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : ""  ?>">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>
	<div class="container">
	
		<!-- Body -->
		<div class="row mt-5">
			<h2 class="text-center col-md-12">Hiển thị sản phẩm</h2>
		</div>
		<!-- Phần hiển thị sản phẩm -->
		<div class="row">
		<?php foreach ($product as $key => $value) {?>
			<div class="col-md-3 mt-5">
				<div class="card">
					<a href=""><img style="width: 250px; height: 200px;" src="<?php echo $value['img_link'] ?>" class="card-img-top img-thumbnail"></a>
					<h5 class="card-title text-center text-secondary"><?php echo $value['name'] ?></h5>
					<p class="card-text">Đơn giá: <?php echo number_format($value['price']) ?>đ</p>
					<p class="card-text">Mô tả: <?php echo $value['content'] ?>đ</p>
					<a href="?controller=add_giohang&id=<?php echo $value['id'] ?>" class="btn btn-success">+Giỏ hàng</a>
				</div>
			</div>	
		<?php } ?>
		</div>
	</div>
</body>
</html>