<!-- HEADER -->
<?php $this->load->view('templates/header');?>

<!-- NAVIGATION BAR -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
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
                    <a href="#about">Sobre</a>
                </li>
                <li class="page-scroll menu-item">
                    <a href="#map">Mapa</a>
                </li>
                <li class="page-scroll menu-item">
                    <a href="#fill">Fui roubado!</a>
                </li>
                <li class="page-scroll menu-item">
                    <a href="#contact">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HOME INTRODUCTION -->
<section class="intro">
    <div class="intro-body">
        <div class="col-xs-12 text-center absolute-20 no-padding-margin"  style="margin-top:10%;">
            <div class="col-xs-12 title-intro no-padding-margin animated fadeIn">
                <img class="centered-inline img-intro rotate" src="assets/img/icon/thief.png">
                <h1 class="h1-intro centered-inline">SiApp</h1>
            </div>
            <div class="col-xs-12 subtitle-intro no-padding-margin animated fadeIn">
            	<h3 class="h3-intro">Um Sistema para Análise de Ocorrências de Crimes em Niterói</h3>
            </div>
            <!--<ul class="col-xs-12 list-inline">
                <li><a href="#" class="btn btn-lg btn-blue animated fadeIn" style="visibility: visible; animation-delay: 1.2s;"><span class="network-name">Facebook</span></a>
                </li>
                <li><a href="#" class="btn btn-lg btn-cyano animated fadeIn" style="visibility: visible; animation-delay: 1.4s;"><span class="network-name">Twitter</span></a>
                </li>
            </ul>-->
        </div>
        <div class="col-xs-12 text-center absolute-8">
            <div class="page-scroll">
                <a href="#about" class="btn btn-circle">
                    <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="container content-section content-section-b text-center" style="border-top: 0px; margin-top: 0px;">
    <div class="container">
    	<!-- ABOUT TITLE -->
        <div class="col-md-6 col-md-offset-3 text-center wrap_title animated animated" style="visibility: visible; animation-name: fadeInDown;">
            <h2>Quem somos?</h2>
            <p class="lead" style="margin-top:0">O SiAPP é um Sistema para Análise de Ocorrências de Crimes Baseado em Aprendizado Lógico-Relacional.
            </p>
        </div>
        
        <!-- ABOUT FIRST ROW -->
        <div class="row">
            <div class="col-sm-8 fadeInDown text-center animated animated" style="visibility: visible; animation-name: fadeInDown;">
        		<img class="width-100" src="assets/img/niteroi_map.jpg">
            </div>
            <div class="col-sm-4 fadeInDown text-center animated animated" style="visibility: visible; animation-name: fadeInDown;">
        		<p>Você pode ajudar a previnir próximos crimes!</p>
                <p>O SiAPP utiliza uma inteligência artificial para calcular e prever crimes em certas áreas e horários, de acordo com os dados recebidos. Ou seja, quanto mais dados, melhor a predição!</p>
                <p>Forneça dados sobre crimes que já aconteceram com VOCÊ e nos ajude previnir próximos crimes! Você certamente será beneficiado também!</p>
            </div>					
        </div>
        
        <!-- ABOUT ICONS SECOND ROW -->
        <div class="row tworow">
            <div class="col-sm-4 fadeInDown text-center animated animated" style="visibility: visible; animation-name: fadeInDown;">
                <img class="rotate" src="assets/img/icon/map.png" alt="Generic placeholder image">
                <h3>Responsive</h3>
                <p class="lead">Epsum orial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
            </div>
            <div class="col-sm-4 fadeInDown text-center animated animated" style="visibility: visible; animation-name: fadeInDown;">
                <img class="rotate" src="assets/img/icon/bulb.png" alt="Generic placeholder image">
                <h3>Google</h3>
                <p class="lead">Epsum facrial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
            </div>
            <div class="col-sm-4 fadeInDown text-center animated animated" style="visibility: visible; animation-name: fadeInDown;">
                <img class="rotate" src="assets/img/icon/browser.png" alt="Generic placeholder image">
                <h3>Bootstrap</h3>
                <p class="lead">Epsum factorial non dosit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!--<p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p>-->
            </div>
        </div>
        
        <div
          class="row tworow fb-like"
          data-share="true"
          data-width="450"
          data-show-faces="true">
        </div>
    </div>
</section>

<!-- MAP -->
<section id="map" class="content-section text-center">
    <div class="">
        <div class="col-md-12">
            <div id="googleMap" style="width:100%;height:400px;"></div>      
            <script>
                function myMap() {
                var mapProp= {
                    center:new google.maps.LatLng(-22.8873528,-43.1133137),
                    zoom:14,
                };
                var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBx7RRomppFzBUCQfToBi22kF2UsdEU6Iw&callback=myMap"></script>
        </div>
    </div>
</section>
<!--<section id="download" class="content-section text-center">
    <div class="download-section">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <h2>Download Grayscale</h2>
                <p>You can download Grayscale for free on the download page at Start Bootstrap. You can also get the source code directly from GitHub if you prefer. Additionally, Grayscale is the first Start Bootstrap theme to come with a LESS file for easy color customization!</p>
                <a href="http://startbootstrap.com/grayscale" class="btn btn-default btn-lg">Visit Download Page</a>
            </div>
        </div>
    </div>
</section>-->

<!-- FILL INFO -->
<section id="fill" class="container content-section text-center">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Fui roubado! O que fazer?</h2>
            <br><p>Ajude-nos a coletar informações sobre os dados do crime que ocorreu com você clicando <a class="link-underline" href="#">aqui</a>.</p>
        </div>
    </div>
</section>

<section id="contact" class="content-section content-section-c text-center">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Entre em contato!</h2><br>
                <form role="form" action="" method="post">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="InputName">Seu Nome</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Digite o seu nome" required="">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Seu E-mail</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Digite seu e-mail" required="">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">Mensagem</label>
                            <div class="input-group">
                                <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required=""></textarea>
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
                        Rio de Janeiro, RJ 20040-030</a><br>
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
    
<!-- Footer -->
<?php $this->load->view('templates/footer');?>