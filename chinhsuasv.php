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
     <link href="css/formnv.css" rel="stylesheet">
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
        
    ?>   
    <table align="center" class="tb">
        <tr class="logo"><td class="logophai stu1">S</td><td class="logotrai stu2">T</td><td class="logophai stu1">U</td><td class="logotrai">o</td><td class="logophai">n</td><td class="logotrai">l</td><td class="logophai">i</td><td class="logotrai">n</td><td class="logophai">e</td></tr>
        
            <form method="post" enctype="multipart/form-data" id="formnv">
            <table style="margin:0 auto" cellpadding="11px">
            	<tr >
                	<td colspan="2" align="center" style="color:rgba(0,102,255,1);font-size:30px;font-family:'Comic Sans MS', cursive">Chỉnh sửa thông tin Sinh Viên</td>
                </tr>
                <tr>
                	<td class="nvnhap">MSSV</td>
                    <td ><input class="vien" type="text" name="masv" placeholder="Nhập mã số sinh viên" size="50" maxlength="10" required/></td>
                </tr>
                <tr>
                	<td class="nvnhap">Mật khẩu</td>
                    <td><input class="vien" type="password" name="passsv" placeholder="Nhập PassWord sinh viên" maxlength="10" size="50" required/></td>
                </tr>
                <tr>
                	<td class="nvnhap">Họ và tên</td>
                    <td><input class="vien" type="text" name="ten" placeholder="Nhập họ và tên sinh viên" size="50" required/></td>
                </tr>
                <tr>
                	<td class="nvnhap">Giới tính</td>
                    <td><input type="radio" name="gt" value="nam" checked="checked" class="gt1" />Nam <input type="radio" name="gt" value="nu" class="gt1" />Nữ </td>
                </tr>
                <tr>
                	<td class="nvnhap">Nơi ở</td>
                    <td><input class="vien" type="text" name="noio" placeholder="Nhập nơi ở sinh viên" size="50" required/></td>
                </tr>
                <tr>
                	<td class="nvnhap">Quê quán</td>
                     <td><input class="vien" type="text" name="quequan" placeholder="Nhập quê quán của sinh viên" size="50" required/></td>
                </tr>
                <tr>
                    <td class="nvnhap">Nghành</td>
                    <td><input class="vien" type="text" name"nghanh" placeholder="Nhập nghành của Sinh viên" size="50" required="Vui lòng nhập Nghành cho sinh viên"></input></td>
                </tr>
                <tr>
                    <td class="nvnhap">Khoa</td>
                    <td><input class="vien" type="text" name"khoa" placeholder="Nhập Khoa của Sinh viên" size="50" required></input></td>
                </tr>
                <tr>
                    <td class="nvnhap">Học Kỳ</td>
                    <td><input class="vien" type="text" name"hky" placeholder="Nhập học kỳ của Sinh viên" size="50" required></input></td>
                </tr>
                <tr>
                    <td align="right"><input type="reset" name="rs" value="Làm mới" class="rs" /></td>     
                    <td align="center"><input type="submit" name="sm" value="Gửi" class="gui" /></td>    

                </tr>
                <tr>
                   <td align="center"><a href="themsinhvien.php"><input type="button" name="qv" value="Quay về" class="rs" /></a></td>
                </tr>
            </table>
            </form>
            
    </table>
</body>
</html>