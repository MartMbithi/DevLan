<?php
function check_login()
{
if(strlen($_SESSION['user_id'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="https://devlan.martdev.info/";		
		$_SESSION["user_id"]="";
		header("Location: $extra");
	}
}
?>