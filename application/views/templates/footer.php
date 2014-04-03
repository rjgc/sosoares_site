<!-- FOOTER -->
</section>
<footer>
    <div class="content">
        <div class="container">
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
                        <p><b>RUA DO CAMPO ALEGRE, 474</p>
                        <p>4150-170 PORTO - PORTUGAL</b></p>
                    </div>
                    <div class="col-md-2">
                        <p>Tel +351 <b>226 096 709</b></p>
                        <p> Tel +351 <b>226 005 642</b></p>
                    </div>
                    <div class="col-md-3">
                        <p>geral@sosoares.pt</p>
                        <p>comercial@sosoares.pt</p>
                    </div>
                    <div class="col-md-3">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    $(function(){
        var content1 = $('.content-1').height();

        document.getElementById("tab-1").checked=true;

        $('.tab-content').css('height', content1+40);
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
</script>
<script>
    $(function() {
        $( "#accordion" ).accordion();
    });
</script>
<script>
    $('#myCarousel').carousel({
        interval: 4000
    });

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
    var id_selector = $(this).attr("id");
    var id = id_selector.substr(id_selector.length -1);
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
    $('[id^=carousel-selector-'+id+']').addClass('selected');         
    $('[id^=title-]').removeClass('hidden');
    for (var i = 0; i < 20; i++) {
        if (id != i) {
            $('[id^=title-'+i+']').addClass('hidden');  
        }
    };    
});            
</script>
<script>
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
        case 'contactos':
        ?>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/sosoares/js/map-contact.js"></script>
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

                var image = '<?= base_url() ?>assets/sosoares/img/marker.png';

                var styledMap = new google.maps.StyledMapType(styles,
                    {name: "Styled Map"});


                var mapOptions = {
                    center: new google.maps.LatLng(39.806616, -8.095359),
                    zoom: 6,
                    panControl: false,
                    zoomControl: false,
                    scaleControl: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                };

                var map = new google.maps.Map(document.getElementById("map-canvas"),
                    mapOptions);

                <?php

                foreach($areas_comerciais as $area_comercial) {
                    $i = 1;
                    ?>
                    var myLatLng<?= $i ?> = new google.maps.LatLng(<?= $area_comercial['latitude']?> , <?=$area_comercial['longitude']?>);

                    var marker<?= $i ?> = new google.maps.Marker({
                        position: myLatLng<?= $i ?>,
                        map: map,
                        animation: google.maps.Animation.DROP,
                        icon: image,
                        title:"<?= $area_comercial['titulo'] ?>"
                    });

                    var popup<?= $i ?>=new google.maps.InfoWindow({
                        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
                        "<h4><?= $area_comercial['titulo'] ?></h4>" +
                        "<div style='font-size: 11px'>" +
                        "<p><?= $area_comercial['morada'] ?></p>" +
                        "<p><b><?= $area_comercial['nome'] ?></b></p>" +
                        "<p><b>Telf.: </b><?= $area_comercial['telefone'] ?></p>" +
                        "<p><b>Email: </b><?= $area_comercial['email'] ?></p>" +
                        "</div></div>"
                    });

                    google.maps.event.addListener(marker<?= $i ?>, 'click', function(e) {
                        console.log(e);
                        popup<?= $i ?>.open(map, this);
                    });

                    <?php
                    $i++;
                }
                ?>

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
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="<?php echo base_url() ?>assets/sosoares/js/html5shiv.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/respond.min.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/holder.js"></script>
    <![endif]-->

</body>
</html>