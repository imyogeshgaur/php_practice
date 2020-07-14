<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "yogesh";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "DELETE FROM `trip` WHERE `sno` = 3";
$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
if($result){
    echo "Deleted Sucessfully !!";
    echo "Number of rows affected : $aff";
}
else{
    $err = mysqli_error($conn);
    echo "Not Deleted Sucessfully Due to this error : $err";
}

?>