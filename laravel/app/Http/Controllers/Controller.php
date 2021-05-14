<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {

    use AuthorizesRequests,DispatchesJobs,ValidatesRequests;
    
    public function callAction($method, $parameters)
    {
        $ret = $this->afterCallAction($method);
        if(is_null($ret)){
            return parent::callAction($method, $parameters);
        }else{
            return $ret;
        }
    }
    /**
     * chamar funcao e sempre ter return
     * @param string $method
     * @return mixed
     */
    public function afterCallAction($method){return null;}
}
