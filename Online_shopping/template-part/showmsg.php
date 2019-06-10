<!-- work details section -->
<section id="work-detail" class="section work-detail">
  <table class="table">
    <h3 class="text-center text-uppercase"> Messages </h3>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>User Id</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $result = $conn->query("SELECT * FROM blog ORDER BY id DESC");
			while($row = $result->fetch_assoc()) { 
			?>
				<tr>
					<td><?php  echo $row["title"]; ?></td>
					<td><?php  echo $row["url"]; ?></td>
					<td><?php  echo $row["size"]; ?></td>
					<td><?php  echo $row["u_id"]; ?></td>
					<td><a href="template-part/showmsg-process.php?delete=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>
				</tr>
			<?php //  echo "<a href='user-single.php?userid=". $row["id"] ."'></a>";
			} ?>
    </tbody>
  </table>
</section>
<!-- work details section --> 



