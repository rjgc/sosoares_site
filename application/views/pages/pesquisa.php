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
        <?php if (!empty($tipos_aluminio) || !empty($produtos_aluminio)) { ?>
        <div class="row">
            <div class="col-md-12">
                <h1 class="title3"><?=lang('cprodutos')?></h1>
                <div class="obras-container produtos-container">
                    <?php
                    if (!empty($tipos_aluminio)) {
                        foreach ($tipos_aluminio as $tipo){
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
                        if (!empty($produtos_aluminio)) {
                            foreach ($produtos_aluminio as $produto){
                                ?>
                                <a href="<?=site_url('caixilharia/produto/'.$produto['id_produto_aluminio'])?>">
                                    <div class="obras-list grow">
                                        <?php if(!empty($produto['foto_1'])) {
                                            ?>
                                            <img src="<?php echo base_url() ?>assets/uploads/produtos/list/<?php echo $produto['foto_1'] ?>"/>
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
                    <?php } ?>
                </div>
                <?php if (!empty($tipos_vidro) || !empty($produtos_vidro)) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title3"><?=lang('vprodutos')?></h1>
                        <div class="obras-container produtos-container">
                            <?php
                            if (!empty($tipos_vidro)) {
                                foreach ($tipos_vidro as $tipo){
                                    ?>
                                    <a href="<?=site_url('vidro/produtos/'.$tipo['id_tipo_produto_vidro'])?>">
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
                                if (!empty($produtos_vidro)) {
                                    foreach ($produtos_vidro as $produto){
                                        ?>
                                        <a href="<?=site_url('vidro/produto/'.$produto['id_produto_vidro'])?>">
                                            <div class="obras-list grow">
                                                <?php if(!empty($produto['foto_1'])) {
                                                    ?>
                                                    <img src="<?php echo base_url() ?>assets/uploads/produtos/list/<?php echo $produto['foto_1'] ?>"/>
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
                            <?php } ?>
                        </div>
                        <?php if (!empty($tipos_extrusao) || !empty($produtos_extrusao)) { ?>
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="title3"><?=lang('eprodutos')?></h1>
                                <div class="obras-container produtos-container">
                                    <?php
                                    if (!empty($tipos_extrusao)) {
                                        foreach ($tipos_extrusao as $tipo){
                                            ?>
                                            <a href="<?=site_url('extrusao/produtos/'.$tipo['id_tipo_produto_extrusao'])?>">
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
                                        if (!empty($produtos_extrusao)) {
                                            foreach ($produtos_extrusao as $produto){
                                                ?>
                                                <a href="<?=site_url('extrusao/produto/'.$produto['id_produto_extrusao'])?>">
                                                    <div class="obras-list grow">
                                                        <?php if(!empty($produto['foto_1'])) {
                                                            ?>
                                                            <img src="<?php echo base_url() ?>assets/uploads/produtos/list/<?php echo $produto['foto_1'] ?>"/>
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
                                    <?php } ?>
                                </div>
                                <?php if (!empty($obras)) { ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="title3"><?=lang('portfolio')?></h1>
                                        <div class="obras-container produtos-container">
                                            <?php                                        
                                            foreach ($obras as $obra){
                                                ?>
                                                <a href="<?=site_url('caixilharia/obras/'.$obra['id_obra'])?>">
                                                    <div class="obras-list grow">
                                                        <?php if(!empty($obra['foto'])) {
                                                            ?>
                                                            <img src="<?php echo base_url() ?>assets/uploads/obras/list/<?php echo $obra['foto'] ?>"/>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <img src="<?php echo base_url() ?>assets/uploads/obras/3a0ca-3d---os-triple.png?>"/>
                                                            <?php
                                                        }
                                                        ?>
                                                        <p> <?php echo $obra['nome_'.$this->lang->lang()] ?></p>
                                                    </div>
                                                </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>