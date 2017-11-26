<?php
include 'config/kiemtra_SESION.php';
include 'config/config.php';
include "/include/function.php";

spl_autoload_register("loadClass");
?>
<!doctype html>
<html>
<head><meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<title>Đăng ký môn học STUonline</title>
    <link href="css/hover.css" rel="stylesheet" media="all">
     <link href="css/magic.css" rel="stylesheet">
     <link href="css/logoheader.css" rel="stylesheet">
     <link href="css/dinhdangnut.css" rel="stylesheet">
     <!--<link href="css/Untitled-3.css" rel="stylesheet">-->

<script language=JavaScript>
    var txt=" Đăng ký môn học STUonline";
    var expert=500;
    // speed of roll
    var refresh=null;
    function marquee_title(){
    document.title=txt;
    txt=txt.substring(1,txt.lenghth)+txt.charAt(0);
    refresh=setTimeout("marquee_title()",expert);
    }
    marquee_title();
    </script>
    <!--icon-->
    <link href="image/amarok.png" rel="icon" />

      
</head>
<body >
  <?php
    $obj = new Db();
    $rows=$obj->select("SELECT * FROM monhoc JOIN (nganh JOIN sinhvien on nganh.manganh=sinhvien.manganh) on monhoc.manganh=nganh.manganh 
WHERE monhoc.manganh=(SELECT sinhvien.manganh FROM sinhvien WHERE mssv='CD12345678');");
?>

    <div id="header">
    <table align="center" class="tb">
        <tr class="logo"><td class="logophai stu1">S</td><td class="logotrai stu2">T</td><td class="logophai stu1">U</td><td class="logotrai">o</td><td class="logophai">n</td><td class="logotrai">l</td><td class="logophai">i</td><td class="logotrai">n</td><td class="logophai">e</td></tr>
        </table>
        </div>
        
    <div id="main">
    <div id="thanweb">
    <div id="menutrai">
    <ul>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a href="trangchu.php">Trang chủ</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a>Thông báo ĐKMH</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a>Quy định ĐKMH</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a href="dangkymonhoc.php">Đăng ký môn học</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a>Thông báo học phí</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a href="thongtin.php">Thông tin cá nhân</a></li>
    </ul>
    </div>
    <div id="noidung">
      <p style="margin-left: 100px" >Thông tin đăng ký của bạn</p>
      <table border="1" style="border-style: inset; border-color: red; margin-left: 100px;" cellspacing="" ="0">
      <tr>
        <td>STT</td>
        <td>Mã môn học</td>
        <td>Tên môn học</td>
        <td>Mã ngành</td>
        <td>Tín chỉ</td>
        <td>Số tiết thực hành</td>
        <td>Số tiết lý thuyết</td>
      </tr>
      <form action="thongtindangky.php" method="post">
    <?php
    $i=1;
        foreach($rows as $row)
      {
        
    ?>
        <tr>
          <td><?php echo $i?></td>
          <td><?php echo $row['mamh'] ?></td>
          <td><?php echo $row['tenmh'] ?></td>
          <td><?php echo $row['manganh'] ?></td>
          <td><?php echo $row['tinchi'] ?></td>
          <td><?php echo $row['thuchanh'] ?></td>
          <td><?php echo $row['lythuyet'] ?></td>
          <td><input type="checkbox" name="dangky" value="<?php echo $row['mamh'] ?>"></td>
        </tr>
<?php
  $i++;
  } 
?>
<tr><td colspan="7" align="right"><input type="submit" name="submit" value="Đăng ký"></td></tr>
</form>
</table>
            </div>
    </div>            
  </div>
  <!--Chân web -->
  <div id="footer">
  <table align="center" style="padding-top:10px"><tr><td>
  DESIGN by Nguyễn Thế Mạnh &amp; Vũ Tá Phương
  </td></tr></table>
  </div>
            
</body>
</html>