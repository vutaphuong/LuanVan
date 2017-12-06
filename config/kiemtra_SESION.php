<?php
ob_start() ;
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
