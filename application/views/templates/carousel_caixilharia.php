<div id="myCarousel_" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active" data-slide-number="0">
            <img src="<?php echo base_url() ?>assets/sosoares/img/slide1.jpg" alt="First slide">
            <div class="container">
<!-- <div class="carousel-caption">
<ul>
<li><a class="control-try" href="#myCarousel_" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
<li><a class="control-try" href="#myCarousel_" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
<li><h1 class="slider-h1">Travanca Project | PORTUGAL</h1></li>
<a href="#">
<button class="pull-right btn button_slider">Conhecer</button>
</a>
</ul>
</div>-->
</div>
</div>
<div class="item" data-slide-number="1">
    <img src="<?php echo base_url() ?>assets/sosoares/img/slide1.jpg" alt="Second slide">
    <div class="container">
<!--<div class="carousel-caption">
<ul>
<li><a class="control-try" href="#myCarousel_" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
<li><a class="control-try" href="#myCarousel_" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
<li><h1 class="slider-h1">Extrusao Y</h1></li>
</ul>
</div>-->
</div>
</div>
<div class="item" data-slide-number="2">
    <img src="<?php echo base_url() ?>assets/sosoares/img/slide1.jpg" alt="Third slide">
    <div class="container">
<!--<div class="carousel-caption">
<ul>
<li><a class="control-try" href="#myCarousel_" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
<li><a class="control-try" href="#myCarousel_" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
<li><h1 class="slider-h1">Extrusao Z</h1></li>
</ul>
</div>-->
</div>
</div>
</div>
<div style="position: absolute; padding-top: 59px; left:0px; right:0px;">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel_" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel_" data-slide-to="1"></li>
        <li data-target="#myCarousel_" data-slide-to="2"></li>
    </ol>
</div>
<div class="carousel-caption">
    <ul>
        <li><a class="control-try" href="#myCarousel_" data-slide="prev"><span class="glyphicon icon-back"></span></a></li>
        <li><a class="control-try" href="#myCarousel_" data-slide="next"><span class="glyphicon icon-front"></span></a></li>
        <li id="title-0" class=""><h1 class="slider-h1">Travanca Project | PORTUGAL</h1></li>
        <li id="title-1" class="hidden"><h1 class="slider-h1">Teste 2</h1></li>
        <li id="title-2" class="hidden"><h1 class="slider-h1">Teste 3</h1></li>
        <a href="#">
            <button class="pull-right btn button_slider"><?=lang('conhecer')?></button>
        </a>
    </ul>
</div>
</div>
<!-- /.carousel -->
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