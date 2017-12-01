<?php
    include 'classes/config.php';
    include 'classes/function.php';
  	spl_autoload_register("loadClass");

  	if(isset($_GET["sm"]))
  	{
	  	$mssv = $_GET["masv"];
	  	$hoten = $_GET["hoten"];
	  	$gt = $_GET["gt"];
	  	$noio = $_GET["noio"];
	  	$quequan = $_GET["quequan"];
	  	$manganh = $_GET["manganh"];
	  	$makhoa = $_GET["makhoa"];
	  	$magv = $_GET["covanht"];
	  	$obj = new Db();
	  	$moi=$obj->select("UPDATE `sinhvien` SET `hoten` = '$hoten', `gt` = '$gt', `noio` = '$noio', `quequan` = '$quequan', `manganh` = '$manganh', `makhoa` = '$makhoa', `covanht` = '$magv' WHERE `sinhvien`.`mssv` = '$mssv'");
	}
  	header('location:themsinhvien.php');
?>