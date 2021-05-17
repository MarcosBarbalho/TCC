<?php 
use App\Models\Usuario;
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Projeto</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                @if(Helper::loginTemNivel([1,2]))
                <li <?php echo Helper::comparaNomeRota('home') ? 'class="active"' : '';?>><a href="{{url('/')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li <?php echo Helper::comparaNomeRota('gerenciar') ? 'class="active"' : '';?> class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><i class="fas fa-cubes"></i> Gerenciar <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('configs')}}">Configurações</a></li>
                        <li><a href="{{route('prod-tipos')}}">Tipos de Produtos</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Relatórios</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li <?php echo Helper::comparaNomeRota('usuarios') ? 'class="active"' : '';?>><a href="{{url('/usuarios')}}"><i class="fas fa-user"></i> Funcionários</a></li>
                <li <?php echo Helper::comparaNomeRota('produtos') ? 'class="active"' : '';?>><a href="{{route('produtos')}}"><i class="fas fa-book"></i> Produtos</a></li>@endif
                @if(Helper::loginTemNivel([1,2,4]))
                <li <?php echo Helper::comparaNomeRota('clientes') ? 'class="active"' : '';?>><a href="{{route('clientes')}}"><i class="fas fa-users"></i> Clientes</a></li>
                <li <?php echo Helper::comparaNomeRota('atendimento') ? 'class="active"' : '';?>><a href="#"><i class="fas fa-edit"></i> Atendimento</a></li>@endif
                <li <?php echo Helper::comparaNomeRota('pedidos') ? 'class="active"' : '';?>><a href="#"><i class="fas fa-shopping-bag"></i> Pedidos</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown-to">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><i class="fas fa-user"></i> 
                        {{Usuario::getSessionVar('nome')}} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/logout')}}">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>