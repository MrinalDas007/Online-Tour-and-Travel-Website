<?php
	$id=$_GET["id"];
	include("connect.php");
	$query="delete from cab_search where cab_id=".$id."";
	$n=mysqli_query($con,$query);
	if($n==1)
	{
		echo "<script>alert('Cab Details Deleted')</script>";
		echo "<script>window.location.href='admin_cabs.php'</script>";
	}
?>