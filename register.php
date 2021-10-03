<?php

require 'db.php';

if ( isset($_POST['user']) && isset($_POST['id']) ) {

	$user=$_POST['user'];
	$id=$_POST['id'];

	if ( strlen($id)>10 ) {

		$check=mysqli_query($dbhandle,"SELECT * FROM student_identity");

		$checkuser=mysqli_query($dbhandle,"SELECT * FROM student_identity WHERE Index_Number='$id'");

		if($checkuser -> num_rows >0){
			echo "<script> alert('Index Number Already Exists');";
			echo " window.location.replace('register.html'); </script>";
		}

		else{

		if ($check->num_rows === 0) {
			mysqli_query($dbhandle,"ALTER TABLE student_identity AUTO_INCREMENT=1");
			# code...
		}

		$insert=mysqli_query($dbhandle,"INSERT INTO student_identity VALUES('NULL','$user','$id') ");

		if($insert){
			echo "<script> alert('Registration Successful');";
			echo " window.location.replace('register.html'); </script>";
		}

		else{
			echo "<script> alert('Error Inserting Data');";
			echo " window.location.replace('register.html'); </script>";
		}

	}
}
}

?>