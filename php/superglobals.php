<?php  
var_dump($GLOBALS);
echo "<br>";
var_dump($_SERVER);
$x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction()
?>  
<?php  
$xs = 75;
  
function myfunctiond() {
//   echo $xs;
}

myfunctiond()
?>  
