function initialize() {

    // Create an array of styles.
    /*var styles = [
     {
     stylers: [
     { hue: "#90ba92" },
     { saturation: 80 },
     { lightness: -20 },
     { gamma: 3 },
     ]
     }
     ];*/

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
                { hue: "#8eb98c" }
            ]
        },{
            featureType: "water",
            elementType: "geometry",
            stylers: [
                { hue: "#8eb98c" },
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

    var image1 = '../../../../assets/sosoares/img/35anos.jpg';
    var image2 = 'img/35anos.jpg';
    var image3 = 'img/markerLove.png';

    var styledMap = new google.maps.StyledMapType(styles,
        {name: "Styled Map"});


    var mapOptions = {
        center: new google.maps.LatLng(40.754062,-8.505959),
        zoom: 6,
        panControl: false,
        mapTypeControl: false,
        disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,


    };
    var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);

    var myLatLng3 = new google.maps.LatLng(40.647686, -8.608828);

    var marker = new google.maps.Marker({
        position: myLatLng3,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image3,
        title:"LoveTiles"
    });

    var myLatLng = new google.maps.LatLng(40.605095, -8.651530);

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image1,
        title:"MarGres"
    });

    var myLatLng2 = new google.maps.LatLng(40.603183,-8.652140);

    var marker = new google.maps.Marker({
        position: myLatLng2,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image2,
        title:"Gres Panaria"
    });

    // Code for infowindow
    var popup=new google.maps.InfoWindow({
        content: "Title oi"
    });
    google.maps.event.addListener(marker, 'click', function(e) {
        console.log(e);
        popup.open(map, this);
    });

    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');

}
google.maps.event.addDomListener(window, 'load', initialize);