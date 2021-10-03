<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT,GET,POST,DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type,Accept");
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Results</title>
 </head>
 <body>

<?php 

require 'db.php';
/*
$username="root";
$password="";
$hostname="localhost";
$database="src_voting";
*/

//$result;
//$row;

//$dbhandle=mysqli_connect($hostname, $username, $password,$database) or die("unable to connect to Mysql");

$countall=mysqli_query($GLOBALS['dbhandle'], "SELECT COUNT(Index_Number) As alll from president");
$countrw=mysqli_fetch_assoc($countall);

echo"<h1 style='padding:3%; text-align: center; color: aliceblue;'>Displaying results for 2021/2022 SRC ELECTIONS <br><br>
Total Votes = ".$countrw['alll']."</h1>";

echo "<h1 class='heading top'> Presidential Results </h1>";

echo "<table class='president'> <tr> <th> Names </th> <th> Votes </th> <th> Percentage (%)</th></tr>";

/*$count=mysqli_query($GLOBALS['dbhandle'],"SELECT COUNT(saah) As a from president");

$c=mysqli_fetch_assoc($count);

echo "<h1>".$c['a']."</h1>";
*/

function saah()
{
	$result=mysqli_query($GLOBALS['dbhandle'], "SELECT SUM(saah) AS sum from president");
    $row=mysqli_fetch_assoc($result);

    $count=mysqli_query($GLOBALS['dbhandle'], "SELECT COUNT(Index_Number) As count from president");

    $countrow=mysqli_fetch_assoc($count);

    if ($countrow['count']==0) {
        $percent=0;
    }

    else{
    $percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');
}

    if($row['sum']==''){
        $row['sum']=0;
       // $percent=0;
    }

    echo '<tr> <td> Emmanuel Kobby Saah </td> <td>'.$row['sum'].'</td><td>'.$percent.'</td> </tr> ';
    #return $row['sum'];
	# code...
}

saah();


function tetteh()
{
	$result=mysqli_query($GLOBALS['dbhandle'], "SELECT SUM(tetteh) AS sum from president");
    $row=mysqli_fetch_assoc($result);
$count=mysqli_query($GLOBALS['dbhandle'], "SELECT COUNT(Index_Number) As count from president");

    $countrow=mysqli_fetch_assoc($count);

    if ($countrow['count']==0) {
        $percent=0;
    }

    else{
    $percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');
}

   // $percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');

    if($row['sum']==''){
        $row['sum']=0;
       // $percent=0;
    }

    echo '<tr> <td> Emmanuel K. Tetteh </td> <td>'.$row['sum'].'</td><td>'.$percent.'</td> </tr> ';
    #return $row['sum'];
	# code...
}

tetteh();


echo "</table>";

###############################
##End Of Presidential results##
###############################

###############################
##SECRETAIRIAL RESULTS#########
###############################

echo "<h1 class='heading'> General Secretary Results </h1>";

echo "<table class='secretary'> <tr> <th> Names </th> <th> Votes </th> <th> Percentage (%)";

function gloria()
{
	$result=mysqli_query($GLOBALS['dbhandle'], "SELECT SUM(gloria) AS sum from general_secretary");
    $row=mysqli_fetch_assoc($result);

    $count=mysqli_query($GLOBALS['dbhandle'], "SELECT COUNT(Index_Number) As count from general_secretary");

    $countrow=mysqli_fetch_assoc($count);

    if ($countrow['count']==0) {
        $percent=0;
    }

    else{
    $percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');
}

    //$percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');

    if($row['sum']==''){
        $row['sum']=0;
    }

    echo '<tr> <td> Gloria Afi Mansah Dzokoto </td> <td>'.$row['sum'].'</td><td>'.$percent.'</td> </tr> ';
    #return $row['sum'];
	# code...
}

gloria();

echo "</table>";



echo "<h1 class='heading'> Financial Secretary Results </h1>";

echo "<table class='secretary'> <tr> <th> Names </th> <th> Votes </th> <th> Percentage (%) </th>";

function solomon()
{
    $result=mysqli_query($GLOBALS['dbhandle'], "SELECT SUM(solomon) AS sum from financial_secretary");
    $row=mysqli_fetch_assoc($result);

    $count=mysqli_query($GLOBALS['dbhandle'], "SELECT COUNT(Index_Number) As count from financial_secretary");

    $countrow=mysqli_fetch_assoc($count);

    if ($countrow['count']==0) {
        $percent=0;
    }

    else{
    $percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');
}

    //$percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');

    if($row['sum']==''){
        $row['sum']=0;
    }

    echo '<tr> <td> Solomon Tetteh </td> <td>'.$row['sum'].'</td><td>'.$percent.'</td> </tr> ';
    #return $row['sum'];
    # code...
}

