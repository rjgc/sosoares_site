<main>
    <div id="map">
        <div id="map-canvas"></div>
    </div>
    <div class="container">
        <div class="contactus">
            <div class="row">
                <div class="col-md-3">
                    <h3><?=lang('administrativo')?></h3>
                    <span id="mails"><a href="mailto:geral@sosoares.pt">geral@sosoares.pt</a></span>
                    <p>Rua do Baldeirão, 4440-346</p>
                    <p>Sobrado, Valongo - Portugal</p>
                    <hr class="divider">
                    <p>T +351 224 119 230</p>
                    <p>F +351 224 119 231</p>
                </div>
                <div class="col-md-3">
                    <h3><?=lang('dcomercial')?></h3>
                    <span id="mails"><a href="mailto:comercial@sosoares.pt">comercial@sosoares.pt</a></span>
                    <p>Rua do Campo Alegre, 474</p>
                    <p>4150-170 Porto - Portugal</p>
                    <hr class="divider">
                    <p>T +351 226 096 709</p>
                    <p>F +351 226 005 642</p>
                </div>
                <div class="col-md-3">
                    <h3><?=lang('dtecnico')?></h3>
                    <span id="mails"><a href="mailto:gabinete.tecnico@sosoares.pt">gabinete.tecnico@sosoares.pt</a></span>
                    <p>Rua do Campo Alegre, 474</p>
                    <p>4150-170 Porto - Portugal</p>
                    <hr class="divider">
                    <p>T +351 226 096 709</p>
                    <p>F +351 226 005 642</p>
                </div>
                <div class="col-md-3">
                    <h3><?=lang('desenvolvimento')?></h3>
                    <span id="mails"><a href="mailto:carlos.rodrigues@sosoares.pt">carlos.rodrigues@sosoares.pt</a></span>
                    <p>Travessa do Bolegão, 10 - Apartado 1</p>
                    <p>3754-904 Fermentelos</p>
                    <hr class="divider">
                    <p>T +351 234 729 740</p>
                    <p>F +351 234 729 741</p>
                </div>
            </div>
            <div class="row contactos">
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