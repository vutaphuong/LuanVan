<?php
if (!isset($_SESSION)) 
  {
    session_start();
  }

if (isset($_SESSION['user'])) {
  
  $tennd=$_SESSION['user'];
}
else
{  
  header('Location: index.php');
}
include 'config/config.php';

if (isset($_POST['submit'])) 
            {
                $sothich=$_POST['st'];
                $sqleditst="UPDATE `sinhvien` SET `sothich` = '$sothich' WHERE `mssv` = '$tennd'";       
                $dataeditst = $obj->prepare($sqleditst);
                $dataeditst->execute();

                if(isset($_POST['editavt']))
                {
                $editavatar=$_POST['editavt'];
                $sqleditavt="UPDATE `sinhvien` SET `avt` = '$editavatar' WHERE `mssv` = '$tennd'";       
                $editdataavt = $obj->prepare($sqleditavt);
                $editdataavt->execute();
                }
                else
                {
                  $editdataavt='';

                }

                $editemail=$_POST['email'];
                $sqleditemail="UPDATE `sinhvien` SET `email` = '$editemail' WHERE `mssv` = '$tennd'";
                $dataeditemail = $obj->prepare($sqleditemail);
                $dataeditemail->execute();

                $editsdt=$_POST['sdt'];
                $sqleditsdt="UPDATE `sinhvien` SET `sdt` = '$editsdt' WHERE `mssv` = '$tennd'";
                $editdatasdt = $obj->prepare($sqleditsdt);
                $editdatasdt->execute();
           }
           header('Location: thongtin.php');
?>