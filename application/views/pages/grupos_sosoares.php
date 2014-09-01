<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/ie8/grupos_sosoares.css">
<![endif]-->
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
            </ul>
            <h1 class="title3"><?=lang('grupo')?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="obras-container">
                <?php if (!empty($pages)) {
                    foreach ($pages as $page) {
                        ?>
                        <a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                            echo site_url('caixilharia/grupo_sosoares/'.$page['id_pagina']);
                        } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                            echo site_url('vidro/grupo_sosoares/'.$page['id_pagina']);
                        } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                            echo site_url('extrusao/grupo_sosoares/'.$page['id_pagina']);
                        } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                            echo site_url('tratamento/grupo_sosoares/'.$page['id_pagina']);
                        }?>">
                        <div class="obras-list grow">
                            <?php if(empty($page['imagem'])) { ?>
                            <img src="<?php echo base_url() ?>assets/sosoares/img/logotipo.png"/>
                            <?php } else { ?>
                            <img src="<?php echo base_url() ?>assets/uploads/grupo_sosoares/<?php echo $page['imagem'] ?>"/>
                            <?php } ?>
                            <p> <?php echo $page['titulo_'.$this->lang->lang()]?></p>
                        </div>
                    </a>
                    <?php
                } ?>
                <a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                    echo site_url('caixilharia/areas_comerciais');
                } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                    echo site_url('vidro/areas_comerciais');
                } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                    echo site_url('extrusao/areas_comerciais');
                } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                    echo site_url('tratamento/areas_comerciais');
                }?>"><div class="obras-list grow">
                <img src="<?php echo base_url() ?>assets/uploads/grupo_sosoares/ic_ss_web-areas.jpg"/>
                <p><?=lang('comerciais')?></p>
            </div>
        </a>
        <a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
            echo site_url('caixilharia/noticias');
        } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
            echo site_url('vidro/noticias');
        } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
            echo site_url('extrusao/noticias');
        } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
            echo site_url('tratamento/noticias');
        }?>"><div class="obras-list grow">
        <img src="<?php echo base_url() ?>assets/uploads/grupo_sosoares/ic_ss_web-noticias.jpg"/>
        <p><?=lang('noticias')?></p>
    </div>
</a>
<a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
    echo site_url('caixilharia/candidaturas');
} else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
    echo site_url('vidro/candidaturas');
} else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
    echo site_url('extrusao/candidaturas');
} else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
    echo site_url('tratamento/candidaturas');
}?>"><div class="obras-list grow">
<img src="<?php echo base_url() ?>assets/uploads/grupo_sosoares/ic_ss_web-candidaturas.jpg"/>
<p><?=lang('candidaturas')?></p>
</div>
</a>
<?php } else { ?>
<div class="alert alert-info">
    <h5><strong><?=lang('atencao')?></strong><?=lang('sgrupo')?></br></br><?=lang('desculpa')?><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
        echo site_url('caixilharia/home');
    } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
        echo site_url('vidro/home');
    } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
        echo site_url('extrusao/home');
    } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
        echo site_url('tratamento/home');
    } ?>"><?=lang('voltar')?></a></h5>
</div>
<?php } ?>
</div>
</div>
</div><!-- /row -->
</div>