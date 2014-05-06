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
                } ?>"><?=lang('home')?></a></li>
                <li><?=lang('recuperar_password2')?></li>
            </ul>
            <h1 class="title3"><?=lang('recuperar_password2')?></h1>
        </div>
    </div>
    <div style="padding-left: 15px;">
        <div class="alert alert-warning">
            <h5><strong>Atenção!</strong> Tem de seleccionar uma página de apoio ao cliente. <a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                echo site_url('caixilharia/apoios_cliente');
            } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                echo site_url('vidro/apoios_cliente');
            } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                echo site_url('extrusao/apoios_cliente');
            } ?>">Voltar atrás.</a></h5>
        </div>
    </div>
</div>
