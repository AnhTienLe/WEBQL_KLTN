<?php
require './cauhinh/connection.php'; // Sử dụng file config

session_start();
if(!isset($_SESSION['users_role']) || $_SESSION['users_role'] != 'sinhvien'){
    header("Location: login.php");
    exit();
}
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome sinh viên</title>
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

</head>

<body vlink="#D6D6D6">
	
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
            <a class="navbar-brand text-hide" href="#">User</a>            
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<ul class="user-menu">
					<li class="dropdown pull-right">                      
					  <a href="" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><span style="color: white;"> <?php if(isset($_SESSION['users_username'])):?>Xin chào, <?php echo $_SESSION['users_username']; ?></span></a><a href="" class="dropdown-toggle" data-toggle="dropdown"><span style="color: white;"><?php endif; ?></span> </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="quantri.php?page_layout=thongtin&email=<?php echo $_SESSION['users_usename'];?>&pass=<?php echo $_SESSION['users_password'];?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Thông tin thành viên</a></li>
                                <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Cài đặt</a></li>
                                <li><a href="./chucnang/logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
                            </ul> 
                    </li>
			  </ul>
		  </div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar" style="z-index:9999;">
		
		<ul class="nav menu">			
			<li class="parent ">
				<a href="">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down">
					<use xlink:href="#stroked-chevron-down"></use></svg></span> 
					Sinh viên
				</a>
                <ul class="children collapse in" id="sub-item-1">
							<li>						
								<a href="control/?task=WVhGRFl3PT0=" class="">
									<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> 
									Đăng ký đề tài (đồ án)
								</a>
							</li>	
							<li>						
								<a href="control/?task=WVhGRFpnPT0=" class="">
									<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> 
									Đăng ký công ty thực tập
								</a>
							</li>
							<li>						
								<a href="control/?task=WVhGRFlRPT0=" class="">
									<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> 
									Kết quả chấm từ GVHD
								</a>
							</li>		
							 <li>						
								<a href="control/?task=WVhGRFlnPT0=" class="">
									<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> 
									Xem ghi chú từ GVHD
								</a>								
							</li>
							<li>						
								<a href="control/?task=WVhGRFpRPT0=" class="">
									<svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg> 
									Xem lịch sử làm K.luận
								</a>								
							</li></ul>				
			</li>
            <li class="parent ">
				<a href="">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down">
					<use xlink:href="#stroked-chevron-down"></use></svg></span> 
					Hệ thống
                </a>
                    <ul class="children collapse in" id="sub-item-1">
                    <li><a href="control/?task=WVhGRFdnPT0="><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Đổi mật khẩu</a></li>
                    <li><a href="control/?task=WVhGRFpBPT0="><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>
                     Cập nhật ĐT - email</a></li>
					<li><a href="./chucnang/logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>				
                </ul>                
            </li>   				
            <li role="presentation" class="divider"></li>    
            <li><div class="alert alert-danger"><strong>Thông báo: </strong>Sinh viên nhanh chóng chọn để tài thực hiện khóa luận và đăng ký công ty thực tập.</div></li>            
		</ul>
	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
            <?php  
                //master page
                if(isset($_GET['page_layout'])){
                    switch ($_GET['page_layout']) {
                        case 'Danhsach_TK':include_once'./chucnang/QL_TK/danhsach_TK.php';
                            break;
						case 'Them_TK':include_once'./chucnang/QL_TK/Them_TK.php';
                            break;
                        case 'Sua_TK':include_once'./chucnang/QL_TK/Sua_TK.php';
                            break;
						case 'Xoa_TK':include_once'./chucnang/QL_TK/Xoa_TK.php';
                            break;
                        case 'ThongTin_TK':include_once'./chucnang/QL_TK/ThongTin_TK.php';
                            break;

					 default:include_once'./quantri.php';
                    }
                }
                else{
                    include_once'./quantri.php';
                }
            ?>
        </div>	<!--/.main-->

	 
	
    
    <script src="../assets/js/jquery-1.11.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/moment.js"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
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
	
</body>

</html>
<?php ob_end_flush(); 