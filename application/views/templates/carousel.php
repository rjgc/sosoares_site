<?php   if (!empty($banners)) { ?>
    <div id="myCarousel_" class="carousel carousel2 slide" data-ride="carousel">
        <div class="carousel-inner carousel-inner-banner">
            <?php   $i=0;
                    foreach ($banners as $banner) {
                        if ($i == 0) { ?>
                            <div class="item active" data-slide-number="<?=$i?>">
                                <img src="<?php echo base_url();?>assets/uploads/banners/thumb/<?php echo $banner['banner'];?>" alt="slide">
                                <div class="container"></div>
                            </div>
            <?php       } else { ?>
                            <div class="item" data-slide-number="<?=$i?>">
                                <img src="<?php echo base_url();?>assets/uploads/banners/thumb/<?php echo $banner['banner'];?>" alt="slide">
                                <div class="container"></div>
                            </div>
            <?php       }
                        $i++;
                    } ?>
        </div>
        <div style="position: absolute; padding-top: 59px; left:0px; right:0px;">
            <ol class="carousel-indicators">
                <?php   for ($i=0; $i < count($banners); $i++) {
                            if ($i == 0) { ?>
                                <li data-target="#myCarousel_" data-slide-to="<?=$i?>" class="active"></li>
                <?php       } else { ?>
                                <li data-target="#myCarousel_" data-slide-to="<?=$i?>"></li>
                <?php       }
                        } ?>
            </ol>
        </div>
        <div class="carousel-caption">
            <ul>
                <li><a class="control-try" href="#myCarousel_" data-slide="prev"><span class="glyphicon icon-back"></span></a></li>
                <li><a class="control-try" href="#myCarousel_" data-slide="next"><span class="glyphicon icon-front"></span></a></li>
                <?php   $i=0;
                        foreach ($banners as $banner) {
                            if ($i == 0) { ?>
                                <li id="title-<?=$i?>" class=""><h1 class="slider-h1"><?=$banner['nome_'.$this->lang->lang()]?></h1>
                <?php           if(!empty($banner['link'])) { ?>
                                <a href="<?= $banner['link'] ?>" target="_blank">
                                    <button class="pull-right btn button_slider grow"><?=lang('conhecer')?></button>
                                </a>
                <?php           } ?>
                                </li>
                <?php       } else { ?>
                                <li id="title-<?=$i?>" class="hidden"><h1 class="slider-h1"><?=$banner['nome_'.$this->lang->lang()]?></h1>
                <?php           if(!empty($banner['link'])) { ?>
                                <a href="<?= $banner['link'] ?>" target="_blank">
                                    <button class="pull-right btn button_slider grow"><?=lang('conhecer')?></button>
                                </a>
                <?php           } ?>
                                </li>
                <?php       } $i++;
                        } ?>
            </ul>
        </div>
    </div>
    <script>
        $('#myCarousel_').carousel({
            interval: 4000
        });

        // when the carousel slides, auto update
        $('#myCarousel_').on('slid.bs.carousel', function () {
            var id = $('.item.active').data('slide-number');
            id = parseInt(id);
            $('[id^=title-]').removeClass('hidden');
            for (var i = 0; i < 20; i++) {
                if (id != i) {
                    $('[id^=title-'+i+']').addClass('hidden');
                }
            };
        });
    </script>
<?php   } ?>