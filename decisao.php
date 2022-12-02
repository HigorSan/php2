<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisão</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <?php
$nome = "Higor";
$idade = 17;
$fumante = false;
//false -- falso - 0   / true - verdadeiro - 1
echo "<p>ID do cliente: $nome <br>";
echo "Idade do cliente: $idade <br>";
echo "fumante: $fumante </p>";

/* OPERADORES ARITIMÉTICOS */

echo 20*3;
echo "<br>";

// OPERADORES RELACIONAIS

echo 20>10;
echo "<br>";

// ESTRUTURA DE DECISÃO

//  UMA PESSOA COM 75 ANOS NÃO PODE ENTRAR NA FESTA DA MELYSSA
//  SE FOR FUMANTE NÃO PODE ENTRAR
//  IDADE NÃO PODE SER < 10 ANOS

//IF SIMPLES - TERÁ NO MÁXIMO 2 RESPOSTAS DIFERENTES
echo "<br>";
$idade = 10;
$fumante = false;
// if = SE
if($idade >= 75 || $fumante == true || $idade <= 10){
    echo "PROIBIDO A ENTRADA ACIMA DE 75 ANOS NA FESTA, NÃO PODE SER FUMANTE E NÃO ENTRA ABAIXO DE 10 ANOS";
}else{
    echo "pode entrar, seja bem vindo!";
}



//UM ALUNO, SE TIRAR UMA NOTA ACIMA DE 8 ELE É APROVADO
// SE TIRAR UMA NOTA ENTRE 5 E 8 RECUPERAÇÃO
// SE ELE TIRAR ABAIXO DE 5 ESTARÁ REPROVADO

// IF COMPOSTO - TERÁ MAIS DE 2 RESPOSTAS DIFERENTES
echo "<br>";
$nota = 10;
if($nota >= 8){
    echo "Aprovado(a)";
}else if($nota >= 5){
    echo " Recuperação";
}else{
    echo "Reprovado(a)";
}

// vc irão no Senac somente se:
// estiver uniformisado
// chegar no horário
// mensagem: verdadeiro ----- PARABÉNS, VC PODE IR
//            falso  ------- FERROU, VC VAI FICAR NA SALA DO VALDEMAR

echo "<br><br>";
$uniforme = true;
$horario =  true;
if($uniforme == true && $horario == true){
    echo "PARABÉNS, VC PODE IR";
}else{
    echo "FERROU, VC VAI FICAR NA SALA DO VALDEMAR";
}

// ternário
echo "<br><br>";
$uniforme = true;
$horario =  true;
echo ($uniforme == true && $horario == true) ? "PARABÉNS, VC PODE IR" : "FERROU, VC VAI FICAR NA SALA DO VALDEMAR";
 
// sua cor favorita pode ser: vermelho, azul, verde
// swtich - escolher uma das opções


$cor = "preto";
switch ($cor) {
    case 'azul';
        echo "<br><br>";
        echo "Sua cor favorita é $cor";
        break;
    case 'verde';
        echo "<br><br>";
        echo "Sua cor favorita é $cor";
        break;
    case 'vermelho';
        echo "<br><br>";
        echo "Sua cor favorita é $cor";
    case 'preto';
        echo "<br><br>";
        echo "Sua cor favorita é $cor";
        break;
    default:
        echo "<br><br>";
        echo "Sua cor favorita não é azul, verde, vermelho ou preto";
        break;
}

// dias da semana ---- 1 domingo , 2 segunda , 3 terça , 4 quarta , 5 quinta , 6 sexta e 7 - sábado

echo "<br><br>";
$dia = 4;
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

// escolha um presente para o professor em seu aniverssário:
// 1 - Um pote de Sorvete
// 2 - Mouse
// 3 - Celular da biqueira
// 4 - Fone usado
// 5 - Mouse pad rasgado
// 6 - 1 kg feijão
// 7 - Um vale Burger King

echo "<br><br>";
$presente = 3;
switch ($presente) {
    case '1':
        echo "pote de Sorvete";
        break;
    case '2':
            echo "Mouse";
            break;
    case '3':
            echo "Celular da biqueira";
            break;
    case '4':
            echo "Fone usado";
            break;
    case '5':
            echo "Mouse pad rasgado";
            break;        
    case '6':
            echo "1 kg feijão";
            break;
    case '7':
            echo "vale Burger King";
            break;   
    default:
        echo "Escolha um presente";
        break;
}
    ?>
</body>
</html>