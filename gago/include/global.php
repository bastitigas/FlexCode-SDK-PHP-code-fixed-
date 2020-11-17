<?php
	/*ini_set("display_errors", 0);
	error_reporting(0);*/

	$base_path		= "http://localhost/gago/";
	$db_name		= "demo_flexcodesdk";
	$db_user		= "root";
	$db_pass		= "";
	$db_host		= "localhost";
	$time_limit_reg = "35";
	$time_limit_ver = "30";

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
?>