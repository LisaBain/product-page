<?php
$db_host = "localhost"; 
$db_username = "lisa";  
$db_pass = "Disney2019*";  
$db_name = "cms"; 

// Run the actual connection here  
mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database"); 

?>

