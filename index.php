<?php
include_once "config/database.php";
include "includes/head.php";
?>
 <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <?php
    include "includes/header.php";
    include "includes/slider.php";
    include "includes/about.php";
    include "includes/services.php";
    include "includes/projects.php";
    include "includes/options.php";
    include "includes/video.php";
    include "includes/client.php";
    include "includes/request.php";
    ?>

    <?php 
    include "includes/footer.php";
