<main>
    <div id="map">
        <div id="map-canvas"></div>
    </div>
    <div class="container">
        <div class="contactus">
            <div class="row">
                <div class="col-md-3">
                    <h3>Departamento Administrativo</h3>
                    <span id="mails"><a href="mailto:geral@sosoares.pt">geral@sosoares.pt</a></span>
                    <p>Rua do Baldeirão, 4440-346</p>
                    <p>Sobrado, Valongo - Portugal</p>
                    <hr class="divider">
                    <p>T +351 224 119 230</p>
                    <p>F +351 224 119 231</p>
                </div>
                <div class="col-md-3">
                    <h3>Departamento Comercial</h3>
                    <span id="mails"><a href="mailto:comercial@sosoares.pt">comercial@sosoares.pt</a></span>
                    <p>Rua do Campo Alegre, 474</p>
                    <p>4150-170 Porto - Portugal</p>
                    <hr class="divider">
                    <p>T +351 226 096 709</p>
                    <p>F +351 226 005 642</p>
                </div>
                <div class="col-md-3">
                    <h3>Departamento Técnico</h3>
                    <span id="mails"><a href="mailto:gabinete.tecnico@sosoares.pt">gabinete.tecnico@sosoares.pt</a></span>
                    <p>Rua do Campo Alegre, 474</p>
                    <p>4150-170 Porto - Portugal</p>
                    <hr class="divider">
                    <p>T +351 226 096 709</p>
                    <p>F +351 226 005 642</p>
                </div>
                <div class="col-md-3">
                    <h3>Departamento Desenvolvimento</h3>
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
                            <legend>Dados Pessoais</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="nome">Nome:*</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="nome" name="nome" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="empresa">Empresa:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="empresa" name="empresa" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="cargo">Cargo:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="cargo" name="cargo" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="telf">Telefone:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="telf" name="telf" type="tel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="fax">Fax:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="fax" name="fax" type="tel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="telm">Telemóvel:*</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="telm" name="telm" type="tel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mail">E-mail:*</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="mail" name="mail" type="email">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="morada">Morada:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="morada" name="morada" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Observações</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="assunto">Assunto:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="assunto" name="assunto">
                                        <option selected value="-1">Selecione um item</option>
                                        <option value="comercial">Comercial</option>
                                        <option value="tecnico">Técnico</option>
                                        <option value="administrativo">Administrativo</option>
                                        <option value="desenvolvimento">Desenvolvimento</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="mensagem">Mensagem:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="mensagem" name="mensagem" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <span style="display: inline-block">* Campo Obrigatório</span>
                                <div style="float: right;margin: 15px 30px">
                                    <input class="btn button shrink" type="reset" value="Limpar">
                                    <input class="btn button shrink" type="submit" value="Enviar">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>