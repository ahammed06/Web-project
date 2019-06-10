<?php 
session_start();
?>
<?php include "template-part/config.php"; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Today Shopping </title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>

<!-- Header Section -->
<section class="tophead" role="tophead"> 
<div class="w3ls_logo_products_left">
				<center><h1><a href="index.php" style="color: orange;" >Today Shopping</a></h1></center>
			</div>
  <!-- Navigation Section -->
  <header id="header">
    <div class="header-content clearfix" >
	<?php {echo  '<a href="index.php"><img src="home.png" style="width:3%; height: 3%" /></a>';} ?>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <?php if (isset($_SESSION["logedin"])){ ?>
            <?php if ($_SESSION["id"] === '1') { ?>
              <?php echo '<li><a href="admin.php" style="color: red;">Admin</a></li>'; ?>
            <?php } ?>
          <?php } ?>
          <li><a href="index.php">Home</a></li>
		  <?php if (isset($_SESSION["logedin"])){ ?>
            <?php if ($_SESSION["id"] === '1') { ?>
              <?php if (isset($_SESSION["logedin"])){echo '<li><a href="blog.php">Products</a></li>';} ?>
            <?php } ?>
          <?php } ?>
		  <?php if (isset($_SESSION["logedin"])){echo '<li><a href="cart.php">Buy Products</a></li>';} ?>
          <?php if (!isset($_SESSION["logedin"])){echo '<li><a href="blog.php">Products</a></li>';} ?>
		  <?php if (isset($_SESSION["logedin"])){echo '<li><a href="catagory.php">Catagories</a></li>';} ?>
          <?php if (isset($_SESSION["logedin"])){echo '<li><a href="insert.php">Add Item</a></li>';} ?>
		  <?php if (isset($_SESSION["logedin"])){ ?>
            <?php if ($_SESSION["id"] === '1') { ?>
              <?php if (isset($_SESSION["logedin"])){echo '<li><a href="delete.php">Delete Item</a></li>';} ?>
            <?php } ?>
          <?php } ?>
		  <?php if (isset($_SESSION["logedin"])){echo '<li><a href="message.php">Contact us</a></li>';} ?>
		  <?php if (isset($_SESSION["logedin"])){$user = $_SESSION["id"]; echo '<li><a href="user-single.php?userid='.$user.'">Profile</a></li>';} ?>
          <?php if (isset($_SESSION["logedin"])){echo '<li><a href="template-part/logout.php">Log Out</a></li>';} ?>
          <?php if (!isset($_SESSION["logedin"])){echo '<li><a href="login.php">Log In/Sign Up</a></li>';} ?>
		  <?php if (isset($_SESSION["logedin"])){echo  '<a href="cartfull.php"><img src="cart-128.png" style="width:3%; height: 3%" /></a>';} ?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- Navigation Section --> 
</section>
<!-- Header Section --> 
