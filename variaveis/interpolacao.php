<div class='titulo'>Interpolação</div>

<?php

$numero=10;
echo $numero;
echo '<br> $numero'; //aspas simples não interpola
echo "<br> $numero"; //aspas duplas interpola
echo '<br>';
$texto="A sua nota é: $numero";
echo '<br>'.$texto;

$objeto='caneta';
echo "<br>Eu tenho 5 {$objeto}s.";
echo "<br>Eu tenho 5 { $objeto}s, mas perdi 3 {$objeto }s"; //espaço antes da variável não funciona, depois da variável funciona (considerando uso de chave)

?>