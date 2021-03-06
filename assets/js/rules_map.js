/*Markers type */
var rouboMarker = L.AwesomeMarkers.icon({
	icon: 'user',
	prefix: 'fa',
	markerColor: 'red'
});
var furtoMarker = L.AwesomeMarkers.icon({
	icon: 'user',
	prefix: 'fa',
	markerColor: 'blue'
});
var rouboDeVeiculoMarker = L.AwesomeMarkers.icon({
	icon: 'user',
	prefix: 'fa',
	markerColor: 'green'
});
var assaltoAGrupoMarker = L.AwesomeMarkers.icon({
	icon: 'user',
	prefix: 'fa',
	markerColor: 'black'
});
var tentativaDeAssaltoMarker = L.AwesomeMarkers.icon({
	icon: 'user',
	prefix: 'fa',
	markerColor: 'orange'
});
var sequestroRelampagoMarker = L.AwesomeMarkers.icon({
	icon: 'user',
	prefix: 'fa',
	markerColor: 'purple'
});
var arrombamentoVeicularMarker = L.AwesomeMarkers.icon({
	icon: 'user',
	prefix: 'fa',
	markerColor: 'cadetblue'
});
var arrombamentoDomiciliarMarker = L.AwesomeMarkers.icon({
	icon: 'user',
	prefix: 'fa',
	markerColor: 'darkred'
});
var arrastaoMarker = L.AwesomeMarkers.icon({
	icon: 'user',
	prefix: 'fa',
	markerColor: 'darkgreen'
});

var legend = L.control({position: 'bottomright'});
var occurrencesLegend = L.control({position: 'bottomright'});

legend.onAdd = function (map)
{
	var div = L.DomUtil.create('div', 'info legend'),
		grades = [0, 20, 30, 40, 80, 110, 140],
		labels = [];

	// loop through our density intervals and generate a label with a colored square for each interval
	for (var i = 0; i < grades.length; i++) {
		div.innerHTML +=
			'<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
			grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
	}

	return div;
};

occurrencesLegend.onAdd = function (map)
{
	var div = L.DomUtil.create('div', 'info legend');
	var colors = {'Roubo':'#E84C38', 'Tentativa de assalto':'#F38E2E', 'Roubo de veículo':'#87BF27', 'Furto':'#37A8DB', 'Assalto a grupo':'#303030', 'Sequestro relâmpago':'#D252B9', 'Arrombamento veícular':'#436978','Arrombamento domiciliar':'#A23336', 'Arrastão':'#728224'};

	// loop through our density intervals and generate a label with a colored square for each interval
	$.each(colors, function(k, v){
		div.innerHTML += '<i style="background:' + v + '"></i> ' + k + '<br/>'
	});

	return div;
};

/* variables */
var occurrencesGroupLayer = null;

var neighbourhoodsGroupLayer = null;

var timeMap = {"dawn":"Período da madrugada", "night":"Período da noite", "morning":"Período da manhã", "evening":"Período da tarde"};
var dateMap = {"business_day":"Dia de semana", "weekend":"Fim de semana"};

var info = L.control({position:'topright'});
info.onAdd = function (map)
{
	this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
	this.update();
	return this._div;
};
info.update = function (props)
{
	var inductionsString = "";
	if(props)
	{
		if(props.inductions.length >= 1)
			inductionsString = props.inductions[0] + "<br/>";
		for(var i = 1; i < props.inductions.length; i++)
		{
			inductionsString += props.inductions[i] + "<br/>";
		}
	}
	this._div.innerHTML = '<h4>Regras geradas</h4>' +  (props ?
		'<b>' + firstToUpperCase(props.name.split('_').join(' ')) + '</b><br />' + props.density + ' ocorrências <br/>' + inductionsString
		: 'Passe o mouse em cima de um bairro');

};

$(document).ready(function()
{
	initmap();

	/* Occurrences data */
	var occurrencesData = JSON.parse(rawOccurrencesData);
	prepareOccurrencesData(occurrencesData);

	/* Inductions data */
	var inductionsData = JSON.parse(rawInductionsData)

	/* Neighbourhoods data from data.js */
	var neighbourhoodsData = JSON.parse(neighbourhoodsGeoJson);
	prepareNeighbourhoodsData(neighbourhoodsData, inductionsData);

	onClickOccurrences();
});

