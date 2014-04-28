<style>
    .tabs-right > .nav-tabs {border-bottom: 0;}

    .tab-content > .tab-pane, .pill-content > .pill-pane {display: none;}
    .tab-content > .active, .pill-content > .active {display: block;}

    .tabs-right > .nav-tabs > li {float: none;border: 0;background: rgba(168,200,213,0.5);border-radius: 0;width: 100px;text-align: right;}
    .tabs-right > .nav-tabs > li > a { min-width: 74px; margin-right: 0; margin-bottom: 3px;color: #000;border-radius: 0;}
    .tabs-right > .nav-tabs {float: right;margin-top: 27px;}
    .tabs-right > .nav-tabs > li > a {margin-left: -1px;border: 0}

    .tabs-right > .nav-tabs > li > a:hover,
    .tabs-right > .nav-tabs > li > a:focus {border: 0;background: #107ca4;border-radius: 0;}

    .tabs-right > .nav-tabs .active {background: #107ca4;border-radius: 0;}
    .tabs-right > .nav-tabs .active > a {color: #fff;}

    .tabs-right > .nav-tabs .active > a,
    .tabs-right > .nav-tabs .active > a:hover,
    .tabs-right > .nav-tabs .active > a:focus {background: #107ca4;}
</style>

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
    <?php if (!isset($logged_in)) { ?>
    <div style="padding-left: 15px;">
        <div class="alert alert-warning">
            <h5><strong>Atenção!</strong> Tem de efectuar o login.</h5>
        </div>
    </div>
    <?php } else { ?>
    <?php if ($logged_in) { ?>
    <!-- tabs right -->
    <div class="tabbable tabs-right">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#1" data-toggle="tab"><?=lang('perfil')?></a></li>
            <li><a href="#2" data-toggle="tab">Downloads</a></li>
            <li><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                echo $this->session->sess_destroy();
                echo site_url('caixilharia/home');
            } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                echo $this->session->sess_destroy();
                echo site_url('vidro/home');
            } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                echo $this->session->sess_destroy();
                echo site_url('extrusao/home');
            } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                echo $this->session->sess_destroy();
                echo site_url('tratamento/home');
            } ?>">Logout</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="1">
                <div class="row account">
                    <div class="col-md-8" style="padding: 0 0 0 30px;">
                        <h3><?=lang('dados')?></h3>
                        <div><b><?=lang('nome')?>: </b><?=$profile['user_profile_name'];?></div>
                        <div><b><?=lang('apelido')?>: </b><?=$profile['user_profile_surname'];?></div>
                        <div><b>E-mail: </b><?=$profile['user_profile_email'];?></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="2">
                <div class="row account">
                    <div class="col-md-8" style="padding: 0 0 0 30px; width: 88%;">
                        <h3>Downloads</h3>
                        <div id="DefaultDable"></div>
                        <?php $arrayFicheiros;
                        $z = 0;
                        for ($i=0; $i < count($categoria_ficheiros); $i++) { 
                            for ($y=0; $y < count($ficheiros); $y++) {
                                if ($ficheiros[$y]['id_categoria_ficheiro'] == $categoria_ficheiros[$i]['id_categoria_ficheiro']) {
                                    $arrayFicheiros[$z][0] = $categoria_ficheiros[$i]['nome'];
                                    $arrayFicheiros[$z][1] = $ficheiros[$y]['nome_pt'];
                                    $arrayFicheiros[$z][2] = $ficheiros[$y]['ficheiro'];
                                    $z++;
                                }                                
                            }
                        }
                        ?>
                        <script type="text/javascript">
                            var dable = new Dable();
                            var data = <?php echo json_encode($arrayFicheiros); ?>;
                            var columns = [ "Categoria", "Nome", "Ficheiro" ];
                            dable.SetDataAsRows(data);
                            dable.SetColumnNames(columns);
                            dable.BuildAll("DefaultDable");
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /tabs -->
</div>
<?php } else { ?>
<div style="padding-left: 15px;">
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