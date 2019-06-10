<!-- footer section -->
<div class="footer-background">
<footer id="contact" class="footer">
  <div class="container-fluid">
    <div class="col-md-2 left">
      <h4>University Group</h4>
      <p> Department of Computer Science</p>
	  <?php if (isset($_SESSION["logedin"])){echo '<li><a href="aboutus.php">About Us</a></li>';} ?>
    </div>
    <div class="col-md-2 left">
      <h4>Contact</h4>
      <p> Call: 01677280324 <br>
        Email : <a href="http:\\gmail.com"> alahammed@gmail.com </a></p>
    </div>
    <div class="col-md-2 left">
      <h4>Social presense</h4>
      <ul class="footer-share">
        <li><a href="http://www.facebook.com/ahammed06"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/sabbir_sam"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://plus.google.com/u/1/115040177996943498035"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>
    <div class="col-md-6 right">
      <p>© 2018 All rights reserved by the developer of this site.<br>
        Made with the Bangladesh University Of Business & Technology software team</p>
    </div>
  </div>
</footer>
</div>
<!-- footer section --> 

<!-- JS FILES --> 
<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script>
</body>
</html>