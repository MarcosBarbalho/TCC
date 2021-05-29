<?php
## Todas as functions que servirão como Helpers ##

use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use App\Models\Config;
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
    static function formatarData($data,$hora=false){
        $aux = explode(" ", $data);
        $aux2 = explode('-', $aux[0]);
        return $hora ? $aux2[2].'/'.$aux2[1].'/'.$aux2[0].' '.$aux[1] : $aux2[2].'/'.$aux2[1].'/'.$aux2[0];
    }
    static function getConfig($chave){
        $val = '';
        $cfg = Config::where('chave',$chave)->first();
        if($cfg){
            $val = $cfg->valor;
        }
        return $val;
    }
    static function tempoEspera($from_time){
        $from_time = strtotime($from_time);
        $to_time = strtotime(now());
        echo round(abs($to_time - $from_time) / 60). " min";
    }
}
