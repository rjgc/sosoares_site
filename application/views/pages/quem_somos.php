<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('pages/home_caixilharia')?>"><?=lang('home')?></a></li>
                <li><?=lang('grupo')?></li>
                <li><?=lang('quem')?></li>
            </ul>
            <?php if ((!empty($page)) && ($page['id_pagina'] == 13)) { ?>
            <h1 class="title3"><?php echo $page['titulo_'.$this->lang->lang()]?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo $page['texto_'.$this->lang->lang()]?>
        </div>
        <?php } else { ?>
            <div class="alert alert-warning">
                <h5><strong>Atenção!</strong> Esta página não pertence a este grupo! <a href="<?=site_url('pages/quem_somos/13')?>">Voltar atrás.</a></h5>
            </div>
        <?php } ?>
    </div>
</div>