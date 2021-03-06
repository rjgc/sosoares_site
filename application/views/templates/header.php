<!doctype html>
<html>
<head>
    <title>GRUPO SOSOARES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/yamm.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/demo.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/hover.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/component.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/styles_fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/generic-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/header.css">
    <?php if(isset($page_style)) {
        switch($page_style) {
            case "vidro": ?>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/styles-vidro.css">
            <?php   break;
            case "extrusao": ?>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/styles-extrusao.css">
            <?php   break;
            case "tratamento": ?>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/styles-tratamento.css">
            <?php   break;
            default:
            break;
        }
    }

    if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
        echo $this->login->getScriptsLogin('caixilharia');
    } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
        echo $this->login->getScriptsLogin('vidro');
    } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
        echo $this->login->getScriptsLogin('extrusao');
    } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
        echo $this->login->getScriptsLogin('tratamento');
    } ?>

    <script src="<?php echo base_url() ?>assets/sosoares/js/jquery.min.js"></script>    
    <script src="<?php echo base_url() ?>assets/sosoares/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/sosoares/js/docs.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="<?php echo base_url() ?>assets/sosoares/js/menu-hover.js"></script>    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/ie8/header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/ie8/generic-styles.css">
    <script src="<?php echo base_url() ?>assets/sosoares/js/html5shiv.js"></script>
    <script src="<?php echo base_url() ?>assets/sosoares/js/respond.min.js"></script>
    <script src="<?php echo base_url() ?>assets/sosoares/js/jquery.placeholder.js"></script>    
    <script src="<?php echo base_url() ?>assets/sosoares/js/placeholder.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logotipo grow">
                    <a href="<?php echo base_url() ?>"><h1>Grupo Sosoares</h1></a>
                </div>
                <div class="pages-img">
                    <a href="<?=site_url('caixilharia/home')?>" class="<?php echo ( isset($page_style) && $page_style === 'caixilharia' ) ? 'font-active' : ''?>"><i class="icon-outline_caixilharia font"></i></a>
                    <a href="<?=site_url('vidro/home')?>" class="<?php echo ( isset($page_style) && $page_style === 'vidro' ) ? 'font-active' : ''?>"><i class="icon-outline_vidro font"></i></a>
                    <a href="<?=site_url('extrusao/home')?>" class="<?php echo ( isset($page_style) && $page_style === 'extrusao' ) ? 'font-active' : ''?>"><i class="icon-outline_extrusao font"></i></a>
                    <a href="<?=site_url('tratamento/home')?>" class="<?php echo ( isset($page_style) && $page_style === 'tratamento' ) ? 'font-active' : ''?>"><i class="icon-outline_tratamento font"></i></a>
                    <?php if(isset($page_style)) {
                        switch($page_style) {
                            case "caixilharia": ?>
                            <img src="<?php echo base_url() ?>assets/sosoares/img/logos_caixilharia.png">
                            <?php break;
                            case "vidro": ?>
                            <img src="<?php echo base_url() ?>assets/sosoares/img/logos_vidro.png">
                            <?php break;
                            case "extrusao": ?>
                            <img src="<?php echo base_url() ?>assets/sosoares/img/logos_extrusao.png">
                            <?php break;
                            case "tratamento": ?>
                            <img src="<?php echo base_url() ?>assets/sosoares/img/logos_tratamento.png">
                            <?php break;
                            default:
                            break;
                        }
                    }
                    ?>
                </div>
                <div class="form">
                    <form>
                        <input type="search" class="form-control placeholder" id="search" name="search" placeholder="<?=lang('pesquisar')?>" />
                        <button id="searchButton" class="btn btn-default grow"><i class="icon-search"></i></button>
                    </form>
                </div>
                <div id="bd">
                    <a id="lang-1" href="<?=site_url($this->lang->switch_uri('pt')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_pt.png" width="22" height="15" alt="Portugal" title="Portugal"></a>
                    <a id="lang-2" href="<?=site_url($this->lang->switch_uri('en')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_uk.png" width="22" height="15" alt="United Kingdom" title="United Kingdom"></a>
                    <a id="lang-3" href="<?=site_url($this->lang->switch_uri('fr')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_fr.png" width="22" height="15" alt="France" title="France" ></a>
                    <a id="lang-4" href="<?=site_url($this->lang->switch_uri('es')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_sp.png" width="22" height="15" alt="Espanhol" title="Espanhol"></a>
                </div>
                <div id="signIn">
                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] && $_SESSION['notAllowed'] == false) { ?>
                    <a class="btn button grow" id="signin" data-toggle="modal" href="<?=site_url('caixilharia/area_privada')?>"><?php $nome = preg_split('/ /', $_SESSION['profile']['user_profile_name']); echo $nome[0]; ?></a> 
                    <?php } else { ?>
                    <a id="signin" data-toggle="modal" href="#myModal"><button class="btn button grow" id="btn_signin"><?=lang('area_privada')?></button></a> 
                    <?php } ?>
                </div>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog" id="tab">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Login</h4>
                            </div>
                            <form method="post" role="form" id="form1">
                                <div class="modal-body login" id="form">
                                    <div id="jq_msg"></div>
                                    <p></p>
                                    <label>Username:</label>
                                    <input class="form-control input" type="text" id="username" name="username" placeholder="Username" value="<?php echo (isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''); ?>">
                                    <p></p>
                                    <label>Password:</label>
                                    <input class="form-control input" type="password" id="password" name="password" placeholder="Password" value="<?php echo (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''); ?>">
                                    <p></p>
                                    <a href="<?=site_url('caixilharia/registar')?>"><?=lang('registar')?></a>
                                    <p></p>
                                    <a href="<?=site_url('caixilharia/recuperar_password')?>"><?=lang('recuperar_password')?></a>
                                </div>
                                <div class="modal-footer">
                                    <input class="btn btn-primary" type="submit" id="login" name="login" value="Login">
                                    <input class="btn btn-default" type="button" data-dismiss="modal" id="cancel" name="cancel" value="<?=lang('cancelar')?>">
                                </div>
                            </form>
                        </div>
                    </div>
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
        } ?>
    </nav>
</body>
</html>
<?php require('assets/sosoares/php/header.php'); ?>