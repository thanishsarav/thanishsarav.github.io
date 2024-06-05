<html>

<body>

  <?php
  $x = 5;
  $y = "John";

  echo $x;
  echo "<br>";
  echo $y;
  ?>
  <?php
  $txt = "W3Schools.com";
  echo "I love $txt!";
  ?>
  <?php
  $txt = "W3Schools.com";
  echo "I love " . $txt . "!";
  ?>
  <?php
  $x = 5;
  $y = 4;
  echo $x * $y;
  ?>
  <?php
  $h = 5;      // $x is an integer
  $y = "John"; // $y is a string
  
  echo $h;
  echo $y;
  ?>
  <?php
  $x = 5;
  var_dump($x);
  ?>
  <pre>

<?php
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
?>

</pre>

  <?php
  $x = "John";
  echo $x;
  ?>
  <?php
  $x = $y = $z = "Fruit";

  echo $x;
  echo $y;
  echo $z;

  ?>
  <?php
  $x = 5; // global scope
  
  function myTest()
  {
    $x = 5;
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();

  echo "<p>Variable x outside function is: $x</p>";
  ?>
  <?php
  function myTest1()
  {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest1();

  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>";
  ?>
  <?php
  $x = 5;
  $y = 10;

  function myTest2()
  {
    global $x, $y;
    $y = $x + $y;
  }

  myTest2();  // run function
  echo $y; // output the new value for variable $y
  ?>
  <?php
  $x = 5;
  $y = 10;

  function myTest3()
  {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
  }

  myTest3();
  echo $y;
  ?>

  <?php
  function myTest4()
  {
    static $x = 0;
    echo $x;
    $x++;
  }

  myTest4();
  echo "<br>";
  myTest4();
  echo "<br>";
  myTest4();
  ?>

</body>

</html>