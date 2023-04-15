<script>
	function Xoa_SV(){
		var conf=confirm('Bạn có muốn xóa tài khoản này không?');
		return conf;
	}
</script>
<?php
    if(isset($_GET['page']))
    {
        $page=$_GET['page'];
    }
    else{
        $page=1;
    }
    $rowPerPage=10;
    $perPage=$page*$rowPerPage-$rowPerPage;
	$sql="SELECT * FROM sinhvien ORDER BY Sv_id ASC LIMIT $perPage,$rowPerPage";
	$query=mysqli_query($conn, $sql);
    $totalRows=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM sinhvien"));
    $totalPages=ceil($totalRows/$rowPerPage);
    $listPage="";
    for($i=1;$i<=$totalPages;$i++)
    {
        if($page==$i){
            $listPage.='<li class="active"><a href="quantri.php?page_layout=Danhsach_SV&page='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPage.='<li><a href="quantri.php?page_layout=Danhsach_SV&page='.$i.'">'.$i.'</a></li>';
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
        <h1 class="page-header">Danh sách sinh viên</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">	
        <br />
         <a href="quantri.php?page_layout=Them_SV" class="btn btn-primary" style="margin: 10px 0 60px 0; position: absolute; padding-right: 10px; left: 27px;">Thêm sinh viên</a>	
         <br />		
         <br />		
            <div class="panel-body" style="position: relative;">		
                 <table width="1000" height="105" data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						             
                            <th data-sortable="true"><div align="center">MSSV</div></th>
                            <th data-sortable="true"><div align="center">Họ và tên</div></th>
                            <th data-sortable="true"><div align="center">Giới tính</div></th>
                            <th data-sortable="true"><div align="center">Lớp</div></th>
                            <th data-sortable="true"><div align="center">Khóa</div></th>
                            <th data-sortable="true"><div align="center">Chuyên ngành</div></th>
                            <th data-sortable="true"><div align="center">Khoa</div></th>
                            <th data-sortable="true"><div align="center">Sửa</div></th>
                            <th data-sortable="true"><div align="center">Xóa</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr style="height: 45px;">
                           
                            <td data-checkbox="true"><div align="center"><a href="quantri.php?page_layout=Sua_TK&users_id=<?php echo $row['Sv_id']; ?>"><?php echo $row['Sv_mssv']; ?></a></div></td>
                            <td data-checkbox="true"><div align="center"><?php echo $row['Sv_hoten']; ?></div></td>
                            <td data-sortable="true"><div align="center"><?php echo $row['Sv_gioitinh']; ?></div></td>
                            <td data-sortable="true"><div align="center"><?php echo $row['Lop_malop']; ?></div></td>
                            <td data-sortable="true"><div align="center"><?php echo $row['NK_khoa']; ?></div></td>
                            <td data-sortable="true"><div align="center"><?php echo $row['CN_machuyennganh']; ?></div></td>
                            <td data-sortable="true"><div align="center"><?php echo $row['Khoa_makhoa']; ?></div></td>
                            <td>
                                <a href="quantri.php?page_layout=Sua_SV&Sv_id=<?php echo $row['Sv_id']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>
                            <td>
                                <a onclick="return Xoa_SV();" href="./chucnang/QL_SV/Xoa_SV.php?Sv_id=<?php echo $row['Sv_id']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
                            </td>
                        </tr>
                        <?php  
                            }
                        ?>
                    </tbody>
                </table>
                <ul class="pagination" style="float: right;">
                    <?php  
                        echo $listPage;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div><!--/.row-->	