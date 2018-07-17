<?php
	include 'config/kiemtra_SESION.php';
    include 'classes/config.php';
    include 'classes/function.php';
  	spl_autoload_register("loadClass");

  	if(isset($_POST["sm"]))
  	{
  		$obj1=new Db();
	    $obj2=new Db();
	    $mssv = $_POST["masv"];
	    $hoten = $_POST["hoten"];
	    $ngaysinh = $_POST["ngaysinh"];
	    $ngaynhaphoc = $_POST["ngaynhaphoc"];
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
      	if(isset($_POST['tenlop']))
        {
          $tenlop=$_POST['tenlop'];
          $nganh=$obj1->select("select malop from lop where tenlop='$tenlop'");
          foreach ($nganh as $getmalop) {
            $malop=$getmalop['malop'];
          }
        }
	  	$obj1->update("UPDATE `sinhvien` SET `hoten` = '$hoten', `malop` = '$malop' WHERE `sinhvien`.`mssv` = '$mssv'");
	  	$obj2->update("UPDATE `chitietsv` SET `ngaysinh` = '$ngaysinh', `gioitinh` = '$gt', `quequan` = '$quequan', `noio` = '$noio', `ngaynhaphoc` = '$ngaynhaphoc' WHERE `chitietsv`.`machitietsv` = '$mssv'");
  		header('location:themsinhvien.php');
	}

	//Kiểm tra sửa Thông tin SV
  	if(isset($_POST['submit']) || isset($_POST[""]))
  	{
  		$quequan=$_POST['quequan'];
  		$noio=$_POST['noio'];
  		$sothich=$_POST['st'];
  		$email=$_POST['email'];
  		$sdt=$_POST['sdt'];
  		$obj = new Db();
	  	$obj->update("UPDATE `chitietsv` SET `quequan`='$quequan',`noio`='$noio', `sothich` = '$sothich', `email` = '$email', `sdt` = '$sdt' WHERE `chitietsv`.`mssv` = '$tennd'");

  	header('location:thongtin.php');
  	}
?>