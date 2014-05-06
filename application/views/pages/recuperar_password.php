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
                <li><?=lang('recuperar_password2')?></li>
            </ul>
            <h1 class="title3"><?=lang('recuperar_password')?></h1>
            <div style="padding-left: 18px;" id="jq_msg2"></div>
        </div>
    </div>
    <form method="post" role="form" id="form3">
        <div style="padding-left: 15px;">
            <P>Insira o seu email para recuperar a sua password. Você pode precisar de ver a sua pasta de spam.</P>
            <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4; width: 54.2%;" class="form-control input" type="text" id="email" name="email" placeholder="E-mail">
            <p></p>
            <div style="padding-left: 538px;">
                <input class="btn btn-primary" type="submit" id="recuperar" name="recuperar" value="<?=lang('recuperar')?>">
            </div>
        </div>
    </form>
</div>
