<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $v = $_GET["valor"];
    $h = $_GET["horas"];
    $cal = $v * $h *22;

    echo "O valor do seu salário neste mês será $cal"
  ?>
</body>
</html>