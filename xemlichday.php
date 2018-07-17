<?php
  include 'config/kiemtra_SESION.php';
  include 'classes/config.php';
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
      $obj= new Db();
      $rows = $obj->select("select  * FROM monhoc join (chitietgiangvienphutrachmonhoc
                            join( giangvien join lop on lop.magv = giangvien.magv)
                            on chitietgiangvienphutrachmonhoc.magv = giangvien.magv) 
                            on monhoc.mamh= chitietgiangvienphutrachmonhoc.mamh
                            WHERE giangvien.magv='$tennd' ");
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
      <li class="hvr-sweep-to-right hvr-ripple-out"><a href="trangchugiangvien.php">Trang chủ</a></li>
      <li class="hvr-sweep-to-right hvr-ripple-out"><a href="xemlichday.php">Xem lịch dạy</a></li>
      <li class="hvr-sweep-to-right hvr-ripple-out"><a href="thongtingiangvien.php">Thông tin cá nhân</a></li>
      <li class="hvr-sweep-to-right hvr-ripple-out"><a href="index.php">Đăng xuất</a></li>
    </ul>
    </div>
    <?php
      $obj = new Db();
      //echo "$tennd";
      $laytensv=$obj->select("SELECT * FROM `giangvien` WHERE magv='$tennd' ");
      //echo "SELECT hoten FROM `sinhvien` WHERE mssv=' $tennd'  ";
      //var_dump($laytensv);die;
    ?>
    <div style="margin-left: 800px;color: red;font-size: 20px;">Xin chào:
        <?php foreach ($laytensv as $xuatsv) {
            echo $xuatsv['hoten'];
            echo " (".$xuatsv['magv'].")";
        } ?>
      </div>

      <div id="noidung">
        <form action="" method="post"> 
          <table border="1" style="border-style: inset; border-color: red; margin-left: 30px;" cellspacing="" ="0" width="900px">
                <tr>
                  <td colspan="10" align="center" style="font-family: 'Comic Sans MS';font-size: 30px;color: blue;">Lịch dạy của Giảng viên:
                    <?php 
                      foreach ($rows as $row) {
                        # code...
                        echo $row['hoten'];
                        break;
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                <td style="text-align: center;">Tên môn học</td>
                <td style="text-align: center;">Lớp</td>
                <td style="text-align: center;">Phòng</td>
                </tr>
                <?php
                foreach ($rows as $thongtinlichday ) {
                ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $thongtinlichday['tenmh']; ?></td>
                    <td style="text-align: center;"><?php echo $thongtinlichday['tenlop']; ?></td>
                    <td style="text-align: center;">?</td>
                  </tr>
                <?php
                }
                ?> 
            </table>  
      </div>
  <!--Chân web -->
  <div id="footer">
  <table align="center" style="padding-top:10px">
    <tr>
      <td>DESIGN by Vũ Tá Phương &copy; 2018-<?php echo (date("Y")+1)?> </td>
    </tr>
  </table>
  </div>
            
</body>
</html>