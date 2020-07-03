
<?php
$sql = "SELECT * FROM tbl_option";
$options = $conn->query($sql);

$sql = "SELECT * FROM tbl_solution";
$solution = $conn->query($sql);
?>

<footer class="site-section bg-light footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="footer-title">Our Office</h3>
            <p><span class="d-inline-block d-md-block">126 Marsden Street,Parramatta, 2150,</span>New South Wales, Australia.
          <br>
          +61 (2) 8052 9569<br>
sales@smart-links.com.au,
support@smart-links.com.au

          </p>
          </div>
          <div class="col-md-5 mx-auto">
            <div class="row">
              <div class="col-lg-6">
                <h3 class="footer-title">OPTIONS & COST</h3>
                <ul class="list-unstyled">

                <?php
          while($row = $options->fetch_assoc()) { ?>
                  <li><a href="#"><?php echo $row['title']; ?></a></li>
          <?php } ?>

                </ul>
              </div>
              <div class="col-lg-6">
                <h3 class="footer-title">Our Business To</h3>
                <ul class="list-unstyled">
                <?php
          while($row = $solution->fetch_assoc()) { ?>
                  <li><a href="#"><?php echo $row['title']; ?></a></li>
          <?php } ?>
                </ul>
              </div>
              <!-- <div class="col-lg-4">
                <h3 class="footer-title">Templates</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Illustration</a></li>
                  <li><a href="#">Video Editing</a></li>
                  <li><a href="#">Copywriting</a></li>
                </ul>
              </div> -->
            </div>
          </div>
          <div class="col-md-3">
            <h3 class="footer-title">Follow Me</h3>
            <a href="#" class="social-circle m-2"><span class="icon-twitter"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-facebook"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-instagram"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-dribbble"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-linkedin"></span></a>
          </div>
        </div>

        <div class="row">
          <div class="col-12 text-center">
            <p>
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved  <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="index.php" target="_blank">Travel GST</a>
              </p>  
          </div>
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
  </body>
</html>