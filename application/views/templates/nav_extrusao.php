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
            <li class="menu-title <?php /*echo ( isset($current) && $current === 'home_caixilharia' ) ? 'curr' : ''*/?>"><a href="<?=site_url('pages/home_extrusao')?>"><?=lang('home')?></a></li>
            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'candidaturas_extrusao' || $current === 'grupo_sosoares_extrusao' || $current === 'instaladores_extrusao') ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('grupo')?></a>
                <ul class="dropdown-menu">
                    <li class="grid-demo">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('pages/grupo_sosoares_extrusao/3')?>"><?=lang('grupo')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('pages/grupo_sosoares_extrusao/13')?>"><?=lang('quem')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('pages/grupo_sosoares_extrusao/2')?>"><?=lang('missao')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('pages/grupo_sosoares_extrusao/4')?>"><?=lang('responsabilidade')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('pages/grupo_sosoares_extrusao/1')?>"><?=lang('mercados')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('pages/instaladores_extrusao')?>"><?=lang('comerciais')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#"><?=lang('noticias')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('pages/candidaturas_extrusao')?>"><?=lang('candidaturas')?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'produto_extrusao') ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false">Produtos Extrusão</a>
                <ul class="dropdown-menu">
                    <li class="grid-demo">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#">Caixilharia</a></h3>
                                        <ul>
                                            <li><b class="li-b">Batente</b>
                                                <ul>
                                                    <?php foreach ($caixilharia_batente as $batente){
                                                        ?>
                                                        <li><a href="<?=site_url('pages/produto_extrusao/'.$batente['id_produto_extrusao'])?>"><?php echo $batente['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                            <li><b class="li-b">Correr</b>
                                                <ul>
                                                    <?php foreach ($caixilharia_correr as $correr){
                                                        ?>
                                                        <li><a href="<?=site_url('pages/produto_extrusao/'.$correr['id_produto_extrusao'])?>"><?php echo $correr['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                            <li><b class="li-b">Portadas</b>
                                                <ul>
                                                    <?php foreach ($caixilharia_portadas as $portada){
                                                        ?>
                                                        <li><a href="<?=site_url('pages/produto_extrusao/'.$portada['id_produto_extrusao'])?>"><?php echo $portada['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#">Standards</a></h3>
                                        <ul>
                                            <?php foreach ($standards_extrusao as $standard){
                                                ?>
                                                <li><a href="<?=site_url('pages/produto_extrusao/'.$standard['id_produto_extrusao'])?>"><?php echo $standard['nome_'.$this->lang->lang()] ?></a></li>
                                                <?php
                                            }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#">Estores</a></h3>
                                        <ul>
                                            <?php foreach ($estores as $estor){
                                                ?>
                                                <li><a href="<?=site_url('pages/produto_extrusao/'.$estor['id_produto_extrusao'])?>"><?php echo $estor['nome_'.$this->lang->lang()] ?></a></li>
                                                <?php
                                            }?>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#">Diversos</a></h3>
                                        <ul>
                                            <li><b class="li-b">Divisórias</b>
                                                <ul>
                                                    <?php foreach ($diversos_divisorias as $divisorias){
                                                        ?>
                                                        <li><a href="<?=site_url('pages/produto_extrusao/'.$divisorias['id_produto_extrusao'])?>"><?php echo $divisorias['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                            <li><b class="li-b">Gradeamento</b>
                                                <ul>
                                                    <?php foreach ($diversos_gradeamentos as $gradeamentos){
                                                        ?>
                                                        <li><a href="<?=site_url('pages/produto_extrusao/'.$gradeamentos['id_produto_extrusao'])?>"><?php echo $gradeamentos['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                            <li><b class="li-b">Mosquiteiras</b>
                                             <ul>
                                                <?php foreach ($diversos_mosquiteiras as $mosquiteiras){
                                                    ?>
                                                    <li><a href="<?=site_url('pages/produto_extrusao/'.$mosquiteiras['id_produto_extrusao'])?>"><?php echo $mosquiteiras['nome_'.$this->lang->lang()] ?></a></li>
                                                    <?php
                                                }?>
                                            </ul>
                                        </li>
                                        <li><b class="li-b">Lâminas</b>
                                            <ul>
                                                <?php foreach ($diversos_laminas as $laminas){
                                                    ?>
                                                    <li><a href="<?=site_url('pages/produto_extrusao/'.$laminas['id_produto_extrusao'])?>"><?php echo $laminas['nome_'.$this->lang->lang()] ?></a></li>
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
        <li class="dropdown yamm-fw menu-title"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false">Serviços Extrusão</a>
            <ul class="dropdown-menu">
                <li class="grid-demo">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="menu-h3 links"><a href="#">Fabrico de Matrizes Personalizadas</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="dropdown yamm-fw menu-title"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('apoio')?></a>
            <ul class="dropdown-menu">
                <li class="grid-demo">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="menu-h3 links"><a href="#"><?=lang('comercial')?></a></h3>
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="menu-h3 links"><a href="#"><?=lang('orcamentacao')?></a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="menu-h3 links"><a href="#"><?=lang('faqs')?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="menu-title <?php echo ( isset($current) && $current === 'contactos_extrusao' ) ? 'curr' : ''?>"><a href="<?=site_url('pages/contactos_extrusao')?>"><?=lang('contactos')?></a></li>
    </ul>
</div>
</div>