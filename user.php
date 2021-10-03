<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT,GET,POST,DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type,Accept");

session_start();

if (isset($_SESSION['user']) && isset($_SESSION['index'])) echo "<p>".$_SESSION['user']."</p><p>".$_SESSION['index']."</p>";
//else echo "window.location.replace('login.html')";

?>