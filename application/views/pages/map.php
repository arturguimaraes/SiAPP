<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/map.css">
  	<script type="text/javascript" src="assets/js/leafletembed.js"></script>
  	<script src="assets/js/data.js"></script>
  	<link href="assets/css/simple-sidebar.css" rel="stylesheet">
  	<link href="assets/css/button.css" rel="stylesheet">
  	<link rel="stylesheet" href="assets/css/leaflet.awesome-markers.css">
  	<script src="assets/js/leaflet.awesome-markers.js"></script>
  	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">
  	<link rel="stylesheet" href="assets/css/build.css"> <!-- This is the checkbox and RadioButton -->
  	<link rel="stylesheet" href="assets/css/info.css">
  	<link rel="stylesheet" href="assets/css/legend.css">
    <title> SiAPP - Niterói </title>
  </head>
  <body>

  	<div id="wrapper">

  		<!-- /#sidebar-wrapper -->
  		<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        SiAPP - Niterói
                    </a>
                </li>
                <li>
				    <a href="#" id="show-occurrences" onclick="onClickOccurrences()">
				    	Marcar Ocorrências
				    </a>
                    <!--<a id="importData" href="#">Importar dados</a> -->
                </li>
                <li>
                	<a href="#" id="show-inductions" onclick="onClickInductions()">
                		Marcar Induções
                	</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- map-wrapper -->
	    <div id="map-wrapper">
	      <div id="map" class="leaf-container"> </div>
	    </div>
	    <!-- /#map-wrapper -->

	</div>
	<script src="assets/js/rules_map.js"></script>
  </body>
<html>
