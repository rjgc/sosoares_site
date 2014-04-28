<main>
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
                <?php if (!empty($message)) echo $message; ?>
                <?php $this->load->helper('form'); ?>
                <?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                    $url = $this->lang->lang().'/caixilharia/send_contactos';
                } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                    $url = $this->lang->lang().'/vidro/send_contactos';
                } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                    $url = $this->lang->lang().'/extrusao/send_contactos';
                } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                    $url = $this->lang->lang().'/tratamento/send_contactos';
                } echo form_open($url)?>
                <div class="col-md-6">
                    <form>
                        <fieldset>
                            <legend><?=lang('dados')?></legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="nome"><?=lang('nome')?>:*</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="nome" name="nome" type="text" value="<?php echo ($reset) ? "" : set_value('nome'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="empresa"><?=lang('empresa')?>:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="empresa" name="empresa" type="text" value="<?php echo ($reset) ? "" : set_value('empresa'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="cargo"><?=lang('cargo')?>:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="cargo" name="cargo" type="text" value="<?php echo ($reset) ? "" : set_value('cargo'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="telf"><?=lang('telefone')?>:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="telefone" name="telefone" type="tel" value="<?php echo ($reset) ? "" : set_value('telefone'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="fax"><?=lang('fax')?>:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="fax" name="fax" type="tel" value="<?php echo ($reset) ? "" : set_value('fax'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="telm"><?=lang('telemovel')?>:*</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="telemovel" name="telemovel" type="tel" value="<?php echo ($reset) ? "" : set_value('telemovel'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mail"><?=lang('email')?>:*</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="email" name="email" type="email" value="<?php echo ($reset) ? "" : set_value('email'); ?>">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="morada"><?=lang('morada')?>:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="morada" name="morada" rows="3" value="<?php echo ($reset) ? "" : set_value('morada'); ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="col-sm-2 control-label" for="distrito"><?=lang('distrito')?>:*</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="distrito" name="distrito" value="<?php echo ($reset) ? "" : set_value('distrito'); ?>">
                                        <option selected value="-1"><?=lang('item')?></option>
                                        <?php foreach ($distritos as $distrito) { ?>
                                        <option value="<?=$distrito?>"><?=$distrito?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="col-sm-2 control-label" for="concelho"><?=lang('concelho')?>:*</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="concelho" name="concelho" value="<?php echo ($reset) ? "" : set_value('concelho'); ?>">
                                        <option selected value="-1"><?=lang('item')?></option>
                                        <?php foreach ($concelhos as $concelho) { ?>
                                        <option value="<?=$concelho?>"><?=$concelho?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend><?=lang('observacoes')?></legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="assunto"><?=lang('assunto')?>:*</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="assunto" name="assunto" value="<?php echo ($reset) ? "" : set_value('assunto'); ?>">
                                        <option selected value="-1"><?=lang('item')?></option>
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
                                        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" value="<?php echo ($reset) ? "" : set_value('mensagem'); ?>"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <span style="display: inline-block; padding-left: 15px;">* <?=lang('obrigatorio')?></span>
                                <div style="float: right;margin: 15px 30px">
                                    <input class="btn button grow" type="reset" value="<?=lang('limpar')?>">
                                    <input class="btn button grow" type="submit" value="<?=lang('enviar')?>">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</main>