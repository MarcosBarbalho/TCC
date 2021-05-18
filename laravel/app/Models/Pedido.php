<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Pedido extends Model
{
    use HasFactory;
    /*nao possui as colunas created_at e updated_at*/
    public $timestamps = false;
    
    static function emPreparo(){
        $listagem = [];
        $consulta = Pedido::select('id','mesa','status_id')
                ->where('filial_id',Usuario::getSessionVar('filiacao'))
                ->whereIn('status_id',[1,3,4])->get();
        foreach($consulta as $row){
            $listagem[$row->mesa] = $row;
        }
        return $listagem;
    }
}
