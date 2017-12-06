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
		public function checkout($hoten, $sdt, $diachi,$totalprice)
		{
			$sql = "INSERT INTO hoadon(ngay,hoten,sodienthoai,diachi,tongtien) VALUES(?,?,?,?,?)";
			$this->setQuery($sql);
			$ngay = date("Y-m-d H:i:s");
			$param = array($ngay,$hoten,$sdt,$diachi,$totalprice);
			if($this->execute($param)){
				$sql2 = "SELECT max(mahd) as maxhd FROM hoadon";
				$this->setQuery($sql2);
				return $this->loadRow();
			}
		}
		// public function maxMaHoaDon()
		// {
			
		// }

		public function addChitiethoadon($mahd,$masp,$soluong)
		{
			$sql = "INSERT INTO chitiet_hoadon(mahd,masp,soluong) VALUES(?,?,?)";
			$this->setQuery($sql);
			$param = array($mahd,$masp,$soluong);
			$this->execute($param);
		}
	}