<?php  
	if (isset($_POST['submit'])) {
		$users_username=$_POST['users_username'];
		$users_password=$_POST['users_password'];
        $users_createdate= date('Y-m-d H:i:s');
		$users_role=$_POST['users_role'];
		if (isset($users_username)&&isset($users_password)&&isset($users_role)) {
			$sql="INSERT INTO users (users_username,users_password,users_createdate,users_role) VALUES('$users_username','$users_password','$users_createdate','$users_role')";
            $query=mysqli_query($conn,$sql);
			header('location: quantri.php?page_layout=Danhsach_TK');
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
        <h1 class="page-header">Tạo tài khoản</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Tạo tài khoản</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">
                        <table data-toggle="table">
                            <thead>
                                <tr>                                
		                            <th data-sortable="true">Tài khoản</th>
		                            <th data-sortable="true">Mật khẩu</th>
		                            <th data-sortable="true">Quyền truy cập</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-checkbox="true">
                                        <input class="form-control" type="text" name="users_username" value="<?php if(isset($_POST['$users_username']))echo $_POST['$users_username'];?>" required="">
                                    </td>
                                    <td data-checkbox="true">
                                        <input class="form-control" type="text" name="users_password" value="<?php if(isset($_POST['$users_password']))echo $_POST['users_password'];?>" required="">
                                    </td>
                                    <td data-checkbox="true">
                                    <select name="users_role">
                <option value="admin" <?php if($_SESSION['users_role'] == 'admin') { echo "selected"; } ?>>Admin</option>
                <option value="truongbomon" <?php if($_SESSION['users_role'] == 'truongbomon') { echo "selected"; } ?>>Trưởng bộ môn</option>
                <option value="giangvien" <?php if($_SESSION['users_role'] == 'giangvien') { echo "selected"; } ?>>Giảng viên</option>
                <option value="sinhvien" <?php if($_SESSION['users_role'] == 'sinhvien') { echo "selected"; } ?>>Sinh viên</option>
            </select>
                                </tr>
                            </tbody>
                        </table>
                        <br />
                        <button type="submit" class="btn btn-primary" name="submit">Tạo mới</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                        <input type="button" value="Quay lại" class="btn btn-default" onclick="javascript:history.back();">
                </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

 