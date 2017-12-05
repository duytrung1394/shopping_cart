<?php 
	include_once "database.php";

	class M_Cart extends database 
	{
		public function getInfoProduct($param = array())
		{	
			$string = "";
	
			if($param)
			{
				for($i=1;$i<=count($param);$i++){
				$arr[] = "?";
				}
				$string = implode(",",$arr);
			}
			//get data sanpham with masp in $param;
			$sql = "SELECT * FROM sanpham WHERE masp in ($string)";
			$this->setQuery($sql);
			$result = $this->loadAllRows($param);
			return $result;
		}
		
	}