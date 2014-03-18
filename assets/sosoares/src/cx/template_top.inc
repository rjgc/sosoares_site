<?php
    if(!isset($_SESSION)) {
        session_start();
    }

?>
<!doctype html>
<html>
    <head>
        <title>GRUPO SOSOARES</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../../css/reset.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../css/yamm.css">
        <link rel="stylesheet" type="text/css" href="../../css/demo.css">
        <link rel="stylesheet" type="text/css" href="../../css/styles-caixilharia.css">
    </head>
    <body>
        <header>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="../../index.php"><img src="../../imgs/logotipo.png" width="210" height="47" alt="GRUPO SOSOARES" title="GRUPO SOSOARES" /></a>
                        </div>
                        <div class="col-md-5">
                            <span id="imgs">
                                <a href="../cx/"><img src="../../imgs/p_abrasivos_a.png" width="49" height="49" alt="Caixilharia" title="Caixilharia"></a>
                                <a href="../vd/"><img src="../../imgs/p_vidro.png" width="49" height="49" alt="Vidro" title="Vidro"></a>
                                <a href="../ex/"><img src="../../imgs/p_extrusao.png" width="49" height="49" alt="Extrusão" title="Extrusão"></a>
                                <a href="../ab/"><img src="../../imgs/p_abrasivos.png" width="49" height="49" alt="Abrasivos" title="Abrasivos"></a>
                            </span>
                        </div>
                        <div class="col-md-2">
                            <input type="text" id="search" name="search" placeholder="Pesquisar">
                        </div>
                        <div class="col-md-2">
                            <div id="bd">
                                <img src="../../imgs/bd_pt.png" width="22" height="15" alt="Portugal" title="Portugal">
                                <img src="../../imgs/bd_uk.png" width="22" height="15" alt="United Kingdom" title="United Kingdom">
                                <img src="../../imgs/bd_fr.png" width="22" height="15" alt="France" title="France">
                                <img src="../../imgs/bd_sp.png" width="22" height="15" alt="Spain" title="Spain">
                            </div>
                            <div>
                                <a href="#">
                                    <button class="btn button">Sign In</button>
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
                        <li class="menu-title"><a href="index.php">Início</a></li>
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
                                                                <li><a href="produto.php">Sistema AT</a></li>
                                                                <li><a href="produto.php">Sistema LT</a></li>
                                                                <li><a href="produto.php">Sistema ST</a></li>
                                                                <li><a href="produto.php">Sistema IT</a></li>
                                                                <li><a href="produto.php">Sistema OT</a></li>
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
                        <li class="menu-title"><a href="portfolio.php">Portfolio Obras</a></li>
                        <li class="menu-title"><a href="index.php">Serviços</a></li>
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
