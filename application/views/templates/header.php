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

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/component.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/styles_fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/generic-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/share_links.css">
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
        echo $this->login->getScriptsHome('caixilharia');
    } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
        echo $this->login->getScriptsHome('vidro');
    } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
        echo $this->login->getScriptsHome('extrusao');
    } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
        echo $this->login->getScriptsHome('tratamento');
    } ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logotipo">
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
                        <input type="search" class="form-control" id="search" name="search" placeholder="<?=lang('pesquisar')?>" />
                        <button id="searchButton" class="btn btn-default"><i class="icon-search"></i></button>
                    </form>
                </div>
                <div id="bd">
                    <a href="<?=site_url($this->lang->switch_uri('pt')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_pt.png" width="22" height="15" alt="Portugal" title="Portugal"></a>
                    <a href="<?=site_url($this->lang->switch_uri('en')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_uk.png" width="22" height="15" alt="United Kingdom" title="United Kingdom"></a>
                    <a href="<?=site_url($this->lang->switch_uri('fr')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_fr.png" width="22" height="15" alt="France" title="France" ></a>
                    <a href="<?=site_url($this->lang->switch_uri('es')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_sp.png" width="22" height="15" alt="Espanhol" title="Espanhol"></a>
                </div>
                <div id="signIn">
                    <?php if (isset($logged_in) && $logged_in) { ?>
                    <a id="signin" data-toggle="modal" href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                        echo site_url('caixilharia/area_reservada');
                    } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                        echo site_url('vidro/area_reservada');
                    } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                        echo site_url('extrusao/area_reservada');
                    } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                        echo site_url('tratamento/area_reservada');
                    } ?>"><button class="btn button grow" id="btn_area_reservada">Área Reservada</button></a>
                    <?php } else { ?>
                    <a id="signin" data-toggle="modal" href="#myModal"><button class="btn button grow" id="btn_signin">Login</button></a> 
                    <?php } ?>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


                    <div class="modal-dialog" id="tab">
                        <div class="modal-content" id="tab-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="reset()">&times;</button>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#login" data-toggle="tab"><h4 class="modal-title">Login</h4></a></li>
                                    <li><a href="#registo" data-toggle="tab"><h4 class="modal-title">Registo</h4></a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="login">
                                    <form method="post" role="form" id="form1">
                                        <p id="erro" data-container="#form" data-toggle="popover" data-placement="auto right" data-content="Erro! Verifique o seu username e password."></p>
                                        <div class="modal-body" id="form">
                                            <div class="tab-pane fade in active" id="area_privada">
                                                <div id="jq_msg"></div>
                                                <label>Username:</label>
                                                <input style="padding: 0 0 0 10px !important;" class="form-control input" type="text" id="username" name="username" placeholder="Username" value="<?php echo (isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''); ?>">
                                                <p></p>
                                                <label>Password:</label>
                                                <input style="padding: 0 0 0 10px !important;" class="form-control input" type="password" id="password" name="password" placeholder="Password" value="<?php echo (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''); ?>">
                                            </div>
                                            <div class="tab-pane fade" id="registar">...</div>
                                        </div>
                                        <div class="modal-footer">
                                            <input class="btn btn-primary" type="submit" id="login" name="login" value="Login">
                                            <input class="btn btn-default" type="submit" id="cancel" name="cancel" value="Cancel">
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="registo">
                                    <form method="post" role="form" id="form1">
                                        <p id="erro" data-container="#form" data-toggle="popover" data-placement="auto right" data-content="Erro! Verifique o seu username e password."></p>
                                        <div class="modal-body" id="form">
                                            <div class="tab-pane fade in active" id="area_privada">
                                                <div id="jq_msg"></div>
                                                <label>Primeiro Nome:</label>
                                                <input style="padding: 0 0 0 10px !important;" class="form-control input" type="password" id="password" name="password" placeholder="Password" value="<?php echo (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''); ?>">
                                                <p></p>
                                                <label>Último Nome:</label>
                                                <input style="padding: 0 0 0 10px !important;" class="form-control input" type="password" id="password" name="password" placeholder="Password" value="<?php echo (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''); ?>">
                                                <p></p>
                                                <label>E-mail:</label>
                                                <input style="padding: 0 0 0 10px !important;" class="form-control input" type="password" id="password" name="password" placeholder="Password" value="<?php echo (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''); ?>">
                                                <p></p>
                                                <label>Username:</label>
                                                <input style="padding: 0 0 0 10px !important;" class="form-control input" type="text" id="username" name="username" placeholder="Username" value="<?php echo (isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''); ?>">
                                                <p></p>
                                                <label>Password:</label>
                                                <input style="padding: 0 0 0 10px !important;" class="form-control input" type="password" id="password" name="password" placeholder="Password" value="<?php echo (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''); ?>">
                                            </div>
                                            <div class="tab-pane fade" id="registar">...</div>
                                        </div>
                                        <div class="modal-footer">
                                            <input class="btn btn-primary" type="submit" id="login" name="login" value="Enviar Dados">
                                            <input class="btn btn-default" type="submit" id="cancel" name="cancel" value="Cancel">
                                        </div>
                                    </form>
                                </div>
                            </div>
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
    <section>
        <script src="<?php echo base_url() ?>assets/sosoares/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/docs.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/menu-hover.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/Dable.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                if(window.location.href.indexOf("search") > -1) {
                   window.location.href("pesquisa/<?php echo intval($_GET['search']) ?>");
                }
            });

            $(document).ready(function()    {

            $("#form1").submit(function()   {

                $.ajax({

                    url:        "'.site_url('login/check_login_home?'.$page.'&'.$lang).'",

                    type:       "post",

                    data:       $(this).serialize(),

                    dataType:   "json",

                    success:    function(data)  {

                        jq_msg(data,70,5000);

                        if(data.response == "success")

                            setTimeout("window.location =\""+data.more+"\"", 3000);

                        else

                            $("#content-login").effect("shake",null,"fast");

                    }

                    

                });

                return false;

            });
        </script>