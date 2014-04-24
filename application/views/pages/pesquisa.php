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
                <li><?=lang('pesquisar')?></li>
            </ul>            
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="title3"><?=lang('cprodutos')?></h1>
                <div class="obras-container produtos-container">
                    <?php
                    if (!empty($tipos)) {
                        foreach ($tipos as $tipo){
                            ?>
                            <a href="<?=site_url('caixilharia/produtos/'.$tipo['id_tipo_produto_aluminio'])?>">
                                <div class="obras-list grow">
                                    <?php if(!empty($tipo['foto'])) {
                                        ?>
                                        <img src="<?php echo base_url() ?>assets/uploads/produtos/list/<?php echo $tipo['foto'] ?>"/>
                                        <?php
                                    } else {
                                        ?>
                                        <img src="<?php echo base_url() ?>assets/uploads/produtos/3a0ca-3d---os-triple.png?>"/>
                                        <?php
                                    }
                                    ?>
                                    <p> <?php echo $tipo['nome_'.$this->lang->lang()] ?></p>
                                </div>
                            </a>
                            <?php }
                        } 
                        if (!empty($produtos)) {
                            foreach ($produtos as $produto){
                                ?>
                                <a href="<?=site_url('caixilharia/produto/'.$produto['id_produto_aluminio'])?>">
                                    <div class="obras-list grow">
                                        <?php if(!empty($produto['foto'])) {
                                            ?>
                                            <img src="<?php echo base_url() ?>assets/uploads/produtos/list/<?php echo $produto['foto'] ?>"/>
                                            <?php
                                        } else {
                                            ?>
                                            <img src="<?php echo base_url() ?>assets/uploads/produtos/3a0ca-3d---os-triple.png?>"/>
                                            <?php
                                        }
                                        ?>
                                        <p> <?php echo $produto['nome_'.$this->lang->lang()] ?></p>
                                    </div>
                                </a>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>