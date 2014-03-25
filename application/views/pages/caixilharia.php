<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="md-3">
                    <h1 class="title1">Em destaque</h1>
                </div>
                <div class="col-md-9">
<!--<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
</ol>-->
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
        <?php foreach ($galeria_obra as $obra){ ?>
        <img src="<?php echo base_url();?>assets/uploads/obras/<?php echo $obra['url'];?>" alt="Image" class="img-responsive" style="width:200px; height: 133px; border-radius: 10px">
        <?php } ?>
    </div>
    <div class="col-md-7">
        <p>Serviços estão Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras adipiscing elit at augue adipiscing congue. Proin a elementum sem, mollis egestas elit.</p>
        <a href="#">
            <button class="btn button shrink">Ler Mais</button>
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
            <input class="btn button shrink" type="submit" id="subs" value="Subscrever">
        </div>
    </form>
</div>
</div>
</div><!-- /container -->

