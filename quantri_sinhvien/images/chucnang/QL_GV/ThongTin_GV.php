<?php
// Kết nối CSDL và khởi động session
$server_username = "admin"; // thông tin đăng nhập host
$server_password = "123456"; // mật khẩu, trong trường hợp này là trống
$server_host = "localhost"; // host là localhost
$database = 'db_kltn'; // database là website

// Tạo kết nối đến database dùng mysqli_connect()
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
// Thiết lập kết nối ủa chúng ta khi truy vấn là dạng UTF8 trong trường hợp dữ liệu là tiếng việt có dâu



// Lấy users_id từ URL
if (isset($_GET['Gv_id'])) {
    $Gv_id = $_GET['Gv_id'];
} else {
    header('location: quantri.php?page_layout=Danhsach_Gv');
    exit;
}

// Truy vấn CSDL để lấy thông tin tài khoản
$sql = "SELECT * FROM giangvien INNER JOIN chuyennganh ON giangvien.CN_machuyennganh = chuyennganh.CN_machuyennganh INNER JOIN khoa 
ON chuyennganh.Khoa_makhoa = khoa.Khoa_makhoa WHERE Gv_id = '$Gv_id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

// Hiển thị thông tin tài khoản
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông tin tài khoản</title>
    <style>
         
    </style>
</head>
<body>
	<h1><center>Thông tin giảng viên </center></h1>

	<p><strong>Tên giảng viên:</strong> <?php echo $row['Gv_hoten']; ?></p>
    <p><strong>SĐT:</strong> <?php echo $row['Gv_sdt']; ?></p>
    <p><strong>Email:</strong> <?php echo $row['Gv_email']; ?></p>
	<p><strong>Giới tính:</strong> <?php echo $row['Gv_gioitinh']; ?></p>
    <p><strong>Ngày sinh:</strong> <?php echo $row['Gv_ngaysinh']; ?></p>
    <p><strong>Địa chỉ:</strong> <?php echo $row['Gv_diachi']; ?></p>
    <p><strong>Chuyên ngành:</strong> <?php echo $row['CN_tenchuyennganh']; ?></p>
	<p><strong>Khoa:</strong> <?php echo $row['Khoa_tenkhoa']; ?></p>

    <br>
    <button class="quaylai" type="submit" ><a href="quantri.php?page_layout=Danhsach_GV">Quay lại danh sách tài khoản</a></button>
</body>
</html>
