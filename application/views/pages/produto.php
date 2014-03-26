<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('pages/home_caixilharia')?>"><?=lang('home')?></a></li>
                <li><a href="<?=site_url('pages/produtos_list')?>"><?=lang('produtos')?></a></li>
                <?php if(empty($id)) {?>
            </ul>
        </div>
    </div>
    <div class="alert alert-warning">
        <h5><strong>Atenção!</strong> Tem de seleccionar um produto. <a href="<?=site_url('pages/produtos_list')?>">Voltar atrás.</a></h5>
    </div>  
</div>
<?php } else {?>
<li><a href="<?=site_url('pages/produtos_list/'.$produto['id_tipo_produto_aluminio'])?>"><?=$produto['tipo']?></a></li>
<?php if (!empty($produto['caracteristica'])) { ?>
<li><?=$produto['caracteristica']?></li>
<?php } ?>
<li><?=$produto['nome_'.$this->lang->lang()]?></li>
</ul>
<h1 class="title3"><?=$produto['nome_'.$this->lang->lang()]?></h1>
</div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="col-md-12" id="carousel-bounding-box">
            <!--</div>-->
            <div id="myCarousel" class="carousel slide">
                <!-- main slider carousel items -->
                <div class="carousel-inner" style="max-height: 400px;">
                    <?php 
                    $i=1; 
                    while ($i<5)
                    { 
                        if (!empty($produto['foto_'.$i])){
                            if ($i==1){?>
                            <div class="active item" data-slide-number="<?php echo $i ?>">
                                <img src="<?php echo base_url();?>assets/uploads/produtos/<?php echo $produto['foto_'.$i];?>" class="img-responsive">
                            </div>
                            <?php
                        }
                        else { ?>
                        <div class="item" data-slide-number="<?php echo $i ?>">
                            <img src="<?php echo base_url();?>assets/uploads/produtos/<?php echo $produto['foto_'.$i];?>" class="img-responsive">
                        </div>
                        <?php                                
                    } 
                }
                $i++;
            } ?>
        </div>
        <!-- main slider carousel nav controls -->
        <?php
        if (!empty($produto['foto_2']) || !empty($produto['foto_3']) || !empty($produto['foto_4'])){
            ?>
            <a class="left carousel-control control-try3" href="#myCarousel" data-slide="prev"><span class="glyphicon icon-back"></span></a>
            <a class="right carousel-control control-try3" href="#myCarousel" data-slide="next"><span class="glyphicon icon-front"></span></a>
            <?php
        }
        ?>
    </div>
    <!--</div>-->
</div>
<!--/main slider carousel-->
<div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs" style="padding: 20px 0px 10px 0px !important;">
    <ul class="list-inline">
        <?php 
        $i=1; 
        $y=0;
        while ($i<5)
        { 
            if (!empty($produto['foto_'.$i])){
                if ($i==1){?>
                <li> <a id="carousel-selector-<?php echo $y ?>" class="selected">
                    <img src="<?php echo base_url();?>assets/uploads/produtos/<?php echo $produto['foto_'.$i];?>" class="img-responsive" style="width: 80px; height: 80px;">
                </a>
            </li>
            <?php
        }
        else { ?>
        <li> <a id="carousel-selector-<?php echo $y ?>">
            <img src="<?php echo base_url();?>assets/uploads/produtos/<?php echo $produto['foto_'.$i];?>" class="img-responsive" style="width: 80px; height: 80px;">
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
<!--/main slider carousel-->
</div>
<div class="col-md-5">
    <div class="descricao">
        <h3 class="title4"><?=lang('descricao')?></h3>
        <div>
            <p><?php echo $produto['descricao_'.$this->lang->lang()]; ?></p>
        </div>        
    </div>
    <div class="descricao" style="margin-bottom: 50px;">
        <h3 class="title4" style="margin-top: 80px;"><?=lang('resultados')?></h3>
        <div>
            <p><?php echo $produto['resultado_'.$this->lang->lang()]; ?></p>
        </div> 
    </div>
</div>
<!--/accordion-->
<div class="col-md-3">
    <h2 class="title4"><?=lang('info')?></h2>
    <div id="accordion">
        <h3 class="btn button button2"><?=lang('corte')?></h3>
        <div>
            <?php 
            $i=1; 
            while ($i<4)
            { 
                if (!empty($produto['corte_'.$i])){
                    ?>                                                                    
                    <a href="<?php echo base_url();?>assets/uploads/files/<?php echo $produto['corte_'.$i];?>" target="_blank" >
                        <img src="<?php echo base_url();?>assets/uploads/files/8877a-bi-rail-h.jpg" alt="unfortunately your browser doesn't display PDF's" style="width:95%; height:70px; margin:2px 0 2px 0;">
                    </a>
                </br>
                <?php
            }
            $i++;
        }
        ?>   
    </div>  
    <h3 class="btn button button2"><?=lang('perfis')?></h3>
    <div>
        <ul>
            <a href="#"><li>teste</li></a>
        </ul>
    </div> 
    <h3 class="btn button button2"><?=lang('pormenores')?></h3>
    <div>
        <p>teste</p>
    </div>                                       
    <h3 class="btn button button2"><?=lang('catalogo')?></h3>
    <div>
        <ul>
            <a href="#"><li>teste</li></a>
        </ul>
    </div>
    <h3 class="btn button button2"><?=lang('itt')?></h3>
    <div>
        <?php if (!empty($ensaios)) {
            foreach ($ensaios as $ensaio) { ?>
            <a href="<?php echo base_url();?>assets/uploads/files/<?php echo $ensaio['ensaio'];?>"><li><?=$ensaio['nome_'.$this->lang->lang()]?></li></a>
            <?php }
        } else { ?>
        <li>Sem ensaios</li>
        <?php } ?>
    </div>
    <h3 class="btn button button2"><?=lang('resumo')?></h3>
    <div>
        <p>teste</p>
    </div>
</div>
</div>
</div>
</div>
<!--/accordion-->
<!--/Carousel obras-->
<section class="related">
    <div class="container">
        <div id="center">
            <div id="myCarousel2" class="carousel slide">
                <div class="row">
                    <div class="col-md-11">
                        <h3 class="title1" style="margin-bottom: 30px"><?=lang('obras')?></h3>
                    </div>
                    <div class="col-md-1">
                        <ol class="carousel-indicators" style="margin-bottom: -60px">
                            <?php $i=0;
                            $div = 1;
                            $count = count($obras)/6;

                            if (is_float(round($count))) {
                                $count++;
                            }

                            while ($div <= $count ) {
                                if (!empty($obras)) {
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
            <div class="col-md-1">&nbsp;</div>
        </div>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <?php
            $i = 0;
            $div = 1;
            $count = count($obras)/6;

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
                            if (!empty($obras[$i])) {
                                $obra = $obras[$i];
                                ?>
                                <div class="col-sm-2">
                                    <a href="<?=site_url('pages/portfolio_caixilharia/'.$obra['id'])?>">
                                        <img src="<?php echo base_url() ?>assets/uploads/obras/<?php echo $obra['url'] ?>" alt="Image" class="img-responsive" style="width:150px; height: 150px"/>
                                        <p><?php echo $obra['nome_'.$this->lang->lang()] ?></p>
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
                    $y = $i+7;
                    for ($i; $i < $y; $i++) { 
                        if (!empty($obras[$i])) {
                            $obra = $obras[$i];
                            ?>
                            <div class="col-sm-2">
                                <a href="<?=site_url('pages/portfolio_caixilharia/'.$obra['id'])?>">
                                    <img src="<?php echo base_url() ?>assets/uploads/obras/<?php echo $obra['url'] ?>" alt="Image" class="img-responsive" style="width:150px; height: 150px"/>
                                    <p><?php echo $obra['nome_'.$this->lang->lang()] ?></p>
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
if (count($obras)>6) {
    ?>
    <a class="left carousel-control controls" href="#myCarousel2" data-slide="prev"><span class="glyphicon icon-back icon-tras"></span></a>
    <a class="right carousel-control controls" href="#myCarousel2" data-slide="next"><span class="glyphicon icon-front icon-frente"></span></a>
    <?php
}
?>
</div>
</div>
</section>
<!--/Carousel obras-->
<?php } ?>