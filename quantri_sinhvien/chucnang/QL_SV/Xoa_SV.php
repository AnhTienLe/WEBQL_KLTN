<?php  
$server_username = "admin"; // thông tin đăng nhập host
$server_password = "123456"; // mật khẩu, trong trường hợp này là trống
$server_host = "localhost"; // host là localhost
$database = 'db_kltn'; // database là website

// Tạo kết nối đến database dùng mysqli_connect()
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
// Thiết lập kết nối ủa chúng ta khi truy vấn là dạng UTF8 trong trường hợp dữ liệu là tiếng việt có dâu
mysqli_query($conn,"SET NAMES 'UTF8'");
	session_start();
	if($_SESSION['users_role']=='admin'){
		$Sv_id=$_GET['Sv_id'];
		include_once'../cauhinh/connection.php';
		$sql = "DELETE FROM sinhvien WHERE Sv_id='$Sv_id'";
		$query=mysqli_query($conn,$sql);
		header('location: ../../quantri.php?page_layout=Danhsach_SV');
	}else{
		header('location: ../../login.php');
	}
?>