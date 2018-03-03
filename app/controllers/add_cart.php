<?php session_start();
	class Add_cart extends Controller
	{
		public function add($masp)
		{	
			//if masp is exists, then unit = session[cart]['masp']
			if(isset($_SESSION['cart'][$masp]))
			{
				$soluong = $_SESSION['cart'][$masp]+1;
			}else{
				$soluong = 1;
			}
			$_SESSION['cart'][$masp] = $soluong;
			header("location:". baseURL ."cart");
			exit();
		}
	}

?>