<?php
class demo
{
    public function connect()
	{   
        $servername = "localhost";
        $database = "db_kltn";
        $username = "root";
        $password = "";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        /*echo "Connected successfully";*/
        /*mysqli_close($conn);*/
        return $conn;

	}

    public function timkiem($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		mysqli_close($link);
		$i=mysqli_num_rows($ketqua);
		if ($i > 0) 
			{
				// Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.				
	
				while ($row = mysqli_fetch_assoc($ketqua)) 
				{
					$Gv_id = $row['Gv_id'];
					$Gv_hoten = $row['Gv_hoten'];
					$DeTai_madetai = $row['DeTai_madetai'];
					$DeTai_tendetai = $row['DeTai_tendetai'];
					$Loai_tenloai = $row['Loai_tenloai'];
                    $DeTai_mota = $row['DeTai_mota'];
					$DeTai_yeucau = $row['DeTai_yeucau'];
					$DeTai_trangthai = $row['DeTai_trangthai'];
					 
					echo 
					'
                    <tr style="border-bottom:hidden">
                        <td style="border-right:hidden">ID giảng viên:</td>
                        <td>
                        <input name="txtgvid" type="text" id="txtgvid" value="'.$Gv_id.'" style="width:570px;" /></td>
                    </tr>
					<tr style="border-bottom:hidden">
                        <td style="border-right:hidden">Giảng viên hướng dẫn:</td>
                        <td>
                        <input name="txtGv_hoten" type="text" id="txtGv_hoten" value="'.$Gv_hoten.'" style="width:570px;" /></td>
                    </tr>
                    <tr style="border-bottom:hidden">
                        <td style="border-right:hidden">Mã đề tài:</td>
                        <td>
                        <input name="txtmdt" type="text" id="txtmdt" value="'.$DeTai_madetai.'" style="width:570px;" /></td>
                    </tr>
                    <tr style="border-bottom:hidden">
                        <td style="border-right:hidden">Tên đề tài:</td>
                        <td>
                        <input name="txttdt" type="text" id="txttdt" value="'.$DeTai_tendetai.'" style="width:570px;" /></td>
                    </tr>
					<tr style="border-bottom:hidden">
                        <td style="border-right:hidden">Loại đề tài:</td>
                        <td>
                        <input name="txttdt" type="text" id="txttdt" value="'.$Loai_tenloai.'" style="width:570px;" /></td>
                    </tr>
                    <tr style="border-bottom:hidden">
                        <td style="border-right:hidden">Mô tả:</td>
                        <td>
                        <input name="txtmota" type="text" id="txtmota" value="'.$DeTai_mota.'" style="width:570px;" />
						</td>
                    </tr>
                    <tr style="border-bottom:hidden">
                        <td style="border-right:hidden">Yêu cầu:</td>
                        <td>
                        <input name="txtyeucau" type="text" id="txtyeucau" value="'.$DeTai_yeucau.'" style="width:570px;" /></td>
                    </tr>
                    <tr style="border-bottom:hidden">
                        <td style="border-right:hidden">Trạng thái:</td>
                        <td>
                        <input name="txttrangthai" type="text" id="txttrangthai" value="'.$DeTai_trangthai.'" style="width:570px;" /></td>
                    </tr>
                
					';
				}
			} 
			
	}

    public function waitinglist($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		mysqli_close($link);
		$i=mysqli_num_rows($ketqua);
		if ($i > 0) 
		{
	    	// Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.				
	
			while ($row = mysqli_fetch_assoc($ketqua)) 
			{
				$DeTai_madetai = $row['DeTai_madetai'];
				$Gv_hoten = $row['Gv_hoten'];
				$DeTai_tendetai = $row['DeTai_tendetai'];
                
					 
				echo 
				'
                <tr>
                <td style="width: 140px;">'.$Gv_hoten.'</td>
                <td align="left" valign="middle"><a href="?id='.$DeTai_madetai.'" style="text-decoration:none; color:#000">'.$DeTai_tendetai.'</a></td>
            </tr>
				';
			}
		} 
		else 
		{
			echo "<script type='text/javascript'>alert('Không tìm thấy kết quả!');</script>";
		}
	}

    public function xacnhandetai($sql)
	{
		$link=$this->connect();
		if(mysqli_query($link,$sql))	
		{
			return 1;	
		}
		else
		{
			return 0;	
		}
		mysqli_close($connect);
	}
	public function themxoasua($sql)
	{
		$link=$this->connect();
		if(mysqli_query($link,$sql))	
		{
			return 1;	
		}
		else
		{
			return 0;	
		}
		
	}

}

?>