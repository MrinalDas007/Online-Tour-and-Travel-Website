<?php
	$id=$_GET["id"];
	include("connect.php");
	$query="delete from admin_register where admin_id=".$id."";
	$n=mysqli_query($con,$query);
	if($n==1)
	{
		echo "<script>alert('Admin Details Deleted')</script>";
		echo "<script>window.location.href='admin_details.php'</script>";
	}
?>