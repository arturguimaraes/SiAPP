var map;
var ajaxRequest;
var plotlist;
var plotlayers=[];

function initmap() {
	// set up the map
	map = new L.Map('map', {zoomControl:false});

	// create the tile layer with correct attribution
	var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
	var osmAttrib='Map data � <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
	var osm = new L.TileLayer(osmUrl, {minZoom: 8, maxZoom: 30, attribution: osmAttrib});		

	// start the map in Niteroi
	map.setView(new L.LatLng(-22.8873528, -43.1133137),14);
	map.addLayer(osm);
	L.control.zoom({
	     position:'bottomleft'
	}).addTo(map);
}


