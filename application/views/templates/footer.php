<!-- FOOTER -->
</section>
<footer>
    <div style="padding-left: 18px;" class="container">
        <div class="row">
            <div class="col-md-9">
                <img src="<?php echo base_url() ?>assets/sosoares/img/gs.jpg" width="29" height="28" alt="GS" /> &nbsp;&copy; <b id="group">GRUPO SOSOARES</b> <?=lang('direitos')?>
            </div>
            <div class="col-md-3">
                <img src="<?php echo base_url() ?>assets/sosoares/img/euro2000.jpg" width="165" height="43" alt="Sistemas Euro2000" title="Sistemas Euro2000">
                <img src="<?php echo base_url() ?>assets/sosoares/img/critec.jpg" width="70" height="23" alt="Critec.pt" title="Critec.pt">
            </div>
        </div>
        <div class="row">
            <div id="contacts">
                <div class="col-md-1">
                    <img src="<?php echo base_url() ?>assets/sosoares/img/35anos.jpg" width="68" height="77" alt="35 Anos">
                </div>
                <div class="col-md-3">
                    <p class="footer"><b>RUA DO CAMPO ALEGRE, 474</p>
                    <p class="footer">4150-170 PORTO - PORTUGAL</b></p>
                </div>
                <div class="col-md-2">
                    <?php if (strpos($_SERVER['REQUEST_URI'], 'pt') && strpos($_SERVER['REQUEST_URI'], 'caixilharia') || strpos($_SERVER['REQUEST_URI'], 'vidro') || strpos($_SERVER['REQUEST_URI'], 'tratamento')) { ?>
                    <p class="footer">Tel <b><?=lang('telefone_pt')?></b></p>
                    <p class="footer">Fax <b><?=lang('fax_')?></b></p>
                    <?php } else if (strpos($_SERVER['REQUEST_URI'], 'pt') && strpos($_SERVER['REQUEST_URI'], 'extrusao')) { ?>
                    <p class="footer">Tel <b><?=lang('telefone_extrusao')?></b></p>
                    <p class="footer">Fax <b><?=lang('fax_estrusao')?></b></p>
                    <?php } else { ?>
                    <p class="footer">Tel <b><?=lang('telefone_')?></b></p>
                    <?php } ?>                   
                </div>
                <div class="col-md-3">
                    <?php if (strpos($_SERVER['REQUEST_URI'], 'pt') && strpos($_SERVER['REQUEST_URI'], 'caixilharia') || strpos($_SERVER['REQUEST_URI'], 'vidro') || strpos($_SERVER['REQUEST_URI'], 'tratamento')) { ?>
                    <p class="footer"><?=lang('email_pt')?></p>
                    <?php } else if (strpos($_SERVER['REQUEST_URI'], 'pt') && strpos($_SERVER['REQUEST_URI'], 'extrusao')) { ?>
                    <p class="footer"><?=lang('email_extrusao')?></p>
                    <?php } else { ?>                    
                    <p class="footer"><?=lang('email_')?></p>
                    <?php } ?>                                        
                </div>
                <div class="col-md-3">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="<?php echo base_url() ?>assets/sosoares/js/html5shiv.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/respond.min.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/holder.js"></script>
<![endif]-->

<!--Share Links-->
<!--Facebook-->
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--Twitter-->
<script>
    !function(d,s,id){
        var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
        if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
        fjs.parentNode.insertBefore(js,fjs);
    }
}(document, 'script', 'twitter-wjs');</script>
<!--Google+-->
<script type="text/javascript">
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
</script>
<script>
// TABS PRODUTOS

$(function(){
    var content1 = $('.content-1').height();
    var content2 = $('.content-2').height();

    if (content1 != null) {
        document.getElementById("tab-1").checked=true;

        $('.tab-content').css('height', content1+40);
    }
    else if (content2 != null) {
        document.getElementById("tab-2").checked=true;

        $('.tab-content').css('height', content2+40);
    }    
});

function tab(elem){
    var content1 = $('.content-1').height();
    var content2 = $('.content-2').height();

    if (elem.getAttribute('id') == 'tab-1') {
        $('.tab-content').css('height', content1+40);
    } else {
        $('.tab-content').css('height', content2+40);
    }
}

// TABS LOGIN

document.getElementById("tab").style.width="290px";
document.getElementById("form").style.padding="0 0 0 20px";

function login(elem){
    document.getElementById("tab").style.width="290px";
    document.getElementById("form").style.padding="0 0 0 20px";
}

//BANNERS

$(function() {
    $( "#accordion" ).accordion();
});

$('#myCarousel').carousel({
    interval: 4000
});

// handles the carousel thumbnails

