<?php
$sql = "SELECT * FROM tbl_bnanner";
$result = $conn->query($sql);
$query = mysqli_query($conn,"SELECT * FROM tbl_bnanner");
$row = mysqli_fetch_array($query);

?>
<div class="site-blocks-cover overlay bg-light" style="background-image: url('<?php echo $row['image']; ?>'); " id="home-section">

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12 text-center align-self-center text-intro">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h1 class="text-white" data-aos="fade-up" data-aos-delay=""><?php echo $row['head']; ?></h1>
                <p class="lead text-white" data-aos="fade-up" data-aos-delay="100"><?php echo $row['sub_head']; ?></p>
                <p data-aos="fade-up" data-aos-delay="200"><a href="<?php echo $row['url']; ?>" class="btn smoothscroll btn-primary"><?php echo $row['button_text']; ?></a></p>

              </div>
            </div>
          </div>
            
        </div>
      </div>

    </div>  