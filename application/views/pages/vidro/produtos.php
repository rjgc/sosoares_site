<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('vidro/home')?>"><?=lang('home')?></a></li>
                <li><?=lang('vprodutos')?></li>
            </ul>
            <h1 class="title3"><?=lang('vprodutos')?></h1>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="obras-container">
                    <?php
                    if (!empty($tipos)) {
                        foreach ($tipos as $tipo){
                            ?>
                            <a href="<?=site_url('vidro/produto/'.$tipo['id_tipo_produto_vidro'])?>">
                                <div class="obras-list grow">
                                    <img src="<?php echo base_url() ?>assets/uploads/produtos/<?php echo $tipo['foto_1'] ?>"/>
                                    <p> <?php echo $tipo['nome_'.$this->lang->lang()] ?></p>
                                </div>
                            </a>
                        <?php }
                    }
                    else {?>
                        <div class="alert alert-info">
                            <h5><strong>Atenção!</strong> Página dos produtos indisponível.</br></br> Pedimos desculpa pelo incómodo. <a href="<?php echo base_url();?>index.php/vidro/home">Voltar atrás.</a></h5>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
</div>