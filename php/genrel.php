<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border: 5px groove gold;
      width: 50%;
      border-radius: 10px;
      border-collapse: inherit;
    }

    td,
    th {
      border: 5px groove gold;
      text-align: left;
      padding: 8px;
      border-radius: 10px;
    }

    tr:nth-child(even) {
      background-image: conic-gradient(red, yellow, green, blue, black, purple, hotpink, orange, indigo, royalblue, rgb(255, 0, 25));
      border: 5px ridge green;
    }
  </style>
</head>

<body>
  <?php
  print ("Declaretion of variables");
  print ("<br><br>");
  $tamil = 0;
  $english = 80;
  $maths = 80;
  $social = 80;
  $science = 80;
  print ("table by variables");
  print ("<br><br>");
  print ("<table>");
  print ("<tr>");
  print ("<th>SUBJECT</th>");
  print ("<th>MARKS</th>");
  print ("</tr>");
  print ("<tr>");
  print ("<td>TAMIL</td>");
  print ("<td>$english</td>");
  print ("</tr>");
  print ("<tr>");
  print ("<td>ENGLISH</td>");
  print ("<td>$english</td>");
  print ("</tr>");
  print ("<tr>");
  print ("<td>MATHS</td>");
  print ("<td>$english</td>");
  print ("</tr>");
  print ("<tr>");
  print ("<td>SOCIAL</td>");
  print ("<td>$english</td>");
  print ("</tr>");
  print ("<tr>");
  print ("<td>SCIENCE</td>");
  print ("<td>$english</td>");
  print ("</tr>");
  print ("</table>");
  print("<br><br>");
  print ("Declaretion of variables");
  print ("<br><br>");
  print ("<br><br>");
  print ("array by variables");
  print ("<br><br>");
  $marks = array(50, 60, 70, 80, 90,100);
  $subject = array("tamil", "english", "maths", "social", "science","cs");
  var_dump($marks);
  print ("<br><br>");
  print $marks[0];
  print ("<br><br>");
  print $marks[1];
  print ("<br><br>");
  print $marks[2];
  print ("<br><br>");
  print $marks[3];
  print ("<br><br>");
  print $marks[4];
  print ("<br><br>");
  print ("marks by forloop");
  print ("<br><br>");
  for ($i = 0; $i < count($marks); $i++) {
    echo "The number is: $marks[$i] <br>";
  }
  print ("<br><br>");
  print ("TAMIL-$tamil<br><br>");
  print ("ENGLISH-$tamil<br><br>");
  print ("MATHS-$tamil<br><br>");
  print ("SOCIAL-$tamil<br><br>");
  print ("SCIENCE-$tamil<br><br>");
  print ("<br><br>");
  print ("table by variables");
  print ("<br><br>");
  
  print ("<table>");
  for ($i = 0; $i < count($marks); $i++) {
    print ("<tr>");
    print ("<td>$subject[$i]</td>");
    print ("<td>$marks[$i]</td>");
    print ("</tr>");
  }

  print ("</table>");
  ?>
</body>

</html>