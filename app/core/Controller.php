<?php 
	/**
	* 
	*/
	class Controller
	{
		
		public function model($model)
		{
			include "../app/models/" . $model . ".php";
			return new $model;
		}
		public function view($view , $param= [])
		{
			include "../app/views/" . $view . ".php";
		}
	}
?>