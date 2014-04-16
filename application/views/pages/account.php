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
    <div class="row candidaturas">
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