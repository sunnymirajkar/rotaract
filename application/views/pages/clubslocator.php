<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="" class="section">			
	<div style="width: 100%; height: 550px;" data-anim-type="fade-in-up" id="map">
	</div>	
</div>
<script type="text/javascript">
	function initMap() {
      	var map;
      	var bounds = new google.maps.LatLngBounds();
      	var mapOptions = {
          	mapTypeId: 'hybrid'
      	};
        var gmarkers = [];
      	var ARNI_Atlantica =  {lat: 18.7546, lng: 73.4062};
                      
      	// Display a map on the page
      	map = new google.maps.Map(document.getElementById("map"), mapOptions);
      	center: ARNI_Atlantica,
      	map.setTilt(45);
      	var markers = [
          	['Rotaract Club of Aundh', 18.5484,73.8228],
          	['Rotaract Club of Pune Sinhagad Road', 18.5222,73.8332],
          	['Rotaract Club of Poona South', 19.0083, 73.1082]
      	];           
      	// Info Window Content
      	var infoWindowContent = [
	        ['<div id="content" >'+
	            '<div id="siteNotice">'+
	            '</div>'+
	            '<h4 id="firstHeading" class="firstHeading">Rotaract Club of Aundh</h4>'+
	            '<div id="bodyContent">'+
	            '<p><b class="mapName">Meeting:</b>Wednesday 7PM.</br>'+
	            '<b>Email: </b>rcaundh@rotaract3131.org.in</p>'+
	            '</div>'+
	        '</div>'],
	        ['<div id="content">'+
	            '<div id="siteNotice">'+
	            '</div>'+
	            '<h4 id="firstHeading" class="firstHeading">Rotaract Club of Pune Sinhagad Road</h4>'+
	            '<div id="bodyContent">'+
	            '<p><b class="mapName">Meeting:</b>Sunday 4PM.</br>'+
	            '<b>Email: </b>rcpunesinhgadroad@rotaract3131.org.in</p>'+
	            '</div>'+
	        '</div>'], 
	        ['<div id="content">'+
	            '<div id="siteNotice">'+
	            '</div>'+
	            '<h4 id="firstHeading" class="firstHeading">Rotaract Club of Poona South</h4>'+
	            '<div id="bodyContent">'+
	            '<p><b class="mapName">Meeting:</b>Sunday 4PM.</br>'+
	            '<b>Email: </b>rcpoonasouth@rotaract3131.org.in</p>'+
	            '</div>'+
	        '</div>']		                                               
      	];
          
      	// Display multiple markers on a map
      	var infoWindow = new google.maps.InfoWindow({maxWidth:240}), marker, i;
      	// Loop through our array of markers & place each one on the map  
      	for( i = 0; i < markers.length; i++ ) {
        	// if(i == 0){
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]/*,
                icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'*/
            });
            gmarkers.push(marker);
          
        	// google.maps.event.trigger(gmarkers[0], 'click');  
          	gmarkers [0].setAnimation(google.maps.Animation.DROP);
          	// Allow each marker to have an info window    
          	google.maps.event.addListener(marker, 'click', (function(marker, i) {
              	return function() {
                  infoWindow.setContent(infoWindowContent[i][0]);
                  infoWindow.open(map, marker);
              	}
          	})(marker, i));

          	// Automatically center the map fitting all markers on the screen
          	map.fitBounds(bounds);
      	}

      	// Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
      	var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
          	this.setZoom(17);
          	google.maps.event.removeListener(boundsListener);
      	});	      
	}
</script>

 	<!-- GOOGLE MAP API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAluaiNHnESby8ETMOpw_FyjAlNtqR81sA&callback=initMap"
    async defer></script>