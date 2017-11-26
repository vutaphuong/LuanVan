<?php
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

include 'config/select.php';
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
    <p style="color: red;font-size: 30px">Tên: <?php echo $tennd?></p>  
    <table style="font-size:14px">
                <tr><td colspan="2"><div class="khungavt"><img src="<?php echo $hinh=selecthinh('avt','sinhvien','MSSV',$tennd);?>"></div></td></tr>
                <tr><td>Họ và tên: </td><td><?php echo $hoten=select('hoten','sinhvien','MSSV',$tennd);?></td></tr>
                <tr><td>Giới tính: </td><td><?php echo $gt=select('gt','sinhvien','MSSV',$tennd);?></td></tr>
                <tr><td>Quê quán: </td><td><?php echo $qq=select('quequan','sinhvien','MSSV',$tennd);?></td></tr>
                <tr><td>Nơi ở hiện tại: </td><td><?php echo $noio=select('noio','sinhvien','MSSV',$tennd);?></td></tr>
                <tr><td>Sở thích: </td><td><?php echo $sothich=select('sothich','sinhvien','MSSV',$tennd);?></td></tr>
                <tr><td>Email: </td><td><?php echo $email=select('email','sinhvien','MSSV',$tennd);?></td></tr>
                <tr><td>Số điện thoại: </td><td>0<?php echo $sdt=select('sdt','sinhvien','MSSV',$tennd);?></td></tr>
                <tr><td colspan="2" ><a href="editinfosv.php" >Chỉnh sửa</a></td></tr>
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