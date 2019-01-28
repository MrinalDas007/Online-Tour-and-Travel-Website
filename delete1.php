<?php
	$id=$_GET["id"];
	include("connect.php");
	$query="delete from flight_search where flight_id=".$id."";
	$n=mysqli_query($con,$query);
	if($n==1)
	{
		echo "<script>alert('Flight Details Deleted')</script>";
		echo "<script>window.location.href='admin_flight.php'</script>";
	}
?>