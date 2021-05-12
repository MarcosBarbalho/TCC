<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function home(){
        return view('dashboard.home');
    }
    function login(Request $request){
        if ($request->isMethod('post')) {
            $post = $request->all();
        }
        return view('dashboard.login');
    }
    function senha(Request $request){
        session()->flash('info', 'Uma nova senha foi enviada ao email.');
        return redirect('/login');
    }
}
