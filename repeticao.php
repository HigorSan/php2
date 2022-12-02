<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>
<body>
    <h1>Repetição</h1>

    <?php

    //array
    $clientes = ["Vagner","Marcus","Hygor","Julia","Letícia","Davi","Higor","Melyssa","Aislany","Vinicius"];
    $contador = 0;
    while($contador <= 9){
        echo "$clientes[$contador]<br>";
        $contador = $contador + 1;
    }

    // tabuada do 1
    echo "<br>";
    $valor = 1;
    $contador = 1;
    while($contador <= 10){
        $total = $valor * $contador;
        echo "$valor X $contador = $total";
        $contador = $contador + 1;
        echo "<br>";
    }

        // tabuada do 2
echo "<br>";
$valor = 2;
$contador = 1;
while($contador <= 10){
    $total = $valor * $contador;
    echo "$valor X $contador = $total";
    $contador = $contador + 1;
    echo "<br>";
}

    // tabuada do 3
    echo "<br>";
    $valor = 3;
    $contador = 1;
    while($contador <= 10){
        $total = $valor * $contador;
        echo "$valor X $contador = $total";
        $contador = $contador + 1;
        echo "<br>";
    }

        // tabuada do 4
echo "<br>";
$valor = 4;
$contador = 1;
while($contador <= 10){
    $total = $valor * $contador;
    echo "$valor X $contador = $total";
    $contador = $contador + 1;
    echo "<br>";
}

    // tabuada do 5
    echo "<br>";
    $valor = 5;
    $contador = 1;
    while($contador <= 10){
        $total = $valor * $contador;
        echo "$valor X $contador = $total";
        $contador = $contador + 1;
        echo "<br>";
    }

        // tabuada do 6
echo "<br>";
$valor = 6;
$contador = 1;
while($contador <= 10){
    $total = $valor * $contador;
    echo "$valor X $contador = $total";
    $contador = $contador + 1;
    echo "<br>";
}

    // tabuada do 7
    echo "<br>";
    $valor = 7;
    $contador = 1;
    while($contador <= 10){
        $total = $valor * $contador;
        echo "$valor X $contador = $total";
        $contador = $contador + 1;
        echo "<br>";
    }

    echo "<br><br>";

    // tabuada do 8

    $valor = 8;
    $contador = 1;
    while($contador <= 10){
        $total = $valor * $contador;
        echo "$valor X $contador = $total";
        $contador = $contador + 1;
        echo "<br>";
    }

    // tabuada do 9
echo "<br>";
    $valor = 9;
    $contador = 1;
    while($contador <= 10){
        $total = $valor * $contador;
        echo "$valor X $contador = $total";
        $contador = $contador + 1;
        echo "<br>";
    }

        // tabuada do 10
echo "<br>";
$valor = 10;
$contador = 1;
while($contador <= 10){
    $total = $valor * $contador;
    echo "$valor X $contador = $total";
    $contador = $contador + 1;
    echo "<br>";
}
    ?>
</body>
</html>