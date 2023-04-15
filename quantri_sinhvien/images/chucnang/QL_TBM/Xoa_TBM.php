<?php  
	session_start();
	if($_SESSION['email']=='buixuanque8297@gmail.com' && $_SESSION['pass']=='12345'){
		$id_thanhvien=$_GET['id_thanhvien'];
		include_once'../../ketnoi.php';
		$sql = "DELETE FROM thanhvien WHERE id_thanhvien='$id_thanhvien'";
		$query=mysqli_query($conn,$sql);
		header('location: ../../quantri.php?page_layout=quanlytv');
	}else{
		header('location: ../../index.php');
	}
?>