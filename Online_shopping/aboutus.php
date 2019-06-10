<?php include "template-part/config.php"; ?>
<?php include "header.php"; ?>
<!-- services grid section -->
<section id="portfolio" class="section portfolio">
  <div class="container-fluid">
    <h2 class="text-center">---Our Team---</h2>
      <br/>

<?php 
$result = $conn->query("SELECT * FROM dev");
$i = 1;
        while($row = array_reverse($result->fetch_assoc())) { ?>
            <div class="col-sm-3 portfolio-item"> <a href="#<?php if (isset($row["id"])) { ?>?id=<?php echo $row["id"]; } ?>" class="portfolio-link">
              <div class="caption">
                <div class="caption-content">
                  <?php if (isset($row["name"])) { ?>   <h3>    <?php echo $row["name"]; ?>  </h3>                               <?php } ?>
                  <?php if (isset($row["position"])) { ?>    <p>     <?php echo $row["position"]; ?>   </p>                                <?php } ?>
                </div>
              </div>
              <?php if (isset($row["image"])) { ?>          <img src="upload/<?php echo $row["image"]; ?>" class="img-responsive" style="width:100%; height: 350px;" alt="<?php echo $row["name"]; ?>"> </a> <?php } ?>
            </div>
			<?php $i++; if($i === 5) { break; } ?>
<?php    } ?>
    </div>
  </div>
</section>
<!-- services grid section --> 
<?php include "footer.php" ?>