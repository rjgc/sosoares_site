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
            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'candidaturas_tratamento' || $current === 'quem_somos_tratamento' || $current === 'instaladores_tratamento') ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('grupo')?></a>
                <ul class="dropdown-menu">
                    <li class="grid-demo">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('pages/quem_somos_tratamento/13')?>"><?=lang('quem')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('pages/instaladores_tratamento')?>"><?=lang('install')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#"><?=lang('missao')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#"><?=lang('responsabilidade')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#"><?=lang('mercados')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#"><?=lang('comerciais')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#"><?=lang('noticias')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('pages/candidaturas_tratamento')?>"><?=lang('candidaturas')?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="menu-title"><a href="#">Lacagem</a></li>
            <li class="menu-title"><a href="#">Anodização</a></li>
            <li class="menu-title"><a href="#">Imitação Madeira</a></li>
            <li class="menu-title <?php echo ( isset($current) && $current === 'contactos_tratamento' ) ? 'curr' : ''?>"><a href="<?=site_url('pages/contactos_tratamento')?>"><?=lang('contactos')?></a></li>
        </ul>
    </div>
</div>