<?php
	session_start();
		$session=$_SESSION['mem_id'];
			if($session=="")
			{
				header('location:flogin.php');	
			}
		session_destroy();
		header('location:flogin.php');
?>