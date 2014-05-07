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
    <?php if (!$_SESSION['logged_in']) { ?>
    <div style="padding-left: 15px;">
        <div class="alert alert-warning">
            <h5><strong>Atenção!</strong> Tem de efectuar o login.</h5>
        </div>
    </div>
    <?php } else { ?>
    <?php if ($_SESSION['logged_in']) { ?>
    <!-- tabs right -->
    <div class="tabbable tabs-right">
        <ul class="nav nav-tabs">
            <li class="active"><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                echo site_url('caixilharia/logout');
            } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                echo site_url('vidro/logout');
            } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                echo site_url('extrusao/logout');
            } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                echo site_url('tratamento/logout');
            } ?>">Logout</a></li>
        </ul>
    </div>
    <!-- /tabs -->
    <div style="width: 91%; padding-left: 15px;">
        <h3><?=lang('dados')?></h3>
        <div><b><?=lang('nome')?>: </b><?=$_SESSION['profile']['user_profile_name'];?></div>
        <div><b><?=lang('apelido')?>: </b><?=$_SESSION['profile']['user_profile_surname'];?></div>
        <div><b>E-mail: </b><?=$_SESSION['profile']['user_profile_email'];?></div>
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
            <?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) { ?>
                var columns = [ "Categoria", "Nome", "Ficheiro" ];
                <?php } else if (strpos($_SERVER['REQUEST_URI'], 'en')) { ?>
                    var columns = [ "Category", "Name", "File" ];
                    <?php } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) { ?>
                        var columns = [ "Catégorie", "Non", "Dossier" ];
                        <?php } else if (strpos($_SERVER['REQUEST_URI'], 'es')) { ?>
                            var columns = [ "Categoría", "Nombre", "Expediente" ];
                            <?php } ?>
                            dable.SetDataAsRows(data);
                            dable.SetColumnNames(columns);
                            dable.BuildAll("DefaultDable");
                        </script>
                    </div>
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