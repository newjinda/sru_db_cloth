<?php include 'header.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
    
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">

<!-- 
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>panyawut5380@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div> -->
          <style>
.contact .info-box {
  font-family: 'Kanit', sans-serif;
  background-color: #b4aaa8;
    color: #c7b1b1;
    text-align: center;
    box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
    padding: 2px 0 2px 0;
}
.contact .info-box h3 {
  font-family: 'Kanit', sans-serif;
    font-size: 16px;
    color: #000;
    font-weight: 700;
    margin: 10px 0;
}
          </style>
          <div class="col-lg-3">
            <div class="info-box mb-4">
             
              <h3>ค้นหาข้อมูล | วัฒนธรรม</h3>
              
            </div>
          </div>
          <div class="col-lg-2">
            <div class="info-box mb-4">
             
              <h3> สัญลักษณ์ และ ชื่อหมวดหมู่ </h3>
              
            </div>
          </div>
          <div class="col-lg-7">
            <div class="info-box mb-4">
              
              <h3>แผนที่วัฒนธรรม</h3>
             
            </div>
          </div>
        </div>
<style>
.contact .php-email-form1 {
    box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
    padding: 30px;
}
</style>
        <div class="row">

          <div class="col-lg-3">
            <form action="cout.php" method="post" role="form" class="php-email-form1">
              <!-- <div class="row"> -->
                <!-- <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div> -->
              <input type="hidden" name="sud" value="sud">
              <div class="form-group mt-3">
                <select name="category" class="form-control" >
               
                <option value="">--------- เลือกหมวดหมู่วัฒนธรรม ---------</option>
                                            <option <?php if($_POST['category'] == ": AA :โปราณวัตถุ"){ echo "selected";  } ?> value=": AA :โปราณวัตถุ">: AA :โปราณวัตถุ</option>
                                            <option <?php if($_POST['category'] == ": AR :สถาปัตยกรรม"){ echo "selected";  } ?> value=": AR :สถาปัตยกรรม">: AR :สถาปัตยกรรม</option>
                                            <option <?php if($_POST['category'] == ": AS :โบราณสถาน"){ echo "selected";  } ?> value=": AS :โบราณสถาน">: AS :โบราณสถาน</option>
                                            <option <?php if($_POST['category'] == ": CS :พื้นที่วัฒนธรรม"){ echo "selected";  } ?> value=": CS :พื้นที่วัฒนธรรม">: CS :พื้นที่วัฒนธรรม</option>
                                            <option <?php if($_POST['category'] == ": EL :ภาษา"){ echo "selected";  } ?> value=": EL :ภาษา">: EL :ภาษา</option>
                                            <option <?php if($_POST['category'] == ": FL :วรรณกรรมพื้นบ้าน"){ echo "selected";  } ?> value=": FL :วรรณกรรมพื้นบ้าน">: FL :วรรณกรรมพื้นบ้าน</option>
                                            <option <?php if($_POST['category'] == ": KP :ความรู้และแนวปฏิบัติเกี่ยวกับธรรมชาติและจักรวาล"){ echo "selected";  } ?> value=": KP :ความรู้และแนวปฏิบัติเกี่ยวกับธรรมชาติและจักรวาล">: KP :ความรู้และแนวปฏิบัติเกี่ยวกับธรรมชาติและจักรวาล</option>
                                            <option <?php if($_POST['category'] == ": PA :ศิลปะการแสดง"){ echo "selected";  } ?> value=": PA :ศิลปะการแสดง">: PA :ศิลปะการแสดง</option>
                                            <option <?php if($_POST['category'] == ": SM :กีฬาภูมิปัญญาไทย"){ echo "selected";  } ?> value=": SM :กีฬาภูมิปัญญาไทย">: SM :กีฬาภูมิปัญญาไทย</option>
                                            <option <?php if($_POST['category'] == ": SP :แนวปฏิบัติทางสังคม พิธีกรรม และงานเทศกาล"){ echo "selected";  } ?> value=": SP :แนวปฏิบัติทางสังคม พิธีกรรม และงานเทศกาล">: SP :แนวปฏิบัติทางสังคม พิธีกรรม และงานเทศกาล</option>
                                            <option <?php if($_POST['category'] == ": TC :งานช่างฝีมือดั้งเดิม"){ echo "selected";  } ?> value=": TC :งานช่างฝีมือดั้งเดิม">: TC :งานช่างฝีมือดั้งเดิม</option>
                                            <option <?php if($_POST['category'] == "all"){ echo "selected";  } ?> value="all">ทั้งหมด</option>

                </select>
              </div>
              <div class="form-group mt-3">
                <select name="province" class="form-control" >
                <option value="" >--------- เลือกจังหวัด ---------</option>
                                <option <?php if($_POST['province'] == "กรุงเทพมหานคร"){ echo "selected";  } ?> value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                <option <?php if($_POST['province'] == "กระบี่"){ echo "selected";  } ?> value="กระบี่">กระบี่ </option>
                                <option <?php if($_POST['province'] == "กาญจนบุรี"){ echo "selected";  } ?> value="กาญจนบุรี">กาญจนบุรี </option>
                                <option <?php if($_POST['province'] == "กาฬสินธุ์"){ echo "selected";  } ?> value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                <option <?php if($_POST['province'] == "กำแพงเพชร"){ echo "selected";  } ?> value="กำแพงเพชร">กำแพงเพชร </option>
                                <option <?php if($_POST['province'] == "ขอนแก่น"){ echo "selected";  } ?> value="ขอนแก่น">ขอนแก่น</option>
                                <option <?php if($_POST['province'] == "จันทบุรี"){ echo "selected";  } ?> value="จันทบุรี">จันทบุรี</option>
                                <option <?php if($_POST['province'] == "ฉะเชิงเทรา"){ echo "selected";  } ?> value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                <option <?php if($_POST['province'] == "ชัยนาท"){ echo "selected";  } ?> value="ชัยนาท">ชัยนาท </option>
                                <option <?php if($_POST['province'] == "ชัยภูมิ"){ echo "selected";  } ?> value="ชัยภูมิ">ชัยภูมิ </option>
                                <option <?php if($_POST['province'] == "ชุมพร"){ echo "selected";  } ?> value="ชุมพร">ชุมพร </option>
                                <option <?php if($_POST['province'] == "ชลบุรี"){ echo "selected";  } ?> value="ชลบุรี">ชลบุรี </option>
                                <option <?php if($_POST['province'] == "เชียงใหม่"){ echo "selected";  } ?> value="เชียงใหม่">เชียงใหม่ </option>
                                <option <?php if($_POST['province'] == "เชียงราย"){ echo "selected";  } ?> value="เชียงราย">เชียงราย </option>
                                <option <?php if($_POST['province'] == "ตรัง"){ echo "selected";  } ?> value="ตรัง">ตรัง </option>
                                <option <?php if($_POST['province'] == "ตราด"){ echo "selected";  } ?> value="ตราด">ตราด </option>
                                <option <?php if($_POST['province'] == "ตาก"){ echo "selected";  } ?> value="ตาก">ตาก </option>
                                <option <?php if($_POST['province'] == "นครนายก"){ echo "selected";  } ?> value="นครนายก">นครนายก </option>
                                <option <?php if($_POST['province'] == "นครปฐม"){ echo "selected";  } ?> value="นครปฐม">นครปฐม </option>
                                <option <?php if($_POST['province'] == "นครพนม"){ echo "selected";  } ?> value="นครพนม">นครพนม </option>
                                <option <?php if($_POST['province'] == "นครราชสีมา"){ echo "selected";  } ?> value="นครราชสีมา">นครราชสีมา </option>
                                <option <?php if($_POST['province'] == "นครศรีธรรมราช"){ echo "selected";  } ?> value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                <option <?php if($_POST['province'] == "นครสวรรค์"){ echo "selected";  } ?> value="นครสวรรค์">นครสวรรค์ </option>
                                <option <?php if($_POST['province'] == "นราธิวาส"){ echo "selected";  } ?> value="นราธิวาส">นราธิวาส </option>
                                <option <?php if($_POST['province'] == "น่าน"){ echo "selected";  } ?> value="น่าน">น่าน </option>
                                <option <?php if($_POST['province'] == "นนทบุรี"){ echo "selected";  } ?> value="นนทบุรี">นนทบุรี </option>
                                <option <?php if($_POST['province'] == "บึงกาฬ"){ echo "selected";  } ?> value="บึงกาฬ">บึงกาฬ</option>
                                <option <?php if($_POST['province'] == "บุรีรัมย์"){ echo "selected";  } ?> value="บุรีรัมย์">บุรีรัมย์</option>
                                <option <?php if($_POST['province'] == "ประจวบคีรีขันธ์"){ echo "selected";  } ?> value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                <option <?php if($_POST['province'] == "ปทุมธานี"){ echo "selected";  } ?> value="ปทุมธานี">ปทุมธานี </option>
                                <option <?php if($_POST['province'] == "ปราจีนบุรี"){ echo "selected";  } ?> value="ปราจีนบุรี">ปราจีนบุรี </option>
                                <option <?php if($_POST['province'] == "ปัตตานี"){ echo "selected";  } ?> value="ปัตตานี">ปัตตานี </option>
                                <option <?php if($_POST['province'] == "พะเยา"){ echo "selected";  } ?> value="พะเยา">พะเยา </option>
                                <option <?php if($_POST['province'] == "พระนครศรีอยุธยา"){ echo "selected";  } ?> value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                <option <?php if($_POST['province'] == "พังงา"){ echo "selected";  } ?> value="พังงา">พังงา </option>
                                <option <?php if($_POST['province'] == "พิจิตร"){ echo "selected";  } ?> value="พิจิตร">พิจิตร </option>
                                <option <?php if($_POST['province'] == "พิษณุโลก"){ echo "selected";  } ?> value="พิษณุโลก">พิษณุโลก </option>
                                <option <?php if($_POST['province'] == "เพชรบุรี"){ echo "selected";  } ?> value="เพชรบุรี">เพชรบุรี </option>
                                <option <?php if($_POST['province'] == "เพชรบูรณ์"){ echo "selected";  } ?> value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                <option <?php if($_POST['province'] == "แพร่"){ echo "selected";  } ?> value="แพร่">แพร่ </option>
                                <option <?php if($_POST['province'] == "พัทลุง"){ echo "selected";  } ?> value="พัทลุง">พัทลุง </option>
                                <option <?php if($_POST['province'] == "ภูเก็ต"){ echo "selected";  } ?> value="ภูเก็ต">ภูเก็ต </option>
                                <option <?php if($_POST['province'] == "มหาสารคาม"){ echo "selected";  } ?> value="มหาสารคาม">มหาสารคาม </option>
                                <option <?php if($_POST['province'] == "มุกดาหาร"){ echo "selected";  } ?> value="มุกดาหาร">มุกดาหาร </option>
                                <option <?php if($_POST['province'] == "แม่ฮ่องสอน"){ echo "selected";  } ?> value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                <option <?php if($_POST['province'] == "ยโสธร"){ echo "selected";  } ?> value="ยโสธร">ยโสธร </option>
                                <option <?php if($_POST['province'] == "ยะลา"){ echo "selected";  } ?> value="ยะลา">ยะลา </option>
                                <option <?php if($_POST['province'] == "ร้อยเอ็ด"){ echo "selected";  } ?> value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                <option <?php if($_POST['province'] == "ระนอง"){ echo "selected";  } ?> value="ระนอง">ระนอง </option>
                                <option <?php if($_POST['province'] == "ระยอง"){ echo "selected";  } ?> value="ระยอง">ระยอง </option>
                                <option <?php if($_POST['province'] == "ราชบุรี"){ echo "selected";  } ?> value="ราชบุรี">ราชบุรี</option>
                                <option <?php if($_POST['province'] == "ลพบุรี"){ echo "selected";  } ?> value="ลพบุรี">ลพบุรี </option>
                                <option <?php if($_POST['province'] == "ลำปาง"){ echo "selected";  } ?> value="ลำปาง">ลำปาง </option>
                                <option <?php if($_POST['province'] == "ลำพูน"){ echo "selected";  } ?> value="ลำพูน">ลำพูน </option>
                                <option <?php if($_POST['province'] == "เลย"){ echo "selected";  } ?> value="เลย">เลย </option>
                                <option <?php if($_POST['province'] == "ศรีสะเกษ"){ echo "selected";  } ?> value="ศรีสะเกษ">ศรีสะเกษ</option>
                                <option <?php if($_POST['province'] == "สกลนคร"){ echo "selected";  } ?> value="สกลนคร">สกลนคร</option>
                                <option <?php if($_POST['province'] == "สงขลา"){ echo "selected";  } ?> value="สงขลา">สงขลา </option>
                                <option <?php if($_POST['province'] == "สมุทรสาคร"){ echo "selected";  } ?> value="สมุทรสาคร">สมุทรสาคร </option>
                                <option <?php if($_POST['province'] == "สมุทรปราการ"){ echo "selected";  } ?> value="สมุทรปราการ">สมุทรปราการ </option>
                                <option <?php if($_POST['province'] == "สมุทรสงคราม"){ echo "selected";  } ?> value="สมุทรสงคราม">สมุทรสงคราม </option>
                                <option <?php if($_POST['province'] == "สระแก้ว"){ echo "selected";  } ?> value="สระแก้ว">สระแก้ว </option>
                                <option <?php if($_POST['province'] == "สระบุรี"){ echo "selected";  } ?> value="สระบุรี">สระบุรี </option>
                                <option <?php if($_POST['province'] == "สิงห์บุรี"){ echo "selected";  } ?> value="สิงห์บุรี">สิงห์บุรี </option>
                                <option <?php if($_POST['province'] == "สุโขทัย"){ echo "selected";  } ?> value="สุโขทัย">สุโขทัย </option>
                                <option <?php if($_POST['province'] == "สุพรรณบุรี"){ echo "selected";  } ?> value="สุพรรณบุรี">สุพรรณบุรี </option>
                                <option <?php if($_POST['province'] == "สุราษฎร์ธานี"){ echo "selected";  } ?> value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                <option <?php if($_POST['province'] == "สุรินทร์"){ echo "selected";  } ?> value="สุรินทร์">สุรินทร์ </option>
                                <option <?php if($_POST['province'] == "สตูล"){ echo "selected";  } ?> value="สตูล">สตูล </option>
                                <option <?php if($_POST['province'] == "หนองคาย"){ echo "selected";  } ?> value="หนองคาย">หนองคาย </option>
                                <option <?php if($_POST['province'] == "หนองบัวลำภู"){ echo "selected";  } ?> value="หนองบัวลำภู">หนองบัวลำภู </option>
                                <option <?php if($_POST['province'] == "อำนาจเจริญ"){ echo "selected";  } ?> value="อำนาจเจริญ">อำนาจเจริญ </option>
                                <option <?php if($_POST['province'] == "อุดรธานี"){ echo "selected";  } ?> value="อุดรธานี">อุดรธานี </option>
                                <option <?php if($_POST['province'] == "อุตรดิตถ์"){ echo "selected";  } ?> value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                <option <?php if($_POST['province'] == "อุทัยธานี"){ echo "selected";  } ?> value="อุทัยธานี">อุทัยธานี </option>
                                <option <?php if($_POST['province'] == "อุบลราชธานี"){ echo "selected";  } ?> value="อุบลราชธานี">อุบลราชธานี</option>
                                <option <?php if($_POST['province'] == "อ่างทอง"){ echo "selected";  } ?> value="อ่างทอง">อ่างทอง </option>
                                <option <?php if($_POST['province'] == "all"){ echo "selected";  } ?> value="all">ทั้งหมด</option>

                </select>
              </div>
              <!-- <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div> -->
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <br>
              <div class="text-center"><button type="submit" style="background: #fffbfa;
    border: 0;
    border-radius: 50px;
    padding: 10px 24px;
    color: back;
    transition: 0.4s;
    font-size: 20px"><img src="assets/search (2).gif" width="40px"> ค้นหาข้อมูล</button></div>
            </form>

            
          </div>
        
          <div class="col-lg-2">
        <div class="form-group mt-3" style='font-size: 14px;'>
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <img src="assets/icon/AA.png" width="30"> : AA : โปราณวัตถุ<br><hr>
        <img src="assets/icon/AR.png" width="30"> : AR : สถาปัตยกรรม<br><hr>
        <img src="assets/icon/AS.png" width="30"> : AS : โบราณสถาน<br><hr>
        <img src="assets/icon/CS.png" width="30"> : CS : พื้นที่วัฒนธรรม<br><hr>
        <img src="assets/icon/EL.png" width="30"> : EL : ภาษา<br><hr>
        <img src="assets/icon/FL.png" width="30"> : FL : วรรณกรรมพื้น<br><hr>
        <img src="assets/icon/KP.png" width="30"> : KP : ความรู้และแนวปฏิบัติเกี่ยวกับธรรมชาติและจักรวาล<br><hr>
        <img src="assets/icon/PA.png" width="30"> : PA : ศิลปะการแสดง<br><hr>
        <img src="assets/icon/SM.png" width="30"> : SM : กีฬาภูมิปัญญาไทย<br><hr>
        <img src="assets/icon/SP.png" width="30"> : SP : แนวปฏิบัติทางสังคม พิธีกรรม และงานเทศกาล<br><hr>
        <img src="assets/icon/TC.png" width="30"> : TC : งานช่างฝีมือดั้งเดิม

        </form>
        </div>
         </div>
          
          <style type="text/css">
            .container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 90%;
}
    html{
        height:100%;
    }
 
    #map {
        height: 850px;
    }
    .map-inner {
         height: 390px;
        position: relative;
    }
