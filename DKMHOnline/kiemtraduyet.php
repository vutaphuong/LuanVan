<?php
	try{
		$pdh = new PDO("mysql:host=localhost;dbname=dkmhonline","root","");
		$pdh->query("set name 'utf8' ");
	}
	catch(Exception $e){
		echo $e->getMessage(); exit;
	}

	$mssv = isset($_GET["mssv"])?$_GET["mssv"]:"";
	$sql = "delete from sinhvien where mssv = :mssv ";
	$arr = array(":mssv"=>$mssv);

	$stm = $pdh->prepare($sql);
	$stm->execute($arr);
	$n = $stm->rowCount();
	if($n>0) $thongbao = "Đã xóa $n sinh viên !";
	else $thongbao="Xóa bị lỗi!";
?>
<script language="javascript">
	alert("<?php echo $thongbao;?>");
	window.location = "index.php";
</script>