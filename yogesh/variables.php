<!-- <?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
echo $txt.$x.$y
?> -->

<!-- Scope of variable -->
<!-- <?php
$x = 5; // global scope

// function myTest() {
//   // using x inside this function will generate an error
//   $x=89; //local Scope
//   echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

echo "<p>Variable x outside function is: $x</p>";
?> -->

<!-- Global KeyWord -->

<!-- <?php
$x = 2;
$y = 10;

// function myTest1() {
// //   global $x, $y;
// //   $y = $x + $y;
// // We can declare the variable as fllow too
// $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// myTest1();
// echo $y; // outputs 15
?> -->

<!-- Static keywords in php -->
<!-- sometimes we want a local variable NOT to be deleted. We need it for a further job. -->
<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();
?>