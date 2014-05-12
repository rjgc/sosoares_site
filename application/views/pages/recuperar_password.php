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
                <li><?=lang('recuperar_password2')?></li>
            </ul>
            <h1 class="title3"><?=lang('recuperar_password')?></h1>
            <div class="mensagem" id="jq_msg2"></div>
        </div>
    </div>
    <form method="post" role="form" id="form3">
        <div class="texto">
            <P>Insira o seu email para recuperar a sua password. Você pode precisar de ver a sua pasta de spam.</P>
            <input class="form-control input caixa-texto" type="text" id="email" name="email" placeholder="E-mail" value="<?php echo (isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''); ?>">
            <p></p>
            <div class="recuperar">
                <input class="btn btn-primary" type="submit" id="recuperar" name="recuperar" value="<?=lang('recuperar')?>">
            </div>
        </div>
    </form>
</div>
