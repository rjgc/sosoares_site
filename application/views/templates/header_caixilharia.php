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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/accordion_faqs.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logotipo grow">
                    <a href="<?php echo base_url() ?>"><h1>Grupo Sosoares</h1></a>
                </div>
                <div class="pages-img">
                    <a href="<?=site_url('pages/home_caixilharia')?>"><i class="icon-caixilharia grow font font-active"></i></a>
                    <a href="<?=site_url('pages/home_vidro')?>"><i class="icon-vidro grow font"></i></a>
                    <a href="<?=site_url('pages/home_extrusao')?>"><i class="icon-extrusao grow font"></i></a>
                    <a href="<?=site_url('pages/home_tratamento')?>"><i class="icon-tratamento grow font"></i></a>
                </div>
                <div class="form">
                    <form>
                        <input type="search" class="form-control" id="search" name="search" placeholder="<?=lang('pesquisar')?>" />
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
                    <li class="menu-title <?php echo ( isset($current) && $current === 'home_caixilharia' ) ? 'curr' : ''?>"><a href="<?=site_url('pages/home_caixilharia')?>"><?=lang('home')?></a></li>
                    <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'candidaturas') ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('grupo')?></a>
                    <ul class="dropdown-menu">
                            <li class="grid-demo">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3 links"><a href="<?=site_url('pages/quem_somos')?>"><?=lang('quem')?></a></h3>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3 links"><a href="#"><?=lang('onde')?></a></h3>
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
                                                <h3 class="menu-h3 links"><a href="<?=site_url('pages/candidaturas')?>"><?=lang('candidaturas')?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'produto_caixilharia' || $current === 'produtos_list') ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('produtos')?></a>
                        <ul class="dropdown-menu">
                            <li class="grid-demo">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3"><?=lang('batente')?></h3>
                                                <ul>
                                                    <li><b class="li-b"><?=lang('com_corte')?></b>
                                                        <ul>
                                                            <?php foreach ($batentes_com_corte as $batente){
                                                                ?>
                                                                <li><a href="<?=site_url('pages/produto_caixilharia/'.$batente['id_produto_aluminio'])?>"><?php echo $batente['nome_'.$this->lang->lang()] ?></a></li>
                                                                <?php
                                                            }?>
                                                        </ul>
                                                    </li>
                                                    <li><b class="li-b"><?=lang('sem_corte')?></b>
                                                        <ul>
                                                            <?php foreach ($batentes_sem_corte as $batente){
                                                                ?>
                                                                <li><a href="<?=site_url('/pages/produto_caixilharia/'.$batente['id_produto_aluminio'])?>"><?php echo $batente['nome_'.$this->lang->lang()] ?></a></li>
                                                                <?php
                                                            }?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3"><?=lang('madeira')?></h3>
                                                <ul>
                                                    <?php foreach ($aluminios_madeira as $madeira){
                                                        ?>
                                                        <li><a href="<?=site_url('pages/produto_caixilharia/'.$madeira['id_produto_aluminio'])?>"><?php echo $madeira['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3"><?=lang('correr')?></h3>
                                                <ul>
                                                    <li><b class="li-b"><?=lang('com_corte')?></b>
                                                        <ul>
                                                            <?php foreach ($correres_com_corte as $correr){
                                                                ?>
                                                                <li><a href="<?=site_url('pages/produto_caixilharia/'.$correr['id_produto_aluminio'])?>"><?php echo $correr['nome_'.$this->lang->lang()] ?></a></li>
                                                                <?php
                                                            }?>
                                                        </ul>
                                                    </li>
                                                    <li><b class="li-b"><?=lang('sem_corte')?></b>
                                                        <ul>
                                                            <?php foreach ($correres_sem_corte as $correr){
                                                                ?>
                                                                <li><a href="<?=site_url('pages/produto_caixilharia/'.$correr['id_produto_aluminio'])?>"><?php echo $correr['nome_'.$this->lang->lang()] ?></a></li>
                                                                <?php
                                                            }?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3"><?=lang('gradeamentos')?></h3>
                                                <ul>
                                                    <?php foreach ($gradeamentos as $gradeamento){
                                                        ?>
                                                        <li><a href="<?=site_url('pages/produto_caixilharia/'.$gradeamento['id_produto_aluminio'])?>"><?php echo $gradeamento['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3"><?=lang('fachadas')?></h3>
                                                <ul>
                                                    <?php foreach ($fachadas as $fachada){
                                                        ?>
                                                        <li><a href="<?=site_url('pages/produto_caixilharia/'.$fachada['id_produto_aluminio'])?>"><?php echo $fachada['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3"><?=lang('portadas')?></h3>
                                                <ul>
                                                    <?php foreach ($portadas as $portada){
                                                        ?>
                                                        <li><a href="<?=site_url('pages/produto_caixilharia/'.$portada['id_produto_aluminio'])?>"><?php echo $portada['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3"><?=lang('portoes')?></h3>
                                                <ul>
                                                    <?php foreach ($portoes as $portao){
                                                        ?>
                                                        <li><a href="<?=site_url('pages/produto_caixilharia/'.$portao['id_produto_aluminio'])?>"><?php echo $portao['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3"><?=lang('standards')?></h3>
                                                <ul>
                                                    <?php foreach ($standards as $standard){
                                                        ?>
                                                        <li><a href="<?=site_url('pages/produto_caixilharia/'.$standard['id_produto_aluminio'])?>"><?php echo $standard['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title <?php echo ( isset($current) && $current === 'portfolio_caixilharia' ) ? 'curr' : ''?>"><a href="<?=site_url('pages/portfolio_caixilharia')?>"><?=lang('portfolio')?></a></li>
                    <li class="menu-title <?php echo ( isset($current) && $current === 'servico_caixilharia' ) ? 'curr' : ''?>"><a href="#"><?=lang('servicos')?></a></li>
                    <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'marcacao_caixilharia' ) ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('marcacao')?></a>
                        <ul class="dropdown-menu">
                            <li class="grid-demo">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Etiquetas</h3>
                                                <ul>
                                                    <li><b class="li-b">Something</b>
                                                        <ul>
                                                            <li><a href="#">Something</a></li>
                                                            <li><a href="#">Something</a></li>
                                                            <li><a href="#">Something</a></li>
                                                            <li><a href="#">Something</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Declarações</h3>
                                                <ul>
                                                    <li><b class="li-b">Something</b>
                                                        <ul>
                                                            <li><a href="#">Something</a></li>
                                                            <li><a href="#">Something</a></li>
                                                            <li><a href="#">Something</a></li>
                                                            <li><a href="#">Something</a></li>
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
                    <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'apoio_cliente' || $current === 'apoio_cliente_list') ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('apoio')?></a>
                        <ul class="dropdown-menu">
                            <li class="grid-demo">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3 links"><a href="<?=site_url('pages/apoio_cliente/8')?>"><?=lang('comercial')?></a></h3>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3 links"><a href="<?=site_url('pages/apoio_cliente/9')?>"><?=lang('orcamentacao')?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3 links"><a href="<?=site_url('pages/apoio_cliente/12')?>"><?=lang('tecnico')?></a></h3>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3 links"><a href="<?=site_url('pages/apoio_cliente/11')?>"><?=lang('estudo')?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3 links"><a href="<?=site_url('pages/apoio_cliente/10')?>"><?=lang('software')?></a></h3>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3 links"><a href="<?=site_url('pages/apoio_cliente/7')?>"><?=lang('faqs')?></a></h3>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title <?php echo ( isset($current) && $current === 'contactos_caixilharia' ) ? 'curr' : ''?>"><a href="<?=site_url('pages/contactos_caixilharia')?>"><?=lang('contactos')?></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
