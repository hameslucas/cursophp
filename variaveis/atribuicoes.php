<div class='titulo'>Atribuições</div>

<?php

$title='Atribuições';
$numero=10;
echo '<br>';
echo $numero;
echo '<br>';
$numero= $numero-1;
echo $numero;
$numero--; //decremento somente em variáveis
echo '<br>'.$numero;
--$numero; //pode ser pré fixado ou pós fixado
echo '<br>'.$numero;
$numero++;
++$numero;
echo '<br>'.$numero;
$numero-=5; //decrementado 5 unidades do valor atual da variável número
echo '<br>'.$numero;

$numero+=5;
echo '<br>'.$numero;

$numero*=10; 
echo '<br>'.$numero;

$numero/=2; 
echo '<br>'.$numero;

$numero%=6; 
echo '<br>'.$numero;

$numero**=4; 
echo '<br>'.$numero;

$numero.=2; //apenas concatenação
echo '<br>'.$numero;

$texto='Esse é um texto';
echo '<br>'.$texto;
$texto =$texto.' qualquer';
echo '<br>'.$texto;
$texto.=' de verdade';
echo '<br>'.$texto;

//$varivelInexistente = 'valor inexistente';
echo '<br>'.$varivelInexistente;
$valor=$varivelInexistente ?? 'valor default'; //atribui um valor padrão caso o valor da variável não esteja disponível
echo '<br>'.$valor;

?>