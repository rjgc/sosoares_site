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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/styles-caixilharia.css">
</head>
<body>
    <header>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/logotipo.png" width="210" height="47" class="grow" /></a>
                    </div>
                    <div class="col-md-5">
                        <span id="img">
                            <a href="<?php echo site_url('pages/home_caixilharia')?>">
                                <i class="icon-caixilharia grow font font-active"></i>
                            </a>
                            <a href="<?php echo site_url('pages/home_vidro')?>">
                                <i class="icon-vidro grow font"></i>
                            </a>
                            <a href="<?php echo site_url('pages/home_extrusao')?>">
                                <i class="icon-extrusao grow font"></i>
                            </a>
                            <a href="<?php echo site_url('pages/home_tratamento')?>">
                                <i class="icon-tratamento grow font"></i>
                            </a>
                            <!--
                            <a href="<?php /*echo site_url('pages/home_caixilharia')*/?>"><img src="<?php /*echo base_url() */?>assets/sosoares/img/p_caixilharia_a.png" width="49" height="49" alt="Caixilharia" title="Caixilharia" class="grow"></a>
                            <a href="<?php /*echo site_url('pages/home_vidro')*/?>"><img src="<?php /*echo base_url() */?>assets/sosoares/img/p_vidro.png" width="49" height="49" alt="Vidro" title="Vidro" class="grow"></a>
                            <a href="<?php /*echo site_url('pages/home_extrusao')*/?>"><img src="<?php /*echo base_url() */?>assets/sosoares/img/p_extrusao.png" width="49" height="49" alt="Extrusão" title="Extrusão" class="grow"></a>
                            <a href="<?php /*echo site_url('pages/home_tratamento')*/?>"><img src="<?php /*echo base_url() */?>assets/sosoares/img/p_abrasivos.png" width="49" height="49" alt="Abrasivos" title="Abrasivos" class="grow"></a>-->
                        </span>
                    </div>
                    <div class="col-md-2">
                        <input type="text" id="search" name="search" placeholder="Pesquisar">
                    </div>
                    <div class="col-md-2">
                        <div id="bd">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/bd_pt.png" width="22" height="15" alt="Portugal" title="Portugal" class="grow">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/bd_uk.png" width="22" height="15" alt="United Kingdom" title="United Kingdom" class="grow">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/bd_fr.png" width="22" height="15" alt="France" title="France" class="grow">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/bd_sp.png" width="22" height="15" alt="Spain" title="Spain" class="grow">
                        </div>
                        <div>
                            <a href="#">
                                <button class="btn button shrink">Sign In</button>
                            </a>
                        </div>
                    </div>
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
                    <li class="menu-title <?php echo ( isset($current) && $current === 'home_caixilharia' ) ? 'curr' : ''?>"><a href="<?php echo site_url('pages/home_caixilharia')?>">Início</a></li>
                    <li class="menu-title <?php echo ( isset($current) && $current === 'grupo_caixilharia' ) ? 'curr' : ''?>"><a href="#">Grupo Sosoares</a></li>
                    <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'produto_caixilharia' ) ? 'curr' : ''?>"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Produtos Alumínio</a>
                        <ul class="dropdown-menu">
                            <li class="grid-demo">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Batente</h3>
                                                <ul>
                                                    <li><b class="li-b">Com Rutura Térmica</b>
                                                        <ul>                                                                
                                                            <?php foreach ($batentes_com_corte as $batente){
                                                                ?>
                                                                <li><a href="<?=base_url('index.php/pages/produto_caixilharia/'.$batente['id_produto_aluminio'])?>"><?php echo $batente['nome'] ?></a></li>
                                                                <?php
                                                            }?>
                                                        </ul>
                                                    </li>
                                                    <li><b class="li-b">Sem Rutura Térmica</b>
                                                        <ul>
                                                            <?php foreach ($batentes_sem_corte as $batente){
                                                                ?>
                                                                <li><a href="<?=base_url('index.php/pages/produto_caixilharia/'.$batente['id_produto_aluminio'])?>"><?php echo $batente['nome'] ?></a></li>
                                                                <?php
                                                            }?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Alumínio Madeira</h3>
                                                <ul>
                                                    <?php foreach ($aluminios_madeira as $madeira){
                                                        ?>
                                                        <li><a href="<?=base_url('index.php/pages/produto_caixilharia/'.$madeira['id_produto_aluminio'])?>"><?php echo $madeira['nome'] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Correr</h3>
                                                <ul>
                                                    <li><b class="li-b">Com Rutura Térmica</b>
                                                        <ul>
                                                            <?php foreach ($correres_com_corte as $correr){
                                                                ?>
                                                                <li><a href="<?=base_url('index.php/pages/produto_caixilharia/'.$correr['id_produto_aluminio'])?>"><?php echo $correr['nome'] ?></a></li>
                                                                <?php
                                                            }?>
                                                        </ul>
                                                    </li>
                                                    <li><b class="li-b">Sem Rutura Térmica</b>
                                                        <ul>
                                                            <?php foreach ($correres_sem_corte as $correr){
                                                                ?>
                                                                <li><a href="<?=base_url('index.php/pages/produto_caixilharia/'.$correr['id_produto_aluminio'])?>"><?php echo $correr['nome'] ?></a></li>
                                                                <?php
                                                            }?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Gradeamentos</h3>
                                                <ul>
                                                    <?php foreach ($gradeamentos as $gradeamento){
                                                        ?>
                                                        <li><a href="<?=base_url('index.php/pages/produto_caixilharia/'.$gradeamento['id_produto_aluminio'])?>"><?php echo $gradeamento['nome'] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Fachada / Quebra-Sol</h3>
                                                <ul>
                                                    <?php foreach ($fachadas as $fachada){
                                                        ?>
                                                        <li><a href="<?=base_url('index.php/pages/produto_caixilharia/'.$fachada['id_produto_aluminio'])?>"><?php echo $fachada['nome'] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Portadas</h3>
                                                <ul>
                                                    <?php foreach ($portadas as $portada){
                                                        ?>
                                                        <li><a href="<?=base_url('index.php/pages/produto_caixilharia/'.$portada['id_produto_aluminio'])?>"><?php echo $portada['nome'] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Portões</h3>
                                                <ul>
                                                    <?php foreach ($portoes as $portao){
                                                        ?>
                                                        <li><a href="<?=base_url('index.php/pages/produto_caixilharia/'.$portao['id_produto_aluminio'])?>"><?php echo $portao['nome'] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Standards</h3>
                                                <ul>
                                                    <?php foreach ($standards as $standard){
                                                        ?>
                                                        <li><a href="<?=base_url('index.php/pages/produto_caixilharia/'.$standard['id_produto_aluminio'])?>"><?php echo $standard['nome'] ?></a></li>
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
                    <li class="menu-title <?php echo ( isset($current) && $current === 'portofolio_caixilharia' ) ? 'curr' : ''?>"><a href="<?php echo site_url('pages/portfolio_caixilharia')?>">Portfolio Obras</a></li>
                    <li class="menu-title <?php echo ( isset($current) && $current === 'servico_caixilharia' ) ? 'curr' : ''?>"><a href="#">Serviços</a></li>
                    <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'marcacao_caixilharia' ) ? 'curr' : ''?>"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Marcação CE</a>
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
                    <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'apoio_caixilharia' ) ? 'curr' : ''?>"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Apoio ao Cliente</a>
                        <ul class="dropdown-menu">
                            <li class="grid-demo">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Comercial</h3>
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
                                                <h3 class="menu-h3">Orçamentaçõ</h3>
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
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Técnico</h3>
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
                                                <h3 class="menu-h3">Estudo Obra / Pormenorização</h3>
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
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3">Software Gestão Serralharia</h3>
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
                                                <h3 class="menu-h3">FAQ Sistemas Caixilharia</h3>
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
                    <li class="menu-title <?php echo ( isset($current) && $current === 'contactos' ) ? 'curr' : ''?>"><a href="#">Contactos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
