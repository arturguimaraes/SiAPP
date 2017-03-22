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
                    <a href="#">Home</a>
                </li>
                <li class="page-scroll menu-item">
                    <a href="#data">Informe os Dados</a>
                </li>
                <li class="page-scroll menu-item">
                    <a href="#map">Mapa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- DATA -->
<section id="data" class="container content-section text-center">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 margin-bottom-50">
            	<div class="col-md-2"><img class="rotate" src="assets/img/icon/mail.png"></div>
                <div class="col-md-10"><h2>Entre em contato!</h2></div>
                <form role="form" action="" method="post">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Seu Nome</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Digite o seu nome" required="">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Seu E-mail</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required="">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <div class="input-group">
                                <textarea name="message" id="message" class="form-control" rows="5" required=""></textarea>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                            </div>
                        </div>
                        <input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right animated animated" style="visibility: visible;">
                    </div>
                </form>
                <hr class="featurette-divider hidden-lg">
                    <div class="col-md-5 col-md-push-1 address">
                        <address>
                        <h3>Onde estamos</h3>
                        <p class="lead"><a href="https://www.google.com.br/maps/place/R.+do+Ouvidor,+90+-+Centro,+Rio+de+Janeiro+-+RJ,+20040-030/@-22.9031712,-43.1795134,17z/data=!3m1!4b1!4m5!3m4!1s0x997f5ee3767063:0x841942c7bca59ebb!8m2!3d-22.9031712!4d-43.1773247">Rua do Ouvidor, 90<br>
                        Rio de Janeiro, RJ 20040-030</a>
                        Telefone: +55 21 3190 1971</p>
                        </address>
    
                        <h3>Social</h3>
                        <li class="social"> 
                        <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a>
                        <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> 
                        <a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a>
                        <a href="#"><i class="fa fa-flickr fa-size"> </i> </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>

<!-- MAP -->
<section id="map" class="content-section text-center">
    <div class="">
        <div class="col-md-12">
            <div id="googleMap" style="width:100%;height:400px;"></div> 
            <!-- Map Javascript Function -->
    		<script src="assets/js/map.js"></script>    
            <!-- Google Maps API -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBx7RRomppFzBUCQfToBi22kF2UsdEU6Iw&callback=loadMap"></script>
        </div>
    </div>
</section>