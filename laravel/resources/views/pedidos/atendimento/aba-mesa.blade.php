<div class="col-sm-9 conteudo" id="conteudo-mesa" data-mesa="">
    <div class="row">
        <?php foreach(explode(',', $lista_mesas) as $m){ ?>
        <div class="col-xs-6 col-sm-6 col-md-3">
            <div class="box box-mesa a-center" id="box-mesa-1" onclick="escolheMesa('{{trim($m)}}')">
                <div class="box-txt">Mesa</div>
                <span class="badge badge-pill badge-dark">{{trim($m)}}</span>
                <div class="a-center qtde">-</div>
            </div>
        </div>
        <?php } ?>
        <div class="clearfix"></div>
    </div>
</div>