<html>
<body>

<?php  
$i = 1;

while ($i < 6) {
  echo "$i<br>";
  $i++;
} 
?>  
<?php  
$i = 1;

while ($i < 6) {
  if ($i == 3) break;  
  echo "$i<br>";
  $i++;
} 
?>  
<?php  
$i = 0;

while ($i < 6) {
  $i++;
  if ($i == 3) continue;  
  echo "$i<br>";
} 
?>  
<?php  
$i = 1;

while ($i < 6):
  echo "$i<br>";
  $i++;
endwhile;
?>  
<?php  
$i = 0;

while ($i < 100) {
  $i+=10;
  echo "$i<br>";
}
?>  

</body>
</html>
