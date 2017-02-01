<?php echo Form::open(array("class"=>"form-horizontal")); ?>
	<fieldset>
		<!-- check if user is doh -->
		<?php if ($current_user->username == "Department of Health"){ ?>
			<div class="form-group">
				<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

					<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')); ?>

			</div>

			<div class="form-group">
				<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>
				<?php 
					if (isset($user->password)) {
						$user->password = null;
					}
				 ?>
					<?php echo Form::input('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'col-md-4 form-control', 'id' => 'password', 'type'=> 'password', 'placeholder'=>'Password')); ?>

			</div>

			
			<div class="form-group floating-label">
		
				<?php echo Form::label('Confirm Password', 'confirm_password', array('class'=>'control-label')); ?>
				 <!-- Form::input('name', 'value', array('style' => 'border: 2px;')); -->
					<?php echo Form::input('confirm_password', '', array('class' => 'col-md-4 form-control', 'placeholder'=>'Confirm Password', 'type' => 'password', 'id'=>'confirm_password')); ?>
			</div>
			<div class="form-group">
				<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

					<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

			</div>
			<div class="form-group">
				<?php echo Form::label('Contact number', 'contact_number', array('class'=>'control-label')); ?>

					<?php echo Form::input('contact_number', Input::post('contact_number', isset($user) ? $user->contact_number : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contact number')); ?>

			</div>
			<div class="form-group">
	            <?php echo Form::label('Website', 'website', array('class'=>'control-label')); ?>

	                <?php echo Form::input('website', Input::post('website', isset($user) ? $user->website : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Website')); ?>

	        </div>	


			<?php $temp = "text";
			$hos = "Hospital Name"; 
			$lis = "License"; 
			$chis = "Chief of the hospital"; ?>

				<?php if ($user->role_id == 2) {
					$temp = "hidden";
					$hos = "";
					$lis = ""; 
					$chis = "";
				} ?>
			
			<!-- <div class="form-group">
				<?php //echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

					<?php echo Form::input('address', Input::post('address', isset($user) ? $user->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address', 'type' => 'hidden')); ?>

			</div> -->

	        <div class="form-group">
				<?php echo Form::label('', 'group', array('class'=>'control-label')); ?>

					<?php echo Form::input('group', Input::post('group', isset($user) ? $user->group : '100'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Group', 'type'=>'hidden')); ?>

			</div>

	   <!-- start button save-->

				<div>
					<label class='control-label'>&nbsp;</label>
					<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		
				</div>
				
		 <!-- end button save-->


			<div class="form-group">
				<?php echo Form::label('', 'pend', array('class'=>'control-label')); ?>

					<?php echo Form::input('pend', Input::post('pend', isset($user) ? $user->pend : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Pend','type'=>'hidden')); ?>

			</div>

			<div class="form-group">
				<?php echo Form::label('', '', array('class'=>'control-label')); ?>

					<?php echo Form::input('role_id', Input::post('role_id', isset($user) ? $user->role_id : '1'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Role', 'type'=>'hidden' )); ?>
			</div>
			<div class="form-group">
				<?php echo Form::label($hos, 'hospital_name', array('class'=>'control-label')); ?>
					
					<?php echo Form::input('hospital_name', Input::post('hospital_name', isset($user) ? $user->hospital_name : 'N/A'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address', 'type' => 'hidden')); ?>

			</div>
	 
	        <div class="form-group">
	            <?php echo Form::label($lis, 'license', array('class'=>'control-label')); ?>

	                <?php echo Form::input('license', Input::post('license', isset($user) ? $user->license : '0'), array('class' => 'col-md-4 form-control', 'placeholder'=>'License Number', 'type' => $temp, 'type' => 'hidden')); ?>

	        </div>

	        <div class="form-group">
	            <?php echo Form::label($chis, 'chief of the hospital', array('class'=>'control-label')); ?>

	                <?php echo Form::input('chief', Input::post('chief', isset($user) ? $user->chief : 'N/A'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Chief of the Hospital', 'type' => $temp, 'type' => 'hidden')); ?>

	        </div>
			
			

		<?php }else{ ?>
		<!-- end check if user is doh -->



		<div class="form-group">
			<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

				<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>
			<?php 
				if (isset($user->password)) {
					$user->password = null;
				}
			 ?>
				<?php echo Form::input('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'col-md-4 form-control', 'id' => 'password', 'type'=> 'password', 'placeholder'=>'Password')); ?>

		</div>

		
		<div class="form-group floating-label">
	
			<?php echo Form::label('Confirm Password', 'confirm_password', array('class'=>'control-label')); ?>
			 <!-- Form::input('name', 'value', array('style' => 'border: 2px;')); -->
				<?php echo Form::input('confirm_password', '', array('class' => 'col-md-4 form-control', 'placeholder'=>'Confirm Password', 'type' => 'password', 'id'=>'confirm_password')); ?>
		</div>
		<?php $temp = "text";
		$hos = "Hospital Name"; 
		$lis = "License"; 
		$chis = "Chief of the hospital"; ?>

			<?php if ($user->role_id == 2) {
				$temp = "hidden";
				$hos = "";
				$lis = ""; 
				$chis = "";
			} ?>
		<div class="form-group">
			<?php echo Form::label($hos, 'hospital_name', array('class'=>'control-label')); ?>
				
				<?php echo Form::input('hospital_name', Input::post('hospital_name', isset($user) ? $user->hospital_name : 'N/A'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address', 'type' => $temp)); ?>

		</div>
 
        <div class="form-group">
            <?php echo Form::label($lis, 'license', array('class'=>'control-label')); ?>

                <?php echo Form::input('license', Input::post('license', isset($user) ? $user->license : '0'), array('class' => 'col-md-4 form-control', 'placeholder'=>'License Number', 'type' => $temp)); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label($chis, 'chief of the hospital', array('class'=>'control-label')); ?>

                <?php echo Form::input('chief', Input::post('chief', isset($user) ? $user->chief : 'N/A'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Chief of the Hospital', 'type' => $temp)); ?>

        </div>

		<div class="form-group">
			<?php echo Form::label('', 'group', array('class'=>'control-label')); ?>

				<?php echo Form::input('group', Input::post('group', isset($user) ? $user->group : '100'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Group', 'type'=>'hidden')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Contact number', 'contact_number', array('class'=>'control-label')); ?>

				<?php echo Form::input('contact_number', Input::post('contact_number', isset($user) ? $user->contact_number : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contact number')); ?>

		</div>

		<input id="pac-input" class="controls" type="text" placeholder="Enter a location">
	    <input id="searchTextField" type="text" size="50" name="address" placeholder="Enter your address" autocomplete="on" runat="server" />  
	    <input  id="city2" name="city2" type = 'hidden' />
	    <input  id="cityLat" name="hospital_latitude" type = 'hidden' />
	    <input  id="cityLng" name="hospital_longitude" type = 'hidden' />
	    <!-- <input type="submit" value="submit"> -->
	  <!-- </form> <--></-->
	    <div  id="map"></div>	
			
		 <div class="form-group">
            <?php echo Form::label('Website', 'website', array('class'=>'control-label')); ?>

                <?php echo Form::input('website', Input::post('website', isset($user) ? $user->website : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Website')); ?>

        </div>

		<div class="form-group">
			<?php echo Form::label('', 'pend', array('class'=>'control-label')); ?>

				<?php echo Form::input('pend', Input::post('pend', isset($user) ? $user->pend : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Pend','type'=>'hidden')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('', '', array('class'=>'control-label')); ?>

				<?php echo Form::input('role_id', Input::post('role_id', isset($user) ? $user->role_id : '1'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Role', 'type'=>'hidden' )); ?>
		</div>
			
		<div>
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		
		</div>
	<?php } ?>
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
			<div class="form-group">
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

