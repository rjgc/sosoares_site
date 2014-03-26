<!-- FOOTER -->
              </section>
        <footer>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/gs.jpg" width="29" height="28" alt="GS" /> &nbsp;&copy; <b id="group">GRUPO SOSOARES</b> Todos os Direitos Reservados
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
            $('#myCarousel').on('slid', function (e) {
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
        <!--<script type="text/javascript" src="<?php /*echo base_url() */?>assets/sosoares/js/maps-color-script.js""></script>-->
        <script>/*<![CDATA[*/
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
                    mapTypeControl: false,
                    disableDefaultUI: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,


                };
                var map = new google.maps.Map(document.getElementById("map-canvas"),
                    mapOptions);

                var myLatLng1 = new google.maps.LatLng(41.152985,-8.634299);

                var marker = new google.maps.Marker({
                    position: myLatLng1,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"GABINETE TÉCNICO"
                });

                var myLatLng2 = new google.maps.LatLng(41.202625,-8.471071);

                var marker = new google.maps.Marker({
                    position: myLatLng2,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"SOSOARES VALONGO"
                });

                var myLatLng3 = new google.maps.LatLng(41.785537,-8.861844);

                var marker = new google.maps.Marker({
                    position: myLatLng3,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"SOSOARES VIANA"
                });

                var myLatLng4 = new google.maps.LatLng(39.618591,-8.86046);

                var marker = new google.maps.Marker({
                    position: myLatLng4,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"SOSOARES LEIRIA"
                });
                var myLatLng5 = new google.maps.LatLng(40.680569,-7.92256);

                var marker = new google.maps.Marker({
                    position: myLatLng5,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"SOSOARES VISEU"
                });
                var myLatLng6 = new google.maps.LatLng(40.629658,-7.869574);

                var marker = new google.maps.Marker({
                    position: myLatLng6,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"SOSOARES VIDRO"
                });
                var myLatLng7 = new google.maps.LatLng(40.627238,-7.885404);

                var marker = new google.maps.Marker({
                    position: myLatLng7,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"SOSOARES LACAGEM"
                });
                var myLatLng8 = new google.maps.LatLng(37.063602,-7.973403);

                var marker = new google.maps.Marker({
                    position: myLatLng8,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"SOSOARES ALGARVE"
                });
                var myLatLng9 = new google.maps.LatLng(40.557855,-8.542814);

                var marker = new google.maps.Marker({
                    position: myLatLng9,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"METALFER"
                });
                var myLatLng10 = new google.maps.LatLng(38.782509,-9.34036);

                var marker = new google.maps.Marker({
                    position: myLatLng10,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"ALFA SUL"
                });
                var myLatLng11 = new google.maps.LatLng(38.773087,-9.364134);

                var marker = new google.maps.Marker({
                    position: myLatLng11,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"PERFIS OEIRAS"
                });
                var myLatLng12 = new google.maps.LatLng(32.668981,-16.855974);

                var marker = new google.maps.Marker({
                    position: myLatLng12,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"ALULIDER"
                });
                var myLatLng13 = new google.maps.LatLng(39.64357,-8.37321);

                var marker = new google.maps.Marker({
                    position: myLatLng13,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"INTERALUMINIOS"
                });
                var myLatLng14 = new google.maps.LatLng(40.642065,-7.909108);

                var marker = new google.maps.Marker({
                    position: myLatLng14,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    title:"PEOVIS"
                });

                // Code for infowindow
                var popup=new google.maps.InfoWindow({
                    content: "Lorem Ipsum"
                });
                google.maps.event.addListener(marker, 'click', function(e) {
                    console.log(e);
                    popup.open(map, this);
                });

                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style');

            }
            google.maps.event.addDomListener(window, 'load', initialize);

            /*]]>*/
        </script>
    </body>
</html>