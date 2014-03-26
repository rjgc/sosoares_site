<div class="container candidaturas">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('pages/home_caixilharia')?>">Início</a></li>
                <li><a href="#">Grupo Sosoares</a></li>
                <li>Candidaturas</li>
            </ul>
            <h1 class="title3">Candidaturas</h1>
        </div>
    </div>
    <div class="row">
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
                        <label class="col-sm-2 control-label" for="mail">E-mail:*</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="mail" name="mail" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="telf">Telefone:*</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="telf" name="telf" type="tel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="telm">Telemóvel:</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="telm" name="telm" type="tel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="cv">Curriculum Vitae:</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="cv" name="cv" type="file">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="apresentacao">Apresentação:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="apresentacao" name="apresentacao" rows="5"></textarea>
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