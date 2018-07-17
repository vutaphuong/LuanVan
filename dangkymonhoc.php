<?php
  ob_start();
  include 'config/kiemtra_SESION.php';
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 

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
    <!-- Phần chọn năm học -->
    <div>
    <?php
      $tinhtongtinchi=0;
      $obj = new Db();
      //echo "$tennd";
      $laytensv=$obj->select("SELECT * FROM `sinhvien` WHERE mssv='$tennd' ");
      $laytoanbomhdk=$obj->select("SELECT mamh FROM `dangkymonhoc` WHERE mssv='$tennd'");
      $layngaymodk=$obj->select("SELECT * FROM `ngaymodangky`");
      //echo "SELECT hoten FROM `sinhvien` WHERE mssv=' $tennd'  ";
      //var_dump($laytensv);die;
    ?>
      <div style="margin-left: 800px;color: red;font-size: 20px;">Xin chào:
        <?php foreach ($laytensv as $xuatsv) {
            echo $xuatsv['hoten'];
            echo " (".$xuatsv['mssv'].")";
        } ?>
      </div>
      
    </div>

    <div id="noidung">
      <?php
        //$posthkychon=$_POST['hockychon'];
        //Lấy học kỳ lẻ
          $obj = new Db();
          $rowsnamhoc=$obj->select("SELECT YEAR(`ngaynhaphoc`) FROM `chitietsv` WHERE mssv='$tennd' ");
          //$rowshocky=$obj->select("SELECT mahk FROM hockycanhan ");
          $layngaymodk=$obj->select("SELECT * FROM `ngaymodangky`");
          //Lấy học kỳ lẻ
          if(date('m')>=6 && date('m')<=12)
          {
            foreach($layngaymodk as $item)
            {
              if($item['mangaymodk']=='1' && strtotime(date('Y-m-d'))>=strtotime($item['ngaymodk']) && strtotime(date('Y-m-d'))<=strtotime($item['ngaydongdk']))
              {
                foreach($rowsnamhoc as $laynamhocs)
                {
                  foreach ($laynamhocs as $laynamhoc) 
                  {
                    $kiemtra=1+(date('Y')-$laynamhoc)*2;
                    if($kiemtra<3)
                    {
                      $hockyhientai=1+((date('Y')-$laynamhoc)*2); 
                      if(($hockyhientai+2)<=8)
                      {
                        $hockyvuot=$hockyhientai+2; 
                      }
                      $obj = new Db();
                      $rowsdkmh=$obj->select("SELECT monhoc.mamh,monhoc.mahk,monhoc.tenmh,chitietphuongthucgiangdaymonhoc.mapphoc,chitietphuongthucgiangdaymonhoc.lythuyet,chitietphuongthucgiangdaymonhoc.baitap,chitietphuongthucgiangdaymonhoc.thuchanh,chitietphuongthucgiangdaymonhoc.doan,chitietphuongthucgiangdaymonhoc.LATN,chitietphuongthucgiangdaymonhoc.tinchi
                        FROM monhoc,chitietphuongthucgiangdaymonhoc
                        WHERE monhoc.mamh=chitietphuongthucgiangdaymonhoc.mamh AND (monhoc.mahk='$hockyhientai' OR monhoc.mahk='$hockyvuot') ");
                    }
                    else if($kiemtra>=3 && $kiemtra<=8)
                    {
                      $hockyhientai=1+((date('Y')-$laynamhoc)*2); 
                      $hockytruoc=$hockyhientai-2;
                      if(($hockyhientai+2)<=8)
                      {
                         $hockyvuot=$hockyhientai+2;
                      }
                      $obj = new Db();
                      $rowsdkmh=$obj->select("SELECT monhoc.mamh,monhoc.mahk,monhoc.tenmh,chitietphuongthucgiangdaymonhoc.mapphoc,chitietphuongthucgiangdaymonhoc.lythuyet,chitietphuongthucgiangdaymonhoc.baitap,chitietphuongthucgiangdaymonhoc.thuchanh,chitietphuongthucgiangdaymonhoc.doan,chitietphuongthucgiangdaymonhoc.LATN,chitietphuongthucgiangdaymonhoc.tinchi
                        FROM monhoc,chitietphuongthucgiangdaymonhoc
                        WHERE monhoc.mamh=chitietphuongthucgiangdaymonhoc.mamh AND (monhoc.mahk='$hockyhientai' OR monhoc.mahk='$hockytruoc' OR monhoc.mahk='$hockyvuot')");
                    }
                  }
                }
              }
              else if($item['mangaymodk']=='1' && (strtotime(date('Y-m-d'))<strtotime($item['ngaymodk']) || strtotime(date('Y-m-d'))>strtotime($item['ngaydongdk'])))
              {
              ?>
                <h1 style="margin-left: 170px;">Hết thời hạn đăng ký môn học.Vui lòng liên hệ tại Phòng Đào Tạo</h1>
              <?php
                exit();
              }
            }
          }
          //Lấy học kỳ chẵn
          else
          {
            foreach($layngaymodk as $item)
            {
              if($item['mangaymodk']==2 && strtotime(date('Y-m-d'))>=strtotime($item['ngaymodk']) && strtotime(date('Y-m-d'))<=strtotime($item['ngaydongdk']))
              {
                foreach($rowsnamhoc as $laynamhocs)
                {
                  foreach ($laynamhocs as $laynamhoc) 
                  {
                    $kiemtra=1+(date('Y')-$laynamhoc)*2;
                    if($kiemtra<3)
                    {
                      $hockyhientai=((date('Y')-$laynamhoc)*2); 
                      if(($hockyhientai+2)<=8)
                      {
                        $hockyvuot=$hockyhientai+2; 
                      }
                      $obj = new Db();
                      $rowsdkmh=$obj->select("SELECT monhoc.mamh,monhoc.mahk,monhoc.tenmh,chitietphuongthucgiangdaymonhoc.mapphoc,chitietphuongthucgiangdaymonhoc.lythuyet,chitietphuongthucgiangdaymonhoc.baitap,chitietphuongthucgiangdaymonhoc.thuchanh,chitietphuongthucgiangdaymonhoc.doan,chitietphuongthucgiangdaymonhoc.LATN,chitietphuongthucgiangdaymonhoc.tinchi
                        FROM monhoc,chitietphuongthucgiangdaymonhoc
                        WHERE monhoc.mamh=chitietphuongthucgiangdaymonhoc.mamh AND (monhoc.mahk='$hockyhientai' OR monhoc.mahk='$hockyvuot') ");
                    }
                    else if($kiemtra>=3 && $kiemtra<=8)
                    {
                      $hockyhientai=((date('Y')-$laynamhoc)*2); 
                      $hockytruoc=$hockyhientai-2;
                      if(($hockyhientai+2)<=8)
                      {
                         $hockyvuot=$hockyhientai+2;
                      }
                      $obj = new Db();
                      $rowsdkmh=$obj->select("SELECT monhoc.mamh,monhoc.mahk,monhoc.tenmh,chitietphuongthucgiangdaymonhoc.mapphoc,chitietphuongthucgiangdaymonhoc.lythuyet,chitietphuongthucgiangdaymonhoc.baitap,chitietphuongthucgiangdaymonhoc.thuchanh,chitietphuongthucgiangdaymonhoc.doan,chitietphuongthucgiangdaymonhoc.LATN,chitietphuongthucgiangdaymonhoc.tinchi
                        FROM monhoc,chitietphuongthucgiangdaymonhoc
                        WHERE monhoc.mamh=chitietphuongthucgiangdaymonhoc.mamh AND (monhoc.mahk='$hockyhientai' OR monhoc.mahk='$hockytruoc' OR monhoc.mahk='$hockyvuot')");
                    }
                  }
                }
              }
              else if($item['mangaymodk']=='2' && (strtotime(date('Y-m-d'))<strtotime($item['ngaymodk']) || strtotime(date('Y-m-d'))>strtotime($item['ngaydongdk'])))
              {
              ?>
                <h1 style="margin-left: 170px;">Hết thời hạn đăng ký môn học.Vui lòng liên hệ tại Phòng Đào Tạo</h1>
              <?php
              exit();
              }
            }
          }
      ?>
      <?php 
      foreach ($rowsdkmh as $laytieude)
      {
        if($laytieude['mahk']==$hockyhientai) 
        {
      ?>
          <h2 style="margin: 0 auto; margin-left: 300px; margin-top: 20px;">Môn học bạn có thể đăng ký. Học kỳ <?php echo $hockyhientai; ?> - Năm học <?php echo date('Y');?></h2>
          <?php break; ?>
        <?php
        }     
      }
      ?>
      <form action="xulythongtindangky.php" method="post">        
        <table border="1" style="border-style: inset; border-color: red; margin-left: 30px;" cellspacing="" ="0">
      <tr style="text-align: center; color: blue; font-weight: bold;">
        <td>STT</td>
        <td>Mã môn học</td>
        <td>Tên môn học</td>
        <td>Phương thức giảng dạy</td>
        <td>Lý thuyết</td>
        <td>Bài tập</td>
        <td>Thực hành</td>
        <td>Đồ án</td>
        <td>LATN</td>
        <td>Tín chỉ</td>
        <td>Học kỳ</td>
        <td>Đăng ký</td>
      </tr>
    <?php
    $i=0;
    $tinchitungky=0;
        foreach($rowsdkmh as $laynhungmhduocdky)
      {  
    ?>
        <?php
          if($laynhungmhduocdky['mahk']==$hockyhientai)
          {
            $i++;
            $tinhtongtinchi++;
            ?>
              <tr>
              <td style="text-align: center;"><?php echo $i?></td>
              <td><?php echo $laynhungmhduocdky['mamh'] ?></td>
              <td><?php echo $laynhungmhduocdky['tenmh'] ?></td>
              <td style="text-align: center;"><?php echo $laynhungmhduocdky['mapphoc'] ?></td>
              <td style="text-align: center;"><?php echo $laynhungmhduocdky['lythuyet'] ?></td>
              <td style="text-align: center;"><?php echo $laynhungmhduocdky['baitap'] ?></td>
              <td style="text-align: center;"><?php echo $laynhungmhduocdky['thuchanh'] ?></td>
              <td style="text-align: center;"><?php echo $laynhungmhduocdky['doan'] ?></td>
              <td style="text-align: center;"><?php echo $laynhungmhduocdky['LATN'] ?></td>
              <td style="text-align: center;"><?php echo $laynhungmhduocdky['tinchi'] ?></td>
              <td style="text-align: center;"><?php echo $laynhungmhduocdky['mahk'] ?></td>
              <td style="text-align: center;"><input type="checkbox" name="dangky[]" value="<?php echo $laynhungmhduocdky['mamh'] ?>" id="<?php echo $tinhtongtinchi; ?>" alt="<?php echo $laynhungmhduocdky['tinchi'] ?>" <?php foreach ($laytoanbomhdk as $item) 
                                {
                                  if($item['mamh']== $laynhungmhduocdky['mamh'])
                                  {
                                    echo "checked=checked";
                                  }
                                }?>    
              >
              </td>
            </tr>
            <?php
            $tinchitungky+=$laynhungmhduocdky['tinchi'];
          }
          ?>
        <?php
        } 
            //var_dump($luumonhientai);
        ?>
        <tr><td colspan="11">Tổng tín chỉ:</td><td><?php echo $tinchitungky; ?></td></tr>
        <?php
        $i=0;
        ?>    
              <?php
                foreach ($rowsdkmh as $layhkynamhoc) 
                { 
                  if(empty($hockytruoc))
                    {
                      break;
                    }
                    else
                    {
              ?>
                      <tr><td colspan="12" align="center">--------------------------Học kỳ <?php echo $hockytruoc; ?>  Năm học <?php echo date('Y'); ?>--------------------------<?php break; ?></td></tr>
              <?php
                    }
                }
              ?>
              <?php
                $tinchitungky=0;
                foreach($rowsdkmh as $laynhungmhduocdky)
                {
                  if(empty($hockytruoc))
                  {
                    break;
                  }
                  else if($laynhungmhduocdky['mahk']==$hockytruoc)
                  {
                    $tinhtongtinchi++;
                    $i++;
                  ?>
                    <tr>
                    <td style="text-align: center;"><?php echo $i?></td>
                    <td><?php echo $laynhungmhduocdky['mamh'] ?></td>
                    <td><?php echo $laynhungmhduocdky['tenmh'] ?></td>
                    <td style="text-align: center;"><?php echo $laynhungmhduocdky['mapphoc'] ?></td>
                    <td style="text-align: center;"><?php echo $laynhungmhduocdky['lythuyet'] ?></td>
                    <td style="text-align: center;"><?php echo $laynhungmhduocdky['baitap'] ?></td>
                    <td style="text-align: center;"><?php echo $laynhungmhduocdky['thuchanh'] ?></td>
                    <td style="text-align: center;"><?php echo $laynhungmhduocdky['doan'] ?></td>
                    <td style="text-align: center;"><?php echo $laynhungmhduocdky['LATN'] ?></td>
                    <td style="text-align: center;"><?php echo $laynhungmhduocdky['tinchi'] ?></td>
                    <td style="text-align: center;"><?php echo $laynhungmhduocdky['mahk'] ?></td>
                    <td style="text-align: center;"><input type="checkbox" name="dangky[]" value="<?php echo $laynhungmhduocdky['mamh'] ?>"  id="<?php echo $tinhtongtinchi; ?>" alt="<?php echo $laynhungmhduocdky['tinchi'] ?>"></td>
                  </tr>
                <?php
                  $tinchitungky+=$laynhungmhduocdky['tinchi'];
                  }
                }
                ?>
                <!-- Kiểm tra tồn tại học kỳ trước để xuất tổng tín chỉ của học kỳ trước -->
                <?php
                foreach ($rowsdkmh as $layhkynamhoc) 
                { 
                  if(empty($hockytruoc))
                    {
                      break;
                    }
                    else
                    {
              ?>
                      <td colspan="11">Tổng tín chỉ:</td><td><?php echo $tinchitungky; ?></td>
              <?php
                    break;
                    }
                }
              ?>

              <!-- Học kỳ vượt -->
              <?php
                $tinchitungky=0;
                foreach ($rowsdkmh as $layhkynamhoc) 
                { 
                  if(empty($hockyvuot))
                    {
                      break;
                    }
                    else
                    {
              ?>
                      <tr><td colspan="12" align="center">--------------------------Học kỳ <?php echo $hockyvuot; ?>  Năm học <?php echo date('Y'); ?>--------------------------<?php break; ?></td></tr>
              <?php
                    }
                }
              ?>

        <tr id="1000">
        <?php
        $i=0;
         foreach($rowsdkmh as $laynhungmhduocdky)
        {
        ?>
          <?php
          if($laynhungmhduocdky['mahk']==$hockyvuot)
          {
            $tinhtongtinchi++;
            $i++;
          ?>
            <td style="text-align: center;"><?php echo $i?></td>
            <td ><?php echo $laynhungmhduocdky['mamh'] ?></td>
            <td ><?php echo $laynhungmhduocdky['tenmh'] ?></td>
            <td style="text-align: center;"><?php echo $laynhungmhduocdky['mapphoc'] ?></td>
            <td style="text-align: center;"><?php echo $laynhungmhduocdky['lythuyet'] ?></td>
            <td style="text-align: center;"><?php echo $laynhungmhduocdky['baitap'] ?></td>
            <td style="text-align: center;"><?php echo $laynhungmhduocdky['thuchanh'] ?></td>
            <td style="text-align: center;"><?php echo $laynhungmhduocdky['doan'] ?></td>
            <td style="text-align: center;"><?php echo $laynhungmhduocdky['LATN'] ?></td>
            <td style="text-align: center;"><?php echo $laynhungmhduocdky['tinchi'] ?></td>
            <td style="text-align: center;"><?php echo $laynhungmhduocdky['mahk'] ?></td>
            <td style="text-align: center;"><input type="checkbox" name="dangky[]" value="<?php echo $laynhungmhduocdky['mamh'] ?>"  id="<?php echo $tinhtongtinchi; ?>" alt="<?php echo $laynhungmhduocdky['tinchi'] ?>"></td>
          </tr>
          <?php
          $tinchitungky+=$laynhungmhduocdky['tinchi'];
          }
          ?>
        <?php
        } 
        ?>
        <tr><td colspan="11">Tổng tín chỉ:</td><td><?php echo $tinchitungky; ?></td></tr>
        <?php
        $date = getdate();
        $ngaydk=$date['year'].'-'.$date['mon'].'-'.$date['mday'];
        ?>
      <!-- Lấy dữ liệu checkbox
      <script language="javascript">
                  document.getElementById('xacnhan').onclick = function()
                  {
                      // Khai báo tham số
                      var checkbox = document.getElementById("mh");
                      var result = "";
                       
                      // Lặp qua từng checkbox để lấy giá trị
                      for (var i = 0; i < checkbox.length; i++){
                          if (checkbox[i].checked === true){
                              result += ' [' + checkbox[i].value + ']';
                          }
                      }
                       
                      // In ra kết quả
                      alert("DK thanh cong");
                  };
      </script> -->

            <!-- Tinh tổng tín chỉ -->
            <!-- <script type="text/javascript">
            //var bienhky = function(){
              var tc=0;
              //var chuagiatri= $("#smm").val(); 
              //$("#abc").html(chuagiatri);
            //}
            //var trr=document.getElementById('1000').innerHTML;
            //console.log(trr);
            var i=1;
            var td=0;
            for(i=1;i<=100;i++)
            {
              //console.log("---------------");
              //console.log("---------------");
                if (document.getElementById(i).checked)
                {
                  alert(i);
                    td+= document.getElementById(i).alt;
                }
                // else{
                //   console.log('Quucsdfafdsa');
                // }
              } 
              console.log(td);
            </script> -->


      <input type="hidden" name="ngaydk" value="<?php echo $ngaydk?>">
      <tr><td colspan="12" align="right"><input type="submit" name="submit" value="Đăng ký"></td></tr>
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