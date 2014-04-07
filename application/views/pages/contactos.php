<main>
    <div id="map">
        <div id="map-canvas"></div>
    </div>
    <div class="container">
        <div class="contactus">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
<?php           foreach($contactos as $contacto) { ?>
                        <div class="col-md-6">
                            <h3><?=$contacto['nome_departamento_'.$this->lang->lang()]?></h3>
                            <span id="mails"><a href="mailto:<?=$contacto['email'] ?>"><?=$contacto['email'] ?></a></span>
                            <p><?=$contacto['morada'] ?></p>
                            <p><?=$contacto['codigo_postal'] ?></p>
                            <hr class="divider">
                            <p>T +351 <?=$contacto['telefone'] ?></p>
                            <p>F +351 <?=$contacto['fax'] ?></p>
                        </div>
<?php           } ?>
                    </div>
                </div>
                <div class="col-md-6">

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
                                <label class="col-sm-2 control-label" for="empresa"><?=lang('empresa')?>:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="empresa" name="empresa" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="cargo"><?=lang('cargo')?>:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="cargo" name="cargo" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="telf"><?=lang('telefone')?>:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="telf" name="telf" type="tel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="fax"><?=lang('fax')?>:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="fax" name="fax" type="tel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="telm"><?=lang('telemovel')?>:*</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="telm" name="telm" type="tel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mail"><?=lang('email')?>:*</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="mail" name="mail" type="email">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="morada"><?=lang('morada')?>:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="morada" name="morada" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend><?=lang('observacoes')?></legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="assunto"><?=lang('assunto')?>:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="assunto" name="assunto">
                                        <option selected value="-1"><?=lang('item')?></option>
                                        <option value="comercial"><?=lang('dcomercial')?></option>
                                        <option value="tecnico"><?=lang('dtecnico')?></option>
                                        <option value="administrativo"><?=lang('administrativo')?></option>
                                        <option value="desenvolvimento"><?=lang('desenvolvimento')?></option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="mensagem"><?=lang('mensagem')?>:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="mensagem" name="mensagem" rows="5"></textarea>
                                    </div>
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
    </div>
</main>