<html>

<body>

  <?php
  echo "<h1>display text</h1>";
  echo "Echo statement!<br>";
  echo "I'm about to learn PHP!<br>";
  echo "This ", "string ", "was ", "made ", "with multiple parameters.";
  ?>
  <?php
  $txt1 = "display variable";
  $txt2 = "Echo statement!";
  $x = 5;
  $y = 4;

  echo "<h2>" . $txt1 . "</h2>";
  echo "Study PHP at " . $txt2 . "<br>";
  echo $x + $y;
  ?>


  <?php
  print "<h2><i><mark><del><sub><small>PHP is</small></sub><sup><b> Fun!</b></sup></del></mark></i></h2>";
  print "display text<br>";
  print "print statement";
  ?>
  <?php
  $txt1 = "display variable<br>";
  $txt2 = "print statement";
  $x = 5;
  $y = 4;

  print "<h2>" . $txt1 . "</h2>";
  print "Study PHP at " . $txt2 . "<br>";
  print $x + $y;
  ?>

</body>

</html>