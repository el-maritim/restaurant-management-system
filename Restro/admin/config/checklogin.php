<?php
function check_login()
{
	// Check if the session variable 'admin_id' is empty or not set
if(strlen($_SESSION['admin_id'])==0)
	{
		// Get the current host (e.g., localhost or domain name)
		$host = $_SERVER['HTTP_HOST'];
		// Get the current directory path of the script, trimming any trailing slashes
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		 // Define the relative path of the login page
		$extra="index.php";
		 // Clear the session variable for 'admin_id'
		$_SESSION["admin_id"]="";
		 // Redirect the user to the login page
		header("Location: http://$host$uri/$extra");
	}
}
?>
