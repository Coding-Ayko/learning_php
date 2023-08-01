<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="media.css">
  <title>Document</title>
</head>
<body>
  <section>
    <?php 
      $n1 = $_GET["nota1"];
      $n2 = $_GET["nota2"];
      $n3 = $_GET["nota3"];
      $soma = $n1 + $n2 + $n3 ;
      $media = $soma/3;

      echo "a média da nota dos 3 alunos é " . number_format($media, 2, ",");
    ?>
  </section>
</body>
</html>