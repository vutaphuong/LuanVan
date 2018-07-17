<?php
ob_start() ;
if (!isset($_SESSION)) 
  {
    session_start();
  }
if (isset($_SESSION['user'])) {
  
 $tennd=$_SESSION['user'];
}  

if (!isset($_SESSION['user'])) {
  
 header('Location: index.php');
}
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
    				<!-- <li class="hvr-sweep-to-right hvr-ripple-out"><a>Thông báo học phí</a></li> -->
    				<li class="hvr-sweep-to-right hvr-ripple-out"><a href="thongtin.php">Thông tin cá nhân</a></li>
            <li class="hvr-sweep-to-right hvr-ripple-out"><a href="index.php">Đăng xuất</a></li>
    			</ul>
    		</div>
    	</div>    
  	</div>

    <?php
      $obj = new Db();
      //echo "$tennd";
      $laytensv=$obj->select("SELECT * FROM `sinhvien` WHERE mssv='$tennd' ");
      //echo "SELECT hoten FROM `sinhvien` WHERE mssv=' $tennd'  ";
      //var_dump($laytensv);die;
    ?>
      <div style="margin-left: 800px;color: red;font-size: 20px;">Xin chào:
        <?php foreach ($laytensv as $xuatsv) {
            echo $xuatsv['hoten'];
            echo " (".$xuatsv['mssv'].")";
        } ?>
      </div>
    
  	<div class="mainbox2">
    	<div id="tieude2">Thông báo ĐKMH</div>
	    	<ol>
	    		<li style="font-size: 25px"><a href="thongtinhome/2018.05.30_THONG BAO DANG KY MON HOC HK 2 KHOA HOC 2017 - 2019.pdf" target="_blank">Thông báo đăng ký môn học học kỳ 2 khóa học 2017-2019</a></li>
				<li style="font-size: 25px"><a href="#" target="_blank" style="color: red">Hướng dẫn đăng ký môn học Online</a></li>
				<li style="font-size: 25px">Thông báo đăng ký môn học năm học 2018-2019</li>
					<ol>
						<li style="font-size: 25px; font-weight: bold;"><a href="thongtinhome/danh sach mon hoc hoc ky 1 nam 2018 2019.pdf" target="_blank" style="color: red">Hệ đại học</a></li>
						<li style="font-size: 25px; font-weight: bold;"><a href="thongtinhome/danh sach mon hoc mo hoc ky 1 2018 - 2019_cao dang_cntt.pdf" target="_blank" style="color: red">Hệ cao đẳng</a></li>
					</ol>
				<li style="font-size: 25px"><a href="thongtinhome/danh sach mon hoc mo hoc ky he 2017 - 2018_dai hoc.pdf" target="_blank">Danh sách môn học học kỳ hè năm học 2017-2018</a></li>
        <li style="font-size: 25px"><a href="thongtinhome/2018.05.30_THONG BAO HOC MON GIAO DUC QUOC PHONG VA AN NINH.pdf" target="_blank">Thông báo học môn giáo dục An ninh và Quốc phòng</a></li>
	    	</ol>
   	</div>

      <div class="mainbox2">
      <div id="tieude2">Tuyển sinh Đại Học</div>
      <ul>
        <li><a href="thongtinhome/THONG BAO TUYEN SINH DAI HOC HE CHINH QUY NAM 2018.pdf" target="_blank">Tuyển sinh Đại Học chính quy năm 2018</a></li>
        <p><img src="image/tuyensinh.png" width="500px" height="300px" style="margin-left: 100px"></p>
      </ul>
    </div>

    <div class="mainbox2">
      <div id="tieude2">Thông tin chung</div>
      <ol>
        <li style="font-size: 25px"><a href="thongtinhome/LICH LAM VIEC CVHT.pdf" target="_blank">Lịch làm việc của Cố vấn học tập</a></li>
        <li style="font-size: 25px">Quy chế, quy định</li>
          <ol>
            <li style="font-size: 25px; font-weight: bold;"><a href="thongtinhome/CNTT.pdf" target="_blank">Quy định về công tác cố vấn học tập</a></li>
          </ol>
        </li>
        <li style="font-size: 25px"><a href="thongtinhome/BIEU DO 2017-2018.pdf" target="_blank">Biểu đồ giảng dạy học tập</a></li>
        <li style="font-size: 25px">Chương trình đào tạo Đại học khóa 2016-2017</li>
          <ol>
            <li style="font-size: 25px; font-weight: bold;"><a href="thongtinhome/CNTT.pdf" target="_blank">Ngành Công nghệ thông tin năm 2016</a></li>
            <li style="font-size: 25px; font-weight: bold;"><a href="thongtinhome/5_CNTT-004.pdf" target="_blank">Ngành Công nghệ thông tin năm 2017</a></li>
          </ol>
        </li>
        
      </ol>
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