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
echo 'Connected Sucessfully';

//Creating a table
$sql = 'CREATE TABLE `trip`(`sno` INT(6) NOT NULL AUTO_INCREMENT,`name` VARCHAR(12) NOT NULL,`dest`VARCHAR(6) NOT NULL,PRIMARY KEY(`sno`))';
$result = mysqli_query($conn,$sql);
//check sucessfull creation
if($result)
{
    echo 'Table was created sucessfully';
}
else{

    echo 'Table was not  created sucessfully because of the error :'.mysqli_error($conn);
}
?>