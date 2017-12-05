<?php 
	include_once "database.php";
	class M_Product extends database
	{
		public function getProduct()
		{
			$sql = "select * from sanpham";
			$this->setQuery($sql);
			$result = $this->loadAllRows();
			return $result;
		}
		public function getProductbyId($id)
		{
			$sql = "select * from sanpham where masp= ?";
			$this->setQuery($sql);
			$param = array($id);
			$result = $this->loadRow($param);
			return $result;
		}
	}
?>