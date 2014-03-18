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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares_html/css/reset.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares_html/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares_html/css/styles-abrasivos.css">
    </head>
    <body>
        <header>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="../../index.php"><img src="<?php echo base_url() ?>assets/sosoares_html/img/logotipo.png" width="210" height="47" alt="GRUPO SOSOARES" title="GRUPO SOSOARES" /></a>
                        </div>
                        <div class="col-md-5">
                            <span id="img">
                                <a href="../cx/"><img src="<?php echo base_url() ?>assets/sosoares_html/img/p_abrasivos_a.png" width="49" height="49" alt="Caixilharia" title="Caixilharia"></a>
                                <a href="../vd/"><img src="<?php echo base_url() ?>assets/sosoares_html/img/p_vidro.png" width="49" height="49" alt="Vidro" title="Vidro"></a>
                                <a href="../ex/"><img src="<?php echo base_url() ?>assets/sosoares_html/img/p_extrusao.png" width="49" height="49" alt="Extrusão" title="Extrusão"></a>
                                <a href="../ab/"><img src="<?php echo base_url() ?>assets/sosoares_html/img/p_abrasivos.png" width="49" height="49" alt="Abrasivos" title="Abrasivos"></a>
                            </span>
                        </div>
                        <div class="col-md-2">
                            <input type="text" id="search" name="search" placeholder="Pesquisar">
                        </div>
                        <div class="col-md-2">
                            <div id="bd">
                                <img src="<?php echo base_url() ?>assets/sosoares_html/img/bd_pt.png" width="22" height="15" alt="Portugal" title="Portugal">
                                <img src="<?php echo base_url() ?>assets/sosoares_html/img/bd_uk.png" width="22" height="15" alt="United Kingdom" title="United Kingdom">
                                <img src="<?php echo base_url() ?>assets/sosoares_html/img/bd_fr.png" width="22" height="15" alt="France" title="France">
                                <img src="<?php echo base_url() ?>assets/sosoares_html/img/bd_sp.png" width="22" height="15" alt="Spain" title="Spain">
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
            <div class="content">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Grupo Sosoares</a></li>
                    <li><a href="#">Produtos Extrusão</a></li>
                        <!--<ul>
                            <li>Caixilharia</li>
                            <ul>
                                <li>Batente</li>
                                    <ul>
                                        <li>Serie AT</li>
                                        <li>Serie SB</li>
                                        <li>Serie BF</li>
                                    </ul>
                                <li>Correr</li>
                                <ul>
                                    <li>Serie TL</li>
                                    <li>Serie JC</li>
                                    <li>Serie CC</li>
                                </ul>
                                <li>Portadas</li>
                            </ul>
                            <li>Standards</li>
                            <li>Estores</li>
                            <li>Diversos</li>
                            <ul>
                                <li>Divisórias</li>
                                <li>Gradeamento</li>
                                <li>Mosquiteiras</li>
                                <li>Lâminhas</li>
                            </ul>
                        </ul>-->
                    <li><a href="#">Serviços Extrusão</a></li>
                    <li><a href="#">Apoio ao Cliente</a></li>
                    <li><a href="#">Contactos</a></li>
                </ul>
            </div>
            <div class="tablet">
                <ul>
                    <li>MENU</li>
                    <ul>
                        <li><a href="#">Início></a></li>
                        <li><a href="#">Grupo Sosoares</a></li>
                        <li><a href="#">Produtos Extrusão</a></li>
                        <li><a href="#">Serviços Extrusão</a></li>
                        <li><a href="#">Apoio ao Cliente</a></li>
                        <li><a href="#">Contactos</a></li>
                    </ul>
                </ul>
            </div>
        </nav>
        <section>
