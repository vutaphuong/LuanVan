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
include "config/select.php";

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
        <li class="hvr-sweep-to-right hvr-ripple-out"><a href="thongtindangky.php">Thông tin đăng ký</a></li>
        <li class="hvr-sweep-to-right hvr-ripple-out"><a href="trangchu1.php">Quy định-Quy chế</a></li>
        <li class="hvr-sweep-to-right hvr-ripple-out"><a href="dangkymonhoc.php">Đăng ký môn học</a></li>
        <li class="hvr-sweep-to-right hvr-ripple-out"><a href="thongtin.php">Thông tin cá nhân</a></li>
        <li class="hvr-sweep-to-right hvr-ripple-out"><a href="index.php">Đăng xuất</a></li>
      </ul>
    </div>
    <div id="noidung">
    <table style="font-size:14px">
      <?php
        $datasv = select("*", "sinhvien", 'mssv', $tennd);
        $datasv1 = select("*","chitietsv", 'mssv',$tennd);
      ?>
                <tr>
                  <td colspan="2">
                    <div class="khungavt">
                      <img src="<?php 
                        if($datasv1['avata']=='')
                        {
                          if($datasv1['gioitinh']=="Nam")
                          {
                            echo 'image/nam.png';
                          }
                          else
                          {
                            echo 'image/nu.jpg';
                          }
                        }
                        else
                        {
                          echo $datasv1['avata'];
                        }
                      ?>">
                    </div>
                  </td>
                 </tr>
                <tr><td class="formsinhvien1">Mã số sinh viên: </td><td class="formsinhvien2"><?php echo $datasv['mssv']; ?></td></tr>
                <tr><td class="formsinhvien1">Họ và tên: </td><td class="formsinhvien2"><?php echo $datasv['hoten'];?></td></tr>
                <tr><td class="formsinhvien1">Ngày sinh: </td><td class="formsinhvien2"><?php echo $datasv1['ngaysinh'];?></td></tr>
                <tr><td class="formsinhvien1">Giới tính: </td><td class="formsinhvien2"><?php echo $datasv1['gioitinh'];?></td></tr>
                <tr><td class="formsinhvien1">Quê quán: </td><td class="formsinhvien2"><?php echo $datasv1['quequan'];?></td></tr>
                <tr><td class="formsinhvien1">Nơi ở hiện tại: </td><td class="formsinhvien2"><?php echo $datasv1['noio'];?></td></tr>
                <tr><td class="formsinhvien1">Sở thích: </td><td class="formsinhvien2"><?php echo $datasv1['sothich'];?></td></tr>
                <tr><td class="formsinhvien1">Email: </td><td class="formsinhvien2"><?php echo $datasv1['email'];?></td></tr>
                <tr><td class="formsinhvien1">Số điện thoại: </td><td class="formsinhvien2">0<?php echo $datasv1['sdt'];?></td></tr>
                <tr><td class="linkchinhsua" colspan="2" ><a href="editinfosv.php" >Chỉnh sửa</a></td></tr>
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