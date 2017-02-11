

<?php echo Form::open(array("class"=>"form-horizontal",'enctype' => 'multipart/form-data')); ?>

    <fieldset>


      <!-- begin upload image -->
        <div class="form-group">

                <?php echo Form::label('Upload Image', 'upload_image', array('class'=>'control-label')); ?>
                <?php echo Form::input(array('type' => 'file', 'name' => 'image','required' => 'resize','200')); ?>

        </div>
        <!-- end upload image -->

        <div class="form-group">
            <?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

                <?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username', 'required')); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>

                <?php echo Form::input('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'col-md-4 form-control', 'type'=> 'password', 'placeholder'=>'Password', 'required') ); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('Hospital name', 'hospital name', array('class'=>'control-label')); ?>

                <?php echo Form::input('hospital_name', Input::post('hospital_name', isset($user) ? $user->hospital_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hospital Name', 'required')); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('License', 'license', array('class'=>'control-label')); ?>

                <?php echo Form::input('license', Input::post('license', isset($user) ? $user->license : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'License', 'required')); ?>

        </div>


         <div class="form-group">
            <?php echo Form::label('Chief of the hospital', 'chief', array('class'=>'control-label')); ?>

                <?php echo Form::input('chief', Input::post('chief', isset($user) ? $user->chief : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Chief', 'required')); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('', 'group', array('class'=>'control-label')); ?>

                <?php echo Form::input('group', Input::post('group', isset($user) ? $user->group : '100'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Group', 'type'=>'hidden')); ?>

        </div>
         <!-- <form action="send.php" method="post"> -->
        <!--   <div class="form-group">
            <?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

                <?php echo Form::input('address', Input::post('address', isset($user) ? $user->group : '100'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Group')); ?>

        </div> -->
    
    <input id="pac-input" class="controls" type="text"
        placeholder="Enter a location">
    <div class="form-group">
      <?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?><br>

      <input id="searchTextField" type="text" size="50" name="address" placeholder="Enter your address" autocomplete="on" runat="server" />  
   
    </div>
    <input  id="city2" name="city2" type = 'hidden' />
    <input  id="cityLat" name="hospital_latitude" type = 'hidden' />
    <input  id="cityLng" name="hospital_longitude" type = 'hidden' />
    <!-- <input type="submit" value="submit"> -->
  <!-- </form> <-->
    <div  id="map"></div>
    

        <div class="form-group">
            <?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

                <?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email', 'type'=>'email')); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('Contact number', 'contact_number', array('class'=>'control-label')); ?>

                <?php echo Form::input('contact_number', Input::post('contact_number', isset($user) ? $user->contact_number : ''), array('class' => 'col-md-4 form-control', 'type' => 'number', 'placeholder'=>'Contact number')); ?>

        </div>
        
        
       <!--  <div class="form-group">
            <?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

                <?php echo Form::input('address', Input::post('address', isset($user) ? $user->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

        </div> -->

          <div class="form-group">
            <?php echo Form::label('Website', 'website', array('class'=>'control-label')); ?>

                <?php echo Form::input('website', Input::post('website', isset($user) ? $user->website : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Website')); ?>

        </div>

          <!-- <div class="form-group">
            <?php echo Form::label('Latitude', 'hospital_latitude', array('class'=>'control-label')); ?>

                <?php echo Form::input('hospital_latitude', Input::post('hospital_latitude', isset($user) ? $user->hospital_latitude : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'')); ?>

        </div>

          <div class="form-group">
            <?php echo Form::label('Latitude', 'hospital_longitude', array('class'=>'control-label')); ?>

                <?php echo Form::input('hospital_longitude', Input::post('hospital_longitude', isset($user) ? $user->hospital_longitude : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'')); ?>

        </div> -->
       


        <div class="form-group">
            <?php echo Form::label('', 'pend', array('class'=>'control-label')); ?>

                <?php echo Form::input('pend', Input::post('pend', isset($user) ? $user->pend : 'not activate'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Pend','type'=>'hidden')); ?>

        </div>


        <div class="form-group">
            <?php echo Form::label('', 'toggle', array('class'=>'control-label')); ?>

                <?php echo Form::input('toggle', Input::post('toggle', isset($user) ? $user->toggle : '0'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Toggle','type'=>'hidden')); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('', '', array('class'=>'control-label')); ?>

                <?php echo Form::input('role_id', Input::post('role_id', isset($user) ? $user->role_id : '1'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Role', 'type'=>'hidden' )); ?>
        </div>
 
        
   <div class="form-group">
            <label class='control-label'>&nbsp;</label>
            <?php echo Form::submit('submit', 'Submit', array('class' => 'btn btn-danger btn-transparent')); ?>      
    </div>

   

    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13
        });
        var input = /** @type {!HTMLInputElement} */(
            document.getElementById('pac-input'));

        // var autocomplete = new google.maps.places.Autocomplete(input);
        //     google.maps.event.addListener(autocomplete, 'place_changed', function () {
        //         var place = autocomplete.getPlace();
        //         document.getElementById('city2').value = place.name;
        //         document.getElementById('cityLat').value = place.geometry.location.lat();
        //         document.getElementById('cityLng').value = place.geometry.location.lng();
        //         //alert("This function is working!");
        //         //alert(place.name);
        //        // alert(place.address_components[0].long_name);

        //     });


        var types = document.getElementById('type-selector');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setIcon(/** @type {google.maps.Icon} */({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
          }));
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);
      }
       google.maps.event.addDomListener(window, 'load', initialize); 
    </script>


     
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBwPK1XH19ieyxJZ0QlDL6z2n6JOF83h8&libraries=places&callback=initMap"
        async defer></script>


    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>

     <script type="text/javascript">
        function initialize() {
            var input = document.getElementById('searchTextField');
            var autocomplete = new google.maps.places.Autocomplete(input);
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                document.getElementById('city2').value = place.name;
                document.getElementById('cityLat').value = place.geometry.location.lat();
                document.getElementById('cityLng').value = place.geometry.location.lng();
                //alert("This function is working!");
                //alert(place.name);
               // alert(place.address_components[0].long_name);

            });
        }
        google.maps.event.addDomListener(window, 'load', initialize); 
    </script>
 </fieldset>
<?php echo Form::close(); ?>