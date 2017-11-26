<pre><?php
$a = array(1, -3, 5); //mảng có 3 phần tử
$b = array("a"=>2, "b"=>4, "c"=>6);//mảng có 3 phần tử.Các index của mảng là chuỗi
?>
Nội dung giá trị mảng a :
<?php
foreach($a as $value)
{
	echo $value ." ";	
}
?>
<br> Nôi dung mảng a (key-value) 
<?php
foreach($a as $key=>$value)
{
	echo "($key - $value )";	
}
?>
<br /> Nội dung mảng b: (key - value):
<?php
foreach($b as $k=>$v)
{
	echo "($k - $v) ";	
}
?>
<br />Hiển thị nội dung mảng b ra dạng bảng:
<table border=1>
	<tr><td>STT</td><td>Key</td><td>Value</td></tr>
    <?php
	$i=0;
	foreach($b as $k=>$v)
	{	$i++;
		echo "<tr><td>$i</td>";
		echo "<td>$k</td>";
		echo "<td>$v</td></tr>";
	}
	?>
</table></pre>

<br />----------------đoạn code này liên làm nè thầy-----------------

<hr> Câu 4_2a :Số phần tử có giá trị dương trong mảng a là :
<?php
$dem=0;
foreach ($a as $key => $value) {
if($value>=0)
		$dem+=1;
}
echo $dem;
?>
<hr>
<pre>	
<?php
$c = array("a"=>2, "b"=>4) ;
echo'4_2b : Mảng hiện tại là :'.'</br>';
print_r($c);
foreach ($b as $key => $value) {
	if($value>=0)
		$c["c"]=$value;
	//else echo'không có phần tử dương trong mang b để thêm vào mảng c.'.'</br>';
}
echo 'Mảng sau khi thêm là :'.'</br>';
print_r($c);
?>
</pre>


<hr>
<pre><?php
$newvalue=4;
$new=2;
$c=3;
echo'4_1 : Mảng hiện tại là :';
print_r($a);
foreach ($a as $key => $value) {
	if($key!=$c)
	{
		$a[$c]=$newvalue;
	}
	else {
		echo'Phần tử đã có trong mảng rồi nên chỉ thay đổi giá trị thôi.'.'</br>';
		$value=$newvalue;
	}

}
echo 'Mảng sau khi sửa mới là :'.'<br/>';
print_r($a);
		
?>
</pre><hr>
