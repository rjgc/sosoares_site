<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/inicio.css">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/ie8/inicio.css">
<![endif]-->
<?php echo $this->login->getScriptsLogin('home'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 destaque">
            <div class="row">
                <div class="md-3">
                    <h1 class="title1"><?=lang('destaque')?></h1>
                </div>
                <div class="col-md-9">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 data-noticia">
                    <h3 id="date"><?=$noticia['data_noticia']?></h3>
                </div>
                <div class="col-md-7">
                    <h3 class="title2"><?=$noticia['titulo_'.$this->lang->lang()]?></h3>
                </div>
                <div class="col-md-1">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col-md-4 noticia">
                    <img src="<?php echo base_url();?>assets/uploads/noticias/thumb/<?php echo $noticia['foto'];?>" alt="Image" class="img-responsive">
                </div>
                <div class="col-md-7 texto">
                    <p><?php echo substr($noticia['texto_'.$this->lang->lang()], 0, 150); if (strlen($noticia['texto_'.$this->lang->lang()]) > 150) echo '...' ?></p>
                    <a class="btn button grow" href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                        echo site_url('caixilharia/noticia/'.$noticia['id_noticia']);
                    } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                        echo site_url('vidro/noticia/'.$noticia['id_noticia']);
                    } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                        echo site_url('extrusao/noticia/'.$noticia['id_noticia']);
                    } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                        echo site_url('tratamento/noticia/'.$noticia['id_noticia']);
                    }?>">
                    <?=lang('ler')?></a>
            </div>
            <div class="col-md-1">&nbsp;</div>
        </div>
    </div>
    <div class="col-md-4">
        <h1 class="title1">Newsletter</h1>
        <p><?=lang('newsletter')?></p>
        <div class="mensagem alert alert-warning" id="jq_msg2"></div>
        <form method="post" role="form" id="form5">
            <div class="form-group">
                <input class="form-control input" type="text" id="nome" name="nome" placeholder="<?=lang('nome')?>" value="<?php echo set_value('nome'); ?>">
            </div>
            <div class="form-group">
                <input class="form-control input" type="text" id="email" name="email" placeholder="<?=lang('email')?>" value="<?php echo set_value('email'); ?>">
            </div>
            <div class="form-group">
                <input class="btn button grow" type="submit" id="submit" name="submit" value="<?=lang('subscrever')?>">
            </div>
        </form>
    </div>
</div>
</div>
<script src="<?php echo base_url() ?>assets/sosoares/js/inicio.js"></script>
