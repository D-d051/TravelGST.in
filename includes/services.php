
<?php

$sql = "SELECT * FROM tbl_solution";
$result = $conn->query($sql);


?>


<div class="site-section" id="services-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Solution</h2>
            <p>
            Our solution helps to optimise the GST related processes of all the following business categories (using our product set of SmartFETCH, SmartDT and SmartRECON).
            </p>
          </div>
<?php
          while($row = $result->fetch_assoc()) { ?>
<div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="<?php echo $row['icon']; ?>" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3><?php echo $row['title']; ?></h3>
                <p><?php echo $row['content']; ?></p>
              </div>
            </div>
          </div>
 <?php  } ?>
           
          

          <!-- <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/001-travel.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Hotels</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/003-travel-2.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Merchants</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/004-travel-3.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Social Media Advertising</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/005-travel-4.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Social Media Advertising</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/006-food.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Web Design / Development</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
