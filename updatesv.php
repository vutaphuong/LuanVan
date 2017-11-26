<?php
include 'config/kiemtra_SESION.php';
include 'config/config.php';
include "include/function.php";
spl_autoload_register("loadClass");

if(isset($_POST['submit'])) 
            {
            	$obj = new Db();
            	if (isset($_SESSION['user'])) 
            	{
  
                  	$tennd=$_SESSION['user'];
	            }
	            else
	            {  
	                header('Location: index.php');
	            }
                $sothich=$_POST['st'];
                $avatar=$_FILES['editavt'];
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                preg_match('/^DH[0-9]*/', $tennd,$DH);
                preg_match('/^CD[0-9]*/', $tennd,$CD);
                preg_match('/^GV[0-9]*/', $tennd,$GV);
                preg_match('/^NV[0-9]*/', $tennd,$NV);
                if( isset($DH[0])|| isset($CD[0]))
                {
                	$obj->select("UPDATE `sinhvien` SET `sothich` = '$sothich' WHERE `mssv` = '$tennd'");
                	$obj->select("UPDATE `sinhvien` SET `avt` = '$avatar' WHERE `mssv` = '$tennd'");
                	$obj->select("UPDATE `sinhvien` SET `email` = '$email' WHERE `mssv` = '$tennd'");
                	$obj->select("UPDATE `sinhvien` SET `sdt` = '$sdt' WHERE `mssv` = '$tennd'");
                }
                if(isset($GV[0]))
                {
                	$obj->select("UPDATE `giangvien` SET `avt` = '$avatar' WHERE `magv` = '$tennd'");
                	$obj->select("UPDATE `giangvien` SET `email` = '$email' WHERE `magv` = '$tennd'");
                	$obj->select("UPDATE `giangvien` SET `sdt` = '$sdt' WHERE `magv` = '$tennd'");
                }
                if(isset($NV[0]))
                {
                	$obj->select("UPDATE `nhanvien` SET `avt` = '$avatar' WHERE `manv` = '$tennd'");
                	$obj->select("UPDATE `nhanvien` SET `email` = '$email' WHERE `manv` = '$tennd'");
                	$obj->select("UPDATE `nhanvien` SET `sdt` = '$sdt' WHERE `manv` = '$tennd'");
                }
           }
           header('Location: thongtin.php');
?>