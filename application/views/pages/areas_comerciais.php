<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/areas-comerciais.css">
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
                }?>"><?=lang('home')?></a></li>
                <li><?=lang('grupo')?></li>
                <li><?=lang('comerciais')?></li>
            </ul>
            <h1 class="title3"><?=lang('comerciais')?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mapa">
            <div id="map-instaladores">
                <div id="map-canvas"></div>
            </div>
        </div>
    </div>
</div>