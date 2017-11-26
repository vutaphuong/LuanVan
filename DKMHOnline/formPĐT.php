<?php
include ("config/config.php");
?>
<!doctype html>
<html>
<head><meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<title>Đăng ký môn học STUonline</title>
    <link href="css/hover.css" rel="stylesheet" media="all">
     <link href="css/magic.css" rel="stylesheet">
     <link href="css/logoheader.css" rel="stylesheet">

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
<body > <form method="post" enctype="multipart/form-data">
    <legend id="form">Nhập thông tin cho sinh viên</legend>
    <table align="center" class="tb">
        <tr class="logo"><td class="logophai stu1">S</td><td class="logotrai stu2">T</td><td class="logophai stu1">U</td><td class="logotrai">o</td><td class="logophai">n</td><td class="logotrai">l</td><td class="logophai">i</td><td class="logotrai">n</td><td class="logophai">e</td></tr>
        <form action="index.php" method="post">
                <tr align="center"><td colspan="9" class="inputdnphai ">
                    <input type="text" class="inputdn" placeholder="Tên đăng nhập" name="tendn" maxlength="10" value="<?php echo $valueten ?>">
                </td></tr> 
                <tr align="center"><td colspan="9" class="baoloi"><?php echo $baoloiten; ?></td></tr>
                <tr align="center"><td colspan="9" class="inputdntrai">
                    <input class="inputdn" type="password" placeholder="Mật khẩu" name="password" maxlength="10">
                    </td></tr>
                <tr align="center"><td colspan="9" class="baoloi"><?php echo $baoloipw; ?></td></tr>
                <tr align="center"><td colspan="9" >
                    <input type="submit" class="inputdnphai sbm hvr-ripple-out" value="Đăng nhập" name="submit">
                </td></tr>
                <tr align="center"><td colspan="9" class="baoloi"><?php echo $baoloi; ?></td></tr>
            </form>
                
            </table>/form>
            
</body>
</html>