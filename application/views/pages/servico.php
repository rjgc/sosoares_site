<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/servicos.css">
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
                <li><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                    echo site_url('caixilharia/servico');
                } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                    echo site_url('vidro/servico');
                } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                    echo site_url('extrusao/servico');
                } ?>"><?=lang('servicos')?></a></li>
                <?php if (!empty($servico)) { ?>
                <li><?php echo $servico['nome_'.$this->lang->lang()]?></li>
            </ul>
            <h1 class="title3"><?php echo $servico['nome_'.$this->lang->lang()]?></h1>
        </div>
    </div>
    <div class="row texto">
        <div class="col-md-12">
            <div class="descricao"><?php echo $servico['descricao_'.$this->lang->lang()]?></div>
        </div>
    </div>
    <?php } else { ?>
</ul>
</div>
</div>
<div class="alert alert-warning">
    <h5><strong><?=lang('atencao')?></strong><?=lang('sservico')?><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
        echo site_url('caixilharia/home');
    } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
        echo site_url('vidro/home');
    } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
        echo site_url('extrusao/home');
    } ?>"><?=lang('voltar')?></a></h5>
</div>
<?php } ?>
</div>
</div>