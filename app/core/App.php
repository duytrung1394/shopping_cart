<?php 
	class App
	{
		protected $_controller = "home";
		protected $_method = "index";
		protected $_params = [];
		//getURL
		public function __construct()
		{	
			//get url;
			$url = $this->getURL();
			//check controller exists
		
			if(file_exists("../app/controllers/" .$url[0].".php"))
			{
				$this->_controller = $url[0];
				unset($url[0]);
			}
			
			include_once "../app/controllers/" .$this->_controller.".php";
			//call class
			$this->_controller = new $this->_controller;

			//check method exists
			if(isset($url[1]))
			{
				if(method_exists($this->_controller, $url[1]))
				{
					$this->_method = $url[1];
					unset($url[1]);
				}else{
				header("location:". baseURL ."home/index");
				}
					
			}
			//lấy tham số là một mảng tham số
			$this->_params = $url ? array_values($url): [];
			//gọi method với tham số param
			call_user_func_array([$this->_controller,$this->_method],$this->_params); 
		}
		public function getURL()
		{
			if(isset($_GET['url']))
			{
				return $url = explode("/",rtrim($_GET['url']));
			}
		} 
	}
?>