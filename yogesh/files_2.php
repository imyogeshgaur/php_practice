<?php 

$fptr = fopen('myfile.txt','r');
// echo $fptr;
echo var_dump($fptr);
if(!$fptr){
    die('UNABLE TO OPEN THIS FILE');
}
$content = fread($fptr,filesize("myfile.txt"));
echo $content;
fclose($fptr);

?>