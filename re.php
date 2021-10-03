<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT,GET,POST,DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type,Accept");

$d=$_POST['a'];

if ($d) {
	echo "string";
	# code...
}

else{
	if ($d=="a") {
	echo "asdkj";
}
}

else{
	echo "dfstf";
}

?>