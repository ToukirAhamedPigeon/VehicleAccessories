<div id="map" style="background-color: red; height: 300px; width: 93%; position: absolute;">
</div>
<div id="contact" style="position: fixed;right: 3%; top: 20%; display: none">
  <form action="post">
    <input id="recieverId" type="hidden" name="recieverId" value="10">
    <input id="senderId" type="hidden" name="recieverId" value="10">
    <label>Blood</label>
    <hr>
    <label>Contact No</label>
    <hr>
    <input type="submit" value="Request">
    <a id="cancel">Cancel</a>

  </form>
</div>
<script type="text/javascript">
  $( document ).ready(function() {
    $('#cancel').click(function(){
      $('#contact').css('display', 'none');
      location.reload();
    });
  });


</script>
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
      mapTypeControl: false,
      streetViewControl:false
    }
    var myLatLng = {lat: 23.794030, lng: 90.404265};
    var map = new google.maps.Map(document.getElementById('map'), options);
          marker = new google.maps.Marker({
          position:myLatLng,
          map:map,
          draggable: true,
          map_icon_label: '<span class="map-icon map-icon-point-of-interest M18.8-31.8c.3-3.4"></span>',
          icon: {
            path: MAP_PIN,
            fillColor: '#00CCBB',
            fillOpacity: 1,
            strokeColor: '',
            strokeWeight: 0
      }
      
        });
    google.maps.event.addListener(marker, 'drag', handleEvent);
    google.maps.event.addListener(marker, 'dragend', handleEvent);
    directionsDisplay.setMap(map);
      
      function handleEvent(event){
          document.getElementById('inputLatitude').value = event.latLng.lat();
          document.getElementById('inputLongitude').value = event.latLng.lng();
        }
      
  }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6rV8XOSfEuhlF0eJPHEYCLsle6t9bYsU&callback=initMap">
</script>