$('[id^=carousel-selector-]').click( function(){
    var id_selector = $(this).attr("id");
    var id = id_selector.replace('carousel-selector-','');
    id = parseInt(id);
    $('#myCarousel').carousel(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $(this).addClass('selected');
});

// when the carousel slides, auto update

$('#myCarousel').on('slid.bs.carousel', function () {
    var id = $('.item.active').data('slide-number');
    id = parseInt(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $('#carousel-selector-'+id+'').addClass('selected');         
    
    $('[id^=title-]').removeClass('hidden');
    for (var i = 0; i < 20; i++) {
        if (id != i) {
            $('[id^=title-'+i+']').addClass('hidden');  
        }
    };    
});      

$(document).ready(function() {
    $('#myCarousel2').carousel({
        interval: 10000
    })

    $('#myCarousel2').on('slid.bs.carousel', function() {
    });
});
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACyHnR6xtiTqqjSrYl05xkIKzO6fYJZqk&sensor=false"></script>
<?php
if(isset($page_title)) {
    switch($page_title) {
        case 'contactos': ?>

        <script type="text/javascript" >
            function initialize() {

                var styles = [
                {
                    featureType: "all",
                    stylers: [
                    { saturation: -80 }
                    ]
                },{
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [
                    { hue: "#1f416e" }
                    ]
                },{
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [
                    { hue: "#2c5e93" },
                    { lightness: 0 }
                    ]
                },{
                    featureType: "poi.business",
                    elementType: "labels",
                    stylers: [
                    { visibility: "off" }
                    ]
                }
                ];

                var image = '<?= base_url() ?>assets/sosoares/img/marker.png';

                var styledMap = new google.maps.StyledMapType(styles,
                    {name: "Styled Map 2"});

                var mapOptions = {
                    center: new google.maps.LatLng(39.806616, -8.095359),
                    zoom: 6,
                    panControl: false,
                    zoomControl: true,
                    scaleControl: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                };

                var map = new google.maps.Map(document.getElementById("map-canvas"),
                    mapOptions);

                <?php
                foreach($contactos_mapa as $contacto) { ?>

                    var myLatLng<?=$contacto['id_contacto']?> = new google.maps.LatLng(<?= $contacto['latitude']?> , <?=$contacto['longitude']?>);

                    var marker<?=$contacto['id_contacto']?> = new google.maps.Marker({
                        position: myLatLng<?=$contacto['id_contacto']?>,
                        map: map,
                        animation: google.maps.Animation.DROP,
                        icon: image,
                        title:"<?= $contacto['titulo'] ?>"
                    });

                    var popup<?=$contacto['id_contacto']?>=new google.maps.InfoWindow({
                        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
                        "<h4><?= $contacto['titulo'] ?></h4>" +
                        "<div style='font-size: 11px'>" +
                        "<p><?= $contacto['morada'] ?></p>" +
                        "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> <?= $contacto['telefone'] ?> </div>  <?php if(!empty($contacto['fax'])) { ?>|&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> <?= $contacto['fax'] ?> </div> <?php } ?></p>" +
                        "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> <?= $contacto['email'] ?></div> <?php if(!empty($contacto['email2'])) { ?>|&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><?= $contacto['email2'] ?></div> <?php } ?></p>" +
                        "</div></div>"
                    });

                    google.maps.event.addListener(marker<?=$contacto['id_contacto']?>, 'click', function(e) {
                        console.log(e);
                        popup<?=$contacto['id_contacto']?>.open(map, this);
                    });

                    <?php   } ?>
                    map.mapTypes.set('map_style', styledMap);
                    map.setMapTypeId('map_style');


                }
                google.maps.event.addDomListener(window, 'load', initialize);

            </script>
            <?php
            break;
            case 'areas_comerciais':
            ?>
            <script type="text/javascript" >
                function initialize() {

                    var styles = [
                    {
                        featureType: "all",
                        stylers: [
                        { saturation: -80 }
                        ]
                    },{
                        featureType: "road",
                        elementType: "geometry",
                        stylers: [
                        { hue: "#1f416e" }
                        ]
                    },{
                        featureType: "water",
                        elementType: "geometry",
                        stylers: [
                        { hue: "#2c5e93" },
                        { lightness: 0 }
                        ]
                    },{
                        featureType: "poi.business",
                        elementType: "labels",
                        stylers: [
                        { visibility: "off" }
                        ]
                    }
                    ];

                    var images = '<?= base_url() ?>assets/sosoares/img/marker.png';

                    var styledMap = new google.maps.StyledMapType(styles,
                        {name: "Styled Map"});


                    var mapOptions = {
                        center: new google.maps.LatLng(39.806616, -8.095359),
                        zoom: 6,
                        panControl: false,
                        zoomControl: true,
                        scaleControl: true,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                    };

                    var map = new google.maps.Map(document.getElementById("map-canvas"),
                        mapOptions);

                    <?php

                    foreach($areas_comerciais as $area_comercial) { ?>
                        var myLatLng<?=$area_comercial['id_area_comercial']?> = new google.maps.LatLng(<?= $area_comercial['latitude']?> , <?=$area_comercial['longitude']?>);

                        var marker<?=$area_comercial['id_area_comercial']?> = new google.maps.Marker({
                            position: myLatLng<?=$area_comercial['id_area_comercial']?>,
                            map: map,
                            animation: google.maps.Animation.DROP,
                            icon: images,
                            title:"<?= $area_comercial['titulo'] ?>"
                        });

                        var popup<?=$area_comercial['id_area_comercial']?>=new google.maps.InfoWindow({
                            content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
                            "<h4><?= $area_comercial['titulo'] ?></h4>" +
                            "<div style='font-size: 11px'>" +
                            "<p><?= $area_comercial['morada'] ?></p>" +
                            "<p><b><?= $area_comercial['nome'] ?></b></p>" +
                            "<p><b>Telf.: </b><?= $area_comercial['telefone'] ?></p>" +
                            "<p><b>Email: </b><?= $area_comercial['email'] ?></p>" +
                            "</div></div>"
                        });

                        google.maps.event.addListener(marker<?=$area_comercial['id_area_comercial']?>, 'click', function(e) {
                            console.log(e);
                            popup<?=$area_comercial['id_area_comercial']?>.open(map, this);
                        });

                        <?php } ?>

                        map.mapTypes.set('map_style', styledMap);
                        map.setMapTypeId('map_style');
                    }

                    google.maps.event.addDomListener(window, 'load', initialize);
                </script>

                <?php
                break;
                default:
                break;
            }
        }
        ?>