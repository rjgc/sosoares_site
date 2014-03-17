<?php include_once('template_top.inc'); ?>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                     <img src="../../imgs/slide1.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <ul>
                                <li><a class="control-try" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                <li><a class="control-try" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                <li><h1 class="slider-h1">Travanca Project | PORTUGAL</h1></li>
                                <a href="#">
                                    <button class="pull-right btn button">Conhecer</button>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../../imgs/slide1.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <ul>
                                <li><a class="control-try" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                <li><a class="control-try" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                <li><h1 class="slider-h1">Extrusão Serviço Y</h1></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../../imgs/slide1.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <ul>
                                <li><a class="control-try" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                <li><a class="control-try" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                <li><h1 class="slider-h1">Extrusão Serviço Z</h1></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.carousel -->

    <!--<div class="content">-->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="md-3">
                            <h1 class="title1">Em destaque</h1>
                        </div>
                        <div class="col-md-9">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h3 id="date">28-02-2014</h3>
                        </div>
                            <div class="col-md-7">
                                <h3 class="title2">Nome do Projecto 2014</h3>
                            </div>
                            <div class="col-md-1">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="http://placehold.it/200x133&text=Foto">
                            </div>
                            <div class="col-md-7">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras adipiscing elit at augue adipiscing congue. Proin a elementum sem, mollis egestas elit.</p>
                                <a href="#">
                                    <button class="btn button">Ler Mais</button>
                                </a>
                            </div>
                            <div class="col-md-1">&nbsp;</div>
                        </div>

                </div>
                <div class="col-md-4">
                    <h1 class="title1">Newsletter</h1>
                    <p>Acompanhe o nosso trabalho, subscreva a nossa newsletter.</p>
                    <form method="post" role="form">
                        <div class="form-group">
                            <input class="form-control input" type="text" id="nome" name="nome" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <input class="form-control input" id="mail" name="mail" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input class="btn button" type="submit" id="subs" value="Subscrever">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--</div>-->
<?php include_once('template_bottom.inc'); ?>