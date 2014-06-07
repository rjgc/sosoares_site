<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/contactos.css">
<div id="map">
    <div id="map-canvas"></div>
</div>
<div class="container">
    <div class="contactus">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <?php foreach($contactos as $contacto) { ?>
                    <div class="col-md-6">
                        <h3><?=$contacto['nome_departamento_'.$this->lang->lang()]?></h3>
                        <span id="mails"><a href="mailto:<?=$contacto['email'] ?>"><?=$contacto['email'] ?></a></span>
                        <p><?=$contacto['morada'] ?></p>
                        <p><?=$contacto['codigo_postal'] ?></p>
                        <hr class="divider">
                        <p>T +351 <?=$contacto['telefone'] ?></p>
                        <p>F +351 <?=$contacto['fax'] ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>               
            <div class="col-md-6">                
                <form method="post" role="form" id="form6">  
                    <fieldset>
                        <legend class="dados"><?=lang('dados')?></legend>
                        <div class="mensagem alert alert-warning" id="jq_msg2"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="nome"><?=lang('nome')?>:*</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="nome" name="nome" type="text" placeholder="<?=lang('nome')?>" value="<?php set_value('nome'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="empresa"><?=lang('empresa')?>:</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="empresa" name="empresa" type="text" placeholder="<?=lang('empresa')?>" value="<?php set_value('empresa'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="cargo"><?=lang('cargo')?>:</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="cargo" name="cargo" type="text" placeholder="<?=lang('cargo')?>" value="<?php set_value('cargo'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="telf"><?=lang('telefone')?>:</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="telefone" name="telefone" type="tel" placeholder="<?=lang('telefone')?>" value="<?php set_value('telefone'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="fax"><?=lang('fax')?>:</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="fax" name="fax" type="tel" placeholder="<?=lang('fax')?>" value="<?php set_value('fax'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="telm"><?=lang('telemovel')?>:*</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="telemovel" name="telemovel" type="tel" placeholder="<?=lang('telemovel')?>" value="<?php set_value('telemovel'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="mail"><?=lang('email')?>:*</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="email" name="email" type="email" placeholder="<?=lang('email')?>" value="<?php set_value('email'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="morada"><?=lang('morada')?>:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="morada" name="morada" rows="3" placeholder="<?=lang('morada')?>" value="<?php set_value('morada'); ?>"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="pais"><?=lang('pais')?>:*</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="pais" name="pais" placeholder="<?=lang('pais')?>" value="<?php set_value('pais'); ?>">
                                <option selected value="-1"><?=lang('spais')?></option>
                                    <?php foreach ($paises as $pais) { ?>
                                    <option value="<?=$pais?>"><?=$pais?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" id="labelDistrito" for="distrito"><?=lang('distrito')?>:*</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="distrito" name="distrito" placeholder="<?=lang('distrito')?>" value="<?php set_value('distrito'); ?>">
                                    <option selected value="-1"><?=lang('sdistrito')?></option>
                                    <?php foreach ($distritos as $distrito) { ?>
                                    <option value="<?=$distrito?>"><?=$distrito?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" id="labelConcelho" for="concelho"><?=lang('concelho')?>:*</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="concelho" name="concelho" placeholder="<?=lang('concelho')?>" value="<?php set_value('concelho'); ?>">
                                    <option selected value="-1"><?=lang('sdistrito')?></option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?=lang('observacoes')?></legend>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="assunto"><?=lang('assunto')?>:*</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="assunto" name="assunto" placeholder="<?=lang('assunto')?>" value="<?php set_value('assunto'); ?>">
                                    <option selected value="-1"><?=lang('item')?></option>
                                    <option value="Departamento Comercial"></option>
                                    <option value="Departamento Comercial"><?=lang('dcomercial')?></option>
                                    <option value="Departamento Técnico"><?=lang('dtecnico')?></option>
                                    <option value="Departamento Administrativo"><?=lang('administrativo')?></option>
                                    <option value="Departamento Desenvolvimento"><?=lang('desenvolvimento')?></option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mensagem"><?=lang('mensagem')?>:*</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="<?=lang('mensagem')?>" value="<?php set_value('mensagem'); ?>"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="row">
                            <div class="col-md-12">
                                <span class="obrigatorio">* <?=lang('obrigatorio')?></span>
                                <div class="botoes">
                                    <input class="btn button grow" type="reset" id="limpar" name="limpar" value="<?=lang('limpar')?>">
                                    <input class="btn button grow" type="submit" id="enviar" name="enviar" value="<?=lang('enviar')?>">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">var item = '<?=lang("sconcelho")?>'</script>
<script src="<?php echo base_url() ?>assets/sosoares/js/contactos.js"></script>
