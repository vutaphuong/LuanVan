<?php
	include 'config/kiemtra_SESION.php';
    include 'classes/config.php';
    include 'classes/function.php';
  	spl_autoload_register("loadClass");
  	if(isset($_POST["sm"]))
  	{
  		$obj1=new Db();
	  	$mssv = $_POST["masv"];
	  	$hoten = $_POST["hoten"];
	  	$gt = $_POST["gt"];
	  	$noio = $_POST["noio"];
	  	$quequan = $_POST["quequan"];
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
	  	$obj1->update("UPDATE `sinhvien` SET `hoten` = '$hoten', `gt` = '$gt', `noio` = '$noio', `quequan` = '$quequan', `manganh` = '$manganh', `makhoa` = '$makhoa', `covanht` = '$magv' WHERE `sinhvien`.`mssv` = '$mssv'");

  	header('location:themsinhvien.php');
	}
  	if(isset($_POST['submit']))
  	{
  		$sothich=$_POST['st'];
  		$email=$_POST['email'];
  		$sdt=$_POST['sdt'];
  		$obj = new Db();
	  	$obj->update("UPDATE `sinhvien` SET `sothich` = '$sothich', `email` = '$email', `sdt` = '$sdt' WHERE `sinhvien`.`mssv` = '$tennd'");

  	header('location:thongtin.php');
  	}
?>