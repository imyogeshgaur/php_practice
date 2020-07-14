<?php

$fptr = fopen('myfile.txt','r');
echo fgets($fptr); //print line by line
echo fgets($fptr);
// using loop 
while ( $a = fgetc($fptr)){
    echo $a;
}
echo "End of file has been reached !!!";

//Read the file charachter by charachter 

echo fgetc($fptr);
while($a = fgetc($fptr))
{
    echo $a;
    // break;
}
echo "<br> End of file has been reached !!!";

//print upto full stop

while($a = fgetc($fptr))
{
    echo $a;
    if($a == ".")
    {
       break;
    }
}
fclose($fptr);
?>