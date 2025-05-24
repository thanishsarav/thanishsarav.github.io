<?php  
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = 'thanish';    // Boolean
$e = 'man';    // NULL


$a = (string) $a;
$b = (int) $b;
$c = (float) $c;
$d = (bool) $d;
$e = (array) $e;

$x = 10;  
$y = 3;

echo $x ** $y;
echo '<br>';
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }
  $i = 2;
  echo '<br>';
do {
  echo $i;
  $i++;
} while ($i < 6);

echo '<br>';
function myValue(){
  return __FUNCTION__;
}
echo myValue();
echo '<br>';
function familyName($fname) {
    echo "$fname Refsnes.<br>";
    echo __FUNCTION__;  
    echo '<br>';
  }
  
  familyName("thanish");
  familyName("kavin");
  familyName("nithin");
  familyName("johinth");
  familyName("darshan");
  $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];
echo '<br>';
echo __LINE__;
echo '<br>';
echo __DIR__;
echo '<br>';
echo __FILE__; 
class MyClass {
  public function myMethod() {
      echo __CLASS__;  
      echo '<br>'; // Outputs: MyClass
      echo __METHOD__;  // Outputs: MyClass::myMethod
  }
}  

?>
<html>
  <body>
  <form method="post" action="">
  <input type="text" name="username">
  <input type="password" name="password">
  <input type="submit" value="Login">
</form>
  </body>
</html>
<?php
$username = $_POST['username'];
$password = $_POST['password'];

echo "Username: $username <br>";
echo "Password: $password";
?>