<?php
session_start();

include "config.php";

if(isset($_GET['delete'])){
	
	$delet_id = $_GET['delete'];
	$sql = "DELETE FROM u_info WHERE id=$delet_id";

	if ($conn->query($sql) === TRUE) {
		echo "Blog Deleted successfully";
		header( 'Location: ../admin.php?sts=yes' );
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		header( 'Location: ../admin.php?sts=no' );
	}
	header( 'Location: ../admin.php?sts=yes' );
	
}



?>