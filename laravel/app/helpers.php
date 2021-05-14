<?php
## Todas as functions que servirão como Helpers ##
/**
 * compara nome atual da rota com a str de parametro
 * @param string $str
 * @return bool true|false
 */
function compara_nome_rota($str){
    return strpos($str, \Route::currentRouteName()) !== false;
}

