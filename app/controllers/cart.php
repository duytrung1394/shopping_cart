<?php session_start();
	class Cart extends Controller
	{
		public function chitiet()
		{	
			$arr= null;
			if(isset($_SESSION['cart'])){
				foreach($_SESSION['cart'] as $key => $value){
				$arr[] = $key;
				}
			}
			
			// var_dump($arr);
			//get product info
			$cart = $this->model('M_cart');
			$items = $cart->getInfoProduct($arr);

			$this->view('cart',['items'=>$items]);
		}
		public function xulyQuantity()
		{
			$masp = $_POST['masp'];
			$soluong = $_POST['soluong'];

			$_SESSION['cart'][$masp]= $soluong;

		}
		public function del_sanpham()
		{
			$masp = $_POST['masp'];
			unset($_SESSION['cart'][$masp]);
		}
		public function formHoadon()
		{
			
		}
	}
?>