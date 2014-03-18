<!doctype html>
<html>
    <?php ?>
    <head>
        <title>GRUPO SOSOARES</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/reset.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/hover.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/styles.css">
        
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <a href="index.php"><img src="<?php echo base_url() ?>assets/sosoares/img/logotipo.png" width="210" height="47" alt="GRUPO SOSOARES" title="GRUPO SOSOARES" /></a>
                    </div>
                    <div class="col-md-4">
                        <div id="bd">
                            <a href="#"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_pt.png" width="22" height="15" alt="Portugal" title="Portugal" class="grow"></a>
                            <a href="#"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_uk.png" width="22" height="15" alt="United Kingdom" title="United Kingdom" class="grow"></a>
                            <a href="#"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_fr.png" width="22" height="15" alt="France" title="France" class="grow"></a>
                            <a href="#"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_sp.png" width="22" height="15" alt="Spain" title="Spain" class="grow"></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--<section class="before">&nbsp;</section>-->
        <section style="top: 35% !important; right: 0; position: absolute; left: 0;">
            <div class="container" style="position: relative">
                <div class="center">
                    <a href="<?php echo site_url('pages/home_caixilharia')?>">
                        <div class="box shrink" id="caixilharia">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/p_caixilharia.png" width="65" height="64" alt="Caixilharia" title="Caixilharia">
                            <h3>Sistemas de Caixilharia</h3>
                        </div>
                    </a>
                    <a href="<?php echo site_url('pages/home_vidro')?>">
                        <div class="box shrink" id="vidro">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/p_vidro.png" width="65" height="64">
                            <h3>Vidro<br>&nbsp;</h3>
                        </div>
                    </a>
                    <hr id="separador">
                    <a href="<?php echo site_url('pages/home_vidro')?>">
                        <div class="box shrink" id="extrusao">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/p_extrusao.png" width="65" height="64">
                            <h3>Extrusão<br>&nbsp;</h3>
                        </div>
                    </a>
                    <a href="<?php echo site_url('pages/home_tratamento')?>">
                        <div class="box shrink" id="abrasivos">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/p_abrasivos.png" width="65" height="64">
                            <h3 >Tratamento de Superficíes</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <footer id="bottom">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/gs.jpg" width="29" height="28" alt="GS" /> <h4>&nbsp;&copy; GRUPO SOSOARES</h4> Todos os Direitos Reservados
                        </div>
                        <div class="col-md-2">
                            +351 <b>226 096 709</b>
                        </div>
                        <div class="col-md-2">
                            comercial@sosoares.pt
                        </div>
                        <div class="col-md-2">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/euro2000.jpg" width="165" height="43" alt="Sistemas Euro2000" title="Sistemas Euro2000">
                        </div>
                        <div class="col-md-1">
                            <a href="#">
                                <button class="btn button shrink">Sign In</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
