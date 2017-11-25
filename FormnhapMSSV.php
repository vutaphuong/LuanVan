<?php
	function postIndex($index, $value="")
	{
		if(!isset($_POST[$index])) return $value;
		return $_POST[$index];
	}
//Khai bao ham
$nhap = postIndex("nhapmssv");
$tim  = postIndex("tim");
$them = postIndex("them");
$sua  = postIndex("sua");
$xoa  = postIndex("xoa");

//Kiem tra loi
$err = "";
if($nhap="") $err.="<br/>";
?>

<script>
	function kt()
	{
		document.getElementById("loi").innerHTML="";
		if(document.getElementById("nhapmssv").value=="") document.getElementById("loi").innerHTML +="<br />Bạn chưa điền MSSV";
	}
	function check()
	{
		if(document.getElementById("nhapmssv").value=="") {return false;}
		return true;
	}
</script>
<!-- Giao dien -->
<fieldset style="width:380px;margin: 0 auto;">
	<legend style="margin: 0 auto">Form nhập MSSV cho PĐT</legend>
	<form method="post" enctype="multipart/from-data" onsubmit="return check()">
		<table>
			<tr>
				<td>Nhập MSSV</td>
				<td><input type="text" name="nhapmssv" id="nhapmssv" class="nhap" placeholder="Nhập mã số sinh viên"size="36px" onblur="kt()"></input><label for="nhap"></label></td>
			</tr>
			<tr>
				<td colspan="3"><hr/></td>
			</tr>
			<tr>
				<td>Bảng chức năng</td>
				<td style="margin-left:  0px;float: left;"><input type="submit" name="tim" value="Tìm"></input></td>
				<td style="margin-left: 28px;float: left;"><input type="submit" name="them" value="Thêm"></input></td>
				<td style="margin-left: 28px;float: left;"><input type="submit" name="sua" value="Sửa"></input></td>
				<td style="margin-left: 30px;float: left;"><input type="submit" name="xoa" value="Xóa"></input></td>
			</tr>
			<tr>
				<td colspan="3" align="right" style="padding-top: 20px"><a href="#"><input type="button" name="thoat" value="Quay trở lại trang chủ"></input></a></td>
			</tr>
		</table>
		<div id="loi" style="color: red"></div>
	</form>
</fieldset>

<!-- Giao dien sau khi nhap va kiem tra -->

<fieldset style="width: 380px;margin: 0 auto">
	<legend>Thông tin sau khi đăng ký</legend>
	<?php
		if($err != "")
			echo $err;
		else
		{	
			echo "Mã số sinh viên $nhap <br>";
		}
	?>
</fieldset>