<?php
// Kết nối đến CSDL
$conn = mysqli_connect('localhost', 'root', '', 'db_kltn');

// Lấy id của giảng viên cần sửa từ URL
$Gv_id = $_GET['Gv_id'];

// Xử lý khi form được submit
if (isset($_POST['submit'])) {
    // Lấy các giá trị từ form
    $Gv_hoten = $_POST['Gv_hoten'];
    $Gv_sdt = $_POST['Gv_sdt'];
    $Gv_email = $_POST['Gv_email'];
    $Gv_gioitinh = $_POST['Gv_gioitinh'];
    $Gv_ngaysinh = $_POST['Gv_ngaysinh'];
    $Gv_diachi = $_POST['Gv_diachi'];
    $CN_machuyennganh = $_POST['CN_machuyennganh'];
    $Khoa_makhoa = $_POST['Khoa_makhoa'];
    $Tbm_id = $_POST['Tbm_id'];
    $users_id = $_POST['users_id'];
    // Thực hiện lệnh SQL UPDATE để cập nhật thông tin của giảng viên
    $sql = "UPDATE giangvien SET Gv_hoten='$Gv_hoten', Gv_sdt='$Gv_sdt', Gv_email='$Gv_email', Gv_gioitinh='$Gv_gioitinh', Gv_ngaysinh='$Gv_ngaysinh'
    , Gv_diachi='$Gv_diachi', CN_machuyennganh='$CN_machuyennganh', Khoa_makhoa='$Khoa_makhoa'
    , Tbm_id='$Tbm_id', users_id='$users_id' WHERE Gv_id=$Gv_id";
    mysqli_query($conn, $sql);
    header('location: quantri.php?page_layout=Danhsach_GV');

}

// Lấy thông tin của giảng viên từ CSDL và điền vào form
$sql = "SELECT * FROM giangvien WHERE Gv_id=$Gv_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);



?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="quantri.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Sửa thông tin giảng viên</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Sửa thông tin giảng viên</div>
            <div class="panel-body">
                <div class="col-md-12">
             <form role="form" method="post">
             <table>
                    <tr>
                        <td>Tên giảng viên</td>
                        <td><input type="text" id="Gv_hoten" name="Gv_hoten" value="<?php echo $row['Gv_hoten'];?>" size="30"></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td><input type="text" id="Gv_sdt" name="Gv_sdt" value="<?php echo $row['Gv_sdt'];?>" size="30"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" id="Gv_email" name="Gv_email" value="<?php echo $row['Gv_email'];?>" size="30"></td>
                    </tr>
                    <tr>
                        <td>Giới tính</td>
                        <td>
                        <input type="radio" id="Gv_gioitinh0" name="Gv_gioitinh" value="Nam" <?php if($row['Gv_gioitinh']=='Nam') echo 'checked';?> size="30">Nam
                        <input type="radio" id="Gv_gioitinh1" name="Gv_gioitinh" value="Nữ" <?php if($row['Gv_gioitinh']=='Nữ') echo 'checked';?> size="30">Nữ
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td><input type="date" id="Gv_ngaysinh" name="Gv_ngaysinh" value="<?php echo $row['Gv_ngaysinh'];?>" size="30"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" id="Gv_diachi" name="Gv_diachi" value="<?php echo $row['Gv_diachi'];?>" size="30"></td>
                    </tr>
                    <tr>
                        <td>Chuyên ngành</td>
                        <td>
                            <select name="CN_machuyennganh">
                            <?php
                                $sql = "SELECT * FROM chuyennganh ";
                                $result = mysqli_query($conn, $sql);
                                while ($chuyennganh_row = mysqli_fetch_assoc($result)) {
                                    if ($chuyennganh_row['CN_machuyennganh'] == $row['CN_machuyennganh']) {
                                        echo "<option value='".$chuyennganh_row['CN_machuyennganh']."' selected>".$chuyennganh_row['CN_tenchuyennganh']."</option>";
                                    } else {
                                        echo "<option value='".$chuyennganh_row['CN_machuyennganh']."'>".$chuyennganh_row['CN_tenchuyennganh']."</option>";
                                    }
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Khoa</td>
                        <td>
                            <select name="Khoa_makhoa">
                            <?php
                                $sql = "SELECT * FROM khoa ";
                                $result = mysqli_query($conn, $sql);
                                while ($khoa_row = mysqli_fetch_assoc($result)) {
                                    if ($khoa_row['Khoa_makhoa'] == $row['Khoa_makhoa']) {
                                        echo "<option value='".$khoa_row['Khoa_makhoa']."' selected>".$khoa_row['Khoa_tenkhoa']."</option>";
                                    } else {
                                        echo "<option value='".$khoa_row['Khoa_makhoa']."'>".$khoa_row['Khoa_tenkhoa']."</option>";
                                    }
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Trưởng bộ môn</td>
                        <td>
                            <select name="Tbm_id">
                            <?php
                                $sql = "SELECT * FROM truongbomon ";
                                $result = mysqli_query($conn, $sql);
                                while ($tbm_row = mysqli_fetch_assoc($result)) {
                                    if ($tbm_row['Tbm_id'] == $row['Tbm_id']) {
                                        echo "<option value='".$tbm_row['Tbm_id']."' selected>".$tbm_row['Tbm_hoten']."</option>";
                                    } else {
                                        echo "<option value='".$tbm_row['Tbm_id']."'>".$tbm_row['Tbm_hoten']."</option>";
                                    }
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tài khoản</td>
                        <td>
                            <select name="users_id">
                            <?php
                                $sql = "SELECT * FROM users ";
                                $result = mysqli_query($conn, $sql);
                                while ($users_row = mysqli_fetch_assoc($result)) {
                                    if ($users_row['users_id'] == $row['users_id']) {
                                        echo "<option value='".$users_row['users_id']."' selected>".$users_row['users_username']."</option>";
                                    } else {
                                        echo "<option value='".$users_row['users_id']."'>".$users_row['users_username']."</option>";
                                    }
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
                <input type="button" value="Quay lại" class="btn btn-default" onclick="javascript:history.back();">  
                
                </form>
                </div>
                </div>
          </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->