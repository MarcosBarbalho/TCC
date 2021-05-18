<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Pedido;
use App\Models\Layout;
use App\Models\Produto;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /* listagem (read) se vier id via post é exclusao (delete) */

    public function index(Request $request) {
        $id = $request->post('id');
        if($id >0){
            try {
                Pedido::destroy($id);
                session()->flash('success', "Registro excluído.");
            } catch (Exception $ex) {
                session()->flash('error', 'Não foi possível excluir o registro.');
            }
        }
        $query = Pedido::select('*')
                ->orderBy('nome')
                ->paginate(16);
        return view('pedidos.index', ['resultado' => $query, 'itens' => $query->items()]);
    }

    /* form novo registro não vem id, se vier é edição
     * (create/update) */

    public function form(Request $request) {
        $post = $request->all();
        try {
            if ($post['id'] > 0) {
                //update
                $pedido = Pedido::find($post['id']);
                if($pedido){
                    $pedido->nome = $post['nome'];
                    $pedido->cpf = $post['cpf'];
                    $pedido->save();
                    session()->flash('success', "Pedido alterado com sucesso.");
                    return redirect('clientes');
                }
            } else {
                //create
                $pedido = new Pedido();
                $pedido->nome = $post['nome'];
                $pedido->cpf = $post['cpf'];
                $pedido->data_cadastro = now();
                $pedido->save();
                session()->flash('success', "Pedido cadastrado com sucesso.");
                return redirect('clientes');
            }
        } catch (Exception $ex) {
            session()->flash('error', 'Não foi possível salvar o registro.');
        }
    }
    ## ATENDIMENTO ##
    public function atendimento(Request $request){
        if ($request->isMethod('post')) {
            //cria pedido e redireciona para /confirmado
        }
        Layout::$TITLE = 'Atendimento';
        return view('pedidos.atendimento',[
            'lista_mesas' => \Helper::getConfig("lista_mesas"),
            'produto_tipos' => Produto::listagemTipos()
                ]);
    }
    public function confirmado(Request $request){
        
    }

    //----------------------------
    public function afterCallAction($method) {
        Layout::$CSS_CLASS = 'atendimento';
        //bloqueia todos os usuarios que nao foram tipo 1 e 2
        $tipo = Usuario::getSessionVar('tipo');
        if (!in_array($tipo, [1, 2,4])) {
            return redirect('/acesso-negado');
        }
        return null;
    }
}