<script>
	function Xoa_GV(){
		var conf=confirm('Bạn có muốn xóa thông tin giảng viên này không?');
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
    
    $sql="SELECT * FROM giangvien ORDER BY Gv_id ASC LIMIT $perPage,$rowPerPage";

	$query=mysqli_query($conn, $sql);
    $totalRows=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM giangvien"));
    $totalPages=ceil($totalRows/$rowPerPage);
    $listPage="";
    for($i=1;$i<=$totalPages;$i++)
    {
        if($page==$i){
            $listPage.='<li class="active"><a href="quantri.php?page_layout=Danhsach_GV&page='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPage.='<li><a href="quantri.php?page_layout=Danhsach_GV&page='.$i.'">'.$i.'</a></li>';
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
        <h1 class="page-header">Danh sách giảng viên</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">	
        <br />
         <a href="quantri.php?page_layout=Them_GV" class="btn btn-primary" style="margin: 10px 0 60px 0; position: absolute; padding-right: 10px; left: 27px;">Thêm giảng viên</a>	
         <br />		
         <br />			
            <div class="panel-body" style="position: relative;">
               			
                 <table width="1000" height="105" data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">Họ tên</th>
                            <th data-sortable="true">Giới tính</th>
                            <th data-sortable="true">Chuyên ngành</th>
                            <th data-sortable="true">Khoa</th>
                            <th data-sortable="true">Sửa</th>
                            <th data-sortable="true">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr style="height: 45px;">
                            <td data-checkbox="true"><a href="quantri.php?page_layout=ThongTin_GV&Gv_id=<?php echo $row['Gv_id']; ?>"><?php echo $row['Gv_hoten']; ?></a></td>
                            <td data-checkbox="true"><?php echo $row['Gv_gioitinh']; ?></td>
                            <td data-sortable="true"><?php echo $row['CN_machuyennganh']; ?></td>
                            <td data-sortable="true"><?php echo $row['Khoa_makhoa']; ?></td>
                            <td>
                                <a href="quantri.php?page_layout=Sua_GV&Gv_id=<?php echo $row['Gv_id']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>
                            <td>
                                <a onclick="return Xoa_GV();" href="./chucnang/QL_GV/Xoa_GV.php?Gv_id=<?php echo $row['Gv_id']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
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