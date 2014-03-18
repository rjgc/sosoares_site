<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> <?=$title ?> - Indelague Higt tech lighting solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url() ?>assets/indelague/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/indelague/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/indelague/style.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic|Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>assets/uploads/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>assets/uploads/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>assets/uploads/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>assets/uploads/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/uploads/ico/favicon.png">
      
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACyHnR6xtiTqqjSrYl05xkIKzO6fYJZqk&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {

        // Create an array of styles.
        var styles = [
          {
            stylers: [
              { hue: "#ff4400" }
            ]
          }
        ];


        var styledMap = new google.maps.StyledMapType(styles,
         {name: "Styled Map"});


        var mapOptions = {
          center: new google.maps.LatLng(40.754062,-8.505959),
          zoom: 10,
          panControl: false,
          mapTypeControl: false,
          disableDefaultUI: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          

        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);

        var myLatLng = new google.maps.LatLng(40.6031, -8.4511);

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            animation: google.maps.Animation.DROP,
        });

        // Code for infowindow
        var popup=new google.maps.InfoWindow({
            content: "<img src='http://indelague.pt/novo/assets/indelague/img/logo.png' alt='indelague' />"
        });
        google.maps.event.addListener(marker, 'click', function(e) {
            console.log(e);
            popup.open(map, this);
        });

         map.mapTypes.set('map_style', styledMap);
         map.setMapTypeId('map_style');

      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  
  </head>

<body>