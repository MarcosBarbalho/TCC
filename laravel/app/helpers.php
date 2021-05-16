<?php
## Todas as functions que servirão como Helpers ##

use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
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
    static function loginTemNivel($nivel){
        if(!is_array($nivel)){
            $nivel = array($nivel);
        }
        return in_array(Usuario::getSessionVar('tipo'), $nivel);
    }
    static function valorReais($decimal,$suf=false){
        $vr = number_format((float)$decimal,2,',','');
        return $suf ? 'R$'.$vr : $vr;
    }
    static function moedaFloat($decimal){
        return str_replace(['.',',',' ','R$'], ['','.','',''], $decimal);
    }
}
