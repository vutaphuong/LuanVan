
<?php
  include "config/kiemtra_SESION.php";
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
      
    <div id="noidung">    
    
    <div class="chucnangnv">
        <p>Thông tin đăng ký</p>
      </div>
      <div class="chucnangnv">
        <p>Thông tin giáo viên</p>
      </div>
      <div class="chucnangnv">
        <p>Tạo lịch học</p>
      </div>
      <div class="chucnangnv">
        <p>Chỉnh sửa thông tin cá nhân</p>
      </div>
      <div class="chucnangnv">
        <p><a href="themsinhvien.php">Chỉnh sửa thông tin Sinh viên</a></p>
      </div>
    </div>
    </div>    
  </div>
  <!--Chân web -->
  <div id="footer">
  <table align="center"><tr><td>
  DESIGN by Nguyễn Thế Mạnh &amp; Vũ Tá Phương
  </td></tr></table>
  </div>
 <?php
              ob_end_flush();
            ?>           
</body>
</html>