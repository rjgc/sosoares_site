     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>Início</li>
                    <li>Produtos Alumínio</li>
                    <li><?=$produto['tipo']?></li>
                    <li><?=$produto['caracteristica']?></li>
                    <li><?=$produto['nome']?></li>
                </ul>
                <h1 class="title3"><?=$produto['nome']?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-12" id="carousel-bounding-box">
                 <div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner" style="max-height: 400px;">
                        <?php
                        $i = 0;
                        foreach ($produtos_aluminio as $produto_aluminio){ 
                            if($i==0) {?>
                            <div class="active item" data-slide-number="<?php echo $i ?>">
                                <img src="<?php echo base_url();?>assets/uploads/produtos/<?php echo $produto_aluminio['foto_1'];?>" class="img-responsive">
                            </div>
                            <?php $i++; 
                        } else{
                            for ($x = 1; $x <= 6; $x++) { ?>

                            <div class="item" data-slide-number="<?php echo $i ?>">
                                <img src="<?php echo base_url();?>assets/uploads/produtos/<?php echo $produto_aluminio['foto_1'];?>" class="img-responsive">
                            </div>
                            <?php
                            $i++;
                        }
                    }
                } ?>
            </div>
            <!-- main slider carousel nav controls -->

            <a class="left carousel-control control-try3" href="#myCarousel" data-slide="prev"><span class="glyphicon icon-back"></span></a>
            <a class="right carousel-control control-try3" href="#myCarousel" data-slide="next"><span class="glyphicon icon-front"></span></a>
        </div>
        <!--</div>-->

    </div>

    <!--/main slider carousel-->
    <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs" style="padding: 20px 0px 10px 0px !important;">
        <ul class="list-inline">
            <?php
            $i = 0;
            foreach ($produtos_aluminio as $produto_aluminio){ 
                if($i==0) {?>
                <li> <a id="carousel-selector-<?php echo $i ?>" class="selected">
                    <img src="<?php echo base_url();?>assets/uploads/produtos/<?php echo $produto_aluminio['foto_1'];?>" class="img-responsive" style="width: 80px; height: 80px;">
                </a>
            </li>
            <?php $i++; 
        } else{?>
        <li> <a id="carousel-selector-<?php echo $i ?>">
            <img src="<?php echo base_url();?>assets/uploads/produtos/<?php echo $produto_aluminio['foto_1'];?>" class="img-responsive" style="width: 80x; height: 80px;">
        </a>
    </li>
    <?php
    $i++; }
}?>
</ul>

</div>



</div>
<div class="col-md-5">
    <div class="descricao">
        <h3 class="title4">Descrição</h3>
        <p style="margin-bottom: 25px;"><?=$produto['descricao']?></p>
        <p><b>Aros Fixos:</b><?=$produto['aro_fixo']?></p>
        <p><b>Aros Móveis:</b><?=$produto['aro_movel']?></p>
        <p><b>Aros Centrais:</b><?=$produto['aros_centrais']?></p>
        <p><b>Vista Lateral:</b><?=$produto['vista_lateral']?></p>
        <p><b>Vista Central:</b><?=$produto['vista_central']?></p>
        <p><b>Vistas Superior e Inferior:</b><?=$produto['vista_superior_inferior']?></p>
        <p><b>Enchimento:</b><?=$produto['enchimento']?></p>
    </div>
    <div class="descricao" style="margin-bottom: 50px;">
        <h3 class="title4" style="margin-top: 80px;">Resultados de Ensaio</h3>
        <p style="margin-bottom: 25px;"><?=$produto['ensaio']?></p>
        <p><b>Permeabilidade ao Ar:</b>	Classe 3</p>
        <p><b>Estanquidade à Água:</b>	Classe 7A</p>
        <p><b>Resistência ao Vento:</b>	Classe B2</p>
        <p>&nbsp;</p>

        <p><b>Área máxima da folha:</b><?=$produto['area_maxima']?></p>
        <p><b>Peso máximo da folha móvel:</b><?=$produto['peso_maximo']?></p>
        <p><b>Altura máxima da folha móvel:</b><?=$produto['altura_maxima']?></p>
    </div>
</div>
<div class="col-md-3">
    <h3 class="title4">+Informações</h3>
    <a href="#">
        <button class="btn button shrink button2">Cortes</button>
    </a>
    <a href="#">
        <button class="btn button shrink button2">Catálogo Técnico</button>
    </a>
    <a href="#">
        <button class="btn button shrink button2">ITTs</button>
    </a>
    <a href="#">
        <button class="btn button shrink button2">Resumo do Ensaio</button>
    </a>
    <a href="#">
        <button class="btn button shrink button2">ITT OS 2 folhas</button>
    </a>
    <a href="#">
        <button class="btn button shrink button2">Pormenores</button>
    </a>
</div>
</div>
</div>
<section class="related">
    <div class="container">
        <div id="center">      
            <div id="myCarousel2" class="carousel slide">
                <div class="row">
                    <div class="col-md-11">
                        <h3 class="title1" style="margin-bottom: 30px">Obras relacionadas com este produto</h3>
                    </div>
                    <div class="col-md-1">
                        <ol class="carousel-indicators" style="margin-bottom: -60px">
                            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel2" data-slide-to="1"></li>
                            <li data-target="#myCarousel2" data-slide-to="2"></li>
                        </ol>
                    </div>
                    <div class="col-md-1">&nbsp;</div>
                </div>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <?php 
                            foreach ($obras as $obra){ 
                                ?>
                                <div class="col-sm-2">
                                    <a href="<?=base_url('index.php/pages/portfolio_caixilharia/'.$obra['id'])?>">
                                        <div class="obras-list grow">
                                            <img src="<?php echo base_url() ?>assets/uploads/obras/<?php echo $obra['url'] ?>" alt="Image" class="img-responsive" style="width:150px; height: 150px"/>
                                                <p><?php echo $obra['nome'] ?></p>
                                        </div>
                                    </a> 
                                </div>
                                <?php
                            } ?>
                        </div>
                        <!--/row-->
                    </div>
                </div>

            </div>
        </div>
    </section>