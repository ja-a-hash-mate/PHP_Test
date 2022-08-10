<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo "My first PHP script"."<br>";
$text = "PHP";
echo "I love " . $text . "<br>";
$RED = "red";
$WHITE = "white";
$BLUE = "blue";
echo "My car is " . $WHITE . "<br>";
echo "My house is " . $BLUE . "<br>";
echo "My boat is " . $RED . "<br>";
$x = 5 /* + 15 */ + 5;
echo $x. "<br>";
function myTest() {
    static $test_var = 0;
    echo $test_var;
    $test_var++;
  }
  
  myTest();
?>

<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[1];
?>
    
</body>
</html>