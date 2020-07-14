<?php

//START the session
session_start();
if(isset($_SESSION['username']))
{
    echo "Welcome " . $_SESSION['username'];
    echo "<br> Your Favourite category is " . $_SESSION['favcat'];
    echo "<br>";
}
else
{
    echo "Please login again";
}
?>