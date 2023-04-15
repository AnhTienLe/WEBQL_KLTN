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
if (isset($_GET['users_id'])) {
    $users_id = $_GET['users_id'];
} else {
    header('location: quantri.php?page_layout=Danhsach_TK');
    exit;
}

// Truy vấn CSDL để lấy thông tin tài khoản
$sql = "SELECT * FROM users WHERE users_id = $users_id";
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
	<h1><center>Thông tin tài khoản </center></h1>
	<p><strong>Tên đăng nhập:</strong> <?php echo $row['users_username']; ?></p>
    <p><strong>Mật khẩu:</strong> <?php echo $row['users_password']; ?></p>
    <p><strong>Ngày tạo:</strong> <?php echo $row['users_createdate']; ?></p>
	<p><strong>Quyền hạn:</strong> <?php echo $row['users_role']; ?></p>
    <br>
    <button class="quaylai" type="submit" ><a href="quantri.php?page_layout=Danhsach_TK">Quay lại danh sách tài khoản</a></button>
</body>
</html>
