<?php
// Kết nối đến CSDL
$conn = mysqli_connect('localhost', 'root', '', 'db_kltn');

// Lấy id của sinh viên cần sửa từ URL
$Sv_id = $_GET['Sv_id'];

// Xử lý khi form được submit
if(isset($_POST['submit'])){
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

    if(isset($Sv_mssv) && isset($Sv_hoten) && isset($Sv_sdt) && isset($Sv_email) && isset($Sv_ngaysinh) && isset( $Sv_gioitinh) 
    && isset($Sv_diachi) && isset($NK_khoa) && isset($Hdt_mahe) && isset($Khoa_makhoa) && isset($Lop_malop) && isset($CN_machuyennganh))
    {
        $sql="UPDATE sinhvien SET Sv_mssv='$Sv_mssv', Sv_hoten='$Sv_hoten', Sv_sdt='$Sv_sdt',Sv_email='$Sv_email',
        Sv_ngaysinh='$Sv_ngaysinh', Sv_gioitinh='$Sv_gioitinh',Sv_diachi='$Sv_diachi',NK_khoa='$NK_khoa', Hdt_mahe='$Hdt_mahe',
        Khoa_makhoa='$Khoa_makhoa', Lop_malop='$Lop_malop', CN_machuyennganh='$CN_machuyennganh' WHERE Sv_id=$Sv_id";
        $query= mysqli_query($conn, $sql);
        header('location: quantri.php?page_layout=Danhsach_SV');
    }
}
// Lấy thông tin của sinh viên từ CSDL và điền vào form
$sql = "SELECT * FROM sinhvien WHERE Sv_id=$Sv_id";
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
        <h1 class="page-header">Sửa thông tin sinh viên</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Sửa thông tin sinh viên</div>
            <div class="panel-body">
                <div class="col-md-12">
             <form role="form" method="post">
             <table>
                    <tr>
                        <td>Mã số sinh viên</td>
                        <td><input type="text" id="Sv_mssv" name="Sv_mssv" value="<?php echo $row['Sv_mssv'];?>" size="30"></td>
                    </tr>
                    <tr>
                        <td> Họ và tên Sinh viên</td>
                        <td><input type="text" id="Sv_hoten" name="Sv_hoten" value="<?php echo $row['Sv_hoten'];?>" size="30"></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td><input type="text" id="Sv_sdt" name="Sv_sdt" value="<?php echo $row['Sv_sdt'];?>" size="30"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" id="Sv_email" name="Sv_email" value="<?php echo $row['Sv_email'];?>" size="30"></td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td><input type="date" id="Sv_ngaysinh" name="Sv_ngaysinh" value="<?php echo $row['Sv_ngaysinh'];?>" size="30"></td>
                    </tr>
                    <tr>
                        <td>Giới tính</td>
                        <td>
                        <input type="radio" id="Sv_gioitinh0" name="Sv_gioitinh" value="Nam" <?php if($row['Sv_gioitinh']=='Nam') echo 'checked';?> size="30">Nam
                        <input type="radio" id="Sv_gioitinh1" name="Sv_gioitinh" value="Nữ" <?php if($row['Sv_gioitinh']=='Nữ') echo 'checked';?> size="30">Nữ
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" id="Sv_diachi" name="Sv_diachi" value="<?php echo $row['Sv_diachi'];?>" size="30"></td>
                    </tr>
                    <tr>
                        <td>Niên khóa</td>
                        <td>
                            <select name="NK_khoa">
                            <?php
                                $sql = "SELECT * FROM nienkhoa ";
                                $result = mysqli_query($conn, $sql);
                                while ($nienkhoa_row = mysqli_fetch_assoc($result)) {
                                    if ($nienkhoa_row['NK_khoa'] == $row['NK_khoa']) {
                                        echo "<option value='".$nienkhoa_row['NK_khoa']."' selected>".$nienkhoa_row['NK_khoa']."</option>";
                                    } else {
                                        echo "<option value='".$nienkhoa_row['NK_khoa']."'>".$nienkhoa_row['NK_khoa']."</option>";
                                    }
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
                                $sql = "SELECT * FROM hedaotao ";
                                $result = mysqli_query($conn, $sql);
                                while ($hedaotao_row = mysqli_fetch_assoc($result)) {
                                    if ($hedaotao_row['Hdt_mahe'] == $row['Hdt_mahe']) {
                                        echo "<option value='".$hedaotao_row['Hdt_mahe']."' selected>".$hedaotao_row['Hdt_mahe']."</option>";
                                    } else {
                                        echo "<option value='".$hedaotao_row['Hdt_mahe']."'>".$hedaotao_row['Hdt_mahe']."</option>";
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
                        <td>Lớp</td>
                        <td>
                            <select name="Lop_malop">
                            <?php
                                $sql = "SELECT * FROM lop ";
                                $result = mysqli_query($conn, $sql);
                                while ($lop_row = mysqli_fetch_assoc($result)) {
                                    if ($khoa_row['Lop_malop'] == $row['Lop_malop']) {
                                        echo "<option value='".$lop_row['Lop_malop']."' selected>".$lop_row['Lop_malop']."</option>";
                                    } else {
                                        echo "<option value='".$lop_row['Lop_malop']."'>".$lop_row['Lop_malop']."</option>";
                                    }
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