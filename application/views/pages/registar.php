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
            <label><?=lang('nome')?>:</label>
            <input class="form-control input caixa-texto" type="text" id="nome" name="nome" placeholder="<?=lang('nome')?>" value="<?php echo (isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : ''); ?>">
            <p></p>
            <label><?=lang('morada')?>:</label>
            <input class="form-control input caixa-texto" type="text" id="morada" name="morada" placeholder="<?=lang('morada')?>" value="<?php echo (isset($_POST['morada']) ? htmlspecialchars($_POST['morada']) : ''); ?>">
            <p></p>
            <label><?=lang('codigo')?>:</label>
            <input class="form-control input caixa-texto" type="text" id="codigo" name="codigo" placeholder="<?=lang('codigo')?>" value="<?php echo (isset($_POST['codigo']) ? htmlspecialchars($_POST['codigo']) : ''); ?>">
            <p></p>
            <label><?=lang('localidade')?>:</label>
            <input class="form-control input caixa-texto" type="text" id="localidade" name="localidade" placeholder="<?=lang('localidade')?>" value="<?php echo (isset($_POST['localidade']) ? htmlspecialchars($_POST['localidade']) : ''); ?>">
            <p></p>
            <label><?=lang('concelho')?>:</label>
            <input class="form-control input caixa-texto" type="text" id="concelho" name="concelho" placeholder="<?=lang('concelho')?>" value="<?php echo (isset($_POST['concelho']) ? htmlspecialchars($_POST['concelho']) : ''); ?>">
            <p></p>
            <label><?=lang('distrito')?>:</label>
            <input class="form-control input caixa-texto" type="text" id="distrito" name="distrito" placeholder="<?=lang('distrito')?>" value="<?php echo (isset($_POST['distrito']) ? htmlspecialchars($_POST['distrito']) : ''); ?>">
            <p></p>
            <label><?=lang('telefone')?>:</label>
            <input class="form-control input caixa-texto" type="text" id="telefone" name="telefone" placeholder="<?=lang('telefone')?>" value="<?php echo (isset($_POST['telefone']) ? htmlspecialchars($_POST['telefone']) : ''); ?>">            
            <p></p>
            <label><?=lang('contribuinte')?>:</label>
            <input class="form-control input caixa-texto" type="text" id="contribuinte" name="contribuinte" placeholder="<?=lang('contribuinte')?>" value="<?php echo (isset($_POST['contribuinte']) ? htmlspecialchars($_POST['contribuinte']) : ''); ?>">        
        </div>
        <div class="col-md-6">
            <p></p>
            <div class="row">
              <div class="col-md-1">  
                <label><?=lang('area')?>:</label>
            </div>
            <div class="col-md-6">  
                <input style="vertical-align: text-top;" type="checkbox" name="caixilharia" value="<?php echo (isset($_POST['caixilharia']) ? htmlspecialchars($_POST['caixilharia']) : ''); ?>"><?=lang('rcaixilharia')?><br>
                <input style="vertical-align: text-top;" type="checkbox" name="vidraria" value="<?php echo (isset($_POST['vidraria']) ? htmlspecialchars($_POST['vidraria']) : ''); ?>"><?=lang('rvidraria')?><br>
                <input style="vertical-align: text-top;" type="checkbox" name="extrusao" value="<?php echo (isset($_POST['extrusao']) ? htmlspecialchars($_POST['extrusao']) : ''); ?>"><?=lang('rextrusao')?><br>
                <input style="vertical-align: text-top;" type="checkbox" name="tratamento" value="<?php echo (isset($_POST['tratamento']) ? htmlspecialchars($_POST['tratamento']) : ''); ?>"><?=lang('rtratamento')?><br>
                <input style="vertical-align: text-top;" type="checkbox" name="geral" value="<?php echo (isset($_POST['geral']) ? htmlspecialchars($_POST['geral']) : ''); ?>"><?=lang('geral')?><br>
            </div>
        </div>
        <p></p>
        <label>E-mail:</label>
        <input class="form-control input caixa-texto" type="text" id="email" name="email" placeholder="E-mail" value="<?php echo (isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''); ?>">
        <p></p>
        <label>Username:</label>
        <input class="form-control input caixa-texto" type="text" id="username" name="username" placeholder="Username" value="<?php echo (isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''); ?>">
        <p></p>
        <label>Password:</label>
        <input class="form-control input caixa-texto" type="password" id="password" name="password" placeholder="Password" value="<?php echo (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''); ?>">
        <p></p>
        <label><?=lang('confirmar')?>:</label>
        <input class="form-control input caixa-texto" type="password" id="confirmar" name="confirmar" placeholder="<?=lang('confirmar')?>" value="<?php echo (isset($_POST['confirmar']) ? htmlspecialchars($_POST['confirmar']) : ''); ?>">
        <p></p>
        <div class="botoes">
            <input class="btn btn-primary" type="submit" id="registar" name="registar" value="<?=lang('registar')?>">
            <input class="btn btn-default" type="reset" data-dismiss="modal" id="cancel" name="cancel" value="<?=lang('cancelar')?>">
        </div>
    </div>
</div>
</form>
</div>

