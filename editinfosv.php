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
     <link href="css/nutdangnhap.css" rel="stylesheet">
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
    <li class="hvr-sweep-to-right hvr-ripple-out"><a>Quy định ĐKMH</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a href="dangkymonhoc.php">Đăng ký môn học</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a href="thongtin.php">Thông tin cá nhân</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a href="index.php">Đăng xuất</a></li>
    </ul>
    </div>
    <div id="noidung">
    <table style="font-size:14px">
        <form action="updatesv.php" method="post" enctype="multipart/form-data" >
      <?php
        $datasv = select("*", "sinhvien", 'mssv', $tennd);
        $datasv1 = select("*", "chitietsv", 'mssv', $tennd);
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
                echo $data['avata'];
              }
      ?>">
              </div>
                </td>
                </tr>
                <tr><td colspan="2" align="center"><input type="file" name="suaavt"></td></tr>
                <tr><td class="formsinhvien1">Họ và tên: </td><td class="formsinhvien2"><?php echo $datasv['hoten'];?></td></tr>
                <tr><td class="formsinhvien1">Giới tính: </td><td class="formsinhvien2"><?php echo $datasv1['gioitinh'];?></td></tr>
                <tr ><td class="formsinhvien1">Quê quán: </td><td><input type="text" name="quequan" size="30px" placeholder="Nhập quê quán" ></td></tr>
                <tr ><td class="formsinhvien1">Nơi ở hiện tại: </td><td><input type="text" name="noio" size="30px" placeholder="Nhập nơi ở sinh viên" ></td></tr>  
                <tr ><td class="formsinhvien1">Sở thích: </td><td><input type="text" name="st" size="30px" placeholder="Nhập sở thích" ></td></tr> 
                <tr ><td class="formsinhvien1">Email: </td><td><input type="text" name="email" size="30px" placeholder="Nhập email" ></td></tr> 
                <tr ><td class="formsinhvien1">Số điện thoại: </td><td><input type="text" name="sdt" size="30px" placeholder="Nhập số điện thoại" ></td></tr> 
                <tr>
                  <td ><input type="submit" name="submit" value="Lưu" size="30px" class="rs"></td>
                  <td ><a href="thongtin.php"><input type="button" name="button" value="Thoát" size="30px" class="rs"></a></td>
                </tr>
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