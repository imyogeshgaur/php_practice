<?php

$servername = 'localhost';
$username = 'root';
$password = '';

//Cerating connection object
$conn = mysqli_connect($servername,$username,$password);

//Connection Die or connect
if(!$conn){
    die('Sorry we failed to connect: '.mysqli_connect_error());
    //die will therow error and terminate the program
}
echo 'Connected Sucessfully';

?>