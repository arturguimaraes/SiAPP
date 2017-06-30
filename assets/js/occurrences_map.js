/*
 * Javascript Implementation
 * Author: Artur Guimarães
 */

function addMarker(map, position, markerTitle) {
	var icon = {
		url: "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
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
	
	// Creates the info balloon for each marker
	google.maps.event.addListener(marker, 'click', (function(marker) {
		return function() {
			infoWindow.setContent(markerTitle);
			infoWindow.open(map, marker);
		}
	})(marker));
}