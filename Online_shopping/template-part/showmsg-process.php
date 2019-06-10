<?php
session_start();

include "config.php";

if(isset($_GET['delete'])){
	
	$delet_id = $_GET['delete'];
	$sql = "DELETE FROM blog WHERE id=$delet_id";

	if ($conn->query($sql) === TRUE) {
		echo "Blog Deleted successfully";
		header( 'Location: ../admin.php?sts=ok' );
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		header( 'Location: ../admin.php?sts=danger' );
	}
	header( 'Location: ../admin.php?sts=ok' );
	
}



?>