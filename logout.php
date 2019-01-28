<?php
  session_start();
  if(isset($_SESSION["admin"]))
  {
	  unset($_SESSION["admin"]);
	  unset($_SESSION["pass"]);
	  echo "<script>window.location.href='admin_login.php'</script>";	
  }
?>