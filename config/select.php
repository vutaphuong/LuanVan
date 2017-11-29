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
            $sql.=" WHERE $ma='$tennd'"; 
            //select('hoten','sinhvien','MSSV',$tennd);<=>select hoten from sinhvien where mssv=$tennd      
            $data = $obj->prepare($sql);
            $data->execute();
            $mang=$data->fetch(PDO::FETCH_ASSOC);return $mang;
            $xuat=$mang[$cot];
            echo $xuat;
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