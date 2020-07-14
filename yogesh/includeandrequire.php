<?php

// include "connectdb.php" //give warning while there is an error on the file that was included 
require "connectdb.php"; //give error while there is an error on the file that was included 

$sql = " SELECT * FROM `trip` ";
$result  = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
echo $num;
echo " records found in the Database";


if($num>0)
{
    while($row = mysqli_fetch_assoc($result)){
          echo "Hello ".$row['name']." Welcome to " .$row['dest'];
          echo "<br>";

    }
}

?>