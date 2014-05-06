<!doctype html>
<html>
<?php ?>
<head>
    <title>GRUPO SOSOARES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/hover.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/styles_fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/styles.css">
    <style type="text/css">
        body
        {
            background:url("<?php echo base_url() ?>assets/uploads/background/<?php echo $background_image['foto'];?>") #e8e8e8 no-repeat fixed center;
            background-size: cover;
        }
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
      <script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
      <![endif]-->
      <?php echo $this->login->getScriptsLogin('home'); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logotipo grow">
                    <a href="<?php echo base_url() ?>"><h1>Grupo Sosoares</h1></a>
                </div>
                <div id="bd">
                    <a style="padding-right: 5px;" href="<?=site_url($this->lang->switch_uri('pt')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_pt.png" width="22" height="15" alt="Portugal" title="Portugal" class="grow"></a>
                    <a style="padding-right: 5px;" href="<?=site_url($this->lang->switch_uri('en')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_uk.png" width="22" height="15" alt="United Kingdom" title="United Kingdom" class="grow"></a>
                    <a style="padding-right: 5px;" href="<?=site_url($this->lang->switch_uri('fr')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_fr.png" width="22" height="15" alt="France" title="France" class="grow"></a>
                    <a href="<?=site_url($this->lang->switch_uri('es')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_sp.png" width="22" height="15" alt="Spain" title="Spain" class="grow"></a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container" style="position: relative">
            <div class="center">
                <a href="<?php echo site_url('caixilharia/home')?>">
                    <div class="box shrink" id="caixilharia">
                        <i class="icon-produtos_caixilharia font"></i>
                        <?php if (strlen(lang('caixilharia')) > 18) { ?>
                        <h3 class="h3"><?=lang('caixilharia')?></h3>
                        <?php } else { ?>
                        <h3 class="h3"><?=lang('caixilharia')?><br>&nbsp;</h3>
                        <?php } ?>
                    </div>
                </a>
                <a href="<?php echo site_url('vidro/home')?>">
                    <div class="box shrink" id="vidro">
                        <i class="icon-produtos_vidro font"></i>
                        <h3 class="h3"><?=lang('vidro')?><br>&nbsp;</h3>
                    </div>
                </a>
                <hr id="separador">
                <a href="<?php echo site_url('extrusao/home')?>">
                    <div class="box shrink" id="extrusao">
                        <i class="icon-extrusao_new font"></i>
                        <h3 class="h3"><?=lang('extrusao')?><br>&nbsp;</h3>
                    </div>
                </a>
                <a href="<?php echo site_url('tratamento/home')?>">
                    <div class="box shrink" id="abrasivos">
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
                    <i class="icon-sosoares" style="font-size: 25px"></i>
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
                    <img src="<?php echo base_url() ?>assets/sosoares/img/euro2000.jpg" width="165" height="43" alt="Sistemas Euro2000" title="Sistemas Euro2000">
                </div>
                <div class="areaReservada">
                    <?php if (!empty($profile)) { ?>
                    <a id="signin" data-toggle="modal" href="#myModal"><button class="btn button grow" id="btn_signin"><?=$profile['user_profile_name']?></button></a> 
                    <?php } else { ?>
                    <a id="signin" data-toggle="modal" href="#myModal"><button class="btn button grow" id="btn_signin"><?=lang('area_privada')?></button></a> 
                    <?php } ?>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" id="tab">
                        <div class="modal-content" id="tab-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Login</h4>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="login">
                                    <form method="post" role="form" id="form1">
                                        <div class="modal-body" id="form" style="padding: 0 20px 20px 20px !important;">
                                            <div class="tab-pane fade in active" id="area_privada">
                                                <div id="jq_msg"></div>
                                                <p></p>
                                                <label>Username:</label>
                                                <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="username" name="username" placeholder="Username" value="<?php echo (isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''); ?>">
                                                <p></p>
                                                <label>Password:</label>
                                                <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="password" id="password" name="password" placeholder="Password" value="<?php echo (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''); ?>">
                                                <p></p>
                                                <a href="<?=site_url('caixilharia/registar')?>"><?=lang('registar')?></a>
                                                <p></p>
                                                <a href="<?=site_url('caixilharia/recuperar')?>"><?=lang('recuperar_password')?></a>
                                            </div>
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
            </div>
        </div>
    </footer>
</body>
</html>
<script src="<?php echo base_url() ?>assets/sosoares/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/docs.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript">
    document.getElementById("myModal").style.display="none";
    document.getElementById("tab").style.width="290px";
    document.getElementById("form").style.padding="0 0 0 20px";

    function login(elem){
        document.getElementById("myModal").style.position="fixed";
        document.getElementById("tab").style.width="290px";
        document.getElementById("form").style.padding="0 0 0 20px";
    }

    function registar(elem){
        document.getElementById("myModal").style.position="fixed";
    }
</script>
