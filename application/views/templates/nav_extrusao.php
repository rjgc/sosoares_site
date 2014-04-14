<div class="navbar navbar-default yamm">
    <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div id="navbar-collapse-grid" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="menu-title <?php echo ( isset($current) && $current === 'home' ) ? 'curr' : ''?>"><a href="<?=site_url('extrusao/home')?>"><?=lang('home')?></a></li>
            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'grupo_sosoares' || $current === 'grupos_sosoares') ? 'curr' : ''?>"><a href="<?=site_url('extrusao/grupos_sosoares') ?>" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('grupo')?></a>
                <ul class="dropdown-menu">
                    <li class="grid-demo">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/grupo_sosoares/3')?>"><?=lang('grupo')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/grupo_sosoares/5')?>"><?=lang('quem')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/grupo_sosoares/2')?>"><?=lang('missao')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/grupo_sosoares/4')?>"><?=lang('responsabilidade')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/grupo_sosoares/1')?>"><?=lang('mercados')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/areas_comerciais')?>"><?=lang('comerciais')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/noticias')?>"><?=lang('noticias')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/candidaturas')?>"><?=lang('candidaturas')?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'produto') ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('eprodutos')?></a>
                <ul class="dropdown-menu">
                    <li class="grid-demo">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#"><?=lang('pextrusao')?></a></h3>
                                        <ul>
                                            <li><b class="li-b"><?=lang('batente')?></b>
                                                <ul>
                                                    <?php foreach ($caixilharia_batente as $batente){
                                                        ?>
                                                        <li><a href="<?=site_url('extrusao/produto/'.$batente['id_produto_extrusao'])?>"><?php echo $batente['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                            <li><b class="li-b"><?=lang('correr')?></b>
                                                <ul>
                                                    <?php foreach ($caixilharia_correr as $correr){
                                                        ?>
                                                        <li><a href="<?=site_url('extrusao/produto/'.$correr['id_produto_extrusao'])?>"><?php echo $correr['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                            <li><b class="li-b"><?=lang('portadas')?></b>
                                                <ul>
                                                    <?php foreach ($caixilharia_portadas as $portada){
                                                        ?>
                                                        <li><a href="<?=site_url('extrusao/produto/'.$portada['id_produto_extrusao'])?>"><?php echo $portada['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#"><?=lang('standards')?></a></h3>
                                        <ul>
                                            <?php foreach ($standards as $standard){
                                                ?>
                                                <li><a href="<?=site_url('extrusao/produto/'.$standard['id_produto_extrusao'])?>"><?php echo $standard['nome_'.$this->lang->lang()] ?></a></li>
                                                <?php
                                            }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#"><?=lang('estores')?></a></h3>
                                        <ul>
                                            <?php foreach ($estores as $estor){
                                                ?>
                                                <li><a href="<?=site_url('extrusao/produto/'.$estor['id_produto_extrusao'])?>"><?php echo $estor['nome_'.$this->lang->lang()] ?></a></li>
                                                <?php
                                            }?>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#"><?=lang('diversos')?></a></h3>
                                        <ul>
                                            <li><b class="li-b"><?=lang('divisorias')?></b>
                                                <ul>
                                                    <?php foreach ($diversos_divisorias as $divisorias){
                                                        ?>
                                                        <li><a href="<?=site_url('extrusao/produto/'.$divisorias['id_produto_extrusao'])?>"><?php echo $divisorias['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                            <li><b class="li-b"><?=lang('gradeamentos')?></b>
                                                <ul>
                                                    <?php foreach ($diversos_gradeamentos as $gradeamentos){
                                                        ?>
                                                        <li><a href="<?=site_url('extrusao/produto/'.$gradeamentos['id_produto_extrusao'])?>"><?php echo $gradeamentos['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                            <li><b class="li-b"><?=lang('mosquiteiras')?></b>
                                               <ul>
                                                <?php foreach ($diversos_mosquiteiras as $mosquiteiras){
                                                    ?>
                                                    <li><a href="<?=site_url('extrusao/produto/'.$mosquiteiras['id_produto_extrusao'])?>"><?php echo $mosquiteiras['nome_'.$this->lang->lang()] ?></a></li>
                                                    <?php
                                                }?>
                                            </ul>
                                        </li>
                                        <li><b class="li-b"><?=lang('laminas')?></b>
                                            <ul>
                                                <?php foreach ($diversos_laminas as $laminas){
                                                    ?>
                                                    <li><a href="<?=site_url('extrusao/produto/'.$laminas['id_produto_extrusao'])?>"><?php echo $laminas['nome_'.$this->lang->lang()] ?></a></li>
                                                    <?php
                                                }?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="menu-title <?php echo ( isset($current) && $current === 'servico' ) ? 'curr' : ''?>"><a href="<?=site_url('extrusao/servico')?>"><?=lang('servicos')?></a></li>
        <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'apoio_cliente' || $current === 'apoios_cliente') ? 'curr' : ''?>"><a href="<?=site_url('extrusao/apoios_cliente')?>" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('apoio')?></a>
            <ul class="dropdown-menu">
                <li class="grid-demo">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/apoio_cliente/1')?>"><?=lang('comercial')?></a></h3>
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/apoio_cliente/2')?>"><?=lang('orcamentacao')?></a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/apoio_cliente/8')?>"><?=lang('efaqs')?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="menu-title <?php echo ( isset($current) && $current === 'contactos' ) ? 'curr' : ''?>"><a href="<?=site_url('extrusao/contactos')?>"><?=lang('contactos')?></a></li>
    </ul>
</div>
</div>