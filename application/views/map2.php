<!DOCTYPE html>
<html>
  <head>
    <title>Organization Location</title>
    <?php include('bundle.php');?>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/map-icons@3.0.3/dist/css/map-icons.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/map-icons@3.0.3/dist/js/map-icons.min.js"></script>
  </head>
  <body class="font">
  <div class="container topmargin slideup">
    <div id="map" style="background-color: red; height: 100vh; width: 100%; position: absolute;">
</div>

<script>
  function initMap(){
    
    var custom = [
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#e0efef"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "hue": "#1900ff"
            },
            {
                "color": "#c0e8e8"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 700
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#7dcdcd"
            }
        ]
    }
];
    var options = {
      zoom:14, 
      center:{lat:23.794030,lng: 90.404265},
      styles : custom,
      disableDefaultUI: false
    }
    var map = new google.maps.Map(document.getElementById('map'), options);
    google.maps.event.addListener(map, 'click', function(event){
        //addMarker({coords:event.latLng});
    });
    directionsDisplay.setMap(map);

    var markers = [
    {

      coords:{lat:23.794030,lng:90.404265},
      recieverId:10,
      recieverName:'Faisal',
      bloodGroup:'A+',
      iconImage: {
        path: SHIELD,
        fillColor: '#00CCBB',
        fillOpacity: 1,
        strokeColor: '',
        strokeWeight: 0
      }

          //iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          //content:'<h1>Lynn MA</h1>'
        },
        { 
          coords:{lat:23.782052,lng:90.416192},
          recieverId:12,
          iconImage: {
        path: MAP_PIN,
        fillColor: '#00CCBB',
        fillOpacity: 1,
        strokeColor: '',
        strokeWeight: 0
      }
          //content:'<h1>Amesbury MA</h1>'
        },
        {
          coords:{lat:42.7762,lng:-71.0773}
        }
        ];

      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          map_icon_label: '<span class="map-icon map-icon-point-of-interest M18.8-31.8c.3-3.4"></span>',
          icon:{
        path: MAP_PIN,
        fillColor: '#00CCBB',
        fillOpacity: 1,
        strokeColor: '',
        strokeWeight: 0
      }
        });

        
      }
  }
  </script>
  </div>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6rV8XOSfEuhlF0eJPHEYCLsle6t9bYsU&callback=initMap">
</script>
<?php include('logosmall.php');?>
  <?php include('_footer.php');?>
  </body>
</html>
