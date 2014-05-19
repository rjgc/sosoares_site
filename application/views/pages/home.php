<!doctype html>
<html>
<?php ?>
<head>
    <title>GRUPO SOSOARES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/hover.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/styles_fonts.css">    
    <style type="text/css">
        body
        {
            background:url("<?php echo base_url() ?>assets/uploads/background/<?php echo $background_image['foto'];?>") #e8e8e8 no-repeat fixed center;
            background-size: cover;
        }    
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>assets/sosoares/js/html5shiv.js"></script>
    <script src="<?php echo base_url() ?>assets/sosoares/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logotipo grow">
                    <a href="<?php echo base_url() ?>"><h1>Grupo Sosoares</h1></a>
                </div>
                <div id="bd">
                    <a id="lang-1" href="<?=site_url($this->lang->switch_uri('pt')) ?>"><img class="grow lingua" src="<?php echo base_url() ?>assets/sosoares/img/bd_pt.png" alt="Portugal" title="Portugal"></a>
                    <a id="lang-2" href="<?=site_url($this->lang->switch_uri('en')) ?>"><img class="grow lingua" src="<?php echo base_url() ?>assets/sosoares/img/bd_uk.png" alt="United Kingdom" title="United Kingdom"></a>
                    <a id="lang-3" href="<?=site_url($this->lang->switch_uri('fr')) ?>"><img class="grow lingua" src="<?php echo base_url() ?>assets/sosoares/img/bd_fr.png" alt="France" title="France"></a>
                    <a id="lang-4" href="<?=site_url($this->lang->switch_uri('es')) ?>"><img class="grow ultima_lingua" src="<?php echo base_url() ?>assets/sosoares/img/bd_sp.png" alt="Spain" title="Spain"></a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container container_home">
            <div class="center">
                <a href="<?php echo site_url('caixilharia/home')?>">
                    <div class="box grow" id="caixilharia">
                        <i class="icon-produtos_caixilharia font"></i>
                        <?php if (strlen(lang('caixilharia')) > 18) { ?>
                        <h3 class="h3"><?=lang('caixilharia')?></h3>
                        <?php } else { ?>
                        <h3 class="h3"><?=lang('caixilharia')?><br>&nbsp;</h3>
                        <?php } ?>
                    </div>
                </a>
                <a href="<?php echo site_url('vidro/home')?>">
                    <div class="box grow" id="vidro">
                        <i class="icon-produtos_vidro font"></i>
                        <h3 class="h3"><?=lang('vidro')?><br>&nbsp;</h3>
                    </div>
                </a>
                <hr id="separador">
                <a href="<?php echo site_url('extrusao/home')?>">
                    <div class="box grow" id="extrusao">
                        <i class="icon-extrusao_new font"></i>
                        <h3 class="h3"><?=lang('extrusao')?><br>&nbsp;</h3>
                    </div>
                </a>
                <a href="<?php echo site_url('tratamento/home')?>">
                    <div class="box grow" id="abrasivos">
                        <i class="icon-tratamento_new font"></i>
                        <?php if (strlen(lang('tratamento')) > 18) { ?>
                        <h3 class="h3"><?=lang('tratamento')?></h3>
                        <?php } else { ?>
                        <h3 class="h3"><?=lang('tratamento')?><br>&nbsp;</h3>
                        <?php } ?>
                    </div>
                </a>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="rights">
                    <i class="icon-sosoares"></i>
                    <h4 class="h4">&nbsp;&copy; GRUPO SOSOARES</h4><p class="p"> <?=lang('direitos')?> </p>
                </div>
                <div class="telefone">
                    <?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) { ?>
                    <p class="p"><b><?=lang('telefone_pt')?></b></p>
                    <?php } else { ?>
                    <p class="p"><b><?=lang('telefone_')?></b></p>
                    <?php } ?>
                </div>
                <div class="email">
                    <?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) { ?>
                    <p class="p"><?=lang('email_pt')?></p>
                    <?php } else { ?>
                    <p class="p"><?=lang('email_')?></p>
                    <?php } ?>
                </div>
                <div class="imgSistemas">
                    <img src="<?php echo base_url() ?>assets/sosoares/img/euro2000.jpg" alt="Sistemas Euro2000" title="Sistemas Euro2000">
                </div>
                <div class="areaReservada">
                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) { ?>
                    <a id="signin" data-toggle="modal" href="<?=site_url('caixilharia/area_reservada')?>"><button class="btn button grow" id="btn_signin"><?=$_SESSION['profile']['user_profile_name']?></button></a> 
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
                                    <a href="<?=site_url('caixilharia/recuperar')?>"><?=lang('recuperar_password')?></a>
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
    </footer>
</body>
</html>
<script src="<?php echo base_url() ?>assets/sosoares/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/home.js"></script>
<?php echo $this->login->getScriptsLogin('home'); ?>
<?php require_once('assets/sosoares/php/home.php'); ?>
