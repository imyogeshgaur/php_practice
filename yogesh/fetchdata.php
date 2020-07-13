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
$sql= "SELECT * FROM `trip`";
$result = mysqli_query($conn,$sql);
echo "<br>";


$num =  mysqli_num_rows($result);
echo $num;
echo "<br>";

if($num>0)
{
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //We can use the while loop
    while($row = mysqli_fetch_assoc($result)){
          echo "Hello ".$row['name']." Welcome to " .$row['dest'];
          echo "<br>";

    }
}
?>