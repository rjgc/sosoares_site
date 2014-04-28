<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?php echo site_url('vidro/home'); ?>"><?=lang('home')?></a></li>
                <li><?=lang('area_tecnica')?></li>
                <?php if (!empty($area_tecnica)) { ?>
                <li><?php echo $area_tecnica['titulo_'.$this->lang->lang()]?></li>
            </ul>
            <h1 class="title3"><?php echo $area_tecnica['titulo_'.$this->lang->lang()]?></h1>
        </div>
    </div>

    <div style="margin-bottom: 10px; padding-left: 15px;"><?php echo $area_tecnica['texto_'.$this->lang->lang()]?></div>
    <?php } else { ?>
</ul>
</div>
</div>
<div class="alert alert-warning">
    <h5><strong>Atenção!</strong> Tem de seleccionar uma página da área técnica. <a href="<?php echo site_url('vidro/home'); ?>">Voltar atrás.</a></h5>
</div>
<?php } ?>
</div>