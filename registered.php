<?php

require "db.php";

$result=mysqli_query($dbhandle,"SELECT * FROM student_identity");

//$row=mysqli_fetch_assoc($registered);

if($result->num_rows > 0){
    $i=0;
    echo "<table style='width: 50%; margin: auto;'><th style='border: 2px solid black; font-size: 1.3em; font-weight: bolder;'>No.</th><th style='border: 2px solid black; font-size: 1.3em; font-weight: bolder; padding: 2%;'>Index Number</th>
    <th style='border: 2px solid black; font-size: 1.3em; font-weight: bolder;'>Name</th>";
    while($row=mysqli_fetch_assoc($result)){
        $i++;
        echo "<tr style='color: blue; font-size: 1.2em; font-style: monospace; font-weight: bold; text-align: center;'><td style='border: 2px solid black; padding: 1%;'>".$i."</td><td style='border: 2px solid black;'>".
        $row['Index_Number']."</td> <td style='border: 2px solid black; padding: 1%;'>".$row['username']."</td></tr>";
        //echo "<p style='color: blue; font-size: 1.2em; font-style: monospace; font-weight: bold;'>".$row['Index_Number']."  ".$row['username']."</p>";
    }
}

?>