<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="<?=site_url('caixilharia/home')?>"><?=lang('home')?></a></li>
                    <li><a href="<?=site_url('caixilharia/obras')?>"><?=lang('portfolio')?></a></li>
                    <li><?=$obra['nome_'.$this->lang->lang()]?></li>
                </ul>
                <h1 class="title3"><?=$obra['nome_'.$this->lang->lang()]?></h1>
                <h5 style="margin: 0 5px 10px 17px;"><strong><?=lang('localizacao')?>:</strong> <?=$obra['localizacao']?></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="portfolio">
                    <div class="container">
                        <!-- thumb navigation carousel -->
                        <!-- main slider carousel -->
                        <div class="row">
                            <div id="myCarousel" class="carousel slide">
                                <!-- main slider carousel items -->
                                <div class="carousel-inner" style="max-height: 350px;">
                                    <?php
                                    $i = 0;
                                    foreach ($galeria_obra as $gobra){
                                        if($i==0) {?>
                                            <div class="active item" data-slide-number="<?php echo $i ?>">
                                                <img src="<?php echo base_url();?>assets/uploads/obras/normal/<?php echo $gobra['url'];?>" class="img-responsive img-responsive2">
                                            </div>
                                            <?php $i++;
                                        } else{ ?>
                                            <div class="item" data-slide-number="<?php echo $i ?>">
                                                <img src="<?php echo base_url();?>assets/uploads/obras/normal/<?php echo $gobra['url'];?>" class="img-responsive img-responsive2">
                                            </div>
                                            <?php
                                            $i++; }
                                    } ?>
                                </div>
                                <!-- main slider carousel nav controls -->
                                <?php
                                if (!empty($galeria_obra) && count($galeria_obra) > 1){
                                    ?>
                                    <div class="carousel-caption carousel-caption2">
                                        <ul>
                                            <li><a class="control-try control-try2" href="#myCarousel" data-slide="prev"><span class="glyphicon icon-back"></span></a></li>
                                            <li><a class="control-try control-try2" href="#myCarousel" data-slide="next"><span class="glyphicon icon-front"></span></a></li>
                                        </ul>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <!--/main slider carousel-->
                            <div class="col-md-12 thumbs" id="slider-thumbs">
                                <ul class="list-inline">
                                    <?php
                                    $z = 0;
                                    foreach ($galeria_obra as $gobra){ ?>
                                        <?php if($z==0) {?>
                                            <li>
                                                <a id="carousel-selector-<?php echo $z ?>" class="selected">
                                                    <img src="<?php echo base_url();?>assets/uploads/obras/thumb/<?php echo $gobra['url'];?>" class="img-responsive" style="width: 80px !important; height: 60px;">
                                                </a>
                                            </li>

                                            <?php $z++;
                                        } else{?>
                                            <li>
                                                <a id="carousel-selector-<?php echo $z ?>">
                                                    <img src="<?php echo base_url();?>assets/uploads/obras/thumb/<?php echo $gobra['url'];?>" class="img-responsive" style="width: 80px !important; height: 60px;">
                                                </a>
                                            </li>
                                            <?php $z++;
                                        }
                                    } ?>
                                    <!-- thumb navigation carousel items -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a style="padding-left: 8px;" href="#">
                    <button class="btn button shrink" style="width: 200px; margin: 10px;background: url('<?= base_url() ?>assets/sosoares/img/slideshow_mode.png') #107ca4 no-repeat 15px center; background-size: 18px"><?=lang('modo')?> Slideshow</button>
                </a>
            </div>
            <div class="col-md-5">
                <div class="descricao">
                    <h3 class="title4"><?=lang('descricao')?></h3>
                    <p style="margin-bottom: 25px;"><?=$obra['descricao_'.$this->lang->lang()]?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(!empty($produtos_aluminio_obra)) { ?>
    <section class="related">
        <div style="padding-left: 32px;" class="container">
            <div id="center">
                <div id="myCarousel2" class="carousel slide">
                    <div class="row">
                        <div class="col-md-10">
                            <h3 class="title1" style="margin-bottom: 30px"><?=lang('produto')?></h3>
                        </div>
                        <div class="col-md-2">
                            <ol class="carousel-indicators" style="margin-bottom: -60px">
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
                        <!--<div class="col-md-1">&nbsp;</div>-->
                    </div>
                    <!-- Carousel items -->
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
                                <!--/item-->
                                <div class="item active">
                                    <!--/row-->
                                    <div class="row">
                                        <?php
                                        for ($i; $i < 6; $i++) {
                                            if (!empty($produtos_aluminio_obra[$i])) {
                                                $produto = $produtos_aluminio_obra[$i];
                                                ?>
                                                <div class="col-sm-2">
                                                    <a href="<?=site_url('caixilharia/produto/'.$produto['id'])?>">
                                                        <img src="<?php echo base_url() ?>assets/uploads/produtos/normal/<?php echo $produto['url'] ?>" alt="Image" class="img-responsive"/>
                                                        <p><?php echo $produto['nome'] ?></p>
                                                    </a>
                                                </div>
                                            <?php
                                            }
                                        }?>
                                    </div>
                                    <!--/row-->
                                </div>
                                <!--/item-->
                            <?php
                            }
                            else {  ?>
                                <!--/item-->
                                <div class="item">
                                    <!--/row-->
                                    <div class="row">
                                        <?php
                                        $y = $i+6;
                                        for ($i; $i < $y; $i++) {
                                            if (!empty($produtos_aluminio_obra[$i])) {
                                                $produto = $produtos_aluminio_obra[$i];
                                                ?>
                                                <div class="col-sm-2">
                                                    <a href="<?=site_url('caixilharia/produto/'.$produto['id'])?>">
                                                        <img src="<?php echo base_url() ?>assets/uploads/produtos/normal/<?php echo $produto['url'] ?>" alt="Image" class="img-responsive"/>
                                                        <p><?php echo $produto['nome'] ?></p>
                                                    </a>
                                                </div>
                                            <?php
                                            }
                                        }?>
                                    </div>
                                    <!--/row-->
                                </div>
                                <!--/item-->
                            <?php
                            }
                            $div++;
                        }
                        ?>
                    </div>
                    <?php
                    if (count($produtos_aluminio_obra)>6) {
                        ?>
                        <!--/carousel-inner-->
                        <a class="left carousel-control controls" href="#myCarousel2" data-slide="prev"><span class="glyphicon icon-back icon-tras"></span></a>
                        <a class="right carousel-control controls" href="#myCarousel2" data-slide="next"><span class="glyphicon icon-front icon-frente"></span></a>
                    <?php
                    }
                    ?>
                </div>
                <!--/myCarousel-->
                <!--/well-->
            </div>
        </div>
    </section>
    <?php } ?>
</main>