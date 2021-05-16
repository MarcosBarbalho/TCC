<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    function home(){
        return view('dashboard.home');
    }
    function login(Request $request){
        if ($request->isMethod('post')) {
            $post = $request->all();
            $usuario = Usuario::where('login',$post['usuario'])->where('senha',md5($post['senha']))->first();
            if($usuario){
                Session::put('logado',['id'=>$usuario->id,'tipo'=>$usuario->usuariotipos_id,'nome'=>$usuario->nome]);
                $home = '/';
                if($usuario->usuariotipos_id == 3){
                    $home = '/';//inicial para cozinha
                }elseif($usuario->usuariotipos_id == 4){
                    $home = '/';//inicial para atendentes
                }
                return redirect($home);
            }else{
                session()->flash('error', 'Usuário não encontrado.');
            }
        }
        return view('dashboard.login');
    }
    function senha(Request $request){
        session()->flash('info', 'Uma nova senha foi enviada ao email.');
        return redirect('/login');
    }
    function logout(){
        Session::put('logado',null);
        return redirect('/login');
    }
    
    function acessoNegado(){
        return view('dashboard.acesso-negado');
    }
}
