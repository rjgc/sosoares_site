<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?php echo site_url('tratamento/home'); ?>"><?=lang('home')?></a></li>
                <?php if (!empty($page)) { ?>
                <li><?php echo $page['titulo_'.$this->lang->lang()]?></li>
            </ul>
            <h1 class="title3"><?php echo $page['titulo_'.$this->lang->lang()]?></h1>
        </div>
    </div>

    <div style="margin-bottom: 10px;"><?php echo $page['texto_'.$this->lang->lang()]?></div>
    <?php } else { ?>
</ul>
</div>
</div>
<div class="alert alert-warning">
    <h5><strong>Atenção!</strong> Tem de seleccionar uma página de apoio ao cliente. <a href="<?php echo site_url('tratamento/home'); ?>">Voltar atrás.</a></h5>
</div>
<?php } ?>
</div>