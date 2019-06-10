

<?php
session_start();
include "config.php";
$u_title 		= $_POST['u_title'];
$u_url 			= $_POST['u_url'];
$u_size 		= $_POST['u_size'];
$u_id 			= $_POST['id'];
$user_id 		= $_SESSION['id'];



echo "<h1>" . $u_title 	. "</h1>";
echo "<h1>" . $u_size 	. "</h1>";
echo "<h1>" . $u_url 	. "</h1>";
echo "<h1>" . $u_id 	. "</h1>";

$sql = "INSERT INTO blog (`title` , `url`, `size`, `u_id`, `stats`) VALUES ('$u_title', '$u_url', '$u_size', '$user_id', '1')";

if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
			header( 'Location: ../index.php' );
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}




?>