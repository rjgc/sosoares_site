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
        <script src="<?php echo base_url() ?>assets/sosoares/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/docs.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/menu-hover.js"></script>
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
            $('#myCarousel').on('slid.bs.carousel', function (e) {
                var id = $('.item.active').data('slide-number');
                id = parseInt(id);
                $('[id^=carousel-selector-]').removeClass('selected');
                $('[id^=carousel-selector-'+id+']').addClass('selected');
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#myCarousel2').carousel({
                    interval: 10000
                })

                $('#myCarousel2').on('slid.bs.carousel', function() {
                //alert("slid");
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
                case 'instaladores':
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
                            /*panControl: false,
                            mapTypeControl: false,
                            disableDefaultUI: true,*/
                            panControl: false,
                            zoomControl: false,
                            scaleControl: true,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,


                            };
                            var map = new google.maps.Map(document.getElementById("map-canvas"),
                            mapOptions);

                            var myLatLng1 = new google.maps.LatLng(41.152985,-8.634299);

                            var marker1 = new google.maps.Marker({
                            position: myLatLng1,
                            map: map,
                            animation: google.maps.Animation.DROP,
                            icon: image,
                            title:"GABINETE TÉCNICO"
                            });

                            var popup1=new google.maps.InfoWindow({
                            content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
                            "<h4>SOSOARES - SERVIÇOS TÉCNICOS E COMERCIAIS</h4>" +
                            "<div style='font-size: 11px'>" +
                                "<p>Rua do Campo Alegre, 474 4150-170 Porto</p>" +
                                "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> 226 096 709 </div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> 226 005 642 </div></p>" +
                                "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> comercial@sosoares.pt</div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'>gabinete.tecnico@sosoares.pt</div></p>" +
                                "</div></div>"
                            });
                            google.maps.event.addListener(marker1, 'click', function(e) {
                            console.log(e);
                            popup1.open(map, this);
                            });



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

    </body>
</html>