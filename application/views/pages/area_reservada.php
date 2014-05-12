<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/area-reservada.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                    echo site_url('caixilharia/home');
                } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                    echo site_url('vidro/home');
                } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                    echo site_url('extrusao/home');
                } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                    echo site_url('tratamento/home');
                } ?>"><?=lang('home')?></a></li>
                <li><?=lang('area_privada')?></li>
            </ul>
            <h1 class="title3"><?=lang('area_privada')?></h1>
        </div>
    </div>
    <?php if (!$_SESSION['logged_in'] && !$_SESSION['notAllowed']) { ?>
    <div class="alerta">
        <div class="alert alert-warning">
            <h5><strong>Atenção!</strong> Tem de efectuar o login.</h5>
        </div>
    </div>
    <?php } else { ?>
    <?php if ($_SESSION['logged_in']) { ?>
    <button class="btn button grow ui-corner-all botao" id="btn_signin"><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
        echo site_url('caixilharia/logout');
    } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
        echo site_url('vidro/logout');
    } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
        echo site_url('extrusao/logout');
    } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
        echo site_url('tratamento/logout');
    } ?>">Logout</a></button>
    <div class="dados">
        <h3><?=lang('dados')?></h3>
        <div><b><?=lang('nome')?>: </b><?=$_SESSION['profile']['user_profile_name'];?></div>
        <div><b><?=lang('apelido')?>: </b><?=$_SESSION['profile']['user_profile_surname'];?></div>
        <div><b>E-mail: </b><?=$_SESSION['profile']['user_profile_email'];?></div>
        <h3>Downloads</h3>
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#1" data-toggle="tab">Todos</a></li>
                <li><a href="#2" data-toggle="tab">Perfis</a></li>
                <li><a href="#3" data-toggle="tab">Pormenores</a></li>
                <li><a href="#4" data-toggle="tab">Catálogos</a></li>
                <li><a href="#5" data-toggle="tab">Ensaios</a></li>
                <li><a href="#6" data-toggle="tab">Folhetos</a></li>
                <li><a href="#7" data-toggle="tab">Ferragens de Vidro</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="1">
                <div class="row account">
                    <div class="col-md-8 tabela">
                        <?php if (!empty($todos)) { ?>
                        <div id="DefaultDable"></div>                        
                        <?php } else { ?>
                        <p>Não existem ficheiros nesta categoria.</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="2">
                <div class="row account">
                    <div class="col-md-8 tabela">
                        <?php if (!empty($perfis)) { ?>
                        <div id="DefaultDable2"></div>
                        <?php } else { ?>
                        <p>Não existem ficheiros nesta categoria.</p>
                        <?php } ?>
                    </div>
                </div>
            </div> 
            <div class="tab-pane" id="3">
                <div class="row account">
                    <div class="col-md-8 tabela">
                        <?php if (!empty($pormenores)) { ?>
                        <div id="DefaultDable3"></div>
                        <?php } else { ?>
                        <p>Não existem ficheiros nesta categoria.</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="4">
                <div class="row account">
                    <div class="col-md-8 tabela">
                        <?php if (!empty($catalogos)) { ?>
                        <div id="DefaultDable4"></div>                                  
                        <?php } else { ?>
                        <p>Não existem ficheiros nesta categoria.</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="5">
                <div class="row account">
                    <div class="col-md-8 tabela">
                        <?php if (!empty($ensaios)) { ?>
                        <div id="DefaultDable5"></div>
                        <?php } else { ?>
                        <p>Não existem ficheiros nesta categoria.</p>
                        <?php } ?>
                    </div>
                </div>
            </div> 
            <div class="tab-pane" id="6">
                <div class="row account">
                    <div class="col-md-8 tabela">
                        <?php if (!empty($folhetos)) { ?>
                        <div id="DefaultDable6"></div>
                        <?php } else { ?>
                        <p>Não existem ficheiros nesta categoria.</p>
                        <?php } ?>
                    </div>
                </div>
            </div> 
            <div class="tab-pane" id="7">
                <div class="row account">
                    <div class="col-md-8 tabela">
                        <?php if (!empty($ferragens_vidro)) { ?>
                        <div id="DefaultDable7"></div>
                        <?php } else { ?>
                        <p>Não existem ficheiros nesta categoria.</p>
                        <?php } ?>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
<?php } else if ($_SESSION['notAllowed']) { ?>
<div class="alerta">
    <div class="alert alert-warning">
        <h5><strong>Atenção!</strong> Você não permissões para ver esta página. <a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
            echo site_url('caixilharia/home');
        } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
            echo site_url('vidro/home');
        } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
            echo site_url('extrusao/home');
        } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
            echo site_url('tratamento/home');
        } ?>">Voltar atrás.</a></h5>
    </div>
</div>
<?php } 
}?>
<?php require_once('assets/sosoares/php/area-reservada.php'); ?>
<script src="<?php echo base_url() ?>assets/sosoares/js/Dable.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/area-reservada.js"></script>