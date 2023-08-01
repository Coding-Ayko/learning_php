<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="graus.css">
  <title>Document</title>
</head>
<body>
  <section>
  <?php 
   $farenh = $_GET["graus"];
   $convgraus = (($farenh-32) *5/9);
   echo $farenh . "graus Fahrenheit é igual a" . number_format($convgraus, 2) . " graus Celcius."
  
  ?>
   </section>
</body>
</html>