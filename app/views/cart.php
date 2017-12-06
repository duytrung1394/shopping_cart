<?php $flag = false;?>
<!DOCTYPE html>
<html>
<head>
	<title>Giỏ hàng</title>
	<base href="http://localhost/www/CartMVC/shoppingcart/public/">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mycss.css">
	
	<!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
</head>
<body>
	<div class="container">
		<div id="content">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-8">
				<h3>Giỏ hàng</h3>
				<table class="table table-bordered">
					<tr>
						<th width="100px">Xóa</th>
						<th>Sản phẩm</th>
						<th width="120px">Đơn giá</th>
						<th width="120px">Số lượng</th>
						<th width="120px">Thành tiền</th>
					</tr>
					<?php

					if(isset($_SESSION['cart']))
					{
						foreach ($_SESSION['cart'] as $masp => $soluong) {
							if(isset($masp)){
								$flag = true;
							}else{
								$flag = false;
							}
						}
					}else{
						$flag= false;
					}

					if($flag == false)
					{
						echo "<tr><td colspan='5' style='text-align:center'>Chưa có sản phẩm nào</td></tr>";
					}else{
						$items = $param['items'];
						$tongtien = 0;
						foreach ($items as $item) {		
					?>
					<tr>
						<td><a href="javascript:void(0)" class='del-sanpham' data-masp='<?=$item->masp;?>' >Xóa</a></td>
						<td><?=$item->tensp;?></td>
						<td><?=number_format($item->dongia);?> đ
						</td>
						<td>
							<select class="quantity" data-masp='<?=$item->masp;?>'>
							<?php 
							
							for ($i=1; $i < 100; $i++) {
								 if($_SESSION['cart'][$item->masp]==$i)
								 {
								 	 echo "<option value='".$i."' selected='selected' >".$i."</option>";
								 }
								else{
									 echo "<option value='".$i."' >".$i."</option>";
								}
							} 
								
							?>
							</select>
						</td>
						<td><?php $quantity = $_SESSION['cart'][$item->masp] ;
							 $thanhtien = $quantity*$item->dongia; 
							 echo number_format($thanhtien);?> đ
						</td>
					</tr>
					<?php 
						$tongtien += $thanhtien;
						}
						$_SESSION['tongtien'] =$tongtien;
						
					?>
					<tr>
						<td colspan="4" style="text-align: center;">Tổng tiền</td>
						<td>
							<?=number_format($tongtien);?> đ
						</td>
					</tr>
					<?php		
						}
					?>

				</table>
				<div class="col-xs-6 col-sm-6 col-md-9">
					<a href="index.php">Tiếp tục mua sắm</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Xác nhận và thanh toán</button>
				</div>
				
				
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4">
			</div>
		</div>	
			

				<!-- Large modal -->
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      	<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Thông tin của bạn</h4>
			    	</div>
				    <div class="modal-body">
						<form class="form-horizontal" action="" method="post">
							<div class="form-group">
							   	<label class="col-sm-2 control-label">Họ tên</label>
							   	<div class="col-sm-10">
								    <input type="text" class="form-control" id="inputHoten"  name="inputHoten" placeholder="Họ Tên">
								    <div class="alert alert-warning">
								    <!-- <strong>Warning!</strong> Bạn chưa nhập họ tên -->
								  	</div>
							   	</div>
							   	
							</div>
							<div class="form-group">
							    <label for="inputSodienthoai" class="col-sm-2 control-label">Số điện thoại</label>
							   	<div class="col-sm-10">
							    	<input type="text" class="form-control" id="inputSodienthoai" name="inputSodienthoai" placeholder="Số điện thoại">
								    <div class="alert alert-warning">
								    <!-- <strong>Warning!</strong> Bạn chưa nhập số điện thoại -->
								  	</div>
							   	</div>
							   	
							</div>
							<div class="form-group">
							    <label for="inputDiachi" class="col-sm-2 control-label">Địa chỉ</label>
							   	<div class="col-sm-10">
							    	<textarea class="form-control" id="inputDiachi" name="inputDiachi" rows="4"></textarea>
								    <div class="alert alert-warning">
								    <!-- <strong>Warning!</strong> Bạn chưa nhập địa chỉ -->
								  	</div>
							   	</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default btn-checkout">Thanh toán</button>
									<div class="alert alert-success" id="success"><strong>Success!</strong> Bạn đã thanh toán thành công Nhấp vào <a href="">đây</a> để trở về
									</div>
									<div class="alert alert-warning" id="errors"><strong>Warning!</strong> Có lỗi xảy ra
									</div>
								</div>
								
							</div>
							<div class="col-xs-4 col-sm-4 col-md-12 col-lg-4">
							</div>
						</form>		      
					</div>
			      <!-- <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			    </div> -->
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/cart.js"></script>
	<script type="text/javascript" src="js/del_sanpham.js"></script>
	<script type="text/javascript" src="js/form.js"></script>
	
</div>
</body>
</html>