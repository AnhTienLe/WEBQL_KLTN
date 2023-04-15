<?php  
	$email= $_GET['email'];
	$pass=$_GET['pass'];
	$sql="SELECT * FROM thanhvien WHERE email='$email' AND mat_khau='$pass'";
	$query=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($query);
?>

<div class="row">
    <ol class="breadcrumb">
        <li><a href="quantri.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thông tin thành viên</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">					
            <div class="panel-body" style="position: relative;">			
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">ID</th>
                            <th data-sortable="true">Email</th>
                            <th data-sortable="true">Mật khẩu</th>
                            <th data-sortable="true">Quyền truy cập</th>
                            <th data-sortable="true">Sửa</th>
                            <th data-sortable="true">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 300px;">
                            <td data-checkbox="true"><?php echo $row['id_thanhvien']; ?></td>
                            <td data-checkbox="true"><a href="quantri.php?page_layout=suatv&id_thanhvien=<?php echo $row['id_thanhvien'];?>"><?php echo $row['email']; ?></a></td>
                            <td data-checkbox="true"><?php echo $row['mat_khau']; ?></td>
                            <td data-sortable="true"><?php echo $row['quyen_truy_cap']; ?></td>
                            <td>
                                <a href="quantri.php?page_layout=suatv&id_thanhvien=<?php echo $row['id_thanhvien']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>
                            <td>
                                <a onclick="return xoatv();" href="./chucnang/thanhvien/xoatv.php?id_thanhvien=<?php echo $row['id_thanhvien']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!--/.row-->	