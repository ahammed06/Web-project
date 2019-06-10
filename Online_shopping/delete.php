<?php 
include "header.php";

if(isset($_GET['sts'])){
	$stats = $_GET['sts'];
?>
<div class="alert alert-<?php echo $stats; ?> fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
	<?php if($stats === 'success'){ ?> 
    <strong>Success!</strong> The item has been deleted successfully.
	<?php }else if($stats === 'done'){ ?> 
    <strong>Success!</strong> The details for the item has been updated successfully.
	<?php }else{ ?>
    <strong>Error!</strong> A problem has been occurred while submitting your data.
	<?php } ?>
</div>
<?php
}


include "template-part/edit.php";

include "footer.php"; ?>