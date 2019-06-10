<!-- work details section -->
<section id="work-detail" class="section work-detail">
  <table class="table">
    <h3 class="text-center text-uppercase"> All Item </h3>
    <thead>
      <tr>
        <th>Item</th>
        <th>Id</th>
        <th>Posted By</th>
        <th>Item name</th>
        <th>Price</th>
        <th>Status</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $result = $conn->query("SELECT * FROM tblproduct");
			while($row = $result->fetch_assoc()) { 
			?>
				<tr>
					<td><img class="img-responsive" style="width: 100px; " src="upload/<?php  echo $row["image"]; ?>"></td>
					<td><?php  echo $row["id"]; ?></td>
					<td><?php  echo $row["u_id"]; ?></td>
					<td><?php  echo $row["name"]; ?></td>
					<td><?php  echo $row["price"]; ?></td>
					<td><?php  if($row["stats"] == '1'){
						
							echo "<a href='template-part/delete-blog.php?update=2&&blogid=".$row['id']."' class='btn btn-danger'>Hide it";
						
						}else{
							
							echo "<a href='template-part/delete-blog.php?update=1&&blogid=".$row['id']."' class='btn btn-danger'>Show it";

							} ?></a></td>
					<td><a href="template-part/delete-blog.php?delete=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>
				</tr>
			<?php //  echo "<a href='user-single.php?userid=". $row["id"] ."'></a>";
			} ?>
    </tbody>
  </table>
</section>
<!-- work details section --> 



