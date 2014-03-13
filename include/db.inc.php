<?php
$link=mysqli_connect ('localhost', 'root', 'root');
if  (!$link){
	$output='Unable to connect to the database';
	echo $output; 
	exit(); 
}
if (!mysqli_set_charset($link,'utf8')) {
	$output = 'Unable to set database connection encoding.';
	echo $output; 
	exit();
}
if (!mysqli_select_db($link, 'sfc')){
	$output = 'Unable to locate the database.';
	echo $output; 
	exit();
}

if (get_magic_quotes_gpc()){
	function stripslashes_deep($value){
		$value = is_array($value) ?
		array_map('stripslashes_deep', $value) :
		stripslashes($value);
		return $value;
	}
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
	$_REQUEST = array_map('stripslashes_deep', $_REQUEST);
} 

/*$output = 'Database connection3 established.';
echo $output;*/
?>
