<html>
<body>

<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!<br><br>";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!<br>";
}
?>
<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!<br><br><br><br>";
  case "blue":
    echo "Your favorite color is blue!<br><br>";
    break;
  case "green":
    echo "Your favorite color is green!<br><br>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!<br><br>";
}
?>
<?php
$d = 4;

switch ($d) {
  case 6:
    echo "Today is Saturday<br><br>";
    break;
  case 0:
    echo "Today is Sunday<br><br>";
    break;
  default:
    echo "Looking forward to the Weekend<br><br><br><br>";
}
?>
<?php
$d = 4;

switch ($d) {
  default:
    echo "Looking forward to the Weekend<br><br>";
    break;
  case 6:
    echo "Today is Saturday<br><br>";
    break;
  case 0:
    echo "Today is Sunday<br><br><br><br>";
}
?>
<?php
$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The week feels so long!<br><br>";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!<br><br>";
    break;
  default:
    echo "Something went wrong<br><br>";
}
?>
 
</body>
</html>
