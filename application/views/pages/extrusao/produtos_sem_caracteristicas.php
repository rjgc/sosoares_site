<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/produtos.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('extrusao/home')?>"><?=lang('home')?></a></li>
                <li><a href="<?=site_url('extrusao/produtos')?>"><?=lang('eprodutos')?></a></li>
                <li><?php echo $tipo['nome_'.$this->lang->lang()] ?></li>
            </ul>
            <h1 class="title3"><?=lang('produtos')?></h1>
        </div>
    </div>
    <div>
    <h4 class="titulo"><?php echo $tipo['nome_'.$this->lang->lang()] ?></h4>
        <div class="row">
            <div class="col-md-12">
                <div class="obras-container">
                    <?php if (!empty($produtos)) {
                        foreach ($produtos as $produto) { ?>
                        <a href="<?=site_url('extrusao/produto/'.$produto['id_produto_extrusao'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/produtos/list/<?php echo $produto['foto_1'] ?>"/><p> <?php echo $produto['nome_'.$this->lang->lang()] ?></p></div></a> 
                        <?php }
                    } else { ?>
                    <h6 class="sem-produto"><?=lang('sem_produtos')?></h6>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>