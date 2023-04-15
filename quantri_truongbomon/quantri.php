<?php
require './cauhinh/connection.php'; // Sử dụng file config

session_start();
if(!isset($_SESSION['users_role']) || $_SESSION['users_role'] != 'truongbomon'){
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
<title>Welcome Trưởng bộ môn </title>
<link href="css/bootstrap.min.css" rel="stylesheet">
 
<link href="css/styles_admin.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<script src="js/lumino.glyphs.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

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

<body>
	
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
					  <a href="" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>xin chào:""</a>						
					</li>
			  </ul>
		  </div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar" style="z-index:9999;">
		
		<ul class="nav menu">		
			<li class="parent ">
				<a href="../quantri_truongbomon/quantri.php">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down">
					<use xlink:href="#stroked-chevron-down"></use></svg></span> 
					Trưởng bộ môn
				</a>
                <ul class="children collapse in" id="sub-item-1">
							<li>						
								<a href="control/?task=WVhGRFl3PT0=" class="">
									<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> 
									Danh sách ĐKĐT(Full)
								</a>
							</li>	
							<li>						
								<a href="control/?task=WVhGRFpnPT0=" class="">
									<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> 
									Nhập điểm hướng dẫn
								</a>
							</li>
							<li>						
								<a href="control/?task=WVhGRFlRPT0=" class="">
									<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> 
									Nhập điểm phản biện
								</a>
							</li>		
							 <li>						
								<a href="control/?task=WVhGRFlnPT0=" class="">
									<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> 
									Nhập điểm thực tập
								</a>								
							</li>
                            <li>						
								<a href="quantri.php?page_layout=Danhsach_GV" class="">
									<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> 
									Quản lý GV
								</a>
							</li>
							<li>						
								<a href="tdt.php" class="">
									<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> 
									Quản lý sinh viên
								</a>
							</li>
							<li>						
								<a href="quantri.php?page_layout=Danhsach_DT" class="">
									<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> 
									Quản lý đề tài 
								</a>
							</li>
							<li>						
								<a href="etdt.php" class="">
									<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> 
									Quản lý loại ĐT
								</a>
							</li>	
							<li>						
								<a href="../quantri_truongbomon/duyetdt.php" class="">
									<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> 
									Duyệt đề tài
								</a>
							</li>
							<li>						
								<a href="control/?task=WVhGRFlRPT0=" class="">
									<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> 
									Quản lý phản biện
								</a>
							</li>		
							 <li>						
								<a href="control/?task=WVhGRFlnPT0=" class="">
									<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> 
									Quản lý hội đồng
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
					<li><a href="../quantri_truongbomon/chucnang/logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>				
                </ul>                
            </li>   				
            <li role="presentation" class="divider"></li>    
                   
		</ul>
	</div><!--/.sidebar-->
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
            <?php  
                //master page
                if(isset($_GET['page_layout'])){
                    switch ($_GET['page_layout']) {
                        case 'Danhsach_GV':include_once'./chucnang/QL_GV/Danhsach_GV.php';
                            break;
						case 'Sua_GV':include_once'./chucnang/QL_GV/Sua_GV.php';
                            break;
                        case 'Them_GV':include_once'./chucnang/QL_GV/Them_GV.php';
                            break;
                        case 'ThongTin_GV':include_once'./chucnang/QL_GV/ThongTin_GV.php';
                            break;
						case 'Danhsach_DT':include_once'./chucnang/QL_DT/Danhsach_DT.php';
                            break;
						case 'Sua_DT':include_once'./chucnang/QL_DT/Sua_DT.php';
                            break;
                        case 'Them_DT':include_once'./chucnang/QL_DT/Them_DT.php';
                            break;
                        case 'ThongTin_DT':include_once'./chucnang/QL_DT/ThongTin_DT.php';
                            break;
						case 'Xoa_DT':include_once'./chucnang/QL_DT/Xoa_DT.php';
                            break;

					 default:include_once'./quantri.php';
                    }
                }
                else{
                    include_once'./quantri.php';
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