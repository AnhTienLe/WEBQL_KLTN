<?php  
    $id_thanhvien=$_GET['id_thanhvien'];
	$sql = "SELECT * FROM thanhvien WHERE id_thanhvien=$id_thanhvien";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
	if (isset($_POST['submit'])) {
		$email=$_POST['email'];
		$mat_khau=$_POST['mat_khau'];
		$quyen_truy_cap=$_POST['quyen_truy_cap'];
		if (isset($email)&&isset($mat_khau)&&isset($quyen_truy_cap)) {
			$sql="UPDATE thanhvien SET email='$email',mat_khau='$mat_khau',quyen_truy_cap='$quyen_truy_cap' WHERE id_thanhvien=$id_thanhvien";
            $query = mysqli_query($conn,$sql);
            header('location: quantri.php?page_layout=quanlytv');
		}
	}
?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="quantri.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Sửa thành viên</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm bình luận</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">
                        <table data-toggle="table">
                            <thead>
                                <tr>                                
		                            <th data-sortable="true">Email</th>
		                            <th data-sortable="true">Mật khẩu</th>
		                            <th data-sortable="true">Quyền truy cập</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-checkbox="true">
                                        <input class="form-control" type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}else{echo $row['email'];}?>" required="">
                                    </td>
                                    <td data-checkbox="true">
                                        <input class="form-control" type="text" name="mat_khau" value="<?php if(isset($_POST['mat_khau'])){echo $_POST['mat_khau'];}else{echo $row['mat_khau'];}?>" required="">
                                    </td>
                                    <td data-checkbox="true">
                                       <input name="quyen_truy_cap" type="number" min="1" max="2" class="form-control text-center" value="<?php if(isset($_POST['quyen_truy_cap'])){echo $_POST['quyen_truy_cap'];}else{echo $row['quyen_truy_cap'];}?>">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary" name="submit">Sửa</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->