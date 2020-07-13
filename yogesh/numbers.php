<!-- is_int -->
<?php
$x = 5985;
var_dump(is_int($x));
echo "<br>";
$x = 59.85;
var_dump(is_int($x));
?>
<!-- is_float -->
<?php
$x = 10.365;
var_dump(is_float($x));
echo "<br>";
?>
<!-- is_finite -->
<?php
$x = 1.9e411;
var_dump($x);
echo "<br>";
?>
<?php
$f = 67;
is_finite($f);
echo "<br>";
?>
<!-- NAN -->
<?php
$x = acos(8);
var_dump($x);
echo "<br>";
?>
<!-- Numerical strings -->
<?php
$x = 5985;
var_dump(is_numeric($x));
echo "<br>";

$x = "5985";
var_dump(is_numeric($x));
echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";
$x = "Hello";
var_dump(is_numeric($x));
?>

