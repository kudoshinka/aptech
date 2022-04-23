<!DOCTYPE html>
<html>
<head>
	<title>trangchu</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		
		<div class="row mt-5">
		
			<div class="col-md-9">
				<div class="row">
					<h3 class="text-center col-md-12 font-weight-bold">Thêm Sản Phẩm</h3>
				</div>
				<form action="?controller=add_product" method="post" enctype="multipart/form-data">
					<div class="row mt-5">
						<h5 class="text col-md-2">Mã hàng</h5>
						<input type="text" name="id" class="form-control col-md-6" value="<?php echo (isset($id))?$id:'' ?>">
					</div>
					<div class="row mt-1">
					<?php if (isset($error['Mahang'])) {?>
						<p class="text-danger"><?php echo $error['Mahang'] ?></p>			
					<?php } ?>
					</div>
					<div class="row mt-5">
						<h5 class="text col-md-2">Tên sản phẩm</h5>
						<input type="text" name="name" class="form-control col-md-6" value="<?php echo (isset($name))?$name:'' ?>">
					</div>
					<div class="row mt-1">
					<?php if (isset($error['name'])) {?>
						<p class="text-danger"><?php echo $error['Tenhang'] ?></p>			
					<?php } ?>
					</div>
					<div class="row mt-5">
						<h5 class="text col-md-2">Đơn giá</h5>
						<input type="text" name="price" class="form-control col-md-6" value="<?php echo (isset($price))?$price:'' ?>">
					</div>
					<div class="row mt-1">
					<?php if (isset($error['price'])) {?>
						<p class="text-danger"><?php echo $error['Giahang'] ?></p>			
					<?php } ?>
					</div>
					<div class="row mt-5">
						<h5 class="text col-md-2">Số lượng</h5>
						<input type="text" name="amount" class="form-control col-md-6" value="<?php echo (isset($amount))?$amount:'' ?>">
					</div>
					<div class="row mt-1">
					<?php if (isset($error['amount'])) {?>
						<p class="text-danger"><?php echo $error['Soluong'] ?></p>			
					<?php } ?>
					</div>
					<div class="row mt-5">
						<h5 class="text col-md-2">Mô tả ngắn</h5>
						<input type="text" name="content" class="form-control col-md-6" value="<?php echo (isset($content))?$content:'' ?>">
					</div>
					<div class="row mt-1">
					<?php if (isset($error['content'])) {?>
						<p class="text-danger"><?php echo $error['Mota'] ?></p>			
					<?php } ?>
					</div>
					
					<div class="row mt-5">
						<h5 class="text col-md-2">Ảnh mô tả</h5>
						<input type="file" name="img_link" class="form-control-file col-md-6">
					</div>
					<div class="row mt-1">
					<?php if (isset($error['img_link'])) {?>
						<p class="text-danger"><?php echo $error['Hinhanh'] ?></p>			
					<?php } ?>
					</div>
					<div class="row mt-5">
						<button type="submit" class="col-md-3 btn  m-auto" name="btn_create">Thêm sản phẩm</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>