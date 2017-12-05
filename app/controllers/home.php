<?php 
/**
* 
*/
class Home extends Controller
{
	
	function index()
	{
		$new = $this->model('M_Product');
		$product = $new->getProduct();
			
		$this->view('index',['product'=>$product]);
	}
}