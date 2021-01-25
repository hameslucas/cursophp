<div class='titulo'>Tipo string</div>

<?php
echo 'Eu sou uma string','<br>';
var_dump("Eu também");
echo '<br>';
//concatenação no PHP utiliza o ponto ao invés de mais

echo "Nós também".' somos';
echo '<br>','Também aceito',' vírgulas','<br>';
echo "'teste'".' "teste2"'.'\'Teste\''."\"Teste2\"\n";
print("<br>Também existe a função print");
print "<br>Também existe a função print";

//Algumas funções
echo '<br>'.strtoupper('maximizado'); //tudo maiúsculo
echo '<br>'.strtolower('MINIMIZADO'); //tudo minúsculo
echo '<br>'.ucfirst('só a primeira letra maiúscula'); //primeira letra maiúscula
echo '<br>'.ucwords('todas as palavras'); //primeira letra de cada palavra maiúscula
echo '<br>'.mb_strlen('Quantas letras?', "utf-8"); //count de caracter, possível passar o encode
echo '<br>'.substr('só uma parte mesmo',7,6 ); //pega a partir do 7 caracter até o 6 após o mesmo
echo '<br>'.str_replace('isso', 'aquilo','trocar isso'); //localizar o primeiro parametro e substituir pelo segundo
echo '<br>'.strpos('!AbcaBcabs', 'abc'); //irá localizar abc COM case sensitive
echo '<br>'.stripos('!AbcaBcabc', 'abc'); //irá localizar abc SEM case sensitive

?>