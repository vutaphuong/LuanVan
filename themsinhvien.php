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
     <link href="css/formnv.css" rel="stylesheet">
     <link rel="stylesheet" href="dinhdangnut.css">
     <link rel="stylesheet" href="formnv">
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
    $rowsnganh=$obj1->select('select tennganh from nganh');    
    $rowscvht=$obj1->select('select hoten from giangvien');
		if(isset($_POST['sm']))
		{
			$mssv = $_POST["mssv"];
			$hoten = $_POST["hoten"];
			$gt = $_POST["gt"];
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
      if(isset($_POST['tenkhoa']))
      {
        $tennganh=$_POST['tennganh'];
        $nganh=$obj1->select("select manganh from nganh where tennganh='$tennganh'");
        foreach ($nganh as $getmanganh) {
          $manganh=$getmanganh['manganh'];
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
			$obj = new Db()	;
	   		$rows=$obj->insert("INSERT INTO `sinhvien` (`mssv`, `pass`, `hoten`, `gt`, `quequan`, `noio`, `manv`, `sothich`, `avt`, `email`, `sdt`, `manganh`, `makhoa`, `covanht`) 
	   			VALUES ('$mssv','$mssv', '$hoten', '$gt', '$quequan', '$noio', '$tennd', NULL, NULL, NULL, NULL, '$manganh', '$makhoa', '$magv')");
   		}
   	?>


    <div id="header">
      <table align="center" class="tb">
          <tr class="logo"><td class="logophai stu1">S</td><td class="logotrai stu2">T</td><td class="logophai stu1">U</td><td class="logotrai">o</td><td class="logophai">n</td><td class="logotrai">l</td><td class="logophai">i</td><td class="logotrai">n</td><td class="logophai">e</td></tr>
     </table>  
   </div>   
   <form action="themsinhvien.php" method="post">
        <input class="vien" type="hidden" name="manv">
   		<table align="center" style="margin: 0 auto;">
   		<tr>
   		<td colspan="2" align="center" style="color: blue;font-size: 30px;">Thêm sinh viên</td>
   		</tr>
   			<tr>
   				<td class="nvnhap">MSSV</td>
   				<td><input class="vien" type="text" name="mssv" size="40px" placeholder="Nhập Mã số sinh viên" required></input></td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Tên sinh viên</td>
   				<td><input class="vien" type="text" name="hoten" size="40px" placeholder="Nhập Tên của sinh viên" required></input></td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Giới tính</td>
   				<td><input type="radio" name="gt" value="Nam" checked="checked" required>Nam</input> <input type="radio" name="gt" value="Nữ">Nữ</input></td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Quê quán</td>
   				<td>
	   				<input class="vien" type="text" name="quequan" size="40px" placeholder="Nhập quê quán của sinh viên" required>
	   			</td>
   			</tr>
   			<tr>
	   			<td class="nvnhap">Nơi ở</td>
	   			<td><input class="vien" type="text" name="noio" size="40px" placeholder="Nhập nơi ở của Sinh viên" required></input></td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Mã nhân viên</td>
	   				
   			</tr>
   			<tr>
   				<td class="nvnhap">Khoa</td>
   				<td>
	   				<select name="tenkhoa" style="width: 294px;height: 30px">
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
   				<td class="nvnhap">Ngành</td>
   				<td>
   					<select name="tennganh" style="width: 294px;height: 30px">
   						<option>Chọn Ngành</option>
                <?php 
                foreach($rowsnganh as $nganh)
                {
               ?>
                 <option><?php echo $nganh['tennganh']?></option>
              <?php
               }
              ?>
   					</select>
   				</td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Cố vấn học tập</td>
   				<td>
   					<select name="tengv" style="width: 294px;height: 30px" required>
   						<option>Chọn mã Giảng viên</option>
   						<?php 
                foreach($rowscvht as $cvht)
                {
               ?>
                 <option><?php echo $cvht['hoten']?></option>
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
               $rows=$obj->select("select * from sinhvien");
            ?>
              <table border="1" cellpadding="1" cellspacing="1" align="center" width="1300px">
                <tr>
                  <td colspan="10" align="center" style="font-family: 'Comic Sans MS';font-size: 30px;color: blue;">Danh sách sinh viên</td>
                </tr>
                <tr>
	            	<td align="center">Mã số sinh viên</td>
	            	<td align="center">Tên sinh viên</td>
	            	<td align="center">Giới tính</td>
	            	<td align="center">Quê quán</td>
                <td align="center">Nơi ở</td>
	            	<td align="center">Người thêm</td>
	            	<td align="center">Nghành</td>
	            	<td align="center">Khoa</td>
	            	<td align="center">Cố vấn học tập</td>
	            	<td align="center">Chức năng</td>
                </tr>
                	<?php
                	foreach ($rows as $row)
                	{
                	?>
                		<tr>
	                		<td><?php echo $row["mssv"] ?></td>
	                		<td><?php echo $row["hoten"] ?></td>
	                		<td align="center"><?php echo $row["gt"] ?></td>
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
                          $showmanganh=$row["manganh"];
                          $showtennganh=$obj->select("select tennganh from nganh where manganh='$showmanganh'");
                          foreach ($showtennganh as $show) 
                          {
                            echo $show['tennganh'];
                          }
                        ?></td>
	                		<td>
                        <?php
                          $showmakhoa=$row["makhoa"];
                          $showtenkhoa=$obj->select("select tenkhoa from khoa where makhoa='$showmakhoa'");
                          foreach ($showtenkhoa as $show) 
                          {
                            echo $show['tenkhoa'];
                          }
                        ?></td>
	                		<td><?php echo $row["covanht"] ?></td>
	                		<td> <a href="chinhsuasv.php?mssv=<?php echo $row['mssv'];?>">Chỉnh sửa</a>
                        &nbsp<a href="kiemtraduyet.php?mssv=<?php echo $row["mssv"];?>">Xóa</a></td>
                		</tr>
                	<?php
                	}
                	?>
              </table>
              <?php
              ob_end_flush();
            ?>
</body>
</html>