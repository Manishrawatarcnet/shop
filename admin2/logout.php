<?php
session_start();

if(isset($_SESSION['admin_id']))
             {
			  session_destroy();
			  unset($_SESSION['admin_id']);
			  header('location:login.php');
			  
			 }


?>