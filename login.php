 <?php 
session_start();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT,GET,POST,DELETE");
//header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type,Accept");

require "db.php";

$insert;

$id=$_GET['index'];

$up_id=strtoupper($id);


$result=mysqli_query($dbhandle, "SELECT * FROM student_identity WHERE index_number='$id'");

if($result->num_rows > 0){
	$row=mysqli_fetch_assoc($result);
	$_SESSION['user']=$row['username'];
	$_SESSION['index']=$row['Index_Number'];
	header("Location: voting.html",TRUE);
}

else{ 
	echo "Index number entered is wrong.";
}

  ?>