<?php
	include 'config/kiemtra_SESION.php';
	include 'classes/config.php';
	include 'classes/function.php';
  spl_autoload_register("loadClass");
?>

<!doctype html>
<html>
<head><meta http-equiv="content-type" content="text/html; charset=utf-8"/>

<title>Đăng ký môn học STUonline</title>
    <link href="css/hover.css" rel="stylesheet" media="all">
     <link href="css/magic.css" rel="stylesheet">
     <link href="css/logoheader.css" rel="stylesheet">
     <link rel="stylesheet" href="css\dinhdangnut.css">
     <!--<link href="css/Untitled-3.css" rel="stylesheet">-->

<script language=JavaScript>
    var txt=" Đăng ký môn học STUonline";
    var expert=500;
    // speed of roll
    var refresh=null;
    function marquee_title(){
    document.title=txt;
    txt=txt.substring(1,txt.lenghth)+txt.charAt(0);
    refresh=setTimeout("marquee_title()",expert);
    }
    marquee_title();
</script>
    <!--icon-->
    <link href="image/amarok.png" rel="icon" />


</head>
<body > 
	<?php
    $obj1=new Db();
    $rowskhoa=$obj1->select('select tenkhoa from khoa');  
    $rowslop=$obj1->select('select tenlop from lop');  
		if(isset($_POST['sm']))
		{
			$mssv = $_POST["mssv"];
			$hoten = $_POST["hoten"];
      $ngaysinh=$_POST["ngaysinh"];
      $ngaynhaphoc=$_POST["namnhaphoc"];
			$gioitinh = $_POST["gt"];
			$quequan = $_POST["quequan"];
			$noio = $_POST["noio"];
      if(isset($_POST['tenkhoa']))
      {
        $tenkhoa=$_POST['tenkhoa'];
        $khoa=$obj1->select("select makhoa from khoa where tenkhoa='$tenkhoa'");
        foreach ($khoa as $getmakhoa) {
          $makhoa=$getmakhoa['makhoa'];
        }
      }
      if(isset($_POST['tengv']))
      {
        $tengv=$_POST['tengv'];
        $covanht=$obj1->select("select magv from giangvien where hoten='$tengv'");
        foreach ($covanht as $getcovanht) {
          $magv=$getcovanht['magv'];
        }
      }
      if(isset($_POST['lop']))
      {
        $tenlop=$_POST['lop'];
        $laymalop=$obj1->select("select malop from lop where tenlop='$tenlop'");
        foreach ($laymalop as $item) {
          $malop=$item['malop'];
        }
      }
      //var_dump($mssv,$hoten,$ngaysinh,$ngaynhaphoc,$gioitinh,$quequan,$noio,$makhoa,$malop);
			$obj = new Db();
      //echo "INSERT INTO `sinhvien` (`mssv`, `pass`, `hoten`, `machitietsv`, `malop`, `manv`) VALUES ('$mssv', '$mssv', '$hoten', '$mssv', '$malop', '$tennd')";
      //die();
	   	$addsinhvien=$obj->insert("INSERT INTO `sinhvien` (`mssv`, `pass`, `hoten`, `machitietsv`, `malop`, `manv`) VALUES ('$mssv', '$mssv', '$hoten', '$mssv', '$malop', '$tennd')");
      $addchitietsinhvien=$obj->insert("INSERT INTO `chitietsv` (`machitietsv`, `mssv`, `ngaysinh`, `gioitinh`, `quequan`, `noio`, `sothich`, `email`, `avata`, `sdt`, `ngaynhaphoc`) VALUES ('$mssv', '$mssv', '$ngaysinh', '$gioitinh', '$quequan', '$noio', NULL, NULL, NULL, NULL, '$ngaynhaphoc')");
   	}
   	?>

    <div id="header">
      <table align="center" class="tb">
          <tr class="logo"><td class="logophai stu1">S</td><td class="logotrai stu2">T</td><td class="logophai stu1">U</td><td class="logotrai">o</td><td class="logophai">n</td><td class="logotrai">l</td><td class="logophai">i</td><td class="logotrai">n</td><td class="logophai">e</td></tr>
     </table>  
   </div>   

   <form action="themsinhvien.php" method="post">
        <input class="vien" type="hidden" name="manv">
   		<table align="center" style="margin: 0 auto;" id="formthemsv" cellpadding="2" cellspacing="5px">
   		<tr>
   		<td colspan="2" align="center" style="color: blue;font-size: 30px;">Thêm sinh viên</td>
   		</tr>
   			<tr>
   				<td class="nvnhap">MSSV</td>
   				<td><input class="vien" type="text" name="mssv" size="38px" placeholder="Nhập Mã số sinh viên" required></input></td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Tên sinh viên</td>
   				<td><input class="vien" type="text" name="hoten" size="38px" placeholder="Nhập Tên của sinh viên" required></input></td>
   			</tr>
        <tr>
          <td class="nvnhap">Ngày sinh</td>
          <td><input class="vien" type="date" name="ngaysinh" size="38px" placeholder="Nhập ngày sinh" required></input></td>
        </tr>
        <tr>
          <td class="nvnhap">Ngày nhập học</td>
          <td><input class="vien" type="date" name="namnhaphoc" size="38px" placeholder="Nhập (ngày, tháng, năm) sinh viên nhập học" required></input></td>
        </tr>
   			<tr>
   				<td class="nvnhap">Giới tính</td>
   				<td class="gt2"><input type="radio" name="gt" value="Nam" checked="checked" required class="gt1">Nam</input> <input type="radio" name="gt" value="Nữ" class="gt1">Nữ</input></td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Quê quán</td>
   				<td>
	   				<input class="vien" type="text" name="quequan" size="38px" placeholder="Nhập quê quán của sinh viên" required>
	   			</td>
   			</tr>
   			<tr>
	   			<td class="nvnhap">Nơi ở</td>
	   			<td><input class="vien" type="text" name="noio" size="38px" placeholder="Nhập nơi ở của Sinh viên" required></input></td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Khoa</td>
   				<td>
	   				<select class="option" name="tenkhoa" style="width: 340px;height: 30px">
	   					<option>Chọn Khoa</option>
              <?php 
                foreach($rowskhoa as $khoa)
                {
               ?>
	   					   <option><?php echo $khoa['tenkhoa']?></option>
  	   				  <?php
               }
              ?>
	   				</select>
   				</td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Lớp</td>
   				<td>
   					<select class="option" name="lop" style="width: 340px;height: 30px" required>
   						<option >Chọn lớp</option>
   						<?php 
                foreach($rowslop as $laylop)
                {
               ?>
                 <option><?php echo $laylop['tenlop']?></option>
              <?php
               }
              ?>
   					</select>
   				</td>
   			</tr>
   			<tr>
   				<td colspan="2" align="right"><input type="submit" name="sm" value="Insert" class="rs"></input></td>
   			</tr>
   		</table>
   </form>
   			 <?php
            	$obj = new Db();
               $laytoanboinfosv=$obj->select("select * from sinhvien, chitietsv where sinhvien.mssv=chitietsv.mssv");
               $showtenkhoa=$obj->select("select tenkhoa from khoa");
               $showtenlop=$obj->select("select tenlop from lop");
            ?>
              <table border="1" cellpadding="1" cellspacing="1" align="center" width="1300px">
                <tr>
                  <td colspan="11" align="center" style="font-family: 'Comic Sans MS';font-size: 30px;color: blue;">Danh sách sinh viên</td>
                </tr>
                <tr>
  	            	<td align="center">Mã số sinh viên</td>
  	            	<td align="center">Họ và tên</td>
                  <td align="center">Ngày sinh</td>
  	            	<td align="center">Giới tính</td>
  	            	<td align="center">Quê quán</td>
                  <td align="center">Nơi ở</td>
  	            	<td align="center">Người thêm</td>
  	            	<td align="center">Khoa</td>
                  <td align="center">Lớp</td>
  	            	<td align="center">Ngày nhập học</td>
                  <td align="center">Chức năng</td>
                </tr>
                	<?php
                	foreach ($laytoanboinfosv as $row)
                	{
                	?>
                		<tr>
	                		<td align="center"><?php echo $row["mssv"] ?></td>
	                		<td><?php echo $row["hoten"] ?></td>
                      <td><?php echo date('d-m-Y',strtotime($row['ngaysinh'])); ?></td>
	                		<td align="center"><?php echo $row["gioitinh"] ?></td>
	                		<td><?php echo $row["quequan"]?></td>
                      <td><?php echo $row["noio"]?></td>
	                		<td>
                        <?php
                          $showmanv=$row["manv"];
                          $showtennv=$obj->select("select hoten from nhanvien where manv='$showmanv'");
                          foreach ($showtennv as $show) 
                          {
                            echo $show['hoten'];
                          }
                        ?>
                        </td>
	                		<td>
                        <?php
                          foreach ($showtenkhoa as $tenkhoa) 
                          {
                            echo $tenkhoa['tenkhoa'];
                          }
                        ?>
                      </td>
                      <td align="center">
                        <?php
                          $showmalop=$row['malop'];
                          $showtenlop=$obj->select("select tenlop from lop where malop='$showmalop' ");
                          foreach ($showtenlop as $tenlop) 
                          {
                            echo $tenlop['tenlop'];
                          }
                        ?>
                      </td>
                      <!-- Định dạng lại ngày echo date_format($date,"Y/m/d H:i:s") -->
                      <!-- Định dạng lại ngày echo date('d/m/Y H:i:s', strtotime($string_date)); -->
                      <td align="center"><?php echo date('d-m-Y',strtotime($row['ngaynhaphoc'])); ?></td>
	                		<td> <a href="chinhsuasv.php?mssv=<?php echo $row['mssv']; ?>">Chỉnh sửa</a>
                        &nbsp;<a href="kiemtraduyet.php?mssv=<?php echo $row["mssv"];?>">Xóa</a></td>
                		</tr>
                	<?php
                	}
                	?>
                  <tr><td colspan="11" align="right"><a href="thongtinsvdkmh.php"><input type="button" name="quayvethongtinsvdkmh" value="Quay về Trang chủ" class="backhome"></a></td></tr>
              </table>
              <?php
              ob_end_flush();
            ?>
</body>
</html>