<?php
$carb = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($carb);
?>
<?php
$carf = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $carf["model"];
?>
<?php
$card = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$card["year"] = 2024;
var_dump($card);
?>
<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
?>
