<?php 
//Lay id san pham tu URL
$id = $_GET['id'];
//Lay san pham tu bang produc theo id vua lay duoc
$product = $db->get('product', array('id'=>$id));
//Bat dau xu li SESSION gio hang
//Kiem tra SESSION['cart'] / kiem tra xem gio hang da ton tai mat hang nao chua?
if (isset($_SESSION['cart3'])) {
	//Neu da ton tai SS Cart/gio hang roi thi kiem tra xem san pham do da ton tai trong gio hang chua?
	if (isset($_SESSION['cart3'][$id])) {
		$_SESSION['cart3'][$id]['sl']+=1;
	}
	//Neu san pham do chua ton tai tron giohang thi them du lieu san pham can mua vao gio hang
	else{
		$_SESSION['cart3'][$id]['id']=$product[0]['id'];
		$_SESSION['cart3'][$id]['sl']=1;
		$_SESSION['cart3'][$id]['img_link']=$product[0]['img_link'];
		$_SESSION['cart3'][$id]['name']=$product[0]['name'];
		$_SESSION['cart3'][$id]['price']=$product[0]['price'];
	}
} else{
//Neu chua co san pham nao trong gio hang thi tao SESSION['cart'] va them du lieu cua san pham can mua vao gio hang
		$_SESSION['cart3'][$id]['id']=$product[0]['id'];
		$_SESSION['cart3'][$id]['sl']=1;
		$_SESSION['cart3'][$id]['img_link']=$product[0]['img_link'];
		$_SESSION['cart3'][$id]['name']=$product[0]['name'];
		$_SESSION['cart3'][$id]['price']=$product[0]['price'];
}
//Sau khi xu li xong thi tro ve trang chu
	header('location: ?controller=trangchu');

 ?>