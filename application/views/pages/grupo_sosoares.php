<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                    echo site_url('caixilharia/home');
                } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                    echo site_url('vidro/home');
                } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                    echo site_url('extrusao/home');
                } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                    echo site_url('tratamento/home');
                } ?>"><?=lang('home')?></a></li>
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
                    case 5:
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
            <h5><strong>Atenção!</strong> Página indisponível.<a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                echo site_url('caixilharia/home');
            } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                echo site_url('vidro/home');
            } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                echo site_url('extrusao/home');
            } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                echo site_url('tratamento/home');
            } ?>"> Voltar atrás.</a></h5>
        </div>
        <?php } ?>
    </div>
</div>