<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('pages/home_vidro')?>"><?=lang('home')?></a></li>
                <li><?=lang('produtos_vidro')?></li>
            </ul>
            <h1 class="title3"><?=lang('produtos_vidro')?></h1>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="obras-container">
                    <?php
                    if (!empty($produtos)) {
                        foreach ($produtos as $produto){
                            ?>
                            <a href="<?=site_url('pages/produtos_vidro/') ?>">
                                <div class="obras-list grow">
                                    <h4> <?php echo $produto['categoria_'.$this->lang->lang()] ?></h4>
                                    <img src="<?php echo base_url() ?>assets/uploads/produtos/3a0ca-3d---os-triple.png?>"/>
                                    <p> <?php echo $produto['nome_'.$this->lang->lang()] ?></p>
                                </div>
                            </a>
                        <?php }
                    }
                    else {?>
                        <div class="alert alert-info">
                            <h5><strong>Atenção!</strong> Páginas dos produtos indisponíveis.</br></br> Pedimos desculpa pelo incómodo. <a href="<?php echo base_url();?>index.php/pages/home_caixilharia">Voltar atrás.</a></h5>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
</div>