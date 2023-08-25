<?php
$calc = "";
$visor = "";

function atualizarVisor($valor) {
    global $visor;
    $visor .= $valor;
}

function insert($num) {
    global $visor, $calc;
    $calc = $visor;
    $newValue = $calc . $num;
    $visor = $newValue;
}

function equal() {
    global $visor;
    $result = eval("return $visor;");
    $visor = $result;
}


if (isset($_GET['num'])) {
  $num = $_GET['num'];

  if ($num === 'C') {
      $visor = ""; // Resetar o visor
  } else {
      insert('');
  }
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Calculadora-PHP</title>
</head>

<body>
  <main class="calc ">
  <input type="text" class="visor" id="visor" value="<?= $visor ?>" disabled><br>
    <div action="<?=$_SERVER['PHP_SELF']?>" method="post" class="container">
     <button onclick="insert(')" type="submit" class="caltecla cor-verm" name="num" value=" ">C</button>
     <button onclick="insert('(')" type="submit" class="numtecla" name="num" value="">(</button>
     <button onclick="insert(')')" type="submit" class="numtecla" name="num" value="">)</button>
     <button onclick="insert('/')" type="submit" class="caltecla" name="num" value="">/</button>
     <button onclick="insert(7)" type="submit" class="numtecla" name="num" value="7">7</button>
     <button onclick="insert(8)" type="submit" class="numtecla" name="num" value="8">8</button>
     <button onclick="insert(9)" type="submit" class="numtecla" name="num" value="9">9</button>
     <button onclick="insert('*')" type="submit" class="caltecla" name="num" value="">x</button>
     <button onclick="insert(4)" type="submit" class="numtecla" name="num" value="4">4</button>
     <button onclick="insert(5)" type="submit" class="numtecla" name="num" value="5">5</button>
     <button onclick="insert(6)" type="submit" class="numtecla" name="num" value="6">6</button>
     <button onclick="insert('-')" type="submit" class="caltecla" name="num" value="-">-</button>
     <button onclick="insert(1)" type="submit" class="numtecla" name="num" value="1">1</button>
     <button onclick="insert(2)" type="submit" class="numtecla" name="num" value="2">2</button>
     <button onclick="insert(3)" type="submit" class="numtecla" name="num" value="3">3</button>
     <button onclick="insert('+')" type="submit" class="caltecla" name="num" value="+">+</button>
     <button onclick="insert(0)" type="submit" class="numtecla" name="num" value="0">0</button>
     <button onclick="insert(00)" type="submit" class="numtecla" name="num" value="00">00</button>
     <button onclick="insert('.')" type="submit" class="numtecla" name="num" value=".">.</button>
     <button  onclick="equal()" type="submit" class="caltecla cor-verde"  name="num" value="=">=</button>
</div>
<script>
    var calc= ""
    function atualizarVisor(valor) {
    document.getElementById('visor').value += valor;
    }

    function insert(num){
      var visor = document.getElementById('visor')
      calc = visor.value
      var newValue = calc + num
      visor.value = newValue
    }

    function equal(){
      var visor = document.getElementById('visor')
      var result = eval(visor.value)
      visor.value = result
    }
  </script>
  </main>


</body>

</html>