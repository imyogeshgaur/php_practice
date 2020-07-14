<?php

//file writing in PHP
// $fptr = fopen('myfile2.txt','w');
// //each time we use fwrite we make a new text in the file
// fwrite($fptr, "This is the best file on this planet please dont argue with this one\n");
// fwrite($fptr, "This is another content\n");
// fwrite($fptr, "This is another content3\n");
// fclose($fptr);

//Append the file 

//difference between write and append is on refreshing the content appended as many time as we refresh the page and write mode overwrite the page

$fptr = fopen('myfile2.txt','a');
fwrite($fptr,"This is appended to the file\n");
fclose($fptr);
?>