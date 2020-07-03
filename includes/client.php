<?php
$sql = "SELECT * FROM tbl_client where status='1'";
$result = $conn->query($sql);
?>
<section id="clients" class="section-bg">
    <div class="container">
    <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Sample Airlines Processed</h2>
          </div>
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <?php
          while($row = $result->fetch_assoc()) { ?>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"><a href="<?php echo $row['url']; ?>" target="_blank"><img src="<?php echo $row['logo']; ?>" class="img-fluid" alt=""></a>  </div>
            </div>
    
            <?php  } ?>


          
        </div>
    </div>
</section>