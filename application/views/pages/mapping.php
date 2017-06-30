<!-- NAVIGATION BAR -->
<nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation">
    <div class="container">
    	<!-- HOME NAV BAR LINK -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">
                <i class="fa fa-play-circle"></i>  <span class="light">SiAPP</span>
            </a>
        </div>
		<!-- NAV BAR LINKS -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll menu-item">
                    <a href="<?=$baseURL?>">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ENCONTRE O LOCAL -->
<section id="findPlace" class="container content-section text-center">
    <div class="row">
        <div class="col-md-12 margin-bottom-50">
            <div class="col-md-8 col-md-offset-2 margin-bottom-20">
                <div class="col-md-2"><img class="rotate" src="assets/img/icon/map.png"></div>
                <div class="col-md-10"><h2>Visualização das Ocorrências</h2></div>
            </div>
            <div class="col-md-12 mapDiv margin-bottom-20">
                <!--<input id="pac-input" name="pac-input" class="controls" type="text" placeholder="Procurar endereço">-->
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>

<!-- Map Javascript Function -->
<script>
	var markers = [];

	function initAutocomplete() {
		var mapProprieties = {
			center: {lat: -22.8873528, lng: -43.1133137},
			zoom: 14,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
	  
		var map = new google.maps.Map(document.getElementById('map'), mapProprieties);
		var pos = {lat: -22.8873528, lng: -43.1133137}
		
		<?php foreach($mapObjects as $mapObject) { ?>
			pos = {lat: <?=$mapObject['latitude']?>, lng: <?=$mapObject['longitude']?>};
			addMarker(map, pos, "<?=$mapObject['occurrence_type']?>");
		<?php } ?>
	}
	
</script>
<script src="assets/js/occurrences_map.js"></script>

<!-- Google Maps API -->
<!-- API 1 - siapp-162502 -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbjgN0GWbj4OMywlxXGCUwyBx1RSpUk5w&libraries=places&callback=initAutocomplete"></script>

<!-- API 2 - siapp-161621 -->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBx7RRomppFzBUCQfToBi22kF2UsdEU6Iw&libraries=places&callback=initAutocomplete"></script>-->