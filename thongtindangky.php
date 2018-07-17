<?php
  ob_start();
  include 'config/kiemtra_SESION.php';
  include 'config/config.php';
  include 'classes/function.php';
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
    $rows=$obj->getThongTinDangKy($tennd);
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
    <li class="hvr-sweep-to-right hvr-ripple-out"><a href="thongtindangky.php">Thông tin đăng ký</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a href="trangchu1.php">Quy định-Quy chế</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a href="dangkymonhoc.php">Đăng ký môn học</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a href="thongtin.php">Thông tin cá nhân</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a href="index.php">Đăng xuất</a></li>
    </ul>
    </div>
    <div id="noidungthongtindky">
      <table border="1" style="border-style: inset; border-color: red; margin-left:99px;" cellspacing="" ="0">
        <?php 
          if(empty($rows)) 
        {
        ?>
          <h1 style="color: green; font-size:30px;margin-left: 320px ; ">Bạn chưa đăng ký môn học</h1>
          <a href="dangkymonhoc.php"><img width="500px" height="200" src="image/ShowImage.png" style="margin-left: 245px"></a>
        <?php 
          exit();
        }
        ?>
        <tr><td colspan="10" style="text-align: center; color: #177619;font-size: 30px;">Thông tin đăng ký của bạn</td></tr>
      <tr style="text-align: center; color: blue; font-weight: bold;">
        <td>STT</td>
        <td>Mã môn học</td>
        <td style="width: 290px">Tên môn học</td>
        <td>Phương thức giảng dạy</td>
        <td>Lý thuyết</td>
        <td>Bài tập</td>
        <td>Thực hành</td>
        <td>Đồ án</td>
        <td>LATN</td>
        <td>Tín chỉ</td>
      </tr>
    <?php
    $i=1;
        foreach($rows as $row)
      {
        
    ?>
        <tr>
          <td  style="text-align: center;"><?php echo $i?></td>
          <td><?php echo $row['mamh'] ?></td>
          <td style="width: 290px"><?php echo $row['tenmh'] ?></td>
          <td style="text-align: center;"><?php echo $row['mapphoc'] ?></td>
          <td style="text-align: center;"><?php echo $row['lythuyet'] ?></td>
          <td style="text-align: center;"><?php echo $row['baitap'] ?></td>
          <td style="text-align: center;"><?php echo $row['thuchanh'] ?></td><td style="text-align: center;"><?php echo $row['doan'] ?></td><td style="text-align: center;"><?php echo $row['LATN'] ?></td><td style="text-align: center;"><?php echo $row['tinchi'] ?></td>
        </tr>
<?php
  $i++;
  } 
?>
<tr><td colspan="10" align="right"><a href="dangkymonhoc.php"><input type="button" name="chinhsua" value="Chỉnh sửa"></a></td></tr>
</form>
</table>
            </div>
    </div>            
  </div>
  <!--Chân web -->
  <div id="footer">
  <table align="center" style="padding-top:10px">
    <tr>
      <td>DESIGN by Vũ Tá Phương &copy; 2018-<?php echo (date("Y")+1)?> </td>
    </tr>
  </table>
  </div>
         <?php
              ob_end_flush();
            ?>      
</body>
</html>