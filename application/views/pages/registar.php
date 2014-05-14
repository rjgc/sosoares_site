<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/registar.css">
<?php echo $this->login->getScriptsLogin('home'); ?>
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
                } ?>"><?=lang('home')?></a></li>
                <li><?=lang('registar')?></li>
            </ul>
            <h1 class="title3"><?=lang('registar')?></h1>
            <div class="mensagem" id="jq_msg2"></div>
        </div>
    </div>
    <form class="mensagem" method="post" role="form" id="form2"> 
        <div class="row">
          <div class="col-md-6">            
            <label><?=lang('nome')?>*:</label>
            <input class="form-control input caixa-texto" type="text" id="nome" name="nome" placeholder="<?=lang('nome')?>" value="<?php echo set_value('nome'); ?>">
            <p></p>
            <label><?=lang('morada')?>*:</label>
            <input class="form-control input caixa-texto" type="text" id="morada" name="morada" placeholder="<?=lang('morada')?>" value="<?php echo set_value('morada'); ?>">
            <p></p>
            <label><?=lang('codigo')?>*:</label>
            <input class="form-control input caixa-texto" type="text" id="codigo" name="codigo" placeholder="<?=lang('codigo')?>" value="<?php echo set_value('codigo'); ?>">
            <p></p>
            <label><?=lang('localidade')?>*:</label>
            <input class="form-control input caixa-texto" type="text" id="localidade" name="localidade" placeholder="<?=lang('localidade')?>" value="<?php echo set_value('localidade'); ?>">
            <p></p>
            <label><?=lang('concelho')?>*:</label>
            <input class="form-control input caixa-texto" type="text" id="concelho" name="concelho" placeholder="<?=lang('concelho')?>" value="<?php echo set_value('concelho'); ?>">
            <p></p>
            <label><?=lang('distrito')?>*:</label>
            <input class="form-control input caixa-texto" type="text" id="distrito" name="distrito" placeholder="<?=lang('distrito')?>" value="<?php echo set_value('distrito'); ?>">
            <p></p>
            <label><?=lang('telefone')?>*:</label>
            <input class="form-control input caixa-texto" type="text" id="telefone" name="telefone" placeholder="<?=lang('telefone')?>" value="<?php echo set_value('telefone'); ?>">            
            <p></p>
            <label><?=lang('contribuinte')?>*:</label>
            <input class="form-control input caixa-texto" type="text" id="contribuinte" name="contribuinte" placeholder="<?=lang('contribuinte')?>" value="<?php echo set_value('contribuinte'); ?>">        
        </div>
        <div class="col-md-6">
            <p></p>
            <div class="row">
              <div class="col-md-1">  
                <label><?=lang('area')?>*:</label>
            </div>
            <div class="col-md-6">  
                <input style="vertical-align: text-top;" type="checkbox" name="caixilharia" value="Área Caixilharia" <?php echo set_checkbox('caixilharia', 'Área Caixilharia'); ?>><?=lang('rcaixilharia')?><br>
                <input style="vertical-align: text-top;" type="checkbox" name="vidraria" value="Área Vidraria" <?php echo set_checkbox('vidraria', 'Área Vidraria'); ?>><?=lang('rvidraria')?><br>
                <input style="vertical-align: text-top;" type="checkbox" name="extrusao" value="Área Extrusão" <?php echo set_checkbox('extrusao', 'Área Extrusão'); ?>><?=lang('rextrusao')?><br>
                <input style="vertical-align: text-top;" type="checkbox" name="tratamento" value="Área Tratamento" <?php echo set_checkbox('tratamento', 'Área Tratamento'); ?>><?=lang('rtratamento')?><br>
                <input style="vertical-align: text-top;" type="checkbox" name="geral" value="Geral" <?php echo set_checkbox('geral', 'Geral'); ?>><?=lang('geral')?><br>
            </div>
        </div>
        <p></p>
        <label>E-mail*:</label>
        <input class="form-control input caixa-texto" type="text" id="email" name="email" placeholder="E-mail" value="<?php echo set_value('email'); ?>">
        <p></p>
        <label>Username*:</label>
        <input class="form-control input caixa-texto" type="text" id="username" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
        <p></p>
        <label>Password*:</label>
        <input class="form-control input caixa-texto" type="password" id="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
        <p></p>
        <label><?=lang('confirmar')?>*:</label>
        <input class="form-control input caixa-texto" type="password" id="confirmar" name="confirmar" placeholder="<?=lang('confirmar')?>" value="<?php echo set_value('confirmar'); ?>">
        <p></p>
        <span class="obrigatorio">* <?=lang('obrigatorio')?></span>
        <div class="botoes">
            <input class="btn btn-primary" type="submit" id="registar" name="registar" value="<?=lang('registar')?>">
            <input class="btn btn-default" type="reset" data-dismiss="modal" id="cancel" name="cancel" value="<?=lang('cancelar')?>">
        </div>
    </div>
</div>
</form>
</div>

