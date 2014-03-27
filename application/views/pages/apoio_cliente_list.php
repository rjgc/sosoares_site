<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('pages/home_caixilharia')?>"><?=lang('home')?></a></li>
                <li><?=lang('apoio')?></li>
            </ul>
            <h1 class="title3"><?=lang('apoio')?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="obras-container">
            <?php if (!empty($pages)) {
                    for ($i=0; $i < count($pages); $i++) { 
                        foreach ($pages[$i] as $page){
                            ?>
                            <a href="<?=site_url('pages/apoio_cliente_caixilharia/'.$page['id_pagina'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/files/<?php echo $page['imagem'] ?>"/><p> <?php echo $page['titulo_'.$this->lang->lang()]?></p></div></a>
                            <?php
                        }
                    }
                }
                else {?>
                <div class="alert alert-info">
                    <h5><strong>Atenção!</strong> Páginas de apoio ao cliente indisponíveis.</br></br> Pedimos desculpa pelo incómodo. <a href="<?=site_url('pages/home_caixilharia')?>">Voltar atrás.</a></h5>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div><!-- /row -->
</div>