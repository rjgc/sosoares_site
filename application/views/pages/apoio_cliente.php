<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('pages/home_caixilharia')?>"><?=lang('home')?></a></li>
                <li><a href="<?=site_url('pages/apoio_cliente_list')?>"><?=lang('apoio')?></a></li>
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
    <h5><strong>Atenção!</strong> Tem de seleccionar uma página de apoio ao cliente. <a href="<?=site_url('pages/apoio_cliente_list')?>">Voltar atrás.</a></h5>
</div>
<?php } ?>
</div>