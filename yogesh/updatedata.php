<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'yogesh';
//Cerating connection object
$conn = mysqli_connect($servername,$username,$password,$database);

//Connection Die or connect
if(!$conn){
    die('Sorry we failed to connect: '.mysqli_connect_error());
    //die will therow error and terminate the program
}
else{
    echo 'Connected Sucessfully';
}

$sql =  "SELECT * FROM `trip` WHERE `dest`= 'Up'";
$result = mysqli_query($conn,$sql);
echo "<br>";

$num =  mysqli_num_rows($result);
echo $num ." records Found in Database !!!";
echo "<br>";
$x=1;

if($num>0)
{
    while($row = mysqli_fetch_assoc($result)){
          echo $x." . Hello ".$row['name']." Welcome to " .$row['dest'];
          echo "<br>";
          $x++;

    }
}

//Usage of where clause to update data

$sql = "UPDATE `trip` SET `name` = 'Tushar' WHERE `sno` = 13";
$result = mysqli_query($conn,$sql);
echo "<br>";
$aff = mysqli_affected_rows($conn);

if($result)
{
    echo  "We updated the record Sucessfully !!!";
    echo "<br>";
    echo  "Numbers of rows affected : $aff";
}
else
{
    echo "We will not update the record sucessfully !!";
}

?>