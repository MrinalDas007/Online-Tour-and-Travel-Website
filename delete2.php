<?php
	$id=$_GET["id"];
	include("connect.php");
	$query="delete from destinations where destination_id=".$id."";
	$n=mysqli_query($con,$query);
	if($n==1)
	{
		echo "<script>alert('Destination Details Deleted')</script>";
		echo "<script>window.location.href='admin.php'</script>";
	}
?>