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
                <div class="produtos_vidro_list">
    <?php
                    if (!empty($produtos)) {
                        foreach($categorias as $categoria) {
    ?>
                            <div class="vidro-list grow">
                                <h4> <?php echo $categoria['nome_categoria_pt'] ?></h4>
                                <img src="<?php echo base_url() ?>assets/uploads/produtos/<?php echo $categoria['foto_1'] ?>"/>
                                <ul>


    <?php
                                foreach ($produtos as $produto) {
                                    if($categoria['id_produtos_vidro_cat'] == $produto['id_categoria']) {
    ?>
                                        <a href="<?=site_url('pages/produtos_vidro/') ?>">
                                            <li><?php echo $produto['nome_'.$this->lang->lang()] ?></li>
                                        </a>
    <?php
                                    }
                                }
    ?>
                                </ul>
                            </div>
    <?php
                        }
                    } else {
    ?>
                        <div class="alert alert-info">
                            <h5><strong>Atenção!</strong> Páginas dos produtos indisponíveis.</br>
                                </br> Pedimos desculpa pelo incómodo. <a href="<?php echo base_url();?>index.php/pages/home_vidro">Voltar atrás.</a></h5>
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