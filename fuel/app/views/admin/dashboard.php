  <?php if($current_user->role_id == 3):?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
       #map {
        width: 100%;
        height: 400px;
      }  
    </style>
  </head>
  <body>

    <div id="map"></div>
   
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
         // center: {lat: -34.397, lng: 150.644},
          zoom: 16
        });

        var infoWindow = new google.maps.InfoWindow({map: map});
        var marker = new google.maps.Marker({map: map,animation: google.maps.Animation.DROP, title: 'Current Location'});


        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            marker.setPosition(pos);

            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBwPK1XH19ieyxJZ0QlDL6z2n6JOF83h8&callback=initMap">
    </script> 
  </body>
</html>
<?php elseif($current_user->role_id == 2): ?>
  <!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        width: 100%;
        height: 400px;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 16
        });
        var infoWindow = new google.maps.InfoWindow({map: map});
        var marker = new google.maps.Marker({map: map,animation: google.maps.Animation.DROP, title: 'Current Location'});

        // Try HTML5 geolocation.
         if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            marker.setPosition(pos);

            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBwPK1XH19ieyxJZ0QlDL6z2n6JOF83h8&callback=initMap">
    </script>
  </body>
</html>

<?php elseif($current_user->role_id == 1): ?>
  <!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        width: 100%;
        height: 400px;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
       function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 16

          
        });
        var infoWindow = new google.maps.InfoWindow({map: map});
        var marker = new google.maps.Marker({map: map,animation: google.maps.Animation.DROP, title: 'Current Location'});

        // Try HTML5 geolocation.
         if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            marker.setPosition(pos);

            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBwPK1XH19ieyxJZ0QlDL6z2n6JOF83h8&callback=initMap">
    </script>

  </body>
</html>
<?php endif; ?>

