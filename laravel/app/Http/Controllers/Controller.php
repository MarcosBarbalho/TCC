<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {

    use AuthorizesRequests,DispatchesJobs,ValidatesRequests;
    
    protected $_check_login = true;

    public function callAction($method, $parameters) {
        $this->preAction();
        parent::callAction($method, $parameters);
        $this->postAction();
    }
    /**
     * antes da callAction do controller
     */
    public function preAction() {
        //verifica se está logado, caso a flag seja true
        if($this->_check_login){
            return redirect('/login');
        }
    }
    /**
     * após callAction do controller
     */
    public function postAction() {}
}
