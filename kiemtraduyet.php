<?php
	try{
		$pdh = new PDO("mysql:host=localhost;dbname=dkmhonline","root","");
		$pdh->query("set name 'utf8' ");
	}
	catch(Exception $e){
		echo $e->getMessage(); exit;
	}

	$mssv = isset($_GET["mssv"])?$_GET["mssv"]:"";
	$sql = "delete from dangky where mssv = :mssv ";
	$sql1 = "delete from sinhvien where mssv= :mssv ";
	$arr = array(":mssv"=>$mssv);

	$stm = $pdh->prepare($sql);
	$stm->execute($arr);  
	$stm1 = $pdh->prepare($sql1);
	$stm1->execute($arr);              
	$n = $stm->rowCount();
	$m = $stm1->rowCount();
	if($m>0) $thongbao = "Đã xóa $m sinh viên !";
	else $thongbao="Xóa bị lỗi!";
?>
<script language="javascript">
	alert("<?php echo $thongbao;?>");
	window.location = "themsinhvien.php";
</script>