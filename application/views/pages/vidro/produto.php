<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/produtos.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/share_links.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('vidro/home')?>"><?=lang('home')?></a></li>
                <li><a href="<?=site_url('vidro/produto')?>"><?=lang('vprodutos')?></a></li>
                <?php if(empty($id)) { ?>
            </ul>
        </div>
    </div>
    <div class="titulo">
        <div class="alert alert-warning">
            <h5><strong><?=lang('atencao')?></strong><?=lang('sproduto')?><a href="<?=site_url('vidro/produtos')?>"><?=lang('voltar')?></a></h5>
        </div>
    </div>
</div>
<?php } else { ?>
<li><?=$produto['nome_'.$this->lang->lang()]?></li>
</ul>
<h1 class="title3"><?=$produto['nome_'.$this->lang->lang()]?></h1>
</div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="col-md-12" id="carousel-bounding-box">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner carossel">
                    <?php
                    $i=1;

                    while ($i<5)
                    {
                        if (!empty($produto['foto_'.$i])){
                            if ($i==1){?>
                            <div class="active item" data-slide-number="<?php echo $i ?>">
                                <img src="<?php echo base_url();?>assets/uploads/produtos/normal/<?php echo $produto['foto_'.$i];?>" class="img-responsive">
                            </div>
                            <?php } else { ?>
                            <div class="item" data-slide-number="<?php echo $i ?>">
                                <img src="<?php echo base_url();?>assets/uploads/produtos/normal/<?php echo $produto['foto_'.$i];?>" class="img-responsive">
                            </div>
                            <?php
                        }
                    }
                    $i++;
                } ?>
            </div>
            <?php if (!empty($produto['foto_2']) || !empty($produto['foto_3']) || !empty($produto['foto_4'])) { ?>
            <a class="left carousel-control control-try3" href="#myCarousel" data-slide="prev"><span class="glyphicon icon-back"></span></a>
            <a class="right carousel-control control-try3" href="#myCarousel" data-slide="next"><span class="glyphicon icon-front"></span></a>
            <?php } ?>
        </div>
    </div>
    <div class="col-md-12 hidden-sm hidden-xs thumb" id="slider-thumbs">
        <ul class="list-inline">
            <?php
            $i=1;
            $y=0;

            while ($i<5)
            {
                if (!empty($produto['foto_'.$i])) {
                    if ($i==1) { ?>
                    <li> <a id="carousel-selector-<?php echo $y ?>" class="selected">
                        <img src="<?php echo base_url();?>assets/uploads/produtos/thumb/<?php echo $produto['foto_'.$i];?>" class="img-responsive thumb-img">
                    </a>
                </li>
                <?php } else { ?>
                <li> <a id="carousel-selector-<?php echo $y ?>">
                    <img src="<?php echo base_url();?>assets/uploads/produtos/thumb/<?php echo $produto['foto_'.$i];?>" class="img-responsive thumb-img">
                </a>
            </li>
            <?php
        }
    }
    $i++;
    $y++;
} ?>
</ul>
</div>
<div class="col-md-12">
    <div class="facebook"><div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-type="button"></div></div>
    <div class="twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a></div>
    <div class="google"><div class="g-plusone" data-size="tall" data-annotation="none"></div></div>
</div>
</div>
<div class="col-md-5">
    <div class="descricao">
        <h3 class="title4"><?=lang('descricao')?></h3>
        <div>
            <p><?php echo $produto['descricao_'.$this->lang->lang()]; ?></p>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="descricao resultados">
        <?php if (!empty($produto['aplicacao_'.$this->lang->lang()])) { ?>
        <h3 class="title4"><?=lang('aplicacao')?></h3>
        <div>
            <p><?php echo $produto['aplicacao_'.$this->lang->lang()];?></p>
        </div>
        <?php } ?>
    </div>
</div>
</div>
</div>
<?php } ?>
<script src="<?php echo base_url() ?>assets/sosoares/js/banner.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/carossel.js"></script>
<div id="fb-root"></div>
<script src="<?php echo base_url() ?>assets/sosoares/js/facebook.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/twitter.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/google.js"></script>