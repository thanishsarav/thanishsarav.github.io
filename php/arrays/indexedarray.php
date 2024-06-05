<?php
$carstu = array("Volvo", "BMW", "Toyota"); 
var_dump($carstu);
?>
<?php
$carst = array("Volvo", "BMW", "Toyota"); 
echo $carst[0];
?>
<?php
$carse = array("Volvo", "BMW", "Toyota"); 
$carse[1] = "Ford";
var_dump($carse);
?>
<?php
$cars = array("Volvo", "BMW", "Toyota"); 

foreach ($cars as $x) {
  echo "$x <br>";
}
?>

