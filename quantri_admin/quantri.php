<?php
require './cauhinh/connection.php'; // Sử dụng file config

session_start();
if(!isset($_SESSION['users_role']) || $_SESSION['users_role'] != 'admin'){
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
  <title>Welcome Admin</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-table.css" rel="stylesheet">
  <link href="css/styles_admin.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <script src="js/lumino.glyphs.js"></script>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
 </head>

<body>
	
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
            <a class="navbar-brand text-hide" href="quantri.php">User</a>            
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<ul class="user-menu">
					<li class="dropdown pull-right">                      
					  <a href="" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                        <use xlink:href="#stroked-male-user"></use></svg><span style="color: white;"> 
                        <?php if(isset($_SESSION['users_username'])):?>Xin chào, <?php echo $_SESSION['users_username']; ?></span></a>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"><span style="color: white;"><?php endif; ?></span></a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="quantri.php?page_layout=ThongTin_TK&users_id= <?php if(isset($_SESSION['users_id'])):?><?php echo $_SESSION['users_id'];?>"><?php endif; ?><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Thông tin thành viên</a></li>
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
				<a href="gioithieu.php">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down">
					<use xlink:href="#stroked-chevron-down"></use></svg></span> 
					Admin
				</a>
                <ul class="children collapse in" id="sub-item-1">
							<li>						
								<a href="quantri.php?page_layout=Danhsach_TK">
									<svg class="glyph stroked pencil"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> 
									Quản lý tài khoản
								</a>
							</li>	
							<li>						
								<a href="quantri.php?page_layout=Danhsach_SV">
									<svg class="glyph stroked pencil"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> 
									Quản lý sinh viên
								</a>
							</li>
							<li>						
								<a href="quantri.php?page_layout=Danhsach_GV" class="">
									<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> 
									Quản lý giảng viên
								</a>
							</li>		
							 <li>						
								<a href="quantri.php?page_layout=Danhsach_TBM" class="">
									<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> 
									Quản lý trưởng bộ môn
								</a>								
							</li>
							<li>						
								<a href="control/?task=WVhGRFpRPT0=" class="">
									<svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg> 
									Thống kê, báo cáo
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
					<li><a href="./chucnang/logout.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Đăng xuất</a>    </li>			
                </ul>                
            </li>   				
            <li role="admin" class="divider"></li>    
                  
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
                        case 'Danhsach_SV':include_once'./chucnang/QL_SV/Danhsach_SV.php';
                            break;
                        case 'Them_SV':include_once'./chucnang/QL_SV/Them_SV.php';
                            break;
                        case 'Sua_SV':include_once'./chucnang/QL_SV/Sua_SV.php';
                            break;
                        case 'ThongTin_SV':include_once'./chucnang/QL_SV/ThongTin_SV.php';
                            break;
                        case 'Xoa_SV':include_once'./chucnang/QL_SV/Xoa_SV.php';
                            break;
                        case 'Danhsach_GV':include_once'./chucnang/QL_GV/Danhsach_GV.php';
                            break;
                        case 'Them_GV':include_once'./chucnang/QL_GV/Them_GV.php';
                            break;
                        case 'Sua_GV':include_once'./chucnang/QL_GV/Sua_GV.php';
                            break;
                        case 'ThongTin_GV':include_once'./chucnang/QL_GV/ThongTin_GV.php';
                            break;
                        case 'Xoa_GV':include_once'./chucnang/QL_GV/Xoa_GV.php';
                            break;
                        case 'Danhsach_TBM':include_once'./chucnang/QL_TBM/Danhsach_TBM.php';
                            break;
                        case 'Them_TBM':include_once'./chucnang/QL_TBM/Them_TBM.php';
                            break;
                        case 'Sua_TBM':include_once'./chucnang/QL_TBM/Sua_TBM.php';
                            break;
                        case 'ThongTin_TBM':include_once'./chucnang/QL_TBM/ThongTin_TBM.php';
                            break;
                        case 'Xoa_TBM':include_once'./chucnang/QL_TBM/Xoa_TBM.php';
                            break;

					 default:include_once'./gioithieu.php';
                    }
                }
                else{
                    include_once'./gioithieu.php';
                }
            ?>
        </div>	<!--/.main-->
	    <script src="js/moment.js"></script>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>	
        <script src="js/bootstrap-table.js"></script>
        <link rel="stylesheet" href="css/bootstrap-table.css"/>
        <script>
            $('#calendar').datepicker({
            });

            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
        </script>	
</body>
</html>
<?php ob_end_flush(); 
