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
			$cart = $this->model('M_Cart');
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

		public function thanhtoan()
		{
			$hoten 	= 	$_POST['hoten'];
			$sdt 	= 	$_POST['sdt'];
			$diachi =	$_POST['diachi'];
			$totalprice = $_SESSION['tongtien'];

			$cart = $this->model('M_Cart');

			if($cart->checkout($hoten,$sdt,$diachi,$totalprice))
			{	//neu them hoa don thanh cong thi them chi tiet hoa don
				$max = $cart->maxMaHoaDon();
				$maxMhd = $max->maxhd;
				foreach($_SESSION['cart'] as $masp => $soluong)
				{
					$cart->addChitiethoadon($maxMhd,$masp,$soluong);
				}
				session_destroy();
				echo "true";
			}else{
				echo "false";
			}

		}
	}
?>