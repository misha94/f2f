<?php

// Настройки MySQL
$user   = "Ilnur";
$password = "1337";
$database = "f2f";
$host   = "localhost";
mysql_connect($host,$user,$password);
mysql_select_db($database) or die( "Unable to select database");
?> 