<?php
$carse = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $carse[0][0].": In stock: ".$carse[0][1].", sold: ".$carse[0][2].".<br>";
echo $carse[1][0].": In stock: ".$carse[1][1].", sold: ".$carse[1][2].".<br>";
echo $carse[2][0].": In stock: ".$carse[2][1].", sold: ".$carse[2][2].".<br>";
echo $carse[3][0].": In stock: ".$carse[3][1].", sold: ".$carse[3][2].".<br>";
?>
<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
