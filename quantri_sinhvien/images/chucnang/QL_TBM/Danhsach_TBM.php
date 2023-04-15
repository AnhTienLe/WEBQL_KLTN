<script>
	function Xoa_TBM(){
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
	$sql="SELECT * FROM truongbomon ORDER BY Tbm_id ASC LIMIT $perPage,$rowPerPage";
	$query=mysqli_query($conn, $sql);
    $totalRows=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM truongbomon"));
    $totalPages=ceil($totalRows/$rowPerPage);
    $listPage="";
    for($i=1;$i<=$totalPages;$i++)
    {
        if($page==$i){
            $listPage.='<li class="active"><a href="quantri.php?page_layout=Danhsach_TBM&page='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPage.='<li><a href="quantri.php?page_layout=Danhsach_TBM&page='.$i.'">'.$i.'</a></li>';
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
        <h1 class="page-header">Danh sách trưởng bộ môn</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">	
        <br />
         <a href="quantri.php?page_layout=Them_TBM" class="btn btn-primary" style="margin: 10px 0 60px 0; position: absolute; padding-right: 10px; left: 27px;">Thêm trưởng bộ môn</a>	
         <br />		
         <br />		
            <div class="panel-body" style="position: relative;">		
                 <table width="1000" height="105" data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true"><div align="center">Họ và tên</div></th>   
                            <th data-sortable="true"><div align="center">SĐT</div></th>
                            <th data-sortable="true"><div align="center">Email</div></th>
                            <th data-sortable="true"><div align="center">Sửa</div></th>
                            <th data-sortable="true"><div align="center">Xóa</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr style="height: 45px;">
                            <td data-checkbox="true"><div align="center"><a href="quantri.php?page_layout=Sua_TBM&Tbm_id=<?php echo $row['Tbm_id']; ?>"><?php echo $row['Tbm_hoten']; ?></a></div></td>
                            <td data-checkbox="true"><div align="center"><?php echo $row['Tbm_sdt']; ?></div></td>
                            <td data-sortable="true"><div align="center"><?php echo $row['Tbm_email']; ?></div></td>
                            <td>
                                <a href="quantri.php?page_layout=Sua_TBM&Tbm_id=<?php echo $row['Tbm_id']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>
                            <td>
                                <a onclick="return Xoa_TBM();" href="./chucnang/QL_TBM/Xoa_TBM.php?Tbm_id=<?php echo $row['Tbm_id']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
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