<style>
    /* custom inclusion of right, left and below tabs */

.tabs-below > .nav-tabs,
.tabs-right > .nav-tabs,
.tabs-left > .nav-tabs {
  border-bottom: 0;
}

.tab-content > .tab-pane,
.pill-content > .pill-pane {
  display: none;
}

.tab-content > .active,
.pill-content > .active {
  display: block;
}

.tabs-below > .nav-tabs {
  border-top: 1px solid #ddd;
}

.tabs-below > .nav-tabs > li {
  margin-top: -1px;
  margin-bottom: 0;
}

.tabs-below > .nav-tabs > li > a {
  -webkit-border-radius: 0 0 4px 4px;
     -moz-border-radius: 0 0 4px 4px;
          border-radius: 0 0 4px 4px;
}

.tabs-below > .nav-tabs > li > a:hover,
.tabs-below > .nav-tabs > li > a:focus {
  border-top-color: #ddd;
  border-bottom-color: transparent;
}

.tabs-below > .nav-tabs > .active > a,
.tabs-below > .nav-tabs > .active > a:hover,
.tabs-below > .nav-tabs > .active > a:focus {
  border-color: transparent #ddd #ddd #ddd;
}

.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li {
  float: none;
}

.tabs-left > .nav-tabs > li > a,
.tabs-right > .nav-tabs > li > a {
  min-width: 74px;
  margin-right: 0;
  margin-bottom: 3px;
}

.tabs-left > .nav-tabs {
  float: left;
  margin-right: 19px;
  border-right: 1px solid #ddd;
}

.tabs-left > .nav-tabs > li > a {
  margin-right: -1px;
  -webkit-border-radius: 4px 0 0 4px;
     -moz-border-radius: 4px 0 0 4px;
          border-radius: 4px 0 0 4px;
}

.tabs-left > .nav-tabs > li > a:hover,
.tabs-left > .nav-tabs > li > a:focus {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}

.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus {
  border-color: #ddd transparent #ddd #ddd;
  *border-right-color: #ffffff;
}

.tabs-right > .nav-tabs {
  float: right;
  margin-left: 19px;
  border-left: 1px solid #ddd;
}

.tabs-right > .nav-tabs > li > a {
  margin-left: -1px;
  -webkit-border-radius: 0 4px 4px 0;
     -moz-border-radius: 0 4px 4px 0;
          border-radius: 0 4px 4px 0;
}

.tabs-right > .nav-tabs > li > a:hover,
.tabs-right > .nav-tabs > li > a:focus {
  border-color: #eeeeee #eeeeee #eeeeee #dddddd;
}

.tabs-right > .nav-tabs .active > a,
.tabs-right > .nav-tabs .active > a:hover,
.tabs-right > .nav-tabs .active > a:focus {
  border-color: #ddd #ddd #ddd transparent;
  *border-left-color: #ffffff;
}

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
          <li><a href="#2" data-toggle="tab">Ficheiros</a></li>
          <li><a href="#3" data-toggle="tab">Three</a></li>
        </ul>
        <div class="tab-content">
         <div class="tab-pane active" id="1"><div class="row candidaturas">
        <div class="col-md-8" style="padding-left: 30px;">
            <form method="get">
                <fieldset>
                    <legend><?=lang('dados')?></legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome">Username:*</label>
                        <div class="col-sm-10">
                            <?= $this->ion_auth->user()->row()->username; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="mail"><?=lang('nome')?>:*</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="mail" name="mail" type="email" value="<?= $this->ion_auth->user()->row()->username; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="mail"><?=lang('email')?>:*</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="mail" name="mail" type="email" value="<?= $this->ion_auth->user()->row()->email; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="telf"><?=lang('telefone')?>:*</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="telf" name="telf" type="tel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="telm"><?=lang('telemovel')?>:</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="telm" name="telm" type="tel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="cv"><?=lang('cv')?>:</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="cv" name="cv" type="file">
                        </div>
                    </div>
                    <br>
                    <div class="form-group" style="margin-top: -13px;">
                        <label class="col-sm-2 control-label" for="apresentacao"><?=lang('apresentacao')?>:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="apresentacao" name="apresentacao" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <span style="display: inline-block; padding-left: 30px;">* <?=lang('obrigatorio')?></span>
                        <div style="float: right;margin: 15px 30px">
                            <input class="btn button shrink" type="reset" value="<?=lang('limpar')?>">
                            <input class="btn button shrink" type="submit" value="<?=lang('enviar')?>">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
         </div>
         <div class="tab-pane" id="2">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
         Aliquam in felis sit amet augue.</div>
         <div class="tab-pane" id="3">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
         Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
        </div>
      </div>
      <!-- /tabs -->
    
</div>