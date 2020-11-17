<?php
	

	
	include 'include/function.php';
	include 'include/global.php';

	$user_id 	= 1;
	$url_register		= base64_encode($base_path."register.php?user_id=".$user_id);
	echo $url_register;
	echo "$user_id;SecurityKey;".$time_limit_reg.";".$base_path."process_register.php;".$base_path."getac.php";
	


?>
<a href='finspot:FingerspotReg;$url_register' class='btn btn-xs btn-primary'>Register</a>