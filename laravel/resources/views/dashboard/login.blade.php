@extends('layout_login') <?php /* toda estrutura html */ ?>
@section('content') <?php /* yeld(content) */ ?>
<div class="a-center">
    <h2>Esqueci minha Senha</h2>
    <p>Informe seu Usuário e E-mail</p>
</div>
<form action="">
    <label class="form-label">
        <i class="fas fa-user-circle"></i>
        <input class="form-control" type="text" placeholder="Usuário"/>
    </label>
    <label class="form-label">
        <i class="fas fa-envelope"></i>
        <input class="form-control" type="text" placeholder="E-mail"/>
    </label>
    <label class="form-label">
        <i class="fas fa-lock"></i>
        <input class="form-control" type="password" placeholder="Senha"/>
    </label>
    <div class="a-center">
        <button type="submit" class="btn btn-primary">Solicitar nova Senha</button>
        <p><a href="#">Esqueci minha Senha</a></p>
    </div>
</form>
@endsection