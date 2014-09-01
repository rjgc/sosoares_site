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
                    foreach ($obras as $obra) { ?>
                    <a href="<?=site_url('caixilharia/obras/'.$obra['id_obra'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/obras/list/<?php echo $obra['url'] ?>"/><p> <?php echo $obra['nome_'.$this->lang->lang()] ?></p></div></a> 
                    <?php
                }
            } else { ?>
            <div class="alert alert-info">
                <h5><strong><?=lang('atencao')?></strong><?=lang('sobras')?></br></br><?=lang('desculpa')?><a href="<?=site_url('caixilharia/home')?>"><?=lang('voltar')?></a></h5>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<script src="<?php echo base_url() ?>assets/sosoares/js/modernizr.custom.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/imagesloaded.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/classie.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/AnimOnScroll.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/obras.js"></script>