<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cal.css">
  <title>Document</title>
</head>
<body>
  <section>
  <?php 
    $v = $_GET["valor"];
    $h = $_GET["horas"];
    $cal = $v * $h *22;
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "O valor do seu salário este mês será " .  numfmt_format_currency($padrao, $cal ,"BRL");
    
  ?>
  </section>
</body>
</html>