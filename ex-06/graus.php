<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
   $farenh = $_GET["graus"];
   $convgraus = (($farenh-32) *5/9);
   echo "$farenh graus Fahrenheit é igual a $convgraus graus Celcius."
  ?>
</body>
</html>