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

//Creating a database
$sql = 'CREATE  DATABASE yogesh';
$result = mysqli_query($conn,$sql);
//check sucessfull creation
if($result)
{
    echo 'DB was created sucessfully';
}
else{

    echo 'DB was not  created sucessfully because of the error :'.mysqli_error($conn);
}
echo "The result is" ;
echo var_dump($result);
echo '<br>';
?>