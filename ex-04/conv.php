<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversão</title>
</head>
<body>
  <?php 
    $metros = $_GET["metros"];
    $conversao = $metros *1000;

    print "a medida de $metros  metros, é igual à $conversao centímetros . "
  ?>
</body>
</html>