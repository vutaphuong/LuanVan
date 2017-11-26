<?php
         include 'config.php';
function select($cot,$bang,$ma,$tennd)
{
            $obj = null;
            try{
                $dsn="mysql:localhost=".HOST."; dbname=".DB_NAME;
                $obj = new PDO($dsn, DB_USER, DB_PASS);
                $obj->query("set names 'utf8' ");
                }
            catch(Exception $e)
            {
                echo $e->getMessage();  exit;
            }
            $sql="SELECT $cot FROM `$bang`";
            $sql."WHERE $ma='$tennd'"; 
            //select('hoten','sinhvien','MSSV',$tennd);<=>select hoten from sinhvien where mssv=$tennd      
            $data = $obj->prepare($sql);
            $data->execute();
            $mang=$data->fetch(PDO::FETCH_ASSOC);
            $xuat=$mang[$cot];
            echo $xuat;
}
function selecthinh($cot,$bang,$ma)
{
            if (isset($_SESSION['user'])) 
            {
  
                  $tennd=$_SESSION['user'];
            }
            else
            {  
                  header('Location: index.php');
            }
            $obj = null;
            try{
                $dsn="mysql:localhost=".HOST."; dbname=".DB_NAME;
                $obj = new PDO($dsn, DB_USER, DB_PASS);
                $obj->query("set names 'utf8' ");
                }
            catch(Exception $e)
            {
                echo $e->getMessage();  exit;
            }
            $sql="SELECT $cot FROM `$bang`";
            $sql."WHERE $ma='$tennd'";       
            $data = $obj->prepare($sql);
            $data->execute();
            $mang=$data->fetch(PDO::FETCH_ASSOC);
            $xuat=$mang[$cot];
            $sqlgt="SELECT gt FROM `$bang`";
            $sqlgt."WHERE $ma='$tennd'";       
            $datagt = $obj->prepare($sqlgt);
            $datagt->execute();
            $manggt=$datagt->fetch(PDO::FETCH_ASSOC);
            $xuatgt=$manggt['gt'];
            if ($xuat=='' )
            {
                  if($xuatgt=='Nam') 
                  {
                        echo 'image/nam.png';
                  }
                  if($xuatgt=='Nữ')
                  {
                        echo 'image/nu.jpg';
                  }
            }
            else
            {
                  echo $xuat;
            }
     
}
function dangnhap($bang,$ma,$m,$t)
{
            $obj = null;
            try{
                $dsn="mysql:localhost=".HOST."; dbname=".DB_NAME;
                $obj = new PDO($dsn, DB_USER, DB_PASS);
                $obj->query("set names 'utf8' ");
                }
            catch(Exception $e)
            {
                echo $e->getMessage();  exit;
            }
            $sql="SELECT $ma,pass FROM $bang WHERE $ma='$m' and pass='$t'"; 
            $data = $obj->prepare($sql);
            $data->execute();
            $num_rows=$data->rowCount();
            return $num_rows;
}
?>