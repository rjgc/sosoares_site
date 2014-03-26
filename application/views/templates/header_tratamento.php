<!doctype html>
<html>
<head>
    <title>GRUPO SOSOARES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/yamm.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/demo.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/hover.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/styles_fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/generic-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/styles-tratamento.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logotipo grow">
                    <a href="<?php echo base_url() ?>"><h1>Grupo Sosoares</h1></a>
                </div>
                <div class="pages-img">
                    <a href="<?php echo site_url('pages/home_caixilharia')?>"><i class="icon-caixilharia grow font"></i></a>
                    <a href="<?php echo site_url('pages/home_vidro')?>"><i class="icon-vidro grow font"></i></a>
                    <a href="<?php echo site_url('pages/home_extrusao')?>"><i class="icon-extrusao grow font"></i></a>
                    <a href="<?php echo site_url('pages/home_tratamento')?>"><i class="icon-tratamento grow font font-active"></i></a>
                </div>
                <div class="form">
                    <form>
                        <input type="search" class="form-control" id="search" name="search" placeholder="Pesquisar" />
                        <button id="searchButton" class="btn btn-default"><i class="icon-search"></i></button>
                    </form>
                </div>
                <div id="bd">
                    <a href="<?=site_url($this->lang->switch_uri('pt')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_pt.png" width="22" height="15" alt="Portugal" title="Portugal" class="grow"></a>
                    <a href="<?=site_url($this->lang->switch_uri('en')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_uk.png" width="22" height="15" alt="United Kingdom" title="United Kingdom" class="grow"></a>
                    <a href="<?=site_url($this->lang->switch_uri('fr')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_fr.png" width="22" height="15" alt="France" title="France" class="grow"></a>
                    <a href="<?=site_url($this->lang->switch_uri('es')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_sp.png" width="22" height="15" alt="Espanhol" title="Espanhol" class="grow"></a>
                </div>
                <div id="signIn">
                    <a href="#"><button class="btn button shrink">Sign In</button></a>
                </div>
            </div>
        </div>
    </header>
    <nav>
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
                    <li class="menu-title"><a href="#">Lacagem</a></li>
                    <li class="menu-title"><a href="#">Anodização</a></li>
                    <li class="menu-title"><a href="#">Imitação Madeira</a></li>
                    <li class="menu-title"><a href="#"><?=lang('contactos')?></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section>