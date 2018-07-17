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
//$bang ten database, $mssv của database, $userid + $password tên tài khoản mật khẩu
function dangnhap($bang,$mssv,$userid,$password)
{
            $obj = null;
            try{
                $dsn="mysql:localhost=".HOST."; dbname=".DB_NAME;
                //echo $dsn;
                $obj = new PDO($dsn, DB_USER, DB_PASS);
                $obj->query("set names 'utf8' ");
                }
            catch(Exception $e)
            {
                echo $e->getMessage();  exit;
            }
            $sql="SELECT $mssv, pass FROM $bang WHERE $mssv='$userid' and pass='$password' "; 
            //echo $sql; exit;
            //$data = $obj->query($sql);
            $data = $obj->prepare($sql);
            $data->execute();
            //print_r($data->fetchAll(PDO::FETCH_ASSOC)); exit;
            $num_rows=$data->rowCount();
            return $num_rows;
}
?>