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
                <li class="page-scroll menu-item">
                    <a href="<?=$baseURL?>confirm">Reportar Crime</a>
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
                <div class="col-md-10"><h2>Encontre o local do crime</h2></div>
            </div>
            <div class="col-md-12 mapDiv margin-bottom-20">
                <input id="pac-input" name="pac-input" class="controls" type="text" placeholder="Procurar endereço">
                <div id="map"></div>
                <!-- Map Javascript Function -->
                <script src="assets/js/map.js"></script>    
                <!-- Google Maps API -->
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBx7RRomppFzBUCQfToBi22kF2UsdEU6Iw&libraries=places&callback=initAutocomplete"></script>
            </div>
            <div class="col-md-12  margin-bottom-20">
            	<button class="btn btn-danger uppercase" onclick="updateAddress()">Foi aqui!</button>
            </div>
        </div>
    </div>
</section>

<!-- CONFIRME O ENDEREÇO -->
<section id="confirm" class="container content-section text-center hidden">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 margin-bottom-20">
            <div class="col-md-2"><img class="rotate" src="assets/img/icon/retina.png"></div>
            <div class="col-md-10 margin-bottom-50"><h2>Confirme o endereço</h2></div>
            <form id="createForm" class="form-horizontal col-md-12" method="post">
              <fieldset>
                <div class="form-group col-md-12">
                	<label class="control-label col-md-2" for="street">Rua</label>
                	<div class="col-md-6">
                		<input type="text" class="form-control text-align-center" id="street" name="street" disabled>
                	</div>
                    <label class="control-label col-md-2" for="number">Nº</label>
                	<div class="col-md-2">
                		<input type="text" class="form-control text-align-center" id="number" name="number" disabled>
                	</div>
                </div>
                <div class="form-group col-md-12">
                	<label class="control-label col-md-2" for="city">Cidade</label>
                	<div class="col-md-6">
                		<input type="text" class="form-control text-align-center" id="city" name="city" disabled>
                	</div>
                    <label class="control-label col-md-2" for="state">Estado</label>
                	<div class="col-md-2">
                		<input type="text" class="form-control text-align-center" id="state" name="state" disabled>
                	</div>
                </div>
                <div class="form-group col-md-12">
                	<label class="control-label col-md-2" for="postal_code">CEP</label>
                	<div class="col-md-6">
                		<input type="text" class="form-control text-align-center" id="postal_code" name="postal_code" disabled>
                	</div>
                </div>
                <div class="form-group col-md-12">
                	<label class="control-label col-md-2" for="placeName">Descrição</label>
                	<div class="col-md-10">
                		<input type="text" class="form-control" id="placeName" name="placeName" disabled>
                	</div>
                </div>
                <div class="form-group col-md-5 margin-top-20"></div>
                <div class="form-group col-md-6 margin-top-20">
                	<div class="col-md-6">
                		<button class="btn btn-warning uppercase" onclick="backToAddress()">Voltar</button>
                	</div>
                    <div class="col-md-6">
                		<button class="btn btn-success uppercase" onclick="toData()">Confirmar</button>
                	</div>
                </div>
            </div>
              </fieldset>
            </form>
		</div>
	</div>
</section>

<!-- DADOS -->
<section id="data" class="container content-section text-center hidden">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 margin-bottom-20">
        	<div class="col-md-2"><img class="rotate" src="assets/img/icon/clipboard.png"></div>
            <div class="col-md-10 margin-bottom-50"><h2>Informe os dados</h2></div>
            <form id="createForm" class="form-horizontal col-md-12" method="post">
              <fieldset>
              	<div class="col-md-6">
                    <button class="btn btn-warning uppercase" onclick="backToConfirm()">Voltar</button>
                </div>
                
                <legend>Outros dados do roubo</legend>
              	<div class="form-group col-md-2"></div>
                <div class="form-group col-md-9">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                    <br><input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
                </div> 
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-success" name="submit">Enviar</button>
                </div>    
              </fieldset>
            </form>
		</div>
	</div>
</section>