</style>

        <?php 

        if ($_POST["category"] == '' and $_POST["province"] == ''){
          $check = mysqli_query($conn, "SELECT * FROM data " );

        }elseif ($_POST["category"] == 'all' and $_POST["province"] == 'all'){
          $check = mysqli_query($conn, "SELECT * FROM data " );

        }elseif($_POST["category"] == 'all' and $_POST["province"] != ''){
          $check = mysqli_query($conn, "SELECT * FROM data where data_province = '". $_POST["province"] ."'  " );

        }elseif($_POST["category"] != '' and $_POST["province"] == 'all'){
          $check = mysqli_query($conn, "SELECT * FROM data where data_category = '". $_POST["category"] ."'  " );
        }

        elseif($_POST["category"] != '' and $_POST["province"] != '' ){
          $check = mysqli_query($conn, "SELECT * FROM data where data_category = '". $_POST["category"] ."' and  data_province = '". $_POST["province"] ."' " );
       
        }elseif($_POST["category"] != '' and $_POST["province"] == '' ){
          $check = mysqli_query($conn, "SELECT * FROM  data where data_category = '". $_POST["category"] ."' " );
        

        }elseif($_POST["category"] == '' and $_POST["province"] != '' ){
          $check = mysqli_query($conn, "SELECT * FROM  data where data_province = '". $_POST["province"] ."' " );
        }

  
        if ($_POST["category"] != '' or $_POST["province"] != ''){
          
          $count_c =  mysqli_num_rows($check);
         
          if ($count_c == 0){
            
  
            ?>
            <?php
              if (isset($count_c)) { ?>

                <script>
                  $(document).ready(function() {

                    swal({
                      title: "!ไม่พบข้อมูลที่ค้นหา",
                      text: "",
                      icon: 'info',
                      confirmButtonText: 'ตกลง',
                      showCloseButton: true
                    })

                  });
                </script>

          <?php }}
          ?>
        
          

       <?php  }
  
        ?>


          <script type="text/javascript" src="https://api.longdo.com/map/?key=26873ddc7f57f2bf7f2a32659ded3492"></script>
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script>
                var map;
                
                function init() {

                    map = new longdo.Map({
                        placeholder: document.getElementById('map')
                    });
                    <?php while ($row = mysqli_fetch_array($check)){
                      $v = substr($row['data_category'], 1);
                      $cutstr = substr($v,0,3);
                      $cutstr_s = trim($cutstr.'.png');
                      $mess = $row['record'];
                      $message = mb_strimwidth( $mess, 0, 250, '...' );
                      ?>
                    var marker<?php echo $row['data_id'] ?> = new longdo.Marker({  lon:<?php echo $row['data_gps_longitude'] ?>, lat:<?php echo $row['data_gps_latitude'] ?> }, 
                    
                    {
                    title: '<p><?php echo $row['data_category'] ?></p>',
                    detail: '<p>กำลังดึงข้อมูล......</p>',
                    icon: {
                      html: '<img src="assets/icon/<?php echo $cutstr_s ?>" width="32">',
                      offset: { x: 40, y: 40 }
                    },
                    loadDetail: updateDetail<?php echo $row['data_id'] ?>,
                    size: { width: 480, height: 450 },
                    closable: false
                  });
                 function updateDetail<?php echo $row['data_id'] ?>(element) {
                    setTimeout(function() {
                      element.innerHTML = '<h5><?php echo $row['data_code'] ?></h5> <h5>ชื่อวัฒนธรรม <br>TH:<?php echo $row['data_thai_name'] ?><br>En:<?php echo $row['data_english_name'] ?></h5><br><img src="admin-sru/Admin/img_data/<?php echo $row['img_name1']  ?>"  width="250"  ><br><br><p><?php echo $message ?><br><a style="font-size: 16px;" href="q.php?q=<?php echo $row['data_id'] ?>" target="_blank"> >>คลิกเพื่ออ่านต่อ /ดูข้อมูล</a></p>';                    
                    }, 1000);
                  }
              map.Overlays.add(marker<?php echo $row['data_id'] ?>);
                    
                    
                    <?php }?>
                    var result = map.bound();
                  map.bound({
                    minLon: 100, minLat: 13,
                    maxLon: 101, maxLat: 14
                  });
                  map.zoomRange({ min:7, max:7 });
                    map.Ui.DPad.visible(false);
                    map.Ui.Zoombar.visible(false);
                    map.Ui.Geolocation.visible(false);
                    map.Ui.Toolbar.visible(false);
                    map.Ui.LayerSelector.visible(true);
                    map.Ui.Fullscreen.visible(false);
                    map.Ui.Crosshair.visible(false);
                    map.Ui.Scale.visible(false);
                    map.Layers.setBase(longdo.Layers.POLITICAL);
                }

            </script>
          <div class="col-lg-7 ">
          <body onload="init();">
        <div id="map"></div>
    </body>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

    <?php include 'foodter.php'; ?>