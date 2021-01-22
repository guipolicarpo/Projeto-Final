<?php

$cep = json_decode(file_get_contents('https://viacep.com.br/ws/12500100/json/?callback'));
echo $cep->logradouro;
echo $cep->bairro;
echo $cep->localidade;
echo $cep->uf;

//     https://viacep.com.br/

?>