<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2</h1>
    <?php
//Faça um Programa que leia um número e exiba o dia correspondente da semana. (1-Domingo, 2- Segunda, etc.), se digitar outro valor deve aparecer valor inválido.

echo "<br><br>";
$dia = 6;
switch ($dia) {
    case '1':
        echo "domingo";
        break;
    case '2':
            echo "segunda-feira";
            break;
    case '3':
            echo "terça-feira";
            break;
    case '4':
            echo "quarta-feira";
            break;
    case '5':
            echo "quinta-feira";
            break;        
    case '6':
            echo "sexta-feira";
            break;
    case '7':
            echo "sábado";
            break;   
    default:
        echo "Dia Inválido";
        break;
}
?>
</body>
</html>