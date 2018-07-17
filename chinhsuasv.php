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
        $laymssv = $_GET["mssv"];
        $obj = new Db();
        $rowsv = $obj->select("select * from sinhvien where mssv = '$laymssv' ");        
        $rowskhoa=$obj->select('select tenkhoa from khoa');
        $rowschitietsv=$obj->select("select * from chitietsv where mssv='$laymssv' ");
        $rowslop=$obj->select("select tenlop from lop");
        foreach ($rowsv as $item) 
        {
            # code...
            $valuemssv = $item["mssv"];
            $valueten = $item["hoten"];
        }
        foreach ($rowschitietsv as $item1) {
            $valuegt = $item1["gioitinh"];
            $valuenoio = $item1["noio"];
            $valuequequan = $item1["quequan"];
            $valuengaysinh= $item1["ngaysinh"];
            $valuengaynhaphoc= $item1["ngaynhaphoc"];
        }
    ?>



    <table align="center" class="tb" enctype="multipart/form-data">
        <tr class="logo"><td class="logophai stu1">S</td><td class="logotrai stu2">T</td><td class="logophai stu1">U</td><td class="logotrai">o</td><td class="logophai">n</td><td class="logotrai">l</td><td class="logophai">i</td><td class="logotrai">n</td><td class="logophai">e</td></tr>
    </table>
            <form method="post" enctype="multipart/form-data" action="updatesv.php" >
            <table style="margin:0 auto" cellpadding="11px">
            	<tr >
                	<td colspan="2" align="center" style="color:rgba(0,102,255,1);font-size:30px;font-family:'Comic Sans MS', cursive">Chỉnh sửa thông tin Sinh Viên</td>
                </tr>
                <tr>
                	<td class="nvnhap">MSSV</td>
                    <td ><input readonly class="vien" type="text" name="masv" placeholder="Nhập mã số sinh viên" size="43" maxlength="10" required value="<?php echo $valuemssv ?>" /></td>
                </tr>
                <tr>
                	<td class="nvnhap">Họ và tên</td>
                    <td><input class="vien" type="text" name="hoten" placeholder="Nhập họ và tên sinh viên" size="43" required value="<?php echo $valueten ?>"/></td>
                </tr>
                <tr>
                  <td class="nvnhap">Ngày sinh</td>
                    <td><input class="vien" type="date" name="ngaysinh" size="43" required value="<?php echo $valuengaysinh ?>"/></td>
                </tr>
                <tr>
                  <td class="nvnhap">Ngày nhập học</td>
                    <td><input class="vien" type="date" name="ngaynhaphoc" size="43" required value="<?php echo $valuengaynhaphoc; ?>"/></td>
                </tr>
                <tr>
                	<td class="nvnhap">Giới tính</td>
                    <td><input type="radio" name="gt" value="Nam" class="gt1" checked="checked" />Nam <input type="radio" name="gt" value="Nữ" class="gt1" />Nữ </td>
                </tr>
                <tr>
                  <td class="nvnhap">Quê quán</td>
                     <td><input class="vien" type="text" name="quequan" placeholder="Nhập quê quán của sinh viên" size="43" required value="<?php echo $valuequequan ?>"/></td>
                </tr>
                <tr>
                	<td class="nvnhap">Nơi ở</td>
                    <td><input class="vien" type="text" name="noio" placeholder="Nhập nơi ở sinh viên" size="43" required value="<?php echo $valuenoio ?>"/></td>
                </tr>
                <tr>
                    <td class="nvnhap">Khoa</td>
                     <td>
                        <select class="option" name="tenkhoa" style="width: 380px;height: 30px">
                          <?php 
                            foreach($rowskhoa as $khoa)
                            {
                           ?>
                                       <option><?php echo $khoa['tenkhoa']?></option>
                                <?php
                           }
                          ?>
                    </select>   
                     </td>
                </tr>
                <tr>
                    <td class="nvnhap">Lớp</td>
                        <td>
                        <select class="option" name="tenlop" style="width: 380px;height: 30px">
                        <?php 
                        foreach($rowslop as $lop)
                        {
                       ?>
                         <option><?php echo $lop['tenlop']?></option>
                      <?php
                       }
                      ?>
                    </select> 
                     </td>  
                </tr>
                <tr>    
                    <td align="center" colspan="2"><input type="submit" name="sm" value="Lưu" class="gui" /></td>    
                </tr>
                <tr>
                   <td align="center"><a href="themsinhvien.php"><input type="button" name="qv" value="Quay về" class="rs" /></a></td>
                </tr>
            </table>
            </form>
            <?php
              ob_end_flush();
            ?>
</body>
</html>