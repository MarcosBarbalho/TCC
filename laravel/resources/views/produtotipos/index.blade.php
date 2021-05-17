@extends('layout_geral')<?php /* toda estrutura html */ ?>
@section('content') <?php /* yeld(content) */ ?>
<h2 class="a-center">Tipos de Produtos 
    <button type="button" onclick="modalForm(0,this)" class="btn btn-primary btn-success" data-title="Novas" data-toggle="modal" data-target="#modal-form">Novo</button>
</h2>
@include('_html.msg')
<div class="table-responsive">
    <table id="grid-usuarios" class="table table-bordred table-striped">
        <thead>
            <th>Nome</th>
            <th>Ícone</th>
            <th style="width: 100px;">Ações</th>
        </thead>
        <tbody>
            <?php 
            if(count($itens)){ 
                foreach($itens as $item){ ?>
            <tr id="reg-{{$item->id}}" data-json='{"nome":"<?php echo $item->nome;?>","icone":"<?php echo $item->icone;?>"}'>
                <td>{{$item->nome}}</td>
                <td><i class="fas fa-{{$item->icone}}"></i> {{$item->icone}}</td>
                <td>
                    <form action="" method="post" onsubmit="return confirm('Deseja mesmo excluir?');">
                        <input type="hidden" name="id" value="{{$item->id}}" /> @csrf 
                        <button onclick="modalForm({{$item->id}},this)" data-target="#modal-form" class="btn btn-primary btn-xs" data-title="Editar" data-toggle="modal" type="button">
                            <span data-placement="top" data-toggle="tooltip" title="Editar" class="glyphicon glyphicon-pencil"></span>
                        </button> 
                        <button data-placement="top" data-toggle="tooltip" title="Excluir"
                                class="btn btn-danger btn-xs" data-title="Excluir" type="submit">
                            <span class="glyphicon glyphicon-trash" style="padding-right: 2px;"></span>
                        </button>
                    </form>
                </td>
            </tr>
                <?php }
            }else{ ?>
            <tr><td colspan="9" class="a-center">Nenhum registro encontrado</td></tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="clearfix"></div>
</div>
<!-- modal form -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <h4 class="modal-title custom_align" id="modal-heading"><span>Editar</span> Informações</h4>
            </div>
            <form action="{{route('prod-tipos-form')}}" method="post"> @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input required id="form-nome" name="nome" class="form-control " type="text" placeholder="Nome*"/>
                    </div>
                    <div class="form-group">
                        <input id="form-icone" name="icone" class="form-control " type="text" placeholder="Ícone"/>
                    </div>
                </div>
                <div class="modal-footer ">
                    <input type="hidden" id="form-id" name="id" value="" />
                    <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span
                            class="glyphicon glyphicon-ok-sign"></span> Salvar</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@include('_html.js-grid')
<script type="text/javascript">
function modalForm(id,btn){
    $('#modal-heading span').html($(btn).attr('data-title'));
    //zera o formulario
    $('#modal-form input[type=text]').val('');
    $('#form-id').val('');
    if(id > 0){
        //se tiver id passado, pega o json na <tr> e usa pra preencher
        var str = $('#reg-'+id).attr('data-json');
        var obj = JSON.parse(str);
        $('#form-nome').val(obj.nome);
        $('#form-icone').val(obj.icone);
        $('#form-id').val(id);
    }
}
</script>
@endsection