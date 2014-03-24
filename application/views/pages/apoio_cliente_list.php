<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url();?>index.php/pages/home_caixilharia">Início</a></li>
                <li>Apoio ao Cliente</li>
            </ul>
            <h1 class="title3">Apoio ao Cliente</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="">
            <?php if (!empty($pages)) {
                    for ($i=0; $i < count($pages); $i++) { 
                        foreach ($pages[$i] as $page){
                            ?>
                            <a href="<?=base_url('index.php/pages/apoio_cliente/'.$page['id_pagina'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/files/<?php echo $page['imagem'] ?>"/><p> <?php echo $page['titulo_pt'] ?></p></div></a> 
                            <?php
                        }
                    }
                }
                else {?>
                <div class="alert alert-info">
                    <h5><strong>Atenção!</strong> Páginas de apoio ao cliente indisponíveis.</br></br> Pedimos desculpa pelo incómodo. <a href="<?php echo base_url();?>index.php/pages/home_caixilharia">Voltar atrás.</a></h5>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div><!-- /row -->
</div>