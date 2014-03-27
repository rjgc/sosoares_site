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

    var image = '../../../assets/sosoares/img/marker.png';

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

    var myLatLng2 = new google.maps.LatLng(41.202625,-8.471071);

    var marker2 = new google.maps.Marker({
        position: myLatLng2,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"SOSOARES VALONGO"
    });
    var popup2=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>SOSOARES - VALONGO</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>Rua do Baldeirão, s/n 4440 - 346 Sobrado - Valongo</p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> 224 119 230 </div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> 224 119 231  </div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> geral@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker2, 'click', function(e) {
        console.log(e);
        popup2.open(map, this);
    });

    var myLatLng3 = new google.maps.LatLng(41.785537,-8.861844);

    var marker3 = new google.maps.Marker({
        position: myLatLng3,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"SOSOARES VIANA"
    });
    var popup3=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>SOSOARES - VIANA DO CASTELO</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>Lugar da Bandeira - Afife 4900-012 Viana do Castelo</p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> 258 981 299 </div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> 258 981 274  </div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> sosoares.viana@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker3, 'click', function(e) {
        console.log(e);
        popup3.open(map, this);
    });


    var myLatLng4 = new google.maps.LatLng(39.618591,-8.86046);

    var marker4 = new google.maps.Marker({
        position: myLatLng4,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"SOSOARES LEIRIA"
    });
    var popup4=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>SOSOARES - LEIRIA</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>Armazém nº1 E.N.8 - Chão da Feira, 9 2480-060 Calvaria de Cima</p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> 244 481 136  </div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> 244 482 186 </div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> sosoares.leiria@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker4, 'click', function(e) {
        console.log(e);
        popup4.open(map, this);
    });

    var myLatLng5 = new google.maps.LatLng(40.680569,-7.92256);

    var marker5 = new google.maps.Marker({
        position: myLatLng5,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"SOSOARES VISEU"
    });
    var popup5=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>SOSOARES - VISEU</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>Zona Industrial de Abraveses 3515-157 Viseu</p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> 232 459 731 </div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> 232 450 623 </div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> sosoares.viseu@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker5, 'click', function(e) {
        console.log(e);
        popup5.open(map, this);
    });
    var myLatLng6 = new google.maps.LatLng(40.629658,-7.869574);

    var marker6 = new google.maps.Marker({
        position: myLatLng6,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"SOSOARES VIDRO"
    });
    var popup6=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>SOSOARES - FÁBR. TRANSF. VIDRO</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>Zona Ind. Coimbrões, Lt. 101/102 S. João de Lourosa - 3500-618  VISEU</p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> (+351) 232 458 567 </div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> (+351) 232 458 566  </div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> geral.vidro@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker6, 'click', function(e) {
        console.log(e);
        popup6.open(map, this);
    });
    var myLatLng7 = new google.maps.LatLng(40.627238,-7.885404);

    var marker7 = new google.maps.Marker({
        position: myLatLng7,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"SOSOARES LACAGEM"
    });
    var popup7=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>SOSOARES - LACAGEM</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>Zona Ind. Coimbrões, Lt.41 3500-886 S.João Lourosa - Viseu</p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> 232 479 448 </div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> 232 478 643</div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> sosoares.viseu@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker7, 'click', function(e) {
        console.log(e);
        popup7.open(map, this);
    });

    var myLatLng8 = new google.maps.LatLng(37.063602,-7.973403);

    var marker8 = new google.maps.Marker({
        position: myLatLng8,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"SOSOARES ALGARVE"
    });
    var popup8=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>SOSOARES - ALMANCIL - FARO</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>Sítio do Vale da Venda EN 125, Km 98.8 8135-037 Almancil</p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> </div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> </div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> sosoares.faro@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker8, 'click', function(e) {
        console.log(e);
        popup8.open(map, this);
    });

    var myLatLng9 = new google.maps.LatLng(40.557855,-8.542814);

    var marker9 = new google.maps.Marker({
        position: myLatLng9,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"METALFER"
    });
    var popup9=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>METALFER - METALÚRGICA DE FERMENTELOS, S.A.</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>Travessa do Bolegão, 146 Apartado1 3754-904 Fermentelos</p>" +
            "<p><div style='display: inline-block; width: 45%;height: 34px;vertical-align: top;'><b>Telf.:</b> 234 729 740 </div><div style='display: inline-block; width: 50%;'>|&nbsp;&nbsp;&nbsp;<b>Fax:</b> 234 729 741 (Comercial)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;234 729 746 (Administração)</div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> metalfer@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker9, 'click', function(e) {
        console.log(e);
        popup9.open(map, this);
    });

    var myLatLng10 = new google.maps.LatLng(38.782509,-9.34036);

    var marker10 = new google.maps.Marker({
        position: myLatLng10,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"ALFA SUL"
    });
    var popup10=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>ALFA SUL - ALUMÍNIOS DO SUL, LDA</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>E.N. Lisboa - Sintra Km 14 Apartado 156 2726-936 Mem Martins</p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> 219 265 090  </div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> 219 256 098</div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> alfa.sul@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker10, 'click', function(e) {
        console.log(e);
        popup10.open(map, this);
    });

    var myLatLng11 = new google.maps.LatLng(38.773087,-9.364134);

    var marker11 = new google.maps.Marker({
        position: myLatLng11,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"PERFIS OEIRAS"
    });
    var popup11=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>PERFISOEIRAS - SOC. EXTRUSÃO ALUMÍNIO E COBRE, SA.</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>Rua da Colónia - Quinta da Cardosa Apartado 214 - Abrunheira 2711-952 Sintra</p>" +
            "<p><div style='display: inline-block; width: 45%;height: 34px;vertical-align: top;'><b>Telf.:</b> 219 156 660 </div><div style='display: inline-block; width: 50%;'>|&nbsp;&nbsp;&nbsp;<b>Fax:</b> 219 156 661 (Comercial)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;219 156 663 (Administração)</div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> perfis.oeiras@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker11, 'click', function(e) {
        console.log(e);
        popup11.open(map, this);
    });

    var myLatLng12 = new google.maps.LatLng(32.668981,-16.855974);

    var marker12 = new google.maps.Marker({
        position: myLatLng12,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"ALULIDER"
    });
    var popup12=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>ALULIDER - INDÚSTRIA E COMÉRCIO DE ALUMÍNIO, LDA</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>Pav. Industrial H - Plataforma 13D Zona Franca Industrial 9200-047 Caniçal - Madeira</p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> 291 960 488/291 960 494 </div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> 291 960 497</div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> Alulider@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker12, 'click', function(e) {
        console.log(e);
        popup12.open(map, this);
    });

    var myLatLng13 = new google.maps.LatLng(39.64357,-8.37321);

    var marker13 = new google.maps.Marker({
        position: myLatLng13,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"INTERALUMINIOS"
    });

    var popup13=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>INTERALUMÍNIOS - SOC. COMERCIALIZAÇÃO ALUMÍNIOS, LDA.</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>Alto da Venda Nova, 68 B - Apartado 251 2304-909 Tomar</p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> 249 301 493 </div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> 249 301 628</div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b>  interaluminios@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker13, 'click', function(e) {
        console.log(e);
        popup13.open(map, this);
    });

    var myLatLng14 = new google.maps.LatLng(40.642065,-7.909108);

    var marker14 = new google.maps.Marker({
        position: myLatLng14,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image,
        title:"PEOVIS"
    });

    var popup14=new google.maps.InfoWindow({
        content: "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'>" +
            "<h4>PEOVIS - COMÉRCIO DE ALUMÍNIOS, LDA.</h4>" +
            "<div style='font-size: 11px'>" +
            "<p>Manhosa - Ranhados 3500-631 Viseu</p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Telf.:</b> 232 461 005 </div> |&nbsp;&nbsp;&nbsp;<div style='display: inline-block; width: 48%;'><b>Fax:</b> 232 469 346</div></p>" +
            "<p><div style='display: inline-block; width: 48%;'><b>Email:</b> peovis@sosoares.pt</div></p>" +
            "</div></div>"
    });
    google.maps.event.addListener(marker14, 'click', function(e) {
        console.log(e);
        popup14.open(map, this);
    });

    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');

}

google.maps.event.addDomListener(window, 'load', initialize);