<?php

//Sessions in PHP

//START the session

session_start();

//verify the credentials
$_SESSION['username'] = "Yogesh";
$_SESSION['favcat'] = 'Books';
echo "We have create the session";

?>