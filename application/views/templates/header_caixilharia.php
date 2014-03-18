<!doctype html>
<html>
    <head>
        <title>GRUPO SOSOARES</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/reset.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/yamm.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/demo.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/hover.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/styles-caixilharia.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/styles_fonts.css">
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
                                <a href="<?php echo site_url('pages/home_caixilharia')?>"><img src="<?php echo base_url() ?>assets/sosoares/img/p_caixilharia_a.png" width="49" height="49" alt="Caixilharia" title="Caixilharia" class="grow"></a>
                                <a href="<?php echo site_url('pages/home_vidro')?>"><img src="<?php echo base_url() ?>assets/sosoares/img/p_vidro.png" width="49" height="49" alt="Vidro" title="Vidro" class="grow"></a>
                                <a href="<?php echo site_url('pages/home_extrusao')?>"><img src="<?php echo base_url() ?>assets/sosoares/img/p_extrusao.png" width="49" height="49" alt="Extrusão" title="Extrusão" class="grow"></a>
                                <a href="<?php echo site_url('pages/home_tratamento')?>"><img src="<?php echo base_url() ?>assets/sosoares/img/p_abrasivos.png" width="49" height="49" alt="Abrasivos" title="Abrasivos" class="grow"></a>
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
                        <li class="menu-title"><a href="<?php echo site_url('pages/home_caixilharia')?>">Início</a></li>
                        <li class="menu-title"><a href="#">Grupo Sosoares</a></li>
                        <li class="dropdown yamm-fw menu-title"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Produtos Alumínio</a>
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
                                                                <li><a href="<?php echo site_url('pages/produto_caixilharia')?>">Sistema AT</a></li>
                                                                <li><a href="<?php echo site_url('pages/produto_caixilharia')?>">Sistema LT</a></li>
                                                                <li><a href="<?php echo site_url('pages/produto_caixilharia')?>">Sistema ST</a></li>
                                                                <li><a href="<?php echo site_url('pages/produto_caixilharia')?>">Sistema IT</a></li>
                                                                <li><a href="<?php echo site_url('pages/produto_caixilharia')?>">Sistema OT</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><b class="li-b">Sem Rutura Térmica</b>
                                                            <ul>
                                                                <li>Sistema AT</li>
                                                                <li>Sistema LT</li>
                                                                <li>Sistema ST</li>
                                                                <li>Sistema IT</li>
                                                                <li>Sistema OT</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3 class="menu-h3">Alumínio Madeira</h3>
                                                    <ul>
                                                        <li>AMB</li>
                                                        <li>AMC</li>
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
                                                                <li>Sistema JE</li>
                                                                <li>Sistema OS</li>
                                                                <li>Sistema PE+</li>
                                                                <li>Sistema TL</li>
                                                            </ul>
                                                        </li>
                                                        <li><b class="li-b">Sem Rutura Térmica</b>
                                                            <ul>
                                                                <li>Sistema JE</li>
                                                                <li>Sistema OS</li>
                                                                <li>Sistema PE+</li>
                                                                <li>Sistema TL</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3 class="menu-h3">Gradeamentos</h3>
                                                    <ul>
                                                        <li>Serie AV</li>
                                                        <li>Serie NG</li>
                                                        <li>Serie NC</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3 class="menu-h3">Fachada / Quebra-Sol</h3>
                                                    <ul>
                                                        <li>Serie FC</li>
                                                        <li>Serie V</li>
                                                        <li>Serie QS</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3 class="menu-h3">Portadas</h3>
                                                    <ul>
                                                        <li>Sistema PB</li>
                                                        <li>Sistema PC</li>
                                                        <li>Sistema PB-Harmonio</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3 class="menu-h3">Portões</h3>
                                                    <ul>
                                                        <li>Sistema PAB</li>
                                                        <li>Sistema PAC</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3 class="menu-h3">Standards</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><a href="<?php echo site_url('pages/portfolio_caixilharia')?>">Portfolio Obras</a></li>
                        <li class="menu-title"><a href="#">Serviços</a></li>
                        <li class="dropdown yamm-fw menu-title"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Marcação CE</a>
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
                        <li class="dropdown yamm-fw menu-title"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Apoio ao Cliente</a>
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
                        <li class="menu-title"><a href="#">Contactos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section>
