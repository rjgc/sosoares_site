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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/tabs.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/component.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/styles_fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/generic-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/share_links.css">
    <?php   if(isset($page_style)) {
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
    ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logotipo grow">
                    <a href="<?php echo base_url() ?>"><h1>Grupo Sosoares</h1></a>
                </div>
                <div class="pages-img">
                    <a href="<?=site_url('caixilharia/home')?>" class="<?php echo ( isset($page_style) && $page_style === 'caixilharia' ) ? 'font-active' : ''?>"><i class="icon-outline_caixilharia grow font"></i></a>
                    <a href="<?=site_url('vidro/home')?>" class="<?php echo ( isset($page_style) && $page_style === 'vidro' ) ? 'font-active' : ''?>"><i class="icon-outline_vidro grow font"></i></a>
                    <a href="<?=site_url('extrusao/home')?>" class="<?php echo ( isset($page_style) && $page_style === 'extrusao' ) ? 'font-active' : ''?>"><i class="icon-outline_extrusao grow font"></i></a>
                    <a href="<?=site_url('tratamento/home')?>" class="<?php echo ( isset($page_style) && $page_style === 'tratamento' ) ? 'font-active' : ''?>"><i class="icon-outline_tratamento grow font"></i></a>
                    <?php   if(isset($page_style)) {
                                switch($page_style) {
                                    case "caixilharia": ?>
                                        <img src="<?php echo base_url() ?>assets/sosoares/img/logos_caixilharia.png">
                            <?php       break;
                                    case "vidro": ?>
                                        <img src="<?php echo base_url() ?>assets/sosoares/img/logos_vidro.png">
                            <?php       break;
                                    case "extrusao": ?>
                                        <img src="<?php echo base_url() ?>assets/sosoares/img/logos_extrusao.png">
                            <?php       break;
                                    case "tratamento": ?>
                                        <img src="<?php echo base_url() ?>assets/sosoares/img/logos_tratamento.png">
                            <?php       break;
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
                    <a href="<?=site_url($this->lang->switch_uri('pt')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_pt.png" width="22" height="15" alt="Portugal" title="Portugal" class="grow"></a>
                    <a href="<?=site_url($this->lang->switch_uri('en')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_uk.png" width="22" height="15" alt="United Kingdom" title="United Kingdom" class="grow"></a>
                    <a href="<?=site_url($this->lang->switch_uri('fr')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_fr.png" width="22" height="15" alt="France" title="France" class="grow"></a>
                    <a href="<?=site_url($this->lang->switch_uri('es')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_sp.png" width="22" height="15" alt="Espanhol" title="Espanhol" class="grow"></a>
                </div>
                <div id="signIn">
                    <a id="signin" data-toggle="modal" href="#myModal"><button class="btn button shrink" id="btn_signin"><?=lang('area_privada')?></button></a>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" id="tab">
                        <div class="modal-content" id="tab-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="reset()">&times;</button>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#area_privada" data-toggle="tab" onclick="login(this)">Área Privada</a></li>
                                    <li><a href="#registar" data-toggle="tab">Registe-se</a></li>
                                </ul>
                            </div>
                            <form method="post" role="form">
                                <p id="erro" data-container="#form" data-toggle="popover" data-placement="auto right" data-content="Erro! Verifique o seu username e password."></p>
                                <div class="modal-body" id="form">
                                    <div class="tab-pane fade in active" id="area_privada">
                                        <label>Username:</label>
                                        <input style="padding: 0 0 0 10px !important;" class="form-control input" type="text" id="username" name="username" placeholder="Username" value="<?php echo (isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''); ?>">
                                        <p></p>
                                        <label>Password:</label>
                                        <input style="padding: 0 0 0 10px !important;" class="form-control input" type="password" id="password" name="password" placeholder="Password" value="<?php echo (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''); ?>">
                                        <p style="display:inline-block;">Remember Me:</p><input style="margin:0 0 0 5px !important;" type="checkbox" name="remember" value="1">
                                    </div>
                                    <div class="tab-pane fade" id="registar">...</div>
                                </div>
                                <div class="modal-footer">
                                    <input class="btn btn-default" type="submit" id="cancel" name="cancel" value="Cancel">
                                    <input class="btn btn-primary" type="submit" id="login" name="login" value="Login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <?php   if(isset($page_style)) {
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
        <script type="text/javascript">
            function reset () {
                $('#erro').popover('hide');

                document.getElementById('username').value='';
                document.getElementById('password').value='';
            }
        </script>
        <?php
           if($this->ion_auth->logged_in() == true){
             echo $this->ion_auth->user()->row()->username;
            ?>
            <script>
              $('#signin').attr('href', '<?php echo site_url() ?>/caixilharia/account');
              $('#btn_signin').text('Teste!!');
           </script>
          <?php
          }
        ?>
        <?php
        if (isset($_POST['login']))
        {
            if (!empty($_POST['username']) && !empty($_POST['password'])) 
            {
                $active = isset($_POST['remember']) && $_POST['remember']  ? "1" : "0";

                $this->ion_auth->login($_POST['username'], $_POST['password'], $active);

                if (!$this->ion_auth->logged_in())
                {
                    echo "<script type='text/javascript'> 
                    $('#signin').click(); 
                    document.getElementById('erro').style.visibility='visible';
                    $('#erro').popover('show');
                </script>";
            } else if ($this->ion_auth->logged_in()) {
                print_r($this->ion_auth->user()->row());
                echo "<script type='text/javascript'> $('#cancel').click();
                </script>";
            }
        } else if (isset($_POST['cancel'])) {
            echo "<script type='text/javascript'> 
            $('#erro').popover('hide');

            document.getElementById('username').value='';
            document.getElementById('password').value='';
        </script>";
    }
}
?>