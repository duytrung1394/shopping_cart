<?php 
	class Product extends Controller
 	{
		public function index(){
			header('location:'.baseURL);
		}
		public function detail($id = null)
		{	
			if(!empty($id)){
				$products = $this->model('M_Product'); 			
				$product = $products->getProductbyId($id);
				
				$this->view('detail',['product'=>$product]);
			}else{
				echo "sản phẩm không tồn tại";
			}
			
		}
	}
?>