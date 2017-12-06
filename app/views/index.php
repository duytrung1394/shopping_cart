<?php session_start();?>
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
			<div class="row" id="header">

				<div class="col-xs-12 col-md-8">Có <?php if(isset($_SESSION['cart'])) echo count($_SESSION['cart']);?> 
				Sản phẩm trong <a href="cart.php">giỏ hàng</a></div>
				<div class="col-xs-6 col-md-4">
					<a class="btn btn-default" href="" role="button">Link</a>
				</div>

			</div>
			<div class="row">

				<?php 
				$product = $param['product'];
				foreach($product as $pd){

				?>
				 	<div class="col-sm-6 col-md-3">
				    	<div class="thumbnail">
				      		<a href="" ><img src="upload/product/<?=$pd->hinhanh;?>" alt="..."></a>
				     		<div class="caption">
				       		<h3><?=$pd->tensp;?></h3>
							<p><?php echo number_format($pd->dongia);?>
							 <span style="margin-left: 10px">đồng</span></p>
				        	<p><a href="product/detail/<?=$pd->masp;?>" class="btn btn-primary" role="button">Xem</a></p>
				      		</div>
				    	</div>
				  	</div>
					<?php 
					}
				?>
				
			</div>
		</div>
	</div>
</body>
</html>