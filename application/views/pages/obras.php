<script src="<?php echo base_url() ?>assets/sosoares/js/modernizr.custom.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('caixilharia/home')?>"><?=lang('home')?></a></li>
                <li><?=lang('portfolio')?></li>
            </ul>
            <h1 class="title3"><?=lang('portfolio')?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="obras-container grid effect-6" id="grid">
                <?php if (!empty($obras)) {
                    foreach ($obras as $obra){
                        ?>
                        <a href="<?=site_url('caixilharia/obras/'.$obra['id_obra'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/obras/<?php echo $obra['url'] ?>"/><p> <?php echo $obra['nome_'.$this->lang->lang()] ?></p></div></a> 
                        <?php
                    }
                } else {?>
                <div class="alert alert-info">
                    <h5><strong>Atenção!</strong> Página de obras indisponível.</br></br> Pedimos desculpa pelo incómodo. <a href="<?=site_url('caixilharia/home')?>">Voltar atrás.</a></h5>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div><!-- /row -->
</div>
<script src="<?php echo base_url() ?>assets/sosoares/js/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/imagesloaded.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/classie.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/AnimOnScroll.js"></script>
<script>
    new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
    } );
</script>