<?php  
    $SV_id=$_GET['Sv_id'];
    $sql_sv="SELECT * FROM sinhvien";
    $query_sv= mysqli_query($conn,$sql_sv);

    $sql="SELECT * FROM sinhvien WHERE Sv_id='Sv_id'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);

    if(isset($_POST['submit'])){
        $Sv_hoten=$_POST['Sv_hoten'];
        $Sv_gioitinh=$_POST['Sv_gioitinh'];
        $Sv_ngaysinh=$_POST['Sv_ngaysinh'];
        $Sv_sdt=$_POST['Sv_sdt'];
        $Sv_email=$_POST['Sv_email'];
        $Lop_malop=$_POST['Lop_malop'];
        $Sv_diachi=$_POST['Sv_diachi'];
        $NK_khoa=$_POST['NK_khoa'];
        $CN_machuyennganh=$_POST['CN_machuyennganh'];
        if(isset($Sv_hoten) && isset( $Sv_gioitinh) && isset($Sv_ngaysinh) && isset($Sv_sdt) && 
                isset($Sv_email) && isset( $Lop_malop) && isset($Sv_diachi)&& isset($NK_khoa) && isset($CN_machuyennganh)){
            $sql="UPDATE sinhvien SET Sv_hoten='$Sv_hoten',Sv_gioitinh='$Sv_gioitinh',Sv_ngaysinh='$Sv_ngaysinh',Sv_sdt='$Sv_sdt',"
                    . "Sv_email='$Sv_email', Lop_malop='$Lop_malop',Sv_diachi='$Sv_diachi'WHERE Sv_id=$Sv_id";
            $query= mysqli_query($conn, $sql);
            header('location: quantri.php?page_layout=Danhsach_SV');
        }
    }

?>

<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
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
                <form method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên sinh viên</label>
                            <input type="text" class="form-control"  name="Sv_hoten" value="<?php if(isset($_POST['Sv_hoten'])){echo $_POST['Sv_hoten'];}else{echo $row['Sv_hoten'];} ?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gioitinh"
                                        <?php 
                                            if($row['gioitinh']==Nam)
                                            {
                                                echo 'checked';
                                            }
                                         ?>

                                     id="optionsRadios1" value=Nam>Nam
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gioitinh"
                                        <?php 
                                            if($row['gioitinh']==Nữ)
                                            {
                                                echo 'checked';
                                            }
                                         ?>
                                     id="optionsRadios2" value=Nữ>Nữ
                                </label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input type="text" class="form-control" name="gia_sp" value="<?php if(isset($_POST['gia_sp'])){echo $_POST['gia_sp'];}else{echo $row['gia_sp'];} ?>" required="">
                        </div>
                        <div class="form-group">
                            <label>SĐT</label>
                            <input type="text" class="form-control" name="gia_sp" value="<?php if(isset($_POST['gia_sp'])){echo $_POST['gia_sp'];}else{echo $row['gia_sp'];} ?>" required="">
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" class="form-control" name="gia_sp" value="<?php if(isset($_POST['gia_sp'])){echo $_POST['gia_sp'];}else{echo $row['gia_sp'];} ?>" required="">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name="trang_thai" value="<?php if(isset($_POST['trang_thai'])){echo $_POST['trang_thai'];}else{echo $row['trang_thai'];} ?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Lớp</label>
                            <input type="text" class="form-control" name="trang_thai" value="<?php if(isset($_POST['trang_thai'])){echo $_POST['trang_thai'];}else{echo $row['trang_thai'];} ?>" required="">
                        </div>
                        <div class="form-group">
                            <label>khóa</label>
                            <input type="text" class="form-control" name="trang_thai" value="<?php if(isset($_POST['trang_thai'])){echo $_POST['trang_thai'];}else{echo $row['trang_thai'];} ?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Chuyên ngành</label>
                            <input type="text" class="form-control" name="trang_thai" value="<?php if(isset($_POST['trang_thai'])){echo $_POST['trang_thai'];}else{echo $row['trang_thai'];} ?>" required="">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                    <button type="reset" class="btn btn-default" name="reset">Làm mới</button>

                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