function prepareOccurrencesData(occurrencesData)
{
	occurrencesGroupLayer = L.layerGroup();
	for (var i = 0; i < occurrencesData.length; i++)
	{
		var marker = insertMarker(occurrencesData[i]);
		insertPopUp(marker, occurrencesData[i]);
	};
}
function insertMarker(rowData)
{
	var marker = null;
	if(rowData.occurrence_type.toLowerCase().localeCompare("roubo") == 0)
			marker = L.marker([rowData.latitude, rowData.longitude], {icon: rouboMarker});
	else if(rowData.occurrence_type.toLowerCase().localeCompare("furto") == 0)
		marker = L.marker([rowData.latitude, rowData.longitude], {icon: furtoMarker});
	else if(rowData.occurrence_type.toLowerCase().localeCompare("roubo_de_veiculo") == 0)
		marker = L.marker([rowData.latitude, rowData.longitude], {icon: rouboDeVeiculoMarker});
	else if(rowData.occurrence_type.toLowerCase().localeCompare("assalto_a_grupo") == 0)
		marker = L.marker([rowData.latitude, rowData.longitude], {icon: assaltoAGrupoMarker});
	else if(rowData.occurrence_type.toLowerCase().localeCompare("arrastao") == 0)
		marker = L.marker([rowData.latitude, rowData.longitude], {icon: arrastaoMarker});
	else if(rowData.occurrence_type.toLowerCase().localeCompare("arrombamento_domiciliar") == 0)
		marker = L.marker([rowData.latitude, rowData.longitude], {icon: arrombamentoDomiciliarMarker});
	else if(rowData.occurrence_type.toLowerCase().localeCompare("arrombamento_veicular") == 0)
		marker = L.marker([rowData.latitude, rowData.longitude], {icon: arrombamentoVeicularMarker});
	else if(rowData.occurrence_type.toLowerCase().localeCompare("tentativa_de_assalto") == 0)
		marker = L.marker([rowData.latitude, rowData.longitude], {icon: tentativaDeAssaltoMarker});
	else if(rowData.occurrence_type.toLowerCase().localeCompare("sequestro_relampago") == 0)
		marker = L.marker([rowData.latitude, rowData.longitude], {icon: sequestroRelampagoMarker});
	return marker;
}
function insertPopUp(marker, rowData)
{
	if(marker != null)
	{
		var occurrence_type = rowData.occurrence_type.toLowerCase();
		var normalizedString = occurrence_type.split('_').join(' ');
		normalizedString = firstToUpperCase(normalizedString);
		var objects = "";
		$.each(rowData, function(k, v)
		{
			value = v.toString();
			value = value.toLowerCase();
			if(value.localeCompare("true") == 0)
				objects +=  firstToUpperCase(k.split('_').join(' ')) + ", ";
		});
		objects = objects.replace(/,\s*$/, "");
		marker.bindPopup("<b>" + normalizedString + "</b>" + "<br><b>" + "Objetos roubados : " + "</b>" + objects + "." + "<br><b>" + "Hora : " + "</b>" + rowData.time);
		occurrencesGroupLayer.addLayer(marker);
	}
}
function firstToUpperCase( str )
{
	return str.substr(0, 1).toUpperCase() + str.substr(1);
}
function prepareNeighbourhoodsData(neighbourhoodsData, inductionsData)
{
	var features = [];
	for(k in neighbourhoodsData.features)
	{
		neighbourhoodsData.features[k].properties.inductions = [];
	}
	for(var i = 0; i < inductionsData.rules.length; i++)
	{
		var neighbourhood = inductionsData.rules[i].geo_position;
		if(neighbourhood.localeCompare("") != 0)
		{
			for (j in neighbourhoodsData.features)
			{
				//console.log("Feature name : ", neighbourhoodsData.features[j].properties.name);
				//console.log("Neighbourhood : ", neighbourhood);
				if(neighbourhood.localeCompare(neighbourhoodsData.features[j].properties.name) == 0)
				{
					insertInduction(neighbourhoodsData.features[j], inductionsData.rules[i]);
					features.push(neighbourhoodsData.features[j]);
					break;
				}
			}
		}
	}
	neighbourhoodsGroupLayer = L.geoJson(features, {style : featureStyle, onEachFeature : onEachFeature});
}
function insertInduction(feature, induction)
{
	var date = dateMap[induction.date];
	if(!date)
		date = "";
	var occurrenceType = induction.occurence_type;
	occurrenceType = firstToUpperCase(occurrenceType.split("_").join(" "));
	if(!occurrenceType)
		occurrenceType = "";
	var time = timeMap[induction.time];
	if(!time)
		time = "";
	var nearbyLocations = induction.nearby_locations;

	var objects = induction.stolen_objects;

	var objectsString = "";
	for(var i = 0; i < objects.length; i++)
	{
		value = objects[i].toString();
		value = value.toLowerCase();
			objectsString +=  firstToUpperCase(value.split('_').join(' ')) + ", ";
	};
	objectsString = objectsString.replace(/,\s*$/, "");

	var nearbyLocationsString = "Perto de ";
	for(var i = 0; i < nearbyLocations.length; i++)
	{
		value = nearbyLocations[i].toString();
		value = value.toLowerCase();
			nearbyLocationsString +=  firstToUpperCase(value.split('_').join(' ')) + ", ";
	};
	if(nearbyLocationsString.localeCompare("Perto de ") == 0)
		nearbyLocationsString = "";
	nearbyLocationsString = nearbyLocationsString.replace(/,\s*$/, "");

	var inductionString = (date.localeCompare("") != 0 ? firstToUpperCase(date) + " e " : "") + (time.localeCompare("") != 0 ? firstToUpperCase(time) + " e " : "") +
	(nearbyLocationsString.localeCompare("") != 0 ? nearbyLocationsString + " e ": "") + (objectsString.localeCompare("") != 0 ? objectsString + " e " : "");
	inductionString = inductionString.replace(/e\s*$/, "");
	inductionString = inductionString + (occurrenceType.localeCompare("") != 0 ? " -> " + firstToUpperCase(occurrenceType) : "");
	var len = feature.properties.inductions.length;
	inductionString = (len + 1) + ". " + inductionString;
	feature.properties.inductions.push(inductionString);

	//console.log(inductionString);
}
function onEachFeature(feature, layer)
{
	layer.on(
	{
		mouseover: highlightFeature,
		mouseout: resetHighlight,
		click: zoomToFeature
	});
}
function featureStyle(feature)
{
	return {
		fillColor: getColor(feature.properties.density),
		weight: 2,
		opacity: 1,
		color: 'white',
		dashArray: '3',
		fillOpacity: 0.7};
}
function getColor(d) {

return d > 140  ? '#800026' :
	   d > 110  ? '#BD0026' :
	   d > 80   ? '#E31A1C' :
	   d > 40   ? '#FC4E2A' :
	   d > 30   ? '#FD8D3C' :
	   d > 20   ? '#FEB24C' :
	   d > 10   ? '#FED976' :
				  '#FFEDA0';
}
function zoomToFeature(e)
{
	map.fitBounds(e.target.getBounds());
}
function highlightFeature(e)
{
	var layer = e.target;

	layer.setStyle(
	{
		weight: 5,
		color: '#666',
		dashArray: '',
		fillOpacity: 0.7
	});

	if (!L.Browser.ie && !L.Browser.opera)
	{
		layer.bringToFront();
	}
	info.update(layer.feature.properties);
}
function resetHighlight(e)
{
	neighbourhoodsGroupLayer.resetStyle(e.target);
	info.update();
}
function onClickInductions()
{
	map.removeLayer(occurrencesGroupLayer);
	if(document.getElementById("show-occurrences").textContent.localeCompare("Desmarcar ocorrências") == 0)
		map.removeControl(occurrencesLegend);
	document.getElementById("show-occurrences").textContent = "Marcar ocorrências";
	if(!map.hasLayer(neighbourhoodsGroupLayer))
	{
		neighbourhoodsGroupLayer.addTo(map);
		document.getElementById("show-inductions").textContent = "Desmarcar induções";
		legend.addTo(map);
		info.addTo(map);
	}
	else
	{
		document.getElementById("show-inductions").textContent = "Marcar induções";
		map.removeLayer(neighbourhoodsGroupLayer);
		map.removeControl(legend);
		map.removeControl(info);
	}
}
function onClickOccurrences()
{
	map.removeLayer(neighbourhoodsGroupLayer);
	if(document.getElementById("show-inductions").textContent.localeCompare("Desmarcar induções") == 0)
	{
		map.removeControl(legend);
		map.removeControl(info);
	}
	document.getElementById("show-inductions").textContent = "Marcar induções";
	if(!map.hasLayer(occurrencesGroupLayer))
	{
		occurrencesGroupLayer.addTo(map);
		document.getElementById("show-occurrences").textContent = "Desmarcar ocorrências";
		occurrencesLegend.addTo(map);
	}
	else
	{
		map.removeLayer(occurrencesGroupLayer);
		document.getElementById("show-occurrences").textContent = "Marcar ocorrências";
		map.removeControl(occurrencesLegend);
	}

}