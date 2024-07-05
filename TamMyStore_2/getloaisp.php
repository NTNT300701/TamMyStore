<?php
	include "connect.php";
	$query = "SELECT * FROM loaisanpham";
	$data = mysqli_query($conn,$query);
	$mangloaisp = array();
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($mangloaisp,new Loaisp(
			$row['id'],
			$row['tenloaisanpham'],		
			$row['hinhanhloaisanpham']));
	}
	echo json_encode($mangloaisp);

	class Loaisp{
		public $id;
		public $tenloaisanpham;
		public $hinhanhloaisanpham;
		public function __construct($id,$tenloaisanpham,$hinhanhloaisanpham){
			$this->id=$id;
			$this->tenloaisanpham=$tenloaisanpham;
			$this->hinhanhloaisanpham=$hinhanhloaisanpham;
		}
	}

?>