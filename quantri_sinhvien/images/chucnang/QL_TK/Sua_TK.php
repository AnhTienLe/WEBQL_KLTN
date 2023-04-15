<?php  
 ob_start();
    $users_id=$_GET['users_id'];
	$sql = "SELECT * FROM users WHERE users_id=$users_id";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
	if (isset($_POST['submit'])) {
		$users_username=$_POST['users_username'];
		$users_password=$_POST['users_password'];
		$users_role=$_POST['users_role'];
		if (isset($users_username)&&isset($users_password)&&isset($users_role)) {
			$sql="UPDATE users SET users_username='$users_username',users_password='$users_password',users_role='$users_role' WHERE users_id=$users_id";
            $query = mysqli_query($conn,$sql);
            header('Location:../quantri_admin/quantri.php?page_layout=Danhsach_TK');
            
		}
	}
    ob_end_flush();
?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="quantri.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Chỉnh sửa tài khoản</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Chỉnh sửa tài khoản</div>
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
                                        <input class="form-control" type="text" name="users_username" value="<?php if(isset($_POST['users_username'])){echo $_POST['users_username'];}else{echo $row['users_username'];}?>" required="">
                                    </td>
                                    <td data-checkbox="true">
                                        <input class="form-control" type="text" name="users_password" value="<?php if(isset($_POST['users_password'])){echo $_POST['users_password'];}else{echo $row['users_password'];}?>" required="">
                                    </td>
                                    <td data-checkbox="true">
                                    <?php
                                        $role_options = array('admin', 'truongbomon', 'giangvien', 'sinhvien');
                                        $role_value = isset($_POST['users_role']) ? $_POST['users_role'] : $row['users_role'];
                                    ?>
                                    
                                   <select name="users_role">
                                   <?php foreach ($role_options as $option): ?>
                    <option value="<?php echo $option; ?>"<?php if ($role_value == $option) echo ' selected'; ?>><?php echo $option; ?></option>
                                   <?php endforeach; ?>
                                   </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
                     
                        <input type="button" class="btn btn-default" value="Quay lại" onclick="javascript:history.back();">
                </div>
                </form>
       
          </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->