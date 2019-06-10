<?php
session_start();

include "config.php";

if(isset($_GET['delete'])){
	
	$delet_id = $_GET['delete'];
	$sql = "DELETE FROM tblproduct WHERE id=$delet_id";

	if ($conn->query($sql) === TRUE) {
		echo "Blog Deleted successfully";
		header( 'Location: ../delete.php?sts=success' );
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		header( 'Location: ../delete.php?sts=danger' );
	}
	header( 'Location: ../delete.php?sts=success' );
	
}
if(isset($_GET['update'])){
	$post_id 		= $_GET['blogid'];
	$post_stats 	= $_GET['update'];
	
	$sql = "UPDATE tblproduct SET stats=$post_stats WHERE id=$post_id";

	if ($conn->query($sql) === TRUE) {
		echo "New stats created successfully";
		header( 'Location: ../delete.php?sts=done' );
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		header( 'Location: ../delete.php?sts=danger' );
	}
//	header( 'Location: ../delete.php?sts=success' );
	
}



?>