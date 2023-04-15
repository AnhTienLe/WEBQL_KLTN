<?php
require './cauhinh/connection.php'; // Sử dụng file config

session_start();
if(!isset($_SESSION['users_role']) || $_SESSION['users_role'] != 'truongbomon'){
    header("Location: login.php");
    exit();
}
$layid = 'DT';
if (isset($_REQUEST['id'])) {
	$layid = $_REQUEST['id'];

}

$layidxoa = 'DT';
if (isset($_REQUEST['id'])) {
	$layidxoa = $_REQUEST['id'];

}

include("./classes/demo.php");
$a = new demo();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome </title>

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
<link rel="stylesheet" href="../quantri_truongbomon/css/add.css">


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
							
		</div>
		
	 <!-- /.container-fluid -->
	 
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
								<a href="tdt.php" class="">
									<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> 
									Quản lý đề tài đề tài
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
					<li><a href="../login.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>				
                </ul>                
            </li>   				
            <li role="presentation" class="divider"></li>    
                   
		</ul>
		
	</div><!--/.sidebar-->
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="content_bottom" style="height: 750px;">
	<div id="left">
            <p style="text-align:center;"><strong><b>Đề tài chờ duyệt</b></strong></p>
            <div id="scroll">
                
                <form action="" method="post" enctype="multipart/form-data" name="form1" id="myfm1">
                    <table width="300" border="0" align="center" cellpadding="5" cellspacing="0">  
                        <?php
                            echo $a->waitinglist("SELECT * FROM giangvien INNER JOIN detai ON giangvien.Gv_id = detai.Gv_id 
                            WHERE detai.DeTai_trangThai = 'Chưa duyệt' ORDER BY detai.DeTai_madetai DESC");
                        ?>
                    </table>
                    
                </form>
                
            </div>
    </div>
    <div id="right">
            <p style="text-align:center;"><strong><B>Chi tiết đề tài</B></strong></p>
                <form action="" method="POST" enctype="multipart/form-data" name="form" id="myfm">
                    <table width="650" border="0" align="center" cellpadding="5" cellspacing="0">   
                        <?php
                            // echo $a->timkiem("SELECT * FROM donhang INNER JOIN chitietdonhang ON donhang.MaDH = chitietdonhang.MaDH 
                            // INNER JOIN dongdienthoai ON chitietdonhang.TenDongDT = dongdienthoai.TenDongDT WHERE chitietdonhang.MaDH = '$layid'");
                            echo $a->timkiem("SELECT * FROM giangvien INNER JOIN detai ON giangvien.Gv_id = detai.Gv_id INNER JOIN loaidetai 
							ON detai.Loai_maloai = loaidetai.Loai_maloai WHERE DeTai_madetai = '$layid'");
                        ?>
                        <tr style="border-bottom:hidden; border-left:hidden;">
							<td colspan="2" align="center" valign="middle" style="border-right:hidden">
                                <input type="submit" name="button" id="button" value="Duyệt đề tài" />
                                <input type="submit" name="button" id="button" value="Xóa" />
                            </td>
						</tr>
                    </table>
                    <?php 
                        if (!isset($_POST['button']))
                        {
                           //If not isset -> set with dumy value
                           $_POST['button'] = "undefine";
                        } 
						switch($_POST['button'])
						{   
							case 'Duyệt đề tài':
							{       
                                    if ($layid != 'DT') 
                                    {   
                                        if($a->xacnhandetai("UPDATE detai SET DeTai_trangthai = 'Đã duyệt' WHERE DeTai_madetai = '$layid' limit 1")==1)
                                        {
                                            header('location: duyetdt.php');
                                        }
                                        else
                                        {
                                            echo "<script type='text/javascript'>alert('Duyệt đề tài không thành công.');</script>";
                                        }
                                    }
                                    else
                                    {
                                        echo "<script type='text/javascript'>alert('Vui lòng chọn đề tài cần duyệt hoặc xóa.');</script>";
                                    }
                                
                                break;
							}	
                            case 'Xóa':
                                {
                                    if ($layid != 'DT') 
                                        {
                                            if($a->themxoasua("delete from detai where DeTai_madetai = '$layid' limit 1")==1)
                                            {
                                                header('location: location: duyetdt.php');
                                            }
                                            else
                                            {
                                                echo "<script type='text/javascript'>alert('Xóa đề tài không thành công.');</script>";
                                            }
                                        }
                                        else
                                        {
                                            echo "<script type='text/javascript'>alert('Vui lòng chọn đề tài cần xóa.');</script>";
                                        }
                                    break;
                                }
						}
					?> 
                </form>
        </div>
		</div>
	</div>
	
    
    <script src="../assets/js/jquery-1.11.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/moment.js"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>

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