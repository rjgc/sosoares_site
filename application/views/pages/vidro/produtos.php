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
                <div class="obras-container produtos-container">
                    <?php if (!empty($produtos)) {
                        foreach ($produtos as $produto) { ?>
                        <a href="<?=site_url('vidro/produto/'.$produto['id_produto_vidro'])?>">
                            <div class="obras-list grow">
                                <?php if(!empty($produto['foto_1'])) { ?>
                                <img src="<?php echo base_url() ?>assets/uploads/produtos/list/<?php echo $produto['foto_1'] ?>"/>
                                <?php } else { ?>
                                <img src="<?php echo base_url() ?>assets/uploads/produtos/3a0ca-3d---os-triple.png?>"/>
                                <?php } ?>
                                <p> <?php echo $produto['nome_'.$this->lang->lang()]?></p>
                            </div>
                        </a>
                        <?php }
                    } else { ?>
                    <div class="alert alert-info">
                        <h5><strong><?=lang('atencao')?></strong><?=lang('sprodutos')?></br></br><?=lang('desculpa')?><a href="<?php echo base_url();?>index.php/vidro/home"><?=lang('voltar')?></a></h5>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>