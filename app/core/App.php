<?php 
	class App
	{
		protected $_controller = null;
		protected $_method = null;
		protected $_params = [];
		//getURL
		public function __construct()
		{	
			//get url;
			$this->getURL();
			//check controller exists
			if(!$this->_controller){

				include_once "../app/controllers/home.php";
				$home = new Home;
				$home->index();

			}elseif(file_exists("../app/controllers/" .$this->_controller.".php")){
				// check for controller: does such a controller exist ?

				include_once "../app/controllers/" .$this->_controller.".php";
				//call class
				$this->_controller = new $this->_controller;
			
				// check for method: does such a method exist in the controller ?
				if(method_exists($this->_controller, $this->_method))
				{
					if (!empty($this->_params)) {
					// Call the method and pass arguments to it
						call_user_func_array([$this->_controller,$this->_method],$this->_params); 	
					}else{
						$this->_controller->{$this->_method}();
					}	

				}else{
					if(strlen($this->_method) == 0){
						$this->_controller->index();
					}else{
						header('location:'.baseURL);
					}	
				}
			}else{
				include_once "../app/controllers/notfound.php";
				$notfound = new NotFound;
				$notfound->index();
			}	
		}
		public function getURL()
		{
			if(isset($_GET['url']))
			{
				$url = explode("/",rtrim($_GET['url']));
			
				$this->_controller = isset($url[0]) ? $url[0] : null;

				$this->_method = isset($url[1]) ? $url[1] : null;

				unset($url[0], $url[1]);

				$this->_params = $url ? array_values($url): [];
			}
		} 
	}
?>