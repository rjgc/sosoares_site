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
            <li class="menu-title <?php /*echo ( isset($current) && $current === 'home_caixilharia' ) ? 'curr' : ''*/?>"><a href="<?=site_url('pages/home_caixilharia')?>"><?=lang('home')?></a></li>
            <li class="dropdown yamm-fw menu-title"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('grupo')?></a></li>
            <li class="dropdown yamm-fw menu-title"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false">Produtos Extrusão</a>
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
                                                    <li><a href="#">Série AT</a></li>
                                                    <li><a href="#">Série SB</a></li>
                                                    <li><a href="#">Série BF</a></li>
                                                </ul>
                                            </li>
                                            <li><b class="li-b">Correr</b>
                                                <ul>
                                                    <li><a href="#">Série TL</a></li>
                                                    <li><a href="#">Série JC</a></li>
                                                    <li><a href="#">Série CC</a></li>
                                                </ul>
                                            </li>
                                            <li><b class="li-b">Portadas</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#">Standards</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#">Estores</a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#">Diversos</a></h3>
                                        <ul>
                                            <li><b class="li-b">Divisórias</b></li>
                                            <li><b class="li-b">Gradeamento</b></li>
                                            <li><b class="li-b">Mosquiteiras</b></li>
                                            <li><b class="li-b">Lâminas</b></li>
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
            <li class="menu-title"><a href="#"><?=lang('contactos')?></a></li>
        </ul>
    </div>
</div>