<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('pages/home_caixilharia')?>"><?=lang('home')?></a></li>
                <li><?=lang('grupo')?></li>
                <li><?php switch ($page['id_pagina']) {
                    case 1:
                    echo lang('mercados');
                    break;
                    case 2:
                    echo lang('missao');
                    break;
                    case 3:
                    echo lang('grupo');
                    break;
                    case 4:
                    echo lang('responsabilidade');
                    break;
                    case 13:
                    echo lang('quem');
                    break;
                } ?></li>
            </ul>
            <?php if (!empty($page)) { ?>
            <h1 class="title3"><?php echo $page['titulo_'.$this->lang->lang()]?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo $page['texto_'.$this->lang->lang()]?>
        </div>
        <?php } else { ?>
        <div class="alert alert-warning">
            <h5><strong>Atenção!</strong> Página indisponível.<a href="<?=site_url('pages/home_caixilharia')?>"> Voltar atrás.</a></h5>
        </div>
        <?php } ?>
    </div>
</div>