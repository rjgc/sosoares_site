<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('pages/home_caixilharia')?>"><?=lang('home')?></a></li>
                <li><a href="#"><?=lang('grupo')?></a></li>
                <li><?=lang('candidaturas')?></li>
            </ul>
            <h1 class="title3"><?=lang('candidaturas')?></h1>
        </div>
    </div>
    <div class="row candidaturas">
        <div class="col-md-8">
            <form method="get">
                <fieldset>
                    <legend><?=lang('dados')?></legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome"><?=lang('nome')?>:*</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="nome" name="nome" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="mail"><?=lang('email')?>:*</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="mail" name="mail" type="email">
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
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="apresentacao"><?=lang('apresentacao')?>:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="apresentacao" name="apresentacao" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <span style="display: inline-block">* <?=lang('obrigatorio')?></span>
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