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
                <li><?=lang('alterar_password')?></li>
            </ul>
            <h1 class="title3"><?=lang('alterar_password')?></h1>
            <div style="padding-left: 18px;" id="jq_msg2"></div>
        </div>
    </div>
    <form method="post" role="form" id="form4">
        <div style="padding-left: 15px;">
            <P>Insira a sua nova password.</P>
            <label>Password:</label>
            <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="password" id="password" name="password" placeholder="Password" value="<?php echo (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''); ?>">
            <p></p>
            <label><?=lang('confirmar')?>:</label>
            <input style="padding: 0 0 0 10px !important; border: 1px solid #107ca4;" class="form-control input" type="password" id="confirmar" name="confirmar" placeholder="<?=lang('confirmar')?>" value="<?php echo (isset($_POST['confirmar']) ? htmlspecialchars($_POST['confirmar']) : ''); ?>">
            <p></p>
            <div style="padding-left: 179px;">
                <input class="btn btn-primary" type="submit" id="alterar" name="alterar" value="<?=lang('alterar')?>">
            </div>
        </div>
    </form>
</div>
