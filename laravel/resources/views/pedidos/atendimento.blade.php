@extends('layout_geral')<?php /* toda estrutura html */ ?>
@section('content') <?php /* yeld(content) */ ?>
<h2 class="text-center">Novo Pedido</h2>
@include('_html.msg')
<div class="row">
    <!-- MENU LATERAL -->
    <div class="col-sm-3 menu-lateral">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item brand-nav active" id="nav-item-mesa">
                <a class="nav-link" href="javascript:" onclick="navItem('mesa');">Mesa <span class="cont" id="mesa-contador">?</span></a>
            </li>
            <li class="nav-item brand-nav" id="nav-item-produtos">
                <a class="nav-link" href="javascript:" onclick="navItem('produtos');">Produtos</a>
            </li>
            <li class="nav-item brand-nav" id="nav-item-cliente">
                <a class="nav-link" href="javascript:" onclick="navItem('cliente');">Cliente</a>
            </li>
            <li class="nav-item brand-nav" id="nav-item-confirmacao">
                <a class="nav-link" href="javascript:" onclick="navItem('confirmacao');">Confirmação</a>
            </li>
            <li class="nav-item last">&nbsp;</li>
        </ul>
    </div>
    <form action="" method="post">
    <!-- ####  ABA MESA  #### -->
    @include('pedidos.atendimento.aba-mesa')
    
    <!-- ####  ABA PRODUTOS  #### -->
    @include('pedidos.atendimento.aba-produtos')
    
    <!-- ####  ABA CLIENTE  #### -->
    @include('pedidos.atendimento.aba-cliente')
    
    <!-- ####  ABA CONFIRMACAO  #### -->
    @include('pedidos.atendimento.aba-confirmacao')
    </form>
    <div class="clearfix"></div>
</div>
@endsection