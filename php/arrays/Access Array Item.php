<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];
echo $cars['year'];
?>  
<?php  
function arry() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, arry());

$myArr[2]();
?>  
<?php
$card = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($card as $x => $y) {
  echo "$x: $y <br>";
}
?>

