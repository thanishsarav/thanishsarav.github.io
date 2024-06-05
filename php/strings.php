<html>
<body>

    <?php
    echo "Hello";
    print "Hello";
    ?>
    <?php
$x = "John";
echo "Hello $x";
?><?php
$x = "John";
echo 'Hello $x';
?>
<?php
echo strlen("Hello world!");
?><?php
echo str_word_count("Hello world!");
?> <?php
echo strpos("Hello world!", "world");
?> 
<?php
$x = "Hello World!";
echo strtoupper($x);
?> 
<?php
$x = "Hello World!";
echo strtolower($x);
?> 

<?php
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
?><?php
$x = "Hello World!";
echo strrev($x);
?> 
<?php
$x = " Hello World! ";
echo trim($x);
?> 

<p>The whitespaces are invisible in plain HTML,<br>
but check out the difference in two input fields:</p>

<?php
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
?> 
<?php
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);
?> 
<?php
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;
?>
<?php
$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;
?><?php
$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;
?>
<?php
$x = "Hello World!";
echo substr($x, 6, 5);
?>  
<?php
$x = "Hello World!";
echo substr($x, 6);
?> 
<?php
$x = "Hello World!";
echo substr($x, -5, 3);
?> 
<?php
$x = "Hi, how are you?";
echo substr($x, 5, -3);
?> 


</body>
</html>
