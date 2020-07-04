<?php 
	setcookie("user","",time()+60);
	header("location:index.php?logout=1");
 ?>