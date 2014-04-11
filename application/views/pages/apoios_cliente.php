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
                } ?>"><?=lang('home')?></a></li>
                <li><?=lang('apoio')?></li>
            </ul>
            <h1 class="title3"><?=lang('apoio')?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="obras-container">
                <?php if (!empty($pages)) {
                    if (count($pages) == 3) {
                        $i = 0;
                    }
                    else {
                        $i = 1;
                    }
                    for ($i; $i < count($pages); $i++) {
                        foreach ($pages[$i] as $page) {
                            ?>
                            <a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                                echo site_url('caixilharia/apoio_cliente/'.$page['id_pagina']);
                            } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                                echo site_url('vidro/apoio_cliente/'.$page['id_pagina']);
                            } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                                echo site_url('extrusao/apoio_cliente/'.$page['id_pagina']);
                            } ?><?=site_url('pages/apoio_cliente_caixilharia/'.$page['id_pagina'])?>">

                                <div class="obras-list grow">
                            <?php   if(empty($page['imagem'])) { ?>
                                    <img src="<?php echo base_url() ?>assets/uploads/apoio_cliente/apoio_cliente.jpg"/>
                            <?php   } else { ?>
                                    <img src="<?php echo base_url() ?>assets/uploads/apoio_cliente/<?php echo $page['imagem'] ?>"/>
                            <?php   } ?>
                                    <p> <?php echo $page['titulo_'.$this->lang->lang()]?></p>
                                </div>

                            </a>
                            <?php
                        }
                    }
                }
                else {?>
                <div class="alert alert-info">
                    <h5><strong>Atenção!</strong> Páginas de apoio ao cliente indisponíveis.</br></br> Pedimos desculpa pelo incómodo. <a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                        echo site_url('caixilharia/home');
                    } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                        echo site_url('vidro/home');
                    } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                        echo site_url('extrusao/home');
                    } ?>">Voltar atrás.</a></h5>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div><!-- /row -->
</div>