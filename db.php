<?php

$username="root";
$password="";
$hostname="localhost";
$database="src_voting";

$dbhandle=mysqli_connect($hostname, $username, $password,$database) or die("unable to connect to Mysql");
//echo "<h1>Connected to Database...</h1><br>";

?>