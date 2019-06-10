<?php include "header.php"; ?>

<section id="work-detail" class="section work-detail">
  <?php 
    $result = $conn->query("SELECT * FROM tblproduct WHERE stats=1");
 ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 work-detail-margin detail-contentbox">
            <div class="detail-content">
              <a href="grocery.php?id=" class="portfolio-link"><h4><?php echo "Grocery"; ?></h4></a>
<!--              <a class="btn" href="#">Visit Site <i class="fa fa-long-arrow-right"></i></a> </div>  -->
          </div>
        </div>
      </div>
	  <div class="row">
          <div class="col-md-12 work-detail-margin detail-contentbox">
            <div class="detail-content">
              <a href="household.php?id=" class="portfolio-link"><h4><?php echo "Household"; ?></h4></a>
<!--              <a class="btn" href="#">Visit Site <i class="fa fa-long-arrow-right"></i></a> </div>  -->
          </div>
        </div>
      </div>
	  <div class="row">
          <div class="col-md-12 work-detail-margin detail-contentbox">
            <div class="detail-content">
              <a href="personal-care.php?id=" class="portfolio-link"><h4><?php echo "Personal Care"; ?></h4></a>
<!--              <a class="btn" href="#">Visit Site <i class="fa fa-long-arrow-right"></i></a> </div>  -->
          </div>
        </div>
      </div>
	  <div class="row">
          <div class="col-md-12 work-detail-margin detail-contentbox">
            <div class="detail-content">
              <a href="packaged-foods.php?id=" class="portfolio-link"><h4><?php echo "Packaged Foods"; ?></h4></a>
<!--              <a class="btn" href="#">Visit Site <i class="fa fa-long-arrow-right"></i></a> </div>  -->
          </div>
        </div>
      </div>
	  <div class="row">
          <div class="col-md-12 work-detail-margin detail-contentbox">
            <div class="detail-content">
              <a href="drinks.php?id=" class="portfolio-link"><h4><?php echo "Drinks"; ?></h4></a>
<!--              <a class="btn" href="#">Visit Site <i class="fa fa-long-arrow-right"></i></a> </div>  -->
          </div>
        </div>
      </div>
	  <div class="row">
          <div class="col-md-12 work-detail-margin detail-contentbox">
            <div class="detail-content">
              <a href="electronics.php?id=" class="portfolio-link"><h4><?php echo "Electronics"; ?></h4></a>
<!--              <a class="btn" href="#">Visit Site <i class="fa fa-long-arrow-right"></i></a> </div>  -->
          </div>
        </div>
      </div>
    
  </section>