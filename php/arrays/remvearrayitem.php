<?php  
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
unset($cars[0]);
array_pop($cars);
var_dump($cars);

?>  
<?php  
$carss = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($carss["model"]);
var_dump($carss);
$newarray = array_diff($cars, ["Mustang", 1964]);
array_shift($cars);
var_dump($newarray);
?>  
