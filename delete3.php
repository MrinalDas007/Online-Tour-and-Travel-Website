<?php
	$id=$_GET["id"];
	include("connect.php");
	$query="delete from train_search where train_id=".$id."";
	$n=mysqli_query($con,$query);
	if($n==1)
	{
		echo "<script>alert('Train Details Deleted')</script>";
		echo "<script>window.location.href='admin_train.php'</script>";
	}
?>