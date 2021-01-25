<div class='titulo'>Aritmeticas</div>

<?php

echo 1+1, '<br>';
echo var_dump(1+1), '<br>';
echo var_dump(1+1.0), '<br>';
echo 10-2, '<br>';
echo 7/ 4, '<br>';
echo intdiv(7,4), '<br>';
echo round(7/4), '<br>';
echo 7%4, '<br>';
echo 7/0, '<br>';
#echo intdiv(7,0), '<br>'; //erro, não irá retornar na tela, nada após isso será renderizado
echo 4**2, '<br>';

# precedência dos operadores:
# () => ** > / ou * ou % => + ou -

echo '<p> Precedência </p>';

echo 2 + 3 * 4, '<br>';
echo (2+3) * 4, '<br>';
echo 2+3 * 4 ** 2, '<br>';
echo ((2+3)*4) ** 2;

?>