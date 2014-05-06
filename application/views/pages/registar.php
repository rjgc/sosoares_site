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
            <div style="padding-left: 18px;" id="jq_msg2"></div>
        </div>
    </div>
    <form style="padding-left: 18px;" method="post" role="form" id="form2"> 
        <div class="row">
          <div class="col-md-6">            
            <label><?=lang('nome')?>:</label>
            <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="nome" name="nome" placeholder="<?=lang('nome')?>">
            <p></p>
            <label><?=lang('morada')?>:</label>
            <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="morada" name="morada" placeholder="<?=lang('morada')?>">
            <p></p>
            <label><?=lang('codigo')?>:</label>
            <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="codigo" name="codigo" placeholder="<?=lang('codigo')?>">
            <p></p>
            <label><?=lang('localidade')?>:</label>
            <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="localidade" name="localidade" placeholder="<?=lang('localidade')?>">
            <p></p>
            <label><?=lang('concelho')?>:</label>
            <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="concelho" name="concelho" placeholder="<?=lang('concelho')?>">
            <p></p>
            <label><?=lang('distrito')?>:</label>
            <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="distrito" name="distrito" placeholder="<?=lang('distrito')?>">
            <p></p>
            <label><?=lang('telefone')?>:</label>
            <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="telefone" name="telefone" placeholder="<?=lang('telefone')?>">
            <p></p>
            <label><?=lang('bi')?>:</label>
            <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="bi" name="bi" placeholder="<?=lang('bi')?>">
            <p></p>
            <label><?=lang('contribuinte')?>:</label>
            <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="contribuinte" name="contribuinte" placeholder="<?=lang('contribuinte')?>">        
        </div>
        <div class="col-md-6">
            <p></p>
            <div class="row">
              <div class="col-md-1">  
                <label><?=lang('area')?>:</label>
            </div>
            <div class="col-md-6">  
                <input style="vertical-align: text-top;" type="checkbox" name="caixilharia" value="<?=lang('rcaixilharia')?>"><?=lang('rcaixilharia')?><br>
                <input style="vertical-align: text-top;" type="checkbox" name="vidraria" value="<?=lang('rvidraria')?>"><?=lang('rvidraria')?><br>
                <input style="vertical-align: text-top;" type="checkbox" name="extrusao" value="<?=lang('rextrusao')?>"><?=lang('rextrusao')?><br>
                <input style="vertical-align: text-top;" type="checkbox" name="tratamento" value="<?=lang('rtratamento')?>"><?=lang('rtratamento')?><br>
                <input style="vertical-align: text-top;" type="checkbox" name="geral" value="<?=lang('geral')?>"><?=lang('geral')?><br>
            </div>
        </div>
        <p></p>
        <label>E-mail:</label>
        <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="email" name="email" placeholder="E-mail">
        <p></p>
        <label>Username:</label>
        <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="username" name="username" placeholder="Username">
        <p></p>
        <label>Password:</label>
        <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="password" id="password" name="password" placeholder="Password">
        <p></p>
        <label><?=lang('confirmar')?>:</label>
        <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="text" id="confirmar" name="confirmar" placeholder="<?=lang('confirmar')?>">
        <p></p>
        <div style="padding-left: 92px;">
            <input class="btn btn-primary" type="submit" id="registar" name="registar" value="<?=lang('registar')?>">
            <input class="btn btn-default" type="button" data-dismiss="modal" id="cancel" name="cancel" value="<?=lang('cancelar')?>">
        </div>
    </div>
</div>
</form>
</div>

