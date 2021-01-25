<div class='titulo'>Tipo booleano</div>

<?php
echo TRUE, '<br>';
echo FALSE, '<br>';
echo '<br>'.var_dump(true);
echo '<br>'.var_dump(false);
echo '<br>'.var_dump('false');
echo '<br>'.is_bool('true');

//fazer as regras de conversões

echo '<p>Regras:</p>';
echo '<br>'.var_dump((bool)0); //apenas 0 é false
echo '<br>'.var_dump((bool)20);
echo '<br>'.var_dump((bool)-1);
echo '<br>'.var_dump((bool)0.0);
echo '<br>'.var_dump((bool)0.00000001);
echo '<br>'.var_dump((bool)""); //false
echo '<br>'.var_dump((bool)"  "); //false
echo '<br>'.var_dump((bool)"0"); //todo o resto é verdadeiro
echo '<br>'.var_dump((bool)"00");
echo '<br>'.var_dump((bool)"false");
echo '<br>'.var_dump(!"false");
echo '<br>'.var_dump(!!"false");

?>