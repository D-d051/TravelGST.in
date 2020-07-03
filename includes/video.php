
<?php
$sql = "SELECT * FROM tbl_video where status='YES'";
$result = $conn->query($sql);
?>

<div class="site-section bg-primary" id="blog-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Solution</h2>
          
          </div>
          <?php
          while($row = $result->fetch_assoc()) { ?>
          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
          <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo $row['video_code']; ?>" allowfullscreen></iframe>
        </div>
          </div>
          <?php  } ?>
        

        </div>
      </div>
    </div>
