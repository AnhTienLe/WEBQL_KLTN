<?php
require 'cauhinh/connection.php'; // Sử dụng file connection

session_start();
if(isset($_SESSION['users_role'])){
    switch ($_SESSION['users_role']) {
        case 'admin':
            header("Location: quantri_admin/quantri.php");
            break;
        case 'truongbomon':
            header("Location: quantri_truongbomon/quantri.php");
            break;
        case 'giangvien':
            header("Location: quantri_giangvien/quantri.php");
            break;
        case 'sinhvien':
            header("Location: quantri_sinhvien/quantri.php");
            break;
    }
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST["username"];
	$password = $_POST["password"];
    // Kiểm tra thông tin đăng nhập
    $query = "SELECT * FROM users WHERE users_username = '$username' AND users_password = '$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);

        // Lưu thông tin người dùng vào session
        $_SESSION['users_username'] = $username;
        $_SESSION['users_role'] = $row['users_role'];

        switch ($row['users_role']) {
           case 'admin':
            header("Location: quantri_admin/quantri.php");
            break;
        case 'truongbomon':
            header("Location: quantri_truongbomon/quantri.php");
            break;
        case 'giangvien':
            header("Location: quantri_giangvien/quantri.php");
            break;
        case 'sinhvien':
            header("Location: quantri_sinhvien/quantri.php");
            break;
        }
        exit();
    } else {
        $_SESSION['error'] = "Invalid username or password";
        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Khóa luận tốt nghiệp & Thực tập doanh nghiệp</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/styles_admin.css">
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/lumino.glyphs.js"></script>
<script src="js/moment.js"></script>

	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#datetimepicker1').datetimepicker({format: 'DD/MM/YYYY'});
		});
	</script>

</head>

<body>
<div class="row">	
	<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
    <h2 align="center">Đăng Nhập</h2>
		<div class="login-panel panel panel-default">
			<div class="panel-heading">QUẢN LÝ KHÓA LUẬN & THỰC TẬP</div>
			<div class="panel-body">
             <?php if(isset($_SESSION['error'])): ?>
             <p style="color: red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
             <?php endif; ?>
				<form action="login.php" method="post" enctype="multipart/form-data">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="Nhập tài khoản" name="username" type="text" autofocus value="">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Nhập mật khẩu" name="password" type="password" value="">
						</div>
						<div class="checkbox hidden">
							<label>
								<input name="remember" type="checkbox" value="Remember Me">Remember Me
							</label>
						</div>
                        <div align="center"><font color="#FF0000">Mời nhập username và password</font>
                        </div>
						<div align="right">
						<label>
						  <input type="submit" name="btn_submit" value="login" class="btn btn-primary">
					  </label>
                      </div>
                    </fieldset>
				</form>
			</div>
		</div>
	</div><!-- /.col-->
</div><!-- /.row -->

<div class="row"><i>
<h5 align="center">Lưu ý: - <b>Mật khẩu mặc định dùng cho đăng nhập lần đầu tiên là 123456<br>
	
</body>

</html>