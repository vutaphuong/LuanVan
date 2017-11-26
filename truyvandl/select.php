<?php
function select($cot,$bang)
{
			include 'kiemtra_SESION.php';
			include 'config.php';
			$sql="SELECT $cot FROM `$bang`";
            $sql."WHERE MSSV='$tennd'";       
            $data = $obj->prepare($sql);
            $data->execute();
            $mang=$data->fetch(PDO::FETCH_ASSOC);
            $xuat=$mang['$cot'];
            if ($bang=='sinhvien') 
            {
            	header('Location:thongtin.php');
            }
            elseif ($bang=='nhanvien') 
            {
            	header('Location:thongtinnv.php');
            }
            else
            {
            	header('Location:thongtingv.php');
            }
}
?>