<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

//require "login.php";

##################################################
##DOMINION UNIVERSITY COLLEGE#####################
##WEB-BASED VOTING SYSTEM FOR UPCOMING ELECTIONS##
##################################################

//$index=$_POST['index'];

session_start();

require 'db.php';

/*
$username="root";
$password="";
$hostname="localhost";
$database="src_voting";
*/

$id=$_SESSION['index'];


//$dbhandle=mysqli_connect($hostname, $username, $password,$database) or die("unable to connect to Mysql");
//echo "<h1>Connected to Database...</h1><br>";

$check_president=mysqli_query($dbhandle,"SELECT * FROM president WHERE index_number='$id'")->num_rows>0;
 $check_general_secretary=mysqli_query($dbhandle,"SELECT * FROM general_secretary WHERE index_number='$id'")->num_rows>0;
 $check_financial_secretary=mysqli_query($dbhandle,"SELECT * FROM financial_secretary WHERE index_number='$id'")->num_rows>0;

##############################
#PRESIDENT SECTION
##############################


if ($check_president || $check_general_secretary || $check_financial_secretary) {
	//session_destroy();
	header("Location: error.php");
}

else{

$president=$_POST['president'];
if ($president==="saah") {
	$insert="INSERT INTO president(saah,tetteh,index_number) VALUES (1,0,'$id')";
	# code...
}

elseif ($president==="tetteh") {
	$insert="INSERT INTO president(saah,tetteh,index_number) VALUES (0,1,'$id')";
	# code...
}

else{
	$insert="INSERT INTO president(saah,tetteh,index_number) VALUES (0,0,'$id')";
}

$president_vote=mysqli_query($dbhandle,$insert);

#################################################
###END OF PRESIDENT SELECTION###
#################################################


################################################
###GENERAL SECRETARY SECTION############################
################################################

$generalsecretary=$_POST['gensecretary'];

if ($generalsecretary==="gloria") {
	$insert="INSERT INTO general_secretary(gloria,index_number) VALUES (1,'$id')";
	
}

else{
	$insert="INSERT INTO general_secretary(gloria,index_number) VALUES (0,'$id')";
}

$generalsecretary_vote=mysqli_query($dbhandle,$insert);

$financialsecretary=$_POST['fansecretary'];

if ($financialsecretary==="solomon") {
	$insert="INSERT INTO financial_secretary(solomon,index_number) VALUES (1,'$id')";
	
}

else{
	$insert="INSERT INTO financial_secretary(solomon,index_number) VALUES (0,'$id')";
}

$financialsecretary_vote=mysqli_query($dbhandle,$insert);

$wocom=$_POST['wocom'];

if ($wocom==="celestine") {
	$insert="INSERT INTO wocom(celestine,index_number) VALUES (1,'$id')";
	
}

else{
	$insert="INSERT INTO wocom(celestine,index_number) VALUES (0,'$id')";
}

$wocom_vote=mysqli_query($dbhandle,$insert);

$pro=$_POST['pro'];

if ($pro==="janet") {
	$insert="INSERT INTO pro(janet,index_number) VALUES (1,'$id')";
	
}

else{
	$insert="INSERT INTO pro(janet,index_number) VALUES (0,'$id')";
}

$pro_vote=mysqli_query($dbhandle,$insert);

$organizer=$_POST['organizer'];

if ($organizer==="seth") {
	$insert="INSERT INTO organizer(seth,index_number) VALUES (1,'$id')";
	
}

else{
	$insert="INSERT INTO organizer(seth,index_number) VALUES (0,'$id')";
}

$organizer_vote=mysqli_query($dbhandle,$insert);

if ($president_vote || $generalsecretary_vote || $financialsecretary_vote || $wocom_vote || $pro_vote || $organizer_vote) {
	//echo "<script> window.location.replace(\"http://localhost/DOMINIONSRC/success.html\")</script>";
	session_destroy();
	header("Location: success.php");
}


}


mysqli_close($dbhandle);

?>

	<style type="text/css">
		*{
			margin:0;
			padding: 0;
			font-family: monospace;
			text-align: center;
		}
	</style>

</body>
</html>