solomon();
/*
function patience()
{
    $result=mysqli_query($GLOBALS['dbhandle'], "SELECT SUM(patience) AS sum from financial_secretary");
    $row=mysqli_fetch_assoc($result);

    if($row['sum']==''){
        $row['sum']=0;
    }

    echo '<tr> <td> Patience Amegadze </td> <td>'.$row['sum'].'</td> </tr> ';
    #return $row['sum'];
    # code...
}

patience();
*/
echo "</table>";


echo "<h1 class='heading'> Women Commissioner Results </h1>";

echo "<table class='secretary'> <tr> <th> Names </th> <th> Votes </th> <th> Percentage (%)";

function celestine()
{
    $result=mysqli_query($GLOBALS['dbhandle'], "SELECT SUM(celestine) AS sum from wocom");
    $row=mysqli_fetch_assoc($result);

    $count=mysqli_query($GLOBALS['dbhandle'], "SELECT COUNT(Index_Number) As count from wocom");

    $countrow=mysqli_fetch_assoc($count);

    if ($countrow['count']==0) {
        $percent=0;
    }

    else{
    $percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');
}

   // $percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');

    if($row['sum']==''){
        $row['sum']=0;
    }

    echo '<tr> <td> Celestine M. Agbedonu </td> <td>'.$row['sum'].'</td><td>'.$percent.'</td> </tr> ';
    #return $row['sum'];
    # code...
}

celestine();

echo "</table>";



echo "<h1 class='heading'> Public Relations Officer </h1>";

echo "<table class='secretary'> <tr> <th> Names </th> <th> Votes </th> <th> Percentage (%)</th>";

function janet()
{
    $result=mysqli_query($GLOBALS['dbhandle'], "SELECT SUM(janet) AS sum from pro");
    $row=mysqli_fetch_assoc($result);

    $count=mysqli_query($GLOBALS['dbhandle'], "SELECT COUNT(Index_Number) As count from pro");

    $countrow=mysqli_fetch_assoc($count);

    if ($countrow['count']==0) {
        $percent=0;
    }

    else{
    $percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');
}

    //$percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');

    if($row['sum']==''){
        $row['sum']=0;
    }

    echo '<tr> <td> Janet S. Gray </td> <td>'.$row['sum'].'</td><td>'.$percent.'</td> </tr> ';
    #return $row['sum'];
    # code...
}

janet();

echo "</table>";



echo "<h1 class='heading'> Organizer </h1>";

echo "<table class='secretary'> <tr> <th> Names </th> <th> Votes </th> <th> Percentage (%) </th>";

function seth()
{
    $result=mysqli_query($GLOBALS['dbhandle'], "SELECT SUM(seth) AS sum from organizer");
    $row=mysqli_fetch_assoc($result);

    $count=mysqli_query($GLOBALS['dbhandle'], "SELECT COUNT(Index_Number) As count from organizer");

    $countrow=mysqli_fetch_assoc($count);

    if ($countrow['count']==0) {
        $percent=0;
    }

    else{
    $percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');
}

   // $percent=number_format((float)($row['sum']/$countrow['count']*100),2,'.','');

    if($row['sum']==''){
        $row['sum']=0;
    }

    echo '<tr> <td> Seth Addo Atombo </td> <td>'.$row['sum'].'</td><td>'.$percent.'</td> </tr> ';
    #return $row['sum'];
    # code...
}

seth();

echo "</table>";




#$result=mysqli_query($dbhandle, "SELECT SUM(asuako) AS sum from voting");
#$result=mysqli_query($dbhandle, "SELECT SUM(david) AS sum from voting");
#$result=mysqli_query($dbhandle, "SELECT SUM(collins) AS sum from voting");
#$result=mysqli_query($dbhandle, "SELECT SUM(lois) AS sum from voting");
 ?>

 	<style type="text/css">
 		*{
 			margin: 0;
 			padding: 0;
 			font-family: monospace;
            font-weight: bold;
 		}

        body{
            background-image: url('duc.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background: brown;
        }
 		h1.heading{
 			text-align: center;
 			background: grey;
 			border: 1px solid black;
 			border-bottom: none;
 			width: 90%;
 			margin-left: auto;
 			margin-right: auto;
 			padding: 2%;
 			color: white;
 		}

 		h1.top{
 			margin-top: 2%;
 		}

 		table{
 			margin-bottom: 5%;
 			border-collapse: collapse;
 			margin-left: auto;
 			margin-right: auto;
 			width: 90%;
 			background: white;
 			margin-top: .5%;
 		}

 		th, td{
 			border: 1px solid black;
 			text-align: center;
 			padding: 2%;
 			font-size: 1.5em;
 			font-weight: bolder;
 		}
 		
 		th{
 			color: #001fff;
 			font-size: 2em;
 			font-weight: bolder;
 		}

 		footer{
 			background: black;
 			color: white;
 			font-size: 1.5em;
 			text-align: center;
 			padding: 3%;
 			font-weight: bolder;
 		}
 	</style>
 
 </body>
 </html>