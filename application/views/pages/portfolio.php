  <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li>Início</li>
                        <li>Portfolio Obras</li>
                        <li>Travanca Project</li>
                    </ul>
                    <h1 class="title3">Travanca Project</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="portfolio">
                         <div class="container">


  	<!-- thumb navigation carousel -->
  
  
    <!-- main slider carousel -->
    <div class="row">
       <!-- <div class="col-md-12" id="slider">
            
                <div class="col-md-12" id="carousel-bounding-box">-->
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner" style="max-height: 350px;">
                            <?php
                            $i = 0;
                            foreach ($galeria_obras as $obras){ 
                                if($i==0) {?>
                                    <div class="active item" data-slide-number="<?php echo $i ?>">
                                    <img src="<?php echo base_url();?>assets/uploads/obras/thumb/<?php echo $obras['url'];?>" class="img-responsive" style="max-width: 98% !important">
                                    </div>
                                    <?php $i++; 
                                     } else{ ?>
                                    <div class="item" data-slide-number="<?php echo $i ?>">
                                        <img src="<?php echo base_url();?>assets/uploads/obras/thumb/<?php echo $obras['url'];?>" class="img-responsive" style="max-width: 98% !important">
                                    </div>
                               <?php
                               $i++; }
                                } ?>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <div class="carousel-caption carousel-caption2">
                            <ul>
                                <li><a class="control-try control-try2" href="#myCarousel" data-slide="prev"><span class="glyphicon icon-back"></span></a></li>
                                <li><a class="control-try control-try2" href="#myCarousel" data-slide="next"><span class="glyphicon icon-front"></span></a></li>
                                
                            </ul>
                        </div>
                    </div>
                <!--</div>

        </div>-->
   
    <!--/main slider carousel-->
        <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs" style="padding-left: 0px !important; padding-right: 0px !important;">
                <ul class="list-inline">
                <?php
                $z = 0; 
                foreach ($galeria_obras as $obras){ ?>
                <?php if($z==0) {?>
                    <li>
                        <a id="carousel-selector-<?php echo $z ?>" class="selected">
                        <img src="<?php echo base_url();?>assets/uploads/obras/thumb/<?php echo $obras['url'];?>" class="img-responsive" style="width: 80px !important; height: 60px;">
                        </a>
                    </li>   
                      
                     <?php $z++; 
                     } else{?>
                     <li>
                        <a id="carousel-selector-<?php echo $z ?>">
                        <img src="<?php echo base_url();?>assets/uploads/obras/thumb/<?php echo $obras['url'];?>" class="img-responsive" style="width: 80px !important; height: 60px;">
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
                    <a href="#">
                        <button class="btn button shrink" style="width: 200px; margin: 10px;">Modo Slideshow</button>
                    </a>
                </div>
                <div class="col-md-5">
                    <div class="descricao">
                        <h3 class="title4">Descrição</h3>
                        <p style="margin-bottom: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi nulla, facilisis quis diam nec, molestie blandit eros. Aenean et dui sit amet erat commodo faucibus. Nunc pretium lorem nunc, pulvinar commodo tortor venenatis sit amet. Nam et auctor augue, ut consequat velit. Mauris in purus eu ligula egestas suscipit eget quis arcu.</p>
                        <p><b>Arquitecto:</b> Rui Rosmaninho</p>
                        <p><b>Serralharia:</b> Metaloviana (FC/PS), Metalcovo (QS)</p>
                        <p><b>Cor:</b> 7009 cinzento texturado (FC/PS), AC00 (QS)</p>
                        <p><b>Sistema:</b></p>
                        <ul>
                            <li><p>FC - Sistema de fachadas ligeiras</p></li>
                            <li><p>PS - Sistema de portas de batente para uso intensivo</p></li>
                            <li><p>QS - Sistema de lâminas quebra sol</p></li>
                        </ul>
                        <p>Nec luctus tortor pharetra. Quisque et lectus eget arcu vestibulum lobortis quis in sem. In non nibh dui. Nulla scelerisque dictum augue, et vestibulum erat tempor sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="related">
            <div class="container">
                <div id="center">      
            <div id="myCarousel2" class="carousel slide">
                <div class="row">
                        <div class="col-md-11">
                            <h3 class="title1" style="margin-bottom: 30px">Soluções implementadas neste projecto</h3>
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
                            foreach ($produto_aluminio as $produto){ 
                                for ($i = 1; $i <= 6; $i++) { ?>
                                <div class="col-sm-2"><a href="#x"><img src="<?php echo base_url();?>assets/uploads/produtos/<?php echo $produto['foto_1'];?>" alt="Image" class="img-responsive" style="width:150px; height: 150px"></a>
                                <p>Sistema OS</p>
                        </div>
                            <?php  }
                            } ?>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <?php
                            foreach ($produto_aluminio as $produto){ 
                                for ($i = 1; $i <= 6; $i++) { ?>
                                <div class="col-sm-2"><a href="#x"><img src="<?php echo base_url();?>assets/uploads/produtos/<?php echo $produto['foto_1'];?>" alt="Image" class="img-responsive" style="width:150px; height: 150px"></a>
                                <p>Sistema OS</p>
                        </div>
                            <?php  }
                            } ?>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <?php
                            foreach ($produto_aluminio as $produto){ 
                                for ($i = 1; $i <= 6; $i++) { ?>
                                <div class="col-sm-2"><a href="#x"><img src="<?php echo base_url();?>assets/uploads/produtos/<?php echo $produto['foto_1'];?>" alt="Image" class="img-responsive" style="width:150px; height: 150px"></a>
                                <p>Sistema OS</p>
                        </div>
                            <?php  }
                            } ?>
                            
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                </div>
                <!--/carousel-inner-->
                <a class="left carousel-control controls" href="#myCarousel2" data-slide="prev"><span class="glyphicon icon-back icon-tras"></span></a>
                <a class="right carousel-control controls" href="#myCarousel2" data-slide="next"><span class="glyphicon icon-front icon-frente"></span></a>
               
            </div>
            <!--/myCarousel-->
       
        <!--/well-->
                </div>
            </div>
        </section>