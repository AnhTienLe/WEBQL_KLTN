<?php  
// Kết nối đến CSDL
$conn = mysqli_connect('localhost', 'admin', '123456', 'db_kltn');

// Xử lý khi form được submit
if (isset($_POST['submit'])) {
    // Lấy các giá trị từ form
    $Sv_mssv = $_POST['Sv_mssv'];
    $Sv_hoten = $_POST['Sv_hoten'];
    $Sv_sdt = $_POST['Sv_sdt'];
    $Sv_email = $_POST['Sv_email'];
    $Sv_ngaysinh = $_POST['Sv_ngaysinh'];
    $Sv_gioitinh = $_POST['Sv_gioitinh'];
    $Sv_diachi= $_POST['Sv_diachi'];
    $NK_khoa = $_POST['NK_khoa'];
    $Hdt_mahe = $_POST['Hdt_mahe'];
    $Khoa_makhoa = $_POST['Khoa_makhoa'];
    $Lop_malop = $_POST['Lop_malop'];
    $CN_machuyennganh = $_POST['CN_machuyennganh'];
    $users_id = $_POST['users_id'];
    

    // Lấy giá trị của khóa ngoại tương ứng từ bảng "nienkhoa"
    $sql = "SELECT NK_khoa FROM nienkhoa WHERE NK_khoa = '$NK_khoa'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $NK_khoa = $row['NK_khoa'];
    
     // Lấy giá trị của khóa ngoại tương ứng từ bảng "hedaotao"
     $sql = "SELECT Hdt_mahe FROM hedaotao WHERE Hdt_mahe = '$Hdt_mahe'";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     $Hdt_mahe = $row['Hdt_mahe'];
     
      // Lấy giá trị của khóa ngoại tương ứng từ bảng "khoa"
    $sql = "SELECT Khoa_makhoa FROM khoa WHERE Khoa_makhoa = '$Khoa_makhoa'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $Khoa_makhoa = $row['Khoa_makhoa'];

     // Lấy giá trị của khóa ngoại tương ứng từ bảng "lop"
     $sql = "SELECT Lop_malop FROM lop WHERE Lop_malop = '$Lop_malop'";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     $Lop_malop = $row['Lop_malop'];

    // Lấy giá trị của khóa ngoại tương ứng từ bảng "chuyennganh"
    $sql = "SELECT CN_machuyennganh FROM chuyennganh WHERE CN_machuyennganh = '$CN_machuyennganh'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $CN_machuyennganh = $row['CN_machuyennganh'];

    // Lấy giá trị của khóa ngoại tương ứng từ bảng "users"
    $sql = "SELECT users_id FROM users WHERE users_id = '$users_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $users_id = $row['users_id'];


    // Thực hiện lệnh SQL INSERT để thêm dữ liệu vào bảng "giangvien"
    $sql = "INSERT INTO sinhvien 
    (Sv_mssv, Sv_hoten, Sv_sdt, Sv_email, Sv_ngaysinh, Sv_gioitinh, Sv_diachi, NK_khoa, Hdt_mahe, Khoa_makhoa, Lop_malop, CN_machuyennganh, users_id) 
    VALUES 
    ('$Sv_mssv', '$Sv_hoten', '$Sv_sdt', '$Sv_email', '$Sv_ngaysinh', '$Sv_gioitinh',  '$Sv_diachi', '$NK_khoa', '$Hdt_mahe','$Khoa_makhoa','$Lop_malop','$CN_machuyennganh','$users_id')";
    mysqli_query($conn, $sql);
    header('location: quantri.php?page_layout=Danhsach_SV');

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
        <h1 class="page-header">Thêm sinh viên</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm sinh viên</div>
                <div class="panel-body">
                    <div class="col-md-12">
            <form role="form" method="post">
                <table>
                <tr>
                        <td>Mã số sinh viên</td>
                        <td><input type="text" id="Sv_mssv" name="Sv_mssv" value="" size="30"></td>
                    </tr>
                    <tr>
                        <td>Tên sinh viên</td>
                        <td><input type="text" id="Sv_hoten" name="Sv_hoten" value="" size="30"></td>
                    </tr>
                
                    <tr>
                        <td>Số điện thoại</td>
                        <td><input type="text" id="Sv_sdt" name="Sv_sdt" value="" size="30"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" id="Sv_email" name="Sv_email" value="" size="30"></td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td><input type="date" id="Sv_ngaysinh" name="Sv_ngaysinh" value="" size="30"></td>
                    </tr>
                    <tr>
                        <td>Giới tính</td>
                        <td>
                        <input type="radio" id="Sv_gioitinh0" name="Sv_gioitinh" value="Nam" size="30">Nam
                        <input type="radio" id="Sv_gioitinh1" name="Sv_gioitinh" value="Nữ" size="30">Nữ
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" id="Sv_diachi" name="Sv_diachi" value="" size="30"></td>
                    </tr>
                    <tr>
                        <td>Niên khóa</td>
                        <td>
                            <select name="NK_khoa">
                            <?php
                                $sql = "SELECT * FROM nienkhoa";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='".$row['NK_khoa']."'>".$row['NK_khoa']."</option>";
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Hệ đào tạo</td>
                        <td>
                            <select name="Hdt_mahe">
                            <?php
                                $sql = "SELECT * FROM hedaotao";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='".$row['Hdt_mahe']."'>".$row['Hdt_mahe']."</option>";
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
                        <td>Lớp</td>
                        <td>
                            <select name="Lop_malop">
                            <?php
                                $sql = "SELECT * FROM lop";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='".$row['Lop_malop']."'>".$row['Lop_malop']."</option>";
                                }
                            ?>
                            </select>
                        </td>
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
                        <td>Tài khoản</td>
                        <td>
                            <select name="users_id">
                            <?php
                                $sql = "SELECT * FROM users WHERE users_role = 'sinhvien'";
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
                <button type="submit" class="btn btn-primary" name="submit">Thêm</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
                <input type="button" value="Quay lại" class="btn btn-default" onclick="javascript:history.back();">
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->