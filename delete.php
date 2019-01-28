<?php
	$id=$_GET["id"];
	include("connect.php");
	$query="delete from tour_register where reg_id=".$id."";
	$n=mysqli_query($con,$query);
	if($n==1)//since delete id should be atmost one
	{
		echo "<script>alert('User id deleted')</script>";
		echo "<script>window.location.href='admin.php'</script>";
	}
?>