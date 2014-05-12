<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/obras.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/sosoares/css/colorbox.css" />
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('caixilharia/home')?>"><?=lang('home')?></a></li>
                <li><a href="<?=site_url('caixilharia/obras')?>"><?=lang('portfolio')?></a></li>
                <li><?=$obra['nome_'.$this->lang->lang()]?></li>
            </ul>
            <h1 class="title3"><?=$obra['nome_'.$this->lang->lang()]?></h1>
            <h5 class="localizacao"><strong><?=lang('localizacao')?>:</strong> <?=$obra['localizacao']?></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="portfolio">
                <div class="container">
                    <div class="row">
                        <div id="myCarousel" class="carousel slide">
                            <div class="carousel-inner carossel">
                                <?php
                                $i = 0;

                                foreach ($galeria_obra as $gobra) {
                                    if($i==0) { ?>
                                    <div class="active item" data-slide-number="<?php echo $i ?>">
                                        <img src="<?php echo base_url();?>assets/uploads/obras/normal/<?php echo $gobra['url'];?>" class="img-responsive img-responsive2">
                                    </div>
                                    <?php $i++;
                                } else { ?>
                                <div class="item" data-slide-number="<?php echo $i ?>">
                                    <img src="<?php echo base_url();?>assets/uploads/obras/normal/<?php echo $gobra['url'];?>" class="img-responsive img-responsive2">
                                </div>
                                <?php $i++;
                            }
                        } ?>
                    </div>
                    <?php if (!empty($galeria_obra) && count($galeria_obra) > 1) { ?>
                    <div class="carousel-caption carousel-caption2">
                        <ul>
                            <li><a class="control-try control-try2" href="#myCarousel" data-slide="prev"><span class="glyphicon icon-back"></span></a></li>
                            <li><a class="control-try control-try2" href="#myCarousel" data-slide="next"><span class="glyphicon icon-front"></span></a></li>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-md-12 thumbs" id="slider-thumbs">
                    <ul class="list-inline">
                        <?php
                        $z = 0;

                        foreach ($galeria_obra as $gobra) { ?>
                        <?php if($z==0) { ?>
                        <li>
                            <a id="carousel-selector-<?php echo $z ?>" class="selected">
                                <img src="<?php echo base_url();?>assets/uploads/obras/thumb/<?php echo $gobra['url'];?>" class="img-responsive imagem">
                            </a>
                        </li>
                        <?php $z++;
                    } else { ?>
                    <li>
                        <a id="carousel-selector-<?php echo $z ?>">
                            <img src="<?php echo base_url();?>assets/uploads/obras/thumb/<?php echo $gobra['url'];?>" class="img-responsive imagem">
                        </a>
                    </li>
                    <?php $z++;
                }
            } ?>
        </ul>
    </div>
</div>
</div>
</div>
<a href="<?php echo base_url();?>assets/uploads/obras/<?php echo $galeria_obra[0]['url'];?>" class="slideshow botao">
    <button class="btn button shrink" style="background: url('<?= base_url() ?>assets/sosoares/img/slideshow_mode.png') #107ca4 no-repeat 15px center;"><?=lang('modo')?> Slideshow</button>
</a>
<div class="galeria">
    <?php foreach ($galeria_obra as $gobra){ ?>
    <p><a class="slideshow" href="<?php echo base_url();?>assets/uploads/obras/<?php echo $gobra['url'];?>" title="<?=$obra['nome_'.$this->lang->lang()]?>">Slideshow Foto</a></p>
    <?php } ?>
</div>
</div>
<div class="col-md-5">
    <div class="descricao">
        <h3 class="title4"><?=lang('descricao')?></h3>
        <p class="descricao"><?=$obra['descricao_'.$this->lang->lang()]?></p>
    </div>
</div>
</div>
</div>
<?php if(!empty($produtos_aluminio_obra)) { ?>
<section class="related">
    <div class="container produtos">
        <div id="center">
            <div id="myCarousel2" class="carousel slide">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="title1 produtos-titulo"><?=lang('produto')?></h3>
                    </div>
                    <div class="col-md-2">
                        <ol class="carousel-indicators carossel-indicadores">
                            <?php $i=0;
                            $div = 1;
                            $count = count($produtos_aluminio_obra)/6;

                            if (is_float(round($count))) {
                                $count++;
                            }

                            while ($div <= $count ) {
                                if (!empty($produtos_aluminio_obra)) {
                                    if ($i==0){?>
                                    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                    <?php
                                } else {?>
                                <li data-target="#myCarousel2" data-slide-to="<?php echo $i ?>"></li>
                                <?php
                            }
                            $i++;
                        }
                        $div++;
                    }?>
                </ol>
            </div>
        </div>
        <div class="carousel-inner">
            <?php
            $i = 0;
            $div = 1;
            $count = count($produtos_aluminio_obra)/6;

            if (is_float(round($count))) {
                $count++;
            }

            while ($div <= $count ) {
                if ($div==1) { ?>
                <div class="item active">
                    <div class="row">
                        <?php
                        for ($i; $i < 6; $i++) {
                            if (!empty($produtos_aluminio_obra[$i])) {
                                $produto = $produtos_aluminio_obra[$i]; ?>
                                <div class="col-sm-2">
                                    <a href="<?=site_url('caixilharia/produto/'.$produto['id'])?>">
                                        <img src="<?php echo base_url() ?>assets/uploads/produtos/normal/<?php echo $produto['url'] ?>" alt="Image" class="img-responsive"/>
                                        <p><?php echo $produto['nome'] ?></p>
                                    </a>
                                </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="item">
                        <div class="row">
                            <?php

                            $y = $i+6;

                            for ($i; $i < $y; $i++) {
                                if (!empty($produtos_aluminio_obra[$i])) {
                                    $produto = $produtos_aluminio_obra[$i]; ?>
                                    <div class="col-sm-2">
                                        <a href="<?=site_url('caixilharia/produto/'.$produto['id'])?>">
                                            <img src="<?php echo base_url() ?>assets/uploads/produtos/normal/<?php echo $produto['url'] ?>" alt="Image" class="img-responsive"/>
                                            <p><?php echo $produto['nome'] ?></p>
                                        </a>
                                    </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <?php }
                        $div++;
                    } ?>
                </div>
                <?php if (count($produtos_aluminio_obra)>6) { ?>
                <a class="left carousel-control controls" href="#myCarousel2" data-slide="prev"><span class="glyphicon icon-back icon-tras"></span></a>
                <a class="right carousel-control controls" href="#myCarousel2" data-slide="next"><span class="glyphicon icon-front icon-frente"></span></a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<script src="<?php echo base_url() ?>/assets/sosoares/js/jquery.colorbox.js"></script>
<script src="<?php echo base_url() ?>/assets/sosoares/js/slideshow.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/carossel.js"></script>