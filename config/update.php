<?php
    include 'kiemtra_SESION.php';
    include 'config.php';
    function updatemyinfo($bang,$cot,$giatri,$ma,$tennd)
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
            $sqledit="UPDATE `$bang` SET $cot = '$giatri' WHERE `$ma` = '$tennd'";
            $dataedit = $obj->prepare($sqledit);
            $dataedit->execute();
    }

?>