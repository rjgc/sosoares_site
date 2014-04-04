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
                <div class="produtos_vidro_list">
                    <?php
                    if (!empty($produtos)) {
                        foreach($categorias as $categoria) {
                            ?>
                            <div class="vidro-list grow">
                                <h4> <?php echo $categoria['nome_'.$this->lang->lang()] ?></h4>
                                <img src="<?php echo base_url() ?>assets/uploads/produtos/<?php echo $categoria['foto'] ?>"/>
                                <ul>


                                    <?php
                                    foreach ($produtos as $produto) {
                                        if($categoria['id_tipo_produto_vidro'] == $produto['id_tipo_produto_vidro']) {
                                            ?>
                                            <a href="<?=site_url('vidro/produto/'.$produto['id_produto_vidro']) ?>">
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
                            <h5><strong>Atenção!</strong> Página dos produtos indisponível.</br></br> Pedimos desculpa pelo incómodo. <a href="<?php echo base_url();?>index.php/vidro/home">Voltar atrás.</a></h5>
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