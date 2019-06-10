<?php include "header.php" ?>


<div class="container section login">
<div class="col-md-6 col-md-offset-3">
  <h2 class="text-center">Leave a message</h2>
  <form class="form-horizontal" method="post" action="template-part/message.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="u_title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="u_url">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="message">Message:</label>
      <div class="col-sm-10">
        <input type="description" class="form-control" id="message" placeholder="Enter message" name="u_size">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>


<?php include "footer.php" ?>