<?php  
$fruits = array("Apple", "Banana", "Cherry");
$fruits["color"] = "Orange";
array_push($fruits, "Kiwi", "Lemon");

//Output the array:
var_dump($fruits);
?>
<?php  
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];

//Output the array:
var_dump($cars);
?>

