function loadMap() {
	var mapProp= {
		center:new google.maps.LatLng(-22.8873528,-43.1133137),
		zoom:14,
	};
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}