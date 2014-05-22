<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/password.css">
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
                } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                    echo site_url('tratamento/home');
                } ?>"><?=lang('home')?></a></li>
                <li><?=lang('alterar_password')?></li>
            </ul>
            <h1 class="title3"><?=lang('alterar_password')?></h1>
            <div class="mensagem alert alert-warning" id="jq_msg2"></div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-3">
            <form method="post" role="form" id="form4">
                <div class="texto">
                    <P>Insira a sua nova password.</P>
                    <label>Password:</label>
                    <input class="form-control input caixa-texto" type="password" id="password" name="password" placeholder="Password" value="<?php echo (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''); ?>">
                    <p></p>
                    <label><?=lang('confirmar')?>:</label>
                    <input class="form-control input caixa-texto" type="password" id="confirmar" name="confirmar" placeholder="<?=lang('confirmar')?>" value="<?php echo (isset($_POST['confirmar']) ? htmlspecialchars($_POST['confirmar']) : ''); ?>">
                    <p></p>
                    <div class="alterar">
                        <input class="btn btn-primary" type="submit" id="alterar" name="alterar" value="<?=lang('alterar')?>">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
