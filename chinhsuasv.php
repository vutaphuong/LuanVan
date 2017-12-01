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
        $laymssv = $_GET["mssv"];
        $obj = new Db();
        $row = $obj->select("select * from sinhvien where mssv = '$laymssv' ");
        foreach ($row as $row) 
        {
            # code...
            $valuemssv = $row["mssv"];
            $valueten = $row["hoten"];
            $valuegt = $row["gt"];
            $valuenoio = $row["noio"];
            $valuequequan = $row["quequan"];
            $valuenganh = $row["manganh"];
            $valuekhoa = $row["makhoa"];
            $valuegv = $row["covanht"];
        }
    ?>



    <table align="center" class="tb" enctype="multipart/form-data">
        <tr class="logo"><td class="logophai stu1">S</td><td class="logotrai stu2">T</td><td class="logophai stu1">U</td><td class="logotrai">o</td><td class="logophai">n</td><td class="logotrai">l</td><td class="logophai">i</td><td class="logotrai">n</td><td class="logophai">e</td></tr>
    </table>
            <form method="get" enctype="multipart/form-data" action="updatesv.php" >
            <table style="margin:0 auto" cellpadding="11px">
            	<tr >
                	<td colspan="2" align="center" style="color:rgba(0,102,255,1);font-size:30px;font-family:'Comic Sans MS', cursive">Chỉnh sửa thông tin Sinh Viên</td>
                </tr>
                <tr>
                	<td class="nvnhap">MSSV</td>
                    <td ><input class="vien" type="text" name="masv" placeholder="Nhập mã số sinh viên" size="50" maxlength="10" required value="<?php echo $valuemssv ?>" /></td>
                </tr>
                <tr>
                	<td class="nvnhap">Họ và tên</td>
                    <td><input class="vien" type="text" name="hoten" placeholder="Nhập họ và tên sinh viên" size="50" required value="<?php echo $valueten ?>"/></td>
                </tr>
                <tr>
                	<td class="nvnhap">Giới tính</td>
                    <td><input type="radio" name="gt" value="nam" checked="checked" class="gt1" />Nam <input type="radio" name="gt" value="nu" class="gt1" />Nữ </td>
                </tr>
                <tr>
                	<td class="nvnhap">Nơi ở</td>
                    <td><input class="vien" type="text" name="noio" placeholder="Nhập nơi ở sinh viên" size="50" required value="<?php echo $valuenoio ?>"/></td>
                </tr>
                <tr>
                	<td class="nvnhap">Quê quán</td>
                     <td><input class="vien" type="text" name="quequan" placeholder="Nhập quê quán của sinh viên" size="50" required value="<?php echo $valuequequan ?>"/></td>
                </tr>
                <tr>
                    <td class="nvnhap">Ngành</td>
                     <td><input class="vien" type="text" name="manganh" placeholder="Nhập mã nghành của sinh viên" size="50" required value="<?php echo $valuenganh ?>"/></td>
                </tr>
                <tr>
                    <td class="nvnhap">Khoa</td>
                     <td><input class="vien" type="text" name="makhoa" placeholder="Nhập khoa của sinh viên" size="50" required value="<?php echo $valuekhoa ?>"/></td>
                </tr>
                <tr>
                    <td class="nvnhap">Cố vấn học tập</td>
                     <td><input class="vien" type="text" name="covanht" placeholder="Nhập Cố vấn học tập của sinh viên" size="50" required value="<?php echo $valuegv ?>"/></td>
                </tr>
                <tr>    
                    <td align="center" colspan="2"><input type="submit" name="sm" value="Lưu" class="gui" /></td>    
                </tr>
                <tr>
                   <td align="center"><a href="themsinhvien.php"><input type="button" name="qv" value="Quay về" class="rs" /></a></td>
                </tr>
            </table>
            </form>
</body>
</html>