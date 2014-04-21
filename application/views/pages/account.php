<?php if (isset($_SESSION['userid'])) { ?>
<style>
.tabs-right > .nav-tabs {border-bottom: 0;}

.tab-content > .tab-pane, .pill-content > .pill-pane {display: none;}
.tab-content > .active, .pill-content > .active {display: block;}

.tabs-right > .nav-tabs > li {float: none;border: 0;background: rgba(168,200,213,0.5);border-radius: 0;width: 100px;text-align: right;}
.tabs-right > .nav-tabs > li > a { min-width: 74px; margin-right: 0; margin-bottom: 3px;color: #000;border-radius: 0;}
.tabs-right > .nav-tabs {float: right;margin-left: 19px;}
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
    
    <!-- tabs right -->
    <div class="tabbable tabs-right">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#1" data-toggle="tab">Perfil</a></li>
            <li><a href="#2" data-toggle="tab">Downloads</a></li>
            <li><a href="#3" data-toggle="tab">Three</a></li>
            <li><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                    echo site_url('login/logout');
                    session_unset();
                    session_destroy();
                } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                    echo site_url('login/logout');
                    session_unset();
                    session_destroy();
                } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                    echo site_url('login/logout');
                    session_unset();
                    session_destroy();
                } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                    echo site_url('login/logout');
                    session_unset();
                    session_destroy();
                } ?>">Logout</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="1">
                <div class="row account">
                    <div class="col-md-8" style="padding: 0 0 0 30px;">
                        <h3><?=lang('dados')?></h3>
                        <div><b>Username: </b><?= $this->ion_auth->user()->row()->username; ?></div>
                        <div><b>Primeiro Nome: </b><?= $this->ion_auth->user()->row()->username; ?></div>
                        <div><b>Último Nome: </b><?= $this->ion_auth->user()->row()->username; ?></div>
                        <div><b>E-mail: </b><?= $this->ion_auth->user()->row()->email; ?></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="2">
                <div class="row account">
                    <div class="col-md-8" style="padding: 0 0 0 30px;">
                        <h3>Downloads</h3>
                        <div><b>Username: </b><?= $this->ion_auth->user()->row()->username; ?></div>
                        <div><b>E-mail: </b><?= $this->ion_auth->user()->row()->email; ?></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="3">
                Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                Quisque mauris augue, molestie tincidunt condimentum vitae.
            </div>
        </div>
    </div>
    <!-- /tabs -->
</div>
<?php } ?>