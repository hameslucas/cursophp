<div class='titulo'>Variáveis</div>

<?php 

$numeroA=13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';

$a=3;
$b=16;
$soma=$a+$b;
echo $soma;
echo '<br>';

echo isset($soma); //isset mostra se a variável está setada
unset($soma);
echo '<br>';

$variavel=10;
echo '<br>'.$variavel;

$variavel='Agora eu sou uma string!';
echo '<br>'.$variavel; //PHP possui tipagem fraca nas variáveis

//Nomes de variável

$var='válida';
echo '<br>';
$var2='válida';
echo '<br>';
$VAR3='válida';
echo '<br>';
$_var_4='válida';
echo '<br>';
//$6var='inválido';
//$%var7='inválido';
//$var8%='inválido';

echo '<br>';

var_dump($_SERVER["HTTP_HOST"]);



?>