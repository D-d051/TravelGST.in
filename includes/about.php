<?php
$sql = "SELECT * FROM tbl_bnanner";
$result = $conn->query($sql);
$query = mysqli_query($conn,"SELECT * FROM tbl_about");
$row_about = mysqli_fetch_array($query);
?>

<div class="site-section" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title"><?php echo $row_about['title']; ?></h2>
          </div>
          <div class="col-lg-4">
            <p>
            <?php echo  substr($row_about['content'],0,121) ;?>
            </p>
          </div>
          <div class="col-lg-4">
            <img src="<?php echo  $row_about['image']?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4">
            <p>
            <?php echo  substr($row_about['content'],121) ;?>
            </p>
          </div>
          
          
        </div>
      </div>
    </div>