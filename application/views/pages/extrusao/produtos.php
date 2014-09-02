<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('extrusao/home')?>"><?=lang('home')?></a></li>
                <li><?=lang('eprodutos')?></li>
            </ul>
            <h1 class="title3"><?=lang('eprodutos')?></h1>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="obras-container produtos-container">
                    <?php if (!empty($tipos)) {
                        foreach ($tipos as $tipo) { ?>
                        <a href="<?=site_url('extrusao/produtos/'.$tipo['id_tipo_produto_extrusao'])?>">
                            <div class="obras-list grow">
                                <?php if(!empty($tipo['foto'])) { ?>
                                <img src="<?php echo base_url() ?>assets/uploads/produtos/list/<?php echo $tipo['foto'] ?>"/>
                                <?php } else { ?>
                                <img src="<?php echo base_url() ?>assets/uploads/produtos/3a0ca-3d---os-triple.png?>"/>
                                <?php } ?>
                                <p> <?php echo $tipo['nome_'.$this->lang->lang()]?></p>
                            </div>
                        </a>
                        <?php }
                    } else { ?>
                    <div class="alert alert-info">
                        <h5><strong><?=lang('atencao')?></strong><?=lang('sprodutos')?></br></br><?=lang('desculpa')?><a href="<?php echo base_url();?>index.php/extrusao/home"><?=lang('voltar')?></a></h5>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>