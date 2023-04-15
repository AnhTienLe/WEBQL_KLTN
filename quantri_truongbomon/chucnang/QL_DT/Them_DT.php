<?php  
// Kết nối đến CSDL
$conn = mysqli_connect('localhost', 'root', '', 'db_kltn');

// Xử lý khi form được submit
if (isset($_POST['submit'])) {
    // Lấy các giá trị từ form
    $DeTai_madetai = $_POST['DeTai_madetai'];
    $DeTai_tendetai = $_POST['DeTai_tendetai'];
    $DeTai_mota = $_POST['DeTai_mota'];
    $DeTai_yeucau = $_POST['DeTai_yeucau'];
    $DeTai_kienthuccanco = $_POST['DeTai_kienthuccanco'];
    $Loai_maloai = $_POST['Loai_maloai'];
    $Gv_id = $_POST['Gv_id'];
    $DeTai_trangthai = $_POST['DeTai_trangthai'];
    $Tbm_id = $_POST['Tbm_id'];
    
    // Lấy giá trị của khóa ngoại tương ứng từ bảng "chuyennganh"
    $sql = "SELECT Loai_maloai FROM loaidetai WHERE Loai_maloai = '$Loai_maloai'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $Loai_maloai = $row['Loai_maloai'];
    
    // Lấy giá trị của khóa ngoại tương ứng từ bảng "khoa"
    $sql = "SELECT Gv_id FROM giangvien WHERE Gv_id = '$Gv_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $Gv_id = $row['Gv_id'];

    $sql = "SELECT Tbm_id FROM truongbomon WHERE Tbm_id = '$Tbm_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $Tbm_id = $row['Tbm_id'];


    // Thực hiện lệnh SQL INSERT để thêm dữ liệu vào bảng "giangvien"
    $sql = "INSERT INTO detai (DeTai_madetai, DeTai_tendetai, DeTai_mota, DeTai_yeucau, DeTai_kienthuccanco, Loai_maloai, Gv_id, DeTai_trangthai, Tbm_id) 
    VALUES ('$DeTai_madetai', '$DeTai_tendetai', '$DeTai_mota', '$DeTai_yeucau', '$DeTai_kienthuccanco', '$Loai_maloai', '$Gv_id', '$DeTai_trangthai', '$Tbm_id')";
    mysqli_query($conn, $sql);
    header('location: quantri.php?page_layout=Danhsach_DT');

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
        <h1 class="page-header">Thêm đề tài</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm đề tài</div>
                <div class="panel-body">
                    <div class="col-md-12">
            <form role="form" method="post">
                <table>
                    <tr>
                        <td>Mã đề tài</td>
                        <td><input type="text" id="DeTai_madetai" name="DeTai_madetai" value="" size="30"></td>
                    </tr>
                    <tr>
                        <td>Tên đề tài</td>
                        <td><input type="text" id="DeTai_tendetai" name="DeTai_tendetai" value="" size="30"></td>
                    </tr>
                    <tr>
                        <td>Mô tả</td>
                        <td><textarea cols="30" rows="7" id="DeTai_mota" name="DeTai_mota"></textarea></td>
                    </tr>
                    <tr>
                        <td>Yêu cầu</td>
                        <td><textarea cols="30" rows="7" id="DeTai_yeucau" name="DeTai_yeucau"></textarea></td>
                    </tr>
                    <tr>
                        <td>Kiến thức cần có</td>
                        <td><textarea cols="30" rows="7" id="DeTai_kienthuccanco" name="DeTai_kienthuccanco"></textarea></td>
                    </tr>
                    <tr>
                        <td>Loại đề tài</td>
                        <td>
                            <select name="Loai_maloai">
                            <?php
                                $sql = "SELECT * FROM loaidetai";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='".$row['Loai_maloai']."'>".$row['Loai_tenloai']."</option>";
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Giảng viên đề xuất</td>
                        <td>
                            <select name="Gv_id">
                            <?php
                                $sql = "SELECT * FROM giangvien";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='".$row['Gv_id']."'>".$row['Gv_hoten']."</option>";
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Trạng thái</td>
                        <td>
                        <input type="radio" id="DeTai_trangthai0" name="DeTai_trangthai" value="Chưa duyệt" size="30">Chưa duyệt
                        <input type="radio" id="DeTai_trangthai1" name="DeTai_trangthai" value="Đã duyệt" size="30">Đã duyệt
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
                </table>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Thêm DT</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
                <input type="button" value="Quay lại" class="btn btn-default" onclick="javascript:history.back();">
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

 