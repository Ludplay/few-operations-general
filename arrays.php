<?php

$array_siglas = ['ES', 'MG', 'RJ', 'SP'];
$array_estados = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];

$array_estados_invertido = array_reverse($array_estados);
$array_final = array_combine($array_siglas, $array_estados_invertido);

foreach ($array_final as $key => $value) {
    echo $key." - ".$value." <br />";
}

?>