<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="layot.css">
  <title>Document</title>
</head>

<body>
  <header>
  </header>
  <section>
  <h1>Calcule o perímetro e a área do círculo</h1>

    <?php
    $r = $_GET ["raio"]; 
    $perimetro = (2 * M_PI) * $r;
    $area = M_PI * ($r * $r);

    echo "O círculo que possui o valor " . $r . "cm de raio, tem " . number_format($perimetro, 2 , ",") . "cm de perímetro e " . number_format($area, 2, "," , ".") . "cm³ de área.";
