<?php define("HOST", "localhost");
define("DB_NAME", "dkmhonline");
define("DB_USER", "root");
define("DB_PASS", "");
define('ROOT', dirname(dirname(__FILE__)));
define("BASE_URL","http://localhost/tao%20lao/");
$obj = null;
try{
    $dsn="mysql:localhost=".HOST."; dbname=".DB_NAME;
    //$dns ="mysql:host=" . $this->host."; dbname=". $this->database;
    $obj = new PDO($dsn, DB_USER, DB_PASS);
    $obj->query("set names 'utf8' ");
    }
catch(Exception $e)
{
    echo $e->getMessage();  exit;
}