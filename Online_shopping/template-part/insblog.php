<?php
session_start();
include "config.php";
$u_title 		= $_POST['u_title'];
$u_url 			= $_POST['u_url'];
$u_size 		= $_POST['u_size'];
$u_code 		= $_POST['u_code'];
$u_id 			= $_POST['id'];
$u_catagory		= $_POST['catagory'];
$user_id 		= $_SESSION['id'];



echo "<h1>" . $u_title 	. "</h1>";
echo "<h1>" . $u_size 	. "</h1>";
echo "<h1>" . $u_url 	. "</h1>";
echo "<h1>" . $u_id 	. "</h1>";
echo "<h1>" . $u_code 	. "</h1>";

$sql = "INSERT INTO tblproduct (`name` ,`code`, `image`, `price`, `u_id`, `catagory`, `stats`) VALUES ('$u_title','$u_code', '$u_url', '$u_size', '$u_id', '$u_catagory', '1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	$result_usr = $conn->query("SELECT * FROM u_info WHERE id='$user_id'");
	while($row_usr = $result_usr->fetch_assoc()) {
		$finance = $row_usr['u_finance'];
		header( "Location: process_finance.php?substract=true&&finance=$finance" );
	}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




?>