<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

//CRUD
class UsuariosController extends Controller
{
    /* listagem (read) se vier id via post é exclusao (delete) */
    public function index()
    {
        return view('usuarios.index');
    }

    /* form novo registro não vem id, se vier é edição
     * (create/update) */
    public function form(Request $request)
    {
        //
    }

    /* delete via post */
    public function delete(Request $request)
    {
        //
    }
}
