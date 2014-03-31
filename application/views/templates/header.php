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
    <?php if(isset($page_style)) {
        switch($page_style) {
            case "vidro":
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/styles-vidro.css">
            <?php
            break;
            case "extrusao":
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/styles-extrusao.css">
            <?php
            break;
            case "tratamento":
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/styles-tratamento.css">
            <?php
            break;
            default:
            break;  
        }
    }
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/accordion_faqs.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/tabs.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logotipo grow">
                    <a href="<?php echo base_url() ?>"><h1>Grupo Sosoares</h1></a>
                </div>
                <div class="pages-img">
                    <a href="<?=site_url('pages/home_caixilharia')?>"><i class="icon-caixilharia grow font <?php echo ( isset($page_style) && $page_style === 'caixilharia' ) ? 'font-active' : ''?>"></i></a>
                    <a href="<?=site_url('pages/home_vidro')?>"><i class="icon-vidro grow font  <?php echo ( isset($page_style) && $page_style === 'vidro' ) ? 'font-active' : ''?>"></i></a>
                    <a href="<?=site_url('pages/home_extrusao')?>"><i class="icon-extrusao grow font  <?php echo ( isset($page_style) && $page_style === 'extrusao' ) ? 'font-active' : ''?>"></i></a>
                    <a href="<?=site_url('pages/home_tratamento')?>"><i class="icon-tratamento grow font  <?php echo ( isset($page_style) && $page_style === 'tratamento' ) ? 'font-active' : ''?>"></i></a>
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
                    <a href="#"><button class="btn button shrink"><?=lang('signin')?></button></a>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <?php if(isset($page_style)) {
            switch($page_style) {
                case "caixilharia":
                require_once('nav_caixilharia.php');
                break;
                case "vidro":
                require_once('nav_vidro.php');
                break;
                case "extrusao":
                require_once('nav_extrusao.php');
                break;
                case "tratamento":
                require_once('nav_tratamento.php');
                break;
                default:
                break;
            }
        }
        ?>
    </nav>
    <section>
        <script src="<?php echo base_url() ?>assets/sosoares/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/docs.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/menu-hover.js"></script>