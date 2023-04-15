<?php  
// Kết nối đến CSDL
$conn = mysqli_connect('localhost', 'root', '', 'db_kltn');

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
    
    // Lấy giá trị của khóa ngoại tương ứng từ bảng "chuyennganh"
    $sql = "SELECT CN_machuyennganh FROM chuyennganh WHERE CN_machuyennganh = '$CN_machuyennganh'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $CN_machuyennganh = $row['CN_machuyennganh'];
    
    // Lấy giá trị của khóa ngoại tương ứng từ bảng "khoa"
    $sql = "SELECT Khoa_makhoa FROM khoa WHERE Khoa_makhoa = '$Khoa_makhoa'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $Khoa_makhoa = $row['Khoa_makhoa'];

    $sql = "SELECT Tbm_id FROM truongbomon WHERE Tbm_id = '$Tbm_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $Tbm_id = $row['Tbm_id'];

    $sql = "SELECT users_id FROM users WHERE users_id = '$users_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $users_id = $row['users_id'];


    // Thực hiện lệnh SQL INSERT để thêm dữ liệu vào bảng "giangvien"
    $sql = "INSERT INTO giangvien (Gv_hoten, Gv_sdt, Gv_email, Gv_gioitinh, Gv_ngaysinh, Gv_diachi, CN_machuyennganh, Khoa_makhoa, Tbm_id, users_id) VALUES ('$Gv_hoten', '$Gv_sdt', '$Gv_email', '$Gv_gioitinh', '$Gv_ngaysinh', '$Gv_diachi', '$CN_machuyennganh', '$Khoa_makhoa', '$Tbm_id', '$users_id')";
    mysqli_query($conn, $sql);
    header('location: quantri.php?page_layout=Danhsach_GV');

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
        <h1 class="page-header">Thêm giảng viên</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm giảng viên</div>
                <div class="panel-body">
                    <div class="col-md-12">
            <form role="form" method="post">
                <table>
                    <tr>
                        <td>Tên giảng viên</td>
                        <td><input type="text" id="Gv_hoten" name="Gv_hoten" value="" size="30"></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td><input type="text" id="Gv_sdt" name="Gv_sdt" value="" size="30"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" id="Gv_email" name="Gv_email" value="" size="30"></td>
                    </tr>
                    <tr>
                        <td>Giới tính</td>
                        <td>
                        <input type="radio" id="Gv_gioitinh0" name="Gv_gioitinh" value="Nam" size="30">Nam
                        <input type="radio" id="Gv_gioitinh1" name="Gv_gioitinh" value="Nữ" size="30">Nữ
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td><input type="date" id="Gv_ngaysinh" name="Gv_ngaysinh" value="" size="30"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" id="Gv_diachi" name="Gv_diachi" value="" size="30"></td>
                    </tr>
                    <tr>
                        <td>Chuyên ngành</td>
                        <td>
                            <select name="CN_machuyennganh">
                            <?php
                                $sql = "SELECT * FROM chuyennganh";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='".$row['CN_machuyennganh']."'>".$row['CN_tenchuyennganh']."</option>";
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
                                $sql = "SELECT * FROM khoa";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='".$row['Khoa_makhoa']."'>".$row['Khoa_tenkhoa']."</option>";
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
                                while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='".$row['Tbm_id']."'>".$row['Tbm_hoten']."</option>";
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
                                $sql = "SELECT * FROM users where users_role = 'giangvien' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='".$row['users_id']."'>".$row['users_username']."</option>";
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Thêm Gv</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
                <input type="button" value="Quay lại" class="btn btn-default" onclick="javascript:history.back();">
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

 