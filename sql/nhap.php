<?php
$ten='CD12345678';
$teb='DH12345678';
 preg_match('/^CD[0-9]*/', $ten,$CD);
// print_r($CD);exit();
//
if(!isset($CD[0]))
	echo 'Rỗng';
else 
{
	$xuat=$CD[0];
	echo $xuat;
}
 ?>