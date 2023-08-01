<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <section>
  <?php 
      $area = $_GET ["qntmetros"];
      $l_area= 3;
      $l_lata= 18;
      $valor= 80;
      $qnt_latas = $area/$l_area/$l_lata ;
      $v_tinta =  (($area/$l_area)/$l_lata) * $valor;
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

      echo "Para pintar " .   $area.  " metros quadrados, você precisrá de " . number_format($qnt_latas, 0, ) . " latas de tintas que irão custar " . numfmt_format_currency($padrao, $v_tinta ,"BRL");
    ?>
  </section>
</body>
</html>

