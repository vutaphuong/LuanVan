
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
    <div id="header">
      <table align="center" class="tb">
          <tr class="logo"><td class="logophai stu1">S</td><td class="logotrai stu2">T</td><td class="logophai stu1">U</td><td class="logotrai">o</td><td class="logophai">n</td><td class="logotrai">l</td><td class="logophai">i</td><td class="logotrai">n</td><td class="logophai">e</td></tr>
     </table>  
   </div>   
   <form action="index.php" method="post">
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
   				<td><input type="radio" name="gt" value="name" checked="checked" required>Nam</input> <input type="radio" name="gt" value="nu">Nữ</input></td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Mã nhân viên</td>
   				<td>
	   				<select style="width: 294px;height: 30px">
	   					<option>Chọn mã Nhân viên</option>
	   					<option>NV12345678</option>
	   					<option>NV87654321</option>
	   				</select>
	   			</td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Mã khoa</td>
   				<td>
	   				<select style="width: 294px;height: 30px">
	   					<option>Chọn mã Khoa</option>
	   					<option>CNTT</option>
	   					<option>CNTP</option>
	   				</select>
   				</td>
   			</tr>
   			<tr>
   				<td class="nvnhap">Mã nghành</td>
   				<td>
   					<select style="width: 294px;height: 30px">
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
   					<select style="width: 294px;height: 30px" required>
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
            	try{
            		$pdh = new PDO("mysql:host=localhost;dbname=dkmhonline","root","");
            		$pdh->query(" set names 'utf8' ");
            	}
            	catch(Exception $e){
            		echo $e->getMessage(); exit;
            	}

            	if(isset($_PORT["sm"]))
            	{
            		$sql="insert into sinhvien(mssv,hoten,gt,quequan,manv,covanht,makhoa) values(:mssv,:hoten,:gt,:manv,:makhoa,:manghanh,:magv)";
            		$arr = array(":mssv"=>$_PORT["mssv"],":hoten"=>$_PORT["hoten"],":gt"=>$_PORT["gt"],":manv"=>$_PORT["manv"],":makhoa"=>$_PORT["makhoa"],":manghanh"=>$_PORT["manghanh"],":magv"=>$_PORT["magv"]);
            		$stm = $pdh->prepare($sql);
            		$stm->execute($arr);
            		$n = $stm->rowCount();
            		if($n>0) echo "Đã thêm sinh $n viên";
            		else echo "Lỗi không thêm được sinh viên";
            	}

            	$stm = $pdh->prepare("select * from sinhvien");
            	$stm->execute();
            	$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
            ?>
              <table border="1" cellpadding="1" cellspacing="1" align="center" width="900px">
                <tr>
                  <td colspan="9" align="center" style="font-family: 'Comic Sans MS';font-size: 30px;color: blue;">Danh sách sinh viên</td>
                </tr>
                <tr>
	            	<td>Mã số sinh viên</td>
	            	<td>Tên sinh viên</td>
	            	<td>Giới tính</td>
	            	<td>Quê quán</td>
	            	<td>Mã Nhân viên</td>
	            	<td>Mã nghành</td>
	            	<td>Mã khoa</td>
	            	<td>Mã giảng viên</td>
	            	<td>Chỉnh sửa</td>
                </tr>
                	<?php
                	foreach ($rows as $row)
                	{
                	?>
                		<tr>
	                		<td>
	                		<?php echo $row["mssv"] ?></td>
	                		<td><?php echo $row["hoten"] ?></td>
	                		<td><?php echo $row["gt"] ?></td>
	                		<td><?php echo $row["quequan"] ?></td>
	                		<td><?php echo $row["manv"] ?></td>
	                		<td><?php echo $row["manganh"] ?></td>
	                		<td><?php echo $row["makhoa"] ?></td>
	                		<td><?php echo $row["covanht"] ?></td>
	                		<td><a href="chinhsuasv.php">Chỉnh sửa   <a href='kiemtraduyet.php?mssv=<?php echo $row["mssv"];?>'>Xóa</td>
                		</tr>
                	<?php
                	}
                	?>
              </table>
</body>
</html>