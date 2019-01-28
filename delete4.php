<?php
	$id=$_GET["id"];
	include("connect.php");
	$query="delete from hotel_search where hotel_id=".$id."";
	$n=mysqli_query($con,$query);
	if($n==1)
	{
		echo "<script>alert('Hotel Details Deleted')</script>";
		echo "<script>window.location.href='admin_hotel.php'</script>";
	}
?>