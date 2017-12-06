<!DOCTYPE html>
<html>
<head>
	<title>Giỏ hàng</title>
	<base href="http://localhost/www/CartMVC/shoppingcart/public/"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mycss.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div id="content">
		<div class="row">
			<?php 
			$product = $param['product'];
			?>
			<div class="media">
			  <div class="media-left">
			    <a href="#">
			      <img class="media-object" src="upload/product/<?=$product->hinhanh;?>" alt="...">
			    </a>
			  </div>
			  <div class="media-body">
			  	
			    <h4 class="media-heading"><?=$product->tensp;?></h4>
			 	<p>Đơn giá: <?=number_format($product->dongia);?> đ</p>
			 	<div>
			 		<p><a href="add_cart/add/<?=$product->masp;?>" class="btn btn-primary" role="button">Mua hàng</a></p>
			 	</div>
			  </div>
			</div>
			
		</div>
	</div>
	</div>
</body>
</html>