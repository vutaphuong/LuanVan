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
		if(isset($_POST['sm']))
		{
			$mssv = $_POST["mssv"];
			$hoten = $_POST["hoten"];
			$gt = $_POST["gt"];
			$quequan = $_POST["quequan"];
			$noio = $_POST["noio"];
			$makhoa = $_POST["makhoa"];
			$manganh = $_POST["manganh"];
			$magv = $_POST["magv"];

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
	   				<select name="quequan" style="width: 294px;height: 30px">
	   					<option>Chọn quê quán của Sinh viên</option>
	   					<option>Hà Nội</option>
	   					<option>Thái Bình</option>
	   					<option>Quảng Bình</option>
	   					<option>Thanh Hóa</option>
	   					<option>Huế</option>
	   					<option>Thái Nguyên</option>
	   					<option>Lâm Đồng</option>
	   					<option>Đăk Nông</option>
	   				</select>
	   			</td>
   			</tr>
   			<tr>
	   			<td class="nvnhap">Nơi ở</td>
	   			<td><input class="vien" type="text" name="noio" size="40px" placeholder="Nhập nơi ở của Sinh viên" required></input></td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Mã nhân viên</td>
   				<td>
	   				<select name="manv" style="width: 294px;height: 30px">
	   					<option>Chọn mã Nhân viên</option>
	   					<option>NV12345678</option>
	   					<option>NV87654321</option>
	   				</select>
	   			</td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Mã khoa</td>
   				<td>
	   				<select name="makhoa" style="width: 294px;height: 30px">
	   					<option>Chọn mã Khoa</option>
	   					<option>CNTT</option>
	   					<option>CNTP</option>
	   				</select>
   				</td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Mã nghành</td>
   				<td>
   					<select name="manganh" style="width: 294px;height: 30px">
   						<option>Chọn mã Nghành</option>
   						<option>KDCLSP</option>
   						<option>KTBQTP</option>
   						<option>LTAND</option>
   					</select>
   				</td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Mã giảng viên</td>
   				<td>
   					<select name="magv" style="width: 294px;height: 30px" required>
   						<option>Chọn mã Giảng viên</option>
   						<option>GV12345678</option>
   						<option>GV87654321</option>
   					</select>
   				</td>
   			</tr>
   			<tr>
   				<td colspan="2" align="right"><input type="submit" name="sm" value="Insert" class="rs"></input></td>
   			</tr>
   		</table>
   </form>
   			 <?php
      //       	try{
      //       		$pdh = new PDO("mysql:host=localhost;dbname=dkmhonline","root","");
      //       		$pdh->query(" set names 'utf8' ");
      //       	}
      //       	catch(Exception $e){
      //       		echo $e->getMessage(); exit;
            	//}
            	// if(isset($_POST["sm"]))
            	// {
            	// 	$sql="insert into sinhvien(mssv,hoten,gt,quequan,manv,makhoa,manganh,covanht) values(:mssv,:hoten,:gt,:quequan,:manv,:makhoa,:manganh,:covanht)";
            	// 	$arr = array(":mssv"=>$_POST["mssv"],":hoten"=>$_POST["hoten"],":gt"=>$_POST["gt"],":quequan"=>$_POST["quequan"],":manv"=>$_POST["manv"],":makhoa"=>$_POST["makhoa"],":manganh"=>$_POST["manganh"],":covanht"=>$_POST["covanht"]);

            	// 	print_r($arr);

            	// 	$stm = $pdh->prepare($sql);
            	// 	$stm->execute($arr);
            	// 	$n = $stm->rowCount();

            	// 	print_r($stm);
            	// 	print_r($n);

            	// 	if($n>0) 
            	// 	{
            	// 		echo "Đã thêm $n sinh viên";
            	// 	}
            	// 	else 
            	// 		echo "Lỗi! Không thêm được sinh viên";
            	// }
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
	            	<td align="center">Mã Nhân viên</td>
	            	<td align="center">Mã nghành</td>
	            	<td align="center">Mã khoa</td>
	            	<td align="center">Mã giảng viên</td>
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
	                		<td><?php echo $row["manv"] ?></td>
	                		<td align="center"><?php echo $row["manganh"] ?></td>
	                		<td align="center"><?php echo $row["makhoa"] ?></td>
	                		<td><?php echo $row["covanht"] ?></td>
	                		<td><a href="kiemtraduyet.php?mssv=<?php echo $row["mssv"];?>">Xóa  <a href="chinhsuasv.php">Chỉnh sửa</td>
                		</tr>
                	<?php
                	}
                	?>
              </table>
</body>
</html>