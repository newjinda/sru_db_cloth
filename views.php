<?php include 'header.php'; ?>

  <main id="main">
<style>
    section {
    padding: 0 0 5px 0;
}
<?php 
if($_POST['id'] != ''){
    $check = mysqli_query($conn, "SELECT * FROM data  where data_id = '". $_POST["id"] ."' " );
    $row = mysqli_fetch_array($check);
}else{
    echo "<script>window.location.href='index.php'</script>";
}


?>
</style>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <!-- <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Portfolio</li>
        </ol>
        <h2>Portfolio</h2>

      </div> -->
    </section><!-- End Breadcrumbs -->
    <section id="portfolio-details" class="portfolio-details">
    <div class="container">
    <div class="row gy-4">
        <div class="col-lg-12">
        <div class="portfolio-info">
              <h3>ข้อมูลวัฒนธรรม: <?php echo $row['data_code'] ?></h3>
              <p>ข้อมูลวัฒนธรรม: <?php echo $row['record'] ?></p>
            </div>
            
          </div>
        </div>
            
            </div>
    </section>
    <style>


td, th {
  border: 0px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>   
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
        <div class="col-lg-4">
            <div class="portfolio-info">
            <table>

            <tr>
                <td ><img src="assets/search.gif" width="50px"></td>
                <td><b style="font-size: 20px;">หมวดหมู่วัฒนธรรม</b></td>
            </tr>
            <tr>
                <td background-color: #fff;></td>
                <td ><?php echo $row['data_type'] ?></td>
            </tr>
            <tr>
                <td ><img src="assets/infographic-elements.gif" width="50px"></td>
                <td><b style="font-size: 20px;">หมวดหมู่วัฒนธรรม</b></td>
            </tr>
            <tr>
                <td ></td>
                <td  ><?php echo $row['data_category'] ?></td>
            </tr>
            <tr>
                <td ><img src="assets/map.gif" width="50px"></td>
                <td><b style="font-size: 20px;">ที่ตั้ง</b></td>
            </tr>
            <tr>
                <td ></td>
                <td  ><?php echo 'เลขที่: ', $row['house_number'],' ตำบล: ', $row['data_district'],' อำเภอ: ', $row['data_amphoe'],' จังหวัด: ', $row['data_province'],' รหัสไปรษณีย์: ', $row['data_zipcode'] ?></td>
            </tr>
            <tr>
                <td ><img src="assets/user.gif" width="50px"></td>
                <td><b style="font-size: 20px;">ชื่อผู้ให้ข้อมูลหรือชื่อกลุ่มผู้ให้ข้อมูล</b></td>
            </tr>
            <tr>
                <td ></td>
                <td  ><?php echo $row['information_provider'] ?></td>
            </tr>
            <tr>
                <td ><img src="assets/happy.gif" width="50px"></td>
                <td><b style="font-size: 20px;">ช่องทางติดต่อผู้ให้ข้อมูล</b></td>
            </tr>
            <tr>
                <td ></td>
                <td  ><?php echo $row['contact'] ?></td>
            </tr>
            <tr >
                <td ><img src="assets/search.gif" width="50px"></td>
                <td><b style="font-size: 20px;">แหล่งข้อมูอื่น</b></td>
            </tr>
            <tr style="background-color: #fff;">
                <td ></td>
                <td  ><a href="<?php echo $row['link'] ?>" target="_blank"><?php echo $row['link'] ?></a></td>
            </tr>
            <tr>
                <td ><img src="assets/video-player.gif" width="50px"></td>
                <td><b style="font-size: 20px;">ลิงค์VDOที่เกี่ยวข้อง</b></td>
            </tr>
            <?php if($row['linkvdo1']!=''){?>
            <tr style="background-color: #fff;">
                
                <td style=" text-align: center;"><b>VDO 1</b></td>
                <td  ><a href="<?php echo $row['linkvdo1'] ?>" target="_blank"><?php echo $row['linkvdo1'] ?></a></td>
               
            </tr>
            <?php }?>
            <?php if($row['linkvdo2']!=''){?>
            <tr>
                
                <td style=" text-align: center;"><b>VDO 2</b></td>
                <td  ><a href="<?php echo $row['linkvdo2'] ?>" target="_blank"><?php echo $row['linkvdo2'] ?></a></td>
                
                
            </tr>
            <?php }?>
            <?php if($row['linkvdo3']!=''){?>
            <tr style="background-color: #fff;">
                
                <td style=" text-align: center;"><b>VDO 3</b></td>
                <td  ><a href="<?php echo $row['linkvdo3'] ?>" target="_blank"><?php echo $row['linkvdo3'] ?></a></td>
                
                
            </tr>
            <?php }?>
            <?php if($row['linkvdo4']!=''){?>
            <tr>
                
                <td style=" text-align: center;"><b>VDO 4</b></td>
                <td  ><a href="<?php echo $row['linkvdo4'] ?>" target="_blank"><?php echo $row['linkvdo4'] ?></a></td>
               
                
            </tr>
            <?php }?>
            </table>
              <!-- <h3>ประเภทวัฒนธรรม

                <p><?php echo $row['data_type'] ?></p>
              </h3>
              <h3>หมวดหมู่วัฒนธรรม</h3>
              <h3>ที่ตั้ง</h3>
              <h3>ชื่อผู้ให้ข้อมูลหรือชื่อกลุ่มผู้ให้ข้อมูล</h3>
              <h3>ช่องทางติดต่อผู้ให้ข้อมูล</h3>
              <h3>ผู้บันทึกข้อมูล</h3>
              <h3>แหล่งข้อมูอื่น ๆ</h3> -->

             
            </div>
            
          </div>
          <div class="col-lg-8">
          <section id="portfolio" class="portfolio">
      <div class="container">

        <!-- <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container">

        <?php if($row['img_name1'] != ''){?>
          <div class="col-lg-6 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="admin-sru/Admin/img_data/<?php echo $row['img_name1'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <!-- <h4>App 1</h4>
                <p>App</p> -->
                <div class="portfolio-links">
                  <a href="admin-sru/Admin/img_data/<?php echo $row['img_name1'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
        <?php if($row['img_name2'] != ''){?>
          <div class="col-lg-6 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="admin-sru/Admin/img_data/<?php echo $row['img_name2'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <!-- <h4>App 1</h4>
                <p>App</p> -->
                <div class="portfolio-links">
                  <a href="admin-sru/Admin/img_data/<?php echo $row['img_name2'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
        <?php if($row['img_name3'] != ''){?>
          <div class="col-lg-6 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="admin-sru/Admin/img_data/<?php echo $row['img_name3'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <!-- <h4>App 1</h4>
                <p>App</p> -->
                <div class="portfolio-links">
                  <a href="admin-sru/Admin/img_data/<?php echo $row['img_name3'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
        <?php if($row['img_name4'] != ''){?>
          <div class="col-lg-6 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="admin-sru/Admin/img_data/<?php echo $row['img_name4'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <!-- <h4>App 1</h4>
                <p>App</p> -->
                <div class="portfolio-links">
                  <a href="admin-sru/Admin/img_data/<?php echo $row['img_name4'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
            <!-- <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div> -->
          </div>


        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

    <!-- ======= Portfolio Section ======= -->

  </main><!-- End #main -->

  
  <!-- ======= Footer ======= -->

  <?php include 'foodter.php'; ?>