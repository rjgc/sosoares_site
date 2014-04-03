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
            <li class="menu-title <?php echo ( isset($current) && $current === 'home' ) ? 'curr' : ''?>"><a href="<?=site_url('vidro/home')?>"><?=lang('home')?></a></li>
            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'candidaturas' || $current === 'grupo_sosoares' || $current === 'areas_comerciais') ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('grupo')?></a>
                <ul class="dropdown-menu">
                    <li class="grid-demo">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('vidro/grupo_sosoares/3')?>"><?=lang('grupo')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('vidro/grupo_sosoares/13')?>"><?=lang('quem')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('vidro/grupo_sosoares/2')?>"><?=lang('missao')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('vidro/grupo_sosoares/4')?>"><?=lang('responsabilidade')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('vidro/grupo_sosoares/1')?>"><?=lang('mercados')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('vidro/areas_comerciais')?>"><?=lang('comerciais')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#"><?=lang('noticias')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('vidro/candidaturas')?>"><?=lang('candidaturas')?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="menu-title  <?php echo ( isset($current) && $current === 'produto' || $current === 'produtos') ? 'curr' : ''?>"><a href="<?=site_url('vidro/produtos')?>"><?=lang('produtos_vidro')?></a></li>
            <li class="menu-title <?php echo ( isset($current) && $current === 'servico' ) ? 'curr' : ''?>"><a href="<?=site_url('vidro/servico')?>"><?=lang('servicos')?></a></li>
            <li class="dropdown yamm-fw menu-title"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false">Área Técnica</a>
                <ul class="dropdown-menu">
                    <li class="grid-demo">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#">Catálogo Ferragens</a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#">Cálculo Térmico</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#">Cálculo Acústico</a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="#">Cálculo Dimensional</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'apoio_cliente' || $current === 'apoios_cliente') ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('apoio')?></a>
            <ul class="dropdown-menu">
                <li class="grid-demo">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                <h3 class="menu-h3 links"><a href="<?=site_url('vidro/apoio_cliente/8')?>"><?=lang('comercial')?></a></h3>
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="menu-h3 links"><a href="<?=site_url('vidro/apoio_cliente/9')?>"><?=lang('orcamentacao')?></a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="menu-h3 links"><a href="<?=site_url('vidro/apoio_cliente/5')?>"><?=lang('faqs')?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
            <li class="menu-title <?php echo ( isset($current) && $current === 'contactos' ) ? 'curr' : ''?>"><a href="<?=site_url('vidro/contactos')?>"><?=lang('contactos')?></a></li>
        </ul>
    </div>
</div>