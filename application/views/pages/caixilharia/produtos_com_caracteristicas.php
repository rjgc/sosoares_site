<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/produtos.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('caixilharia/home')?>"><?=lang('home')?></a></li>
                <li><a href="<?=site_url('caixilharia/produtos')?>"><?=lang('cprodutos')?></a></li>
                <li><?php echo $tipo['nome_'.$this->lang->lang()] ?></li>
            </ul>
            <h1 class="title3"><?=lang('produtos')?></h1>
        </div>
    </div>
    <div>
    <h4 class="titulo"><?php echo $tipo['nome_'.$this->lang->lang()] ?></h4>
        <?php foreach ($caracteristicas as $caracteristica) { ?>
        <h5 class="titulo"><?php echo $caracteristica['nome_'.$this->lang->lang()] ?></h5>
        <div class="row">
            <div class="col-md-12">
                <div class="obras-container">
                    <?php
                    if (!empty($produtos[$caracteristica['nome_'.$this->lang->lang()]])) {
                        foreach ($produtos[$caracteristica['nome_'.$this->lang->lang()]] as $produto) { ?>
                        <a href="<?=site_url('caixilharia/produto/'.$produto['id_produto_aluminio'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/produtos/list/<?php echo $produto['foto_1'] ?>"/><p> <?php echo $produto['nome_'.$this->lang->lang()] ?></p></div></a> 
                        <?php }
                    } else { ?>
                    <h6 class="sem-produto">Sem produtos</h6>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>