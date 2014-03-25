<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('pages/home_caixilharia')?>">Início</a></li>
                <li><a href="<?=site_url('pages/apoio_cliente_list')?>">Apoio ao Cliente</a></li>
                <?php if (!empty($page)) { ?>
                <li><?php echo $page['titulo_pt'] ?></li>
            </ul>
            <h1 class="title3"><?php echo $page['titulo_pt'] ?></h1>
        </div>
    </div>

    <div style="margin-bottom: 10px;"><?php echo $page['texto_pt'] ?></div>
    <?php } else { ?>
</ul>
</div>
</div>

<div class="alert alert-warning">
    <h5><strong>Atenção!</strong> Tem de seleccionar uma página de apoio ao cliente. <a href="<?=site_url('pages/apoio_cliente_list')?>">Voltar atrás.</a></h5>
</div>
<?php } ?>
</div>