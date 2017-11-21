
<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (isset($_SESSION['tenuser'])) {
  
  $tennd=$_SESSION['tenuser'];
}
else
{
  $tennd='Không có';  
  // header('Location: index.php');
}
define("HOST", "localhost");
define("DB_NAME", "dkmhonline");
define("DB_USER", "root");
define("DB_PASS", "");
define('ROOT', dirname(dirname(__FILE__)));
define("BASE_URL","http://localhost/tao%20lao/");
$obj = null;
try{
    $dsn="mysql:localhost=".HOST."; dbname=".DB_NAME;
    //$dns ="mysql:host=" . $this->host."; dbname=". $this->database;
    $obj = new PDO($dsn, DB_USER, DB_PASS);
    $obj->query("set names 'utf8' ");
    }
catch(Exception $e)
{
    echo $e->getMessage();  exit;
}
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
    <li class="hvr-sweep-to-right hvr-ripple-out"><a>Thông báo ĐKMH</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a>Quy định ĐKMH</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a>Đăng ký môn học</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a>Thông báo học phí</a></li>
    <li class="hvr-sweep-to-right hvr-ripple-out"><a>Xem thông tin</a></li>
    </ul>
    </div>
    <div id="noidung">
      <?php
        # code...
            $sqlhoten="SELECT hoten FROM `thongtinsv` WHERE MSSV='$tennd'";        
            $datahoten = $obj->prepare($sqlhoten);
            $datahoten->execute();
            $sqlgt="SELECT gt FROM `thongtinsv` WHERE MSSV='$tennd'";        
            $datagt = $obj->prepare($sqlgt);
            $datagt->execute();
            $sqlquequan="SELECT quequan FROM `thongtinsv` WHERE MSSV='$tennd'";        
            $dataquequan = $obj->prepare($sqlquequan);
            $dataquequan->execute();
            $sqlnoio="SELECT noio FROM `thongtinsv` WHERE MSSV='$tennd'";        
            $datanoio = $obj->prepare($sqlnoio);
            $datanoio->execute();
        if (isset($_POST['submit'])) {
          # code...
          if (isset($_POST['email'])) {
            # code...
            $valueemail=$_POST['email'];
            $loiemail='';
          }
          else
          {
            $valueemail='';
            $loiemail='Email không được bỏ trống'
          }
        }
        else
        {
            $baoloi='';
            $valueten='';
            $baoloiten='';
            $baoloipw='';
        }
    ?>
    <table align="center" style="color:red;font-size:24px;font-weight:bold;"><tr><td><?php echo $tennd; ?></td></tr></table>
    <form action="thongtin.php" method="post">
                <tr ><td class="">Tên đăng nhập: </td><td><?php echo $tennd;?></td></tr> 
                <tr ><td class="">Họ và tên: </td><td><?php echo $datahoten;?></td></tr>
                <tr ><td class="">Giới tính: </td><td><?php echo $datagt;?></td></tr> 
                <tr ><td class="">Quê quán</td><td><?php echo $dataquequan;?></td></tr> 
                <tr ><td class="">Nơi ở hiện tại</td><td><?php echo $datanoio;?></td></tr>


                <tr><td>Email: </td><td><input type="text" name="email" value="<?php echo $valueemail;?>"></td></tr>  
                <tr><td>Số điện thoại: </td><td><input type="number" name="sdt"></td></tr>  
                <tr><td>Email: </td><td><input type="text" name="hoten"></td></tr>
                <tr><td>Sở thích</td><td><textarea name="sothich"></textarea></td></tr>
                <tr><td colspan="2" align="right"><input type="submit" name="submit" value="Lưu lại"></td></tr>
            </form>
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