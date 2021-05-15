<?php
## Todas as functions que servirão como Helpers ##

use Illuminate\Support\Facades\DB;
class Helper{
    /**
    * compara nome atual da rota com a str de parametro
    * @param string $str
    * @return bool true|false
    */
    static function comparaNomeRota($str){
        return strpos($str, \Route::currentRouteName()) !== false;
    }
    /**
     * pega tabela e faz foreach de options html com id e nome
     * @param string $tabela
     */
    static function formOptions($tabela){
        $query = DB::table($tabela)->orderBy('nome')->get();
        foreach($query as $item){
            ?><option value="<?php echo $item->id;?>">- <?php echo $item->nome;?></option><?php
        }
    }
}
