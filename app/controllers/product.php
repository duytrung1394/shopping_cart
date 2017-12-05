<?php 
	class Product extends Controller
 	{
		
		public function detail($id)
		{
			$products = $this->model('M_Product'); 			
			$product = $products->getProductbyId($id);
			
			$this->view('detail',['product'=>$product]);
		}
	}
?>