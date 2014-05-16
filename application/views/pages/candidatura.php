<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/candidatura.css">
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
                <li><?=lang('grupo')?></li>
                <li><?=lang('candidaturas')?></li>
            </ul>
            <h1 class="title3"><?=lang('candidaturas')?></h1>
        </div>
    </div>
    <?php if (!empty($message)) ?> 
    <p class="mensagem"><?php echo $message; ?></p>  
    <?php $this->load->helper('form'); ?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
        $url = $this->lang->lang().'/caixilharia/send_candidatura';
    } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
        $url = $this->lang->lang().'/vidro/send_candidatura';
    } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
        $url = $this->lang->lang().'/extrusao/send_candidatura';
    } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
        $url = $this->lang->lang().'/tratamento/send_candidatura';
    } echo form_open_multipart($url)?>
    <div class="row candidaturas">
        <div class="col-md-8 candidatura">
            <form method="get">
                <fieldset>
                    <legend><?=lang('dados')?></legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome"><?=lang('nome')?>:*</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="nome" name="nome" type="text" value="<?php echo ($reset) ? "" : set_value('nome'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="mail"><?=lang('email')?>:*</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="email" name="email" type="email" value="<?php echo ($reset) ? "" : set_value('email'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="telf"><?=lang('telefone')?>:*</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="telefone" name="telefone" type="telefone" value="<?php echo ($reset) ? "" : set_value('telefone'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="telm"><?=lang('telemovel')?>:</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="telemovel" name="telemovel" type="telemovel" value="<?php echo ($reset) ? "" : set_value('telemovel'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="cv"><?=lang('cv')?>:*</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="cv" name="cv" type="file" value="<?php echo ($reset) ? "" : set_value('cv'); ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group apresentacao">
                        <label class="col-sm-2 control-label" for="apresentacao"><?=lang('apresentacao')?>:*</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="apresentacao" name="apresentacao" rows="5" value="<?php echo ($reset) ? "" : set_value('apresentacao'); ?>"></textarea>
                        </div>
                    </div>
                    <div class="row" id="row">
                        <span class="obrigatorio">* <?=lang('obrigatorio')?></span>
                        <div class="botoes">
                            <input class="btn button grow" type="reset" value="<?=lang('limpar')?>">
                            <input class="btn button grow" type="submit" value="<?=lang('enviar')?>">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>