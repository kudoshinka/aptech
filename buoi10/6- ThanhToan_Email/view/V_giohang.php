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
  .gh{
  	margin-left: 500px;
  	position: relative;
  	margin-top: -20px;
  
  }
  ttt{
  	text-align: right;
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
  </ul>
  <form class="form-inline ml-sm-4" action="#">
    <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
  <li class="nav-item">
      <a class="nav-link gh" href="?controller=giohang"><b>Giỏ hàng</b></a>
    </li>
</nav>
	<div class="container-fluid mt-5 ">
		
		<div class="row mt-5" id="table">
			<div class="col-md-8">
				<div class="row">
					<table class="table table-striped">
					<thead>
					    <tr>
					      <th scope="col">Ảnh</th>
					      <th scope="col">Tên sản phẩm</th>
					      <th scope="col">Đơn giá</th>
					      <th scope="col">Số lượng</th>
					      <th scope="col">Tổng cộng</th>
					      <th scope="col">Thao tác</th>
					    </tr>
					</thead>
					<tbody>
					<?php 	
						$amount =0;
						if (isset($_SESSION['cart'])) {
						foreach ($_SESSION['cart'] as $key => $value) {
						$amount += $value['sl']*$value['price'];
					?>
						<tr>
							<th><img width="50" height="50" src="<?php echo $value['img_link'] ?>"></th>
							<th><?php echo $value['name'] ?></th>
							<th><?php echo $value['price'] ?></th>
							<th><?php echo $value['sl'] ?></th>
							<th><?php echo $value['sl']*$value['price'] ?></th>
							<th>
								<a href="?controller=xuli_cart&method=prev&id=<?php echo $value['id'] ?>" class="btn btn-secondary">-</a>
								<a href="?controller=xuli_cart&method=next&id=<?php echo $value['id'] ?>"  class="btn btn-success">+</a>
								<a href="?controller=xuli_cart&method=del&id=<?php echo $value['id'] ?>"  class="btn btn-danger">Xóa</a>
							</th>
						</tr>	
					<?php } }else{?>
						<h4 class="text text-danger">giỏ hàng rỗng</h4>
					<?php } ?>						
					</tbody>
					</table>
				</div>
			</div>
		<div class="col-md-4">
				<div class="row border-bottom">
					<h6 class="col-md-6">Tiền hàng :</h6>
					<p class="col-md-4 text-info text-right"><b><?php echo number_format($amount) ?></b></p>
				</div>
				<div class="row border-bottom">
					<h6 class="col-md-6">Thuế 10% :</h6>
					<p class="col-md-4 text-info text-right"><b><?php echo number_format(($amount*0.1)) ?></b></p>
				</div>
				<hr>
				<div class="row border-bottom">
					<h6 class="col-md-6">TỔNG TIỀN :</h6>
					<p class="col-md-4 text-info text-danger text-right"><b><?php echo number_format($amount + ($amount*0.1)) ?></b></p>
				</div>
				<div class="row mt-2">
					<a href="?controller=thanh_toan" class="col-md-5 m-auto btn btn-success">
						Thanh toán
					</a>
				</div>
			</div>
	</div>
		</div>
			
</body>
</html>