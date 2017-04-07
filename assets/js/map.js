/*
 * Javascript Implementation
 * Author: Artur Guimarães
 */

var droppedPin = null;
var markers = [];

function initAutocomplete() {
  	var mapProprieties = {
  		center: {lat: -22.8873528, lng: -43.1133137},
		zoom: 14,
		mapTypeId: google.maps.MapTypeId.ROADMAP
  	};
  
  	var map = new google.maps.Map(document.getElementById('map'), mapProprieties);

	// Create the search box and link it to the UI element.
	var input = document.getElementById('pac-input');
	var searchBox = new google.maps.places.SearchBox(input);
	
	//Checks if user agent is mobile
	var mobileAgent = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
	
	//Decides search box's position depending on screen's size and user agent type
	if (mobileAgent && screen.width <= 500)
		var searchBoxPostion = google.maps.ControlPosition.LEFT_TOP;
	else
		var searchBoxPostion = google.maps.ControlPosition.TOP_LEFT;
	
	//Sets the position of the Search Box
	map.controls[searchBoxPostion].push(input)
	
	// Bias the SearchBox results towards current map's viewport.
	map.addListener('bounds_changed', function() {
		searchBox.setBounds(map.getBounds());
	});
	
	// Try HTML5 geolocation.
	//geolocation(map);
	
	// Listen for the event fired when the user selects a prediction and retrieve
	// more details for that place.
	searchBox.addListener('places_changed', function() {
		var places = searchBox.getPlaces();
	
		if (places.length == 0)
			return;
		
		//Clears old markers
		clearMarkers();
		
		// For each place, get the icon, name and location.
		var bounds = new google.maps.LatLngBounds();
		places.forEach(function(place) {
			//Plot marker
			addMarker(map, place.geometry.location, place.name, place.icon);			
			
			//Gets the chosen place
			droppedPin = place;
			
			//Only geocodes have viewport.
			if (place.geometry.viewport)
				bounds.union(place.geometry.viewport);
			else
				bounds.extend(place.geometry.location);
		});
		map.fitBounds(bounds);
	});
}

function addMarker(map, position, markerTitle, iconUrl) {
	var icon = {
		url: iconUrl,
		size: new google.maps.Size(71, 71),
		origin: new google.maps.Point(0, 0),
		anchor: new google.maps.Point(17, 34),
		scaledSize: new google.maps.Size(25, 25)
	};
	var marker = new google.maps.Marker({
		map: map,
		icon: icon,
		title: markerTitle,
		draggable: false,
		animation: google.maps.Animation.DROP,
		position: position
	});
	var infoWindow = new google.maps.InfoWindow();
	
	// Create a marker for each place.
	markers.push(marker);
	
	//Creates the info balloon for each marker
	google.maps.event.addListener(marker, 'click', (function(marker) {
		return function() {
			infoWindow.setContent(markerTitle);
			infoWindow.open(map, marker);
		}
	})(marker));
}

function geolocation(map) {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			var pos = {
				lat: position.coords.latitude,
				lng: position.coords.longitude
			};
			map.setCenter(pos);
			
			//Clears old markers
			clearMarkers();

			/*var request = {
				location: pos,
				radius: 500,
				types: ['street_address']
			};
			var service = new google.maps.places.PlacesService(map);
			service.nearbySearch(request, function callback(results, status) {
				if (status === google.maps.places.PlacesServiceStatus.OK) {
					for (var i = 0; i < results.length; i++) {
				  		alert(results[i]);
					}
				}
			});*/
			
			//Plot marker
			addMarker(map, pos, "Sua localização atual", "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png");
						
		}, function() {
			handleLocationError(true, infoWindow, map.getCenter());
		});
	} else {
		// Browser doesn't support Geolocation
		handleLocationError(false, infoWindow, map.getCenter());
	}
}

function clearMarkers() {
	// Clear out the old markers.
	markers.forEach(function(marker) {
		marker.setMap(null);
	});
	markers = [];
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Erro: O serviço de Geolocation falhou.' :
                        'Erro: O seu navegador não suporta geolocation.');
}

String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};

function updateAddress() {
	if (droppedPin == null)
		alert("Escolha um endereço válido!");
	else {
		confirmAddress();
		var address = [];
		if (droppedPin.address_components != null)
			if (droppedPin.address_components.length > 0) 
				address = getAddressArray(droppedPin.address_components);
		
		$("[name='street'").val(getValue(address['street']));
		$("[name='number'").val(getValue(address['number']));
		$("[name='city'").val(getValue(address['city']));
		$("[name='state'").val(getValue(address['state']));
		$("[name='postal_code'").val(getValue(address['postal_code']));
		$("[name='placeName'").val(getValue(droppedPin.name));
	}
}

function getAddressArray(address) {
	var addressArray = [];
	for (i = 0; i < address.length; i++) {
		var type = address[i].types[0];		
		switch (type) {
			case 'route':
				addressArray['street'] = address[i].long_name;
				break;
			case 'street_number':
				addressArray['number'] = address[i].long_name;
				break;
			case 'sublocality_level_1':
				addressArray['neighborhood'] = address[i].long_name;
				break;
			case 'administrative_area_level_2':
				addressArray['city'] = address[i].long_name;
				break;
			case 'administrative_area_level_1':
				addressArray['state'] = address[i].short_name;
				break;
			case 'country':
				addressArray['country'] = address[i].long_name;
				break;
			case 'postal_code':
				addressArray['postal_code'] = address[i].long_name;
				break;				
		}
	}
	return addressArray;
}

function confirmAddress() {
	$("#findPlace").addClass('hidden');
	$("#confirm").removeClass('hidden');
}

function backToAddress() {
	$("#findPlace").removeClass('hidden');
	$("#confirm").addClass('hidden');
}

function fillLatLng() {
	$("[name='latitude'").val(droppedPin.geometry.location.lat());
	$("[name='longitude'").val(droppedPin.geometry.location.lng());
	$("[name='description'").val(droppedPin.name);
}

function getValue(string) {
	if (string == null)
		return '-';
	if (string == "")
		return '-';
	return string;	
}