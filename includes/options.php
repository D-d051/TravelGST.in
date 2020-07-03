<?php
$sql = "SELECT * FROM tbl_option";
$result = $conn->query($sql);

?>
 
 <section class="site-section bg-light" id="option-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">OPTIONS & COST</h2>
          </div>

          <?php
          while($row = $result->fetch_assoc()) { ?>
 <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="<?php echo $row['icon']; ?> text-center icon-lg icon-yellow icon-bg-primary icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3"><?php echo $row['title']; ?></h4>
                    <p>
                    <?php echo $row['content']; ?>
                    </p>
                </div>
            </div>
        </div>
 <?php  } ?>
       
      

    </div>
</div>
</section>