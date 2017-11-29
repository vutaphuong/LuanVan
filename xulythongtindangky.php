<?php
    include 'config/kiemtra_SESION.php';//kiem tra nguoi dung
include 'config/config.php'; //file cau hinh server
include "include/function.php";//include file dinh nghia ham
spl_autoload_register("loadClass");
//print_r($_POST);exit;
if(isset($_POST['submit'])) 
            {
                $ngaydk=$_POST['ngaydk'];
                $obj = new Db();
                $dangky=$_POST['dangky'];
                $obj->delete("DELETE FROM dangky WHERE mssv ='$tennd'");
                if(isset($_POST['dangky']))
                {
                    foreach ($_POST['dangky'] as $value) 
                    {              
                        $sql="INSERT INTO `dangky` (`madk`, `ngaydk`, `mssv`, `mamh`, `manv`, `magv`) VALUES (NULL, '$ngaydk', '$tennd', '$value', NULL, NULL)";
                        echo $sql;                          
                           $obj->insert($sql );
                          // exit;
                    }
                }
          }      
           header('Location: thongtindangky.php');
?>