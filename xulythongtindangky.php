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
                //$obj->delete("DELETE FROM `dangkymonhoc` WHERE mssv ='$tennd'");
                $kiemtradulieudky=$obj->select("SELECT mamh FROM dangkymonhoc WHERE mssv='$tennd'");
                 //ktra database rong
                    if($kiemtradulieudky==array())
                    {
                        foreach ($dangky as $value) 
                        {
                            $sql="INSERT INTO `dangkymonhoc` (`madk`, `ngaydk`, `mssv`, `mamh`) VALUES (NULL, '$ngaydk', '$tennd', '$value')";
                                    echo $sql;                          
                                    $obj->insert($sql);
                        }
                    }
                    else
                    {
                        foreach ($kiemtradulieudky as $dulieu ) 
                        {
                            //Kiểm tra dữ liệu đăng lên vs database
                            if(!in_array($dulieu['mamh'],$dangky))
                            {
                                $kiemtratontai=$dulieu['mamh'];
                                $xoa=$obj->delete("DELETE FROM `dangkymonhoc` WHERE mamh='$kiemtratontai'");
                            }
                        }
                        foreach ($dangky as $dulieudk) 
                            //ma mon 1: 001,`002 va 003 trong do 001 là thêm
                            var_dump($dangky);
                            echo "Chay mon hoc".$dulieudk."<br>";
                        {
                            foreach ($kiemtradulieudky as $ktra) 
                                //ktra là mảng chưa những mamh có trong database
                                echo "Chay mon hoc duoi databse".$ktra['mamh']."<br>";
                                var_dump($ktra);
                            {
                                if(!in_array($dulieudk, $ktra))
                                    //kiểm tra những môn 001, 002, 003 có trong mảng ktra ko
                                {
                                    echo "xuất ra môn đky thêm".$dulieudk."<br>";
                                    $them=$obj->insert("INSERT INTO `dangkymonhoc` (`madk`, `ngaydk`, `mssv`, `mamh`) VALUES (NULL, '$ngaydk', '$tennd', '$dulieudk')");
                                    // echo "Thêm vào databse".$dulieudk."<br>";
                                    // var_dump($them);
                                }
                            }
                        }
                    }
                
            }      
        header('Location: thongtindangky.php');
?>