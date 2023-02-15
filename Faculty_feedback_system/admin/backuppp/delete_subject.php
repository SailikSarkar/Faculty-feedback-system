<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from subject where id='$info'");
	header('location:dashboard.php?info=show_subject');
?>