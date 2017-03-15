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
                    <a href="#download">Cadastre-se</a>
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
        <div class="col-xs-12 text-center absolute-20 no-padding-margin">
            <div class="col-xs-12 title-intro no-padding-margin animated fadeIn">
                <img class="centered-inline img-intro rotate" src="assets/img/icon/thief.png">
                <h1 class="h1-intro centered-inline">SiApp</h1>
            </div>
            <div class="col-xs-12 subtitle-intro no-padding-margin animated fadeIn">
            	<h3 class="h3-intro">Um Sistema para Análise de Ocorrências de Crimes em Niterói</h3>
            </div>
            <ul class="col-xs-12 list-inline">
                <li><a href="#" class="btn btn-lg btn-blue animated fadeIn" style="visibility: visible; animation-delay: 1.2s;"><span class="network-name">Facebook</span></a>
                </li>
                <li><a href="#" class="btn btn-lg btn-cyano animated fadeIn" style="visibility: visible; animation-delay: 1.4s;"><span class="network-name">Twitter</span></a>
                </li>
            </ul>
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
        <div class="col-md-6 col-md-offset-3 text-center wrap_title">
            <h2>O que é?</h2>
            <p class="lead" style="margin-top:0">O TravelApp vai revolucionar a vida de quem gosta de viajar. Descubra viagens de sua preferência, feitas por pessoas que têm o mesmo estilo que você!</p>
        </div>
        
        <!-- ABOUT ICONS FIRST ROW -->
        <div class="row">
            <div class="col-sm-4 fadeInDown text-center animated animated" style="visibility: visible; animation-name: fadeInDown;">
                <img class="rotate" src="assets/img/icon/search.png" alt="Ache sua viagem">
                <h3>Ache a viagem que se encaixa no seu perfil</h3>
                <p class="lead">Com o TravelApp você encontra a melhor viagem que se encaixa com você!</p>
            </div>
            <div class="col-sm-4 fadeInDown text-center animated animated" style="visibility: visible; animation-name: fadeInDown;">
                <img class="rotate" src="assets/img/icon/pencil.png" alt="Generic placeholder image">
                <h3>Gastos</h3>
                <p class="lead">Coloque na ponta do lápis todos os gastos de acordo com pessoas que já fizeram a viagem que você deseja.</p>
            </div>
            <div class="col-sm-4 fadeInDown text-center animated animated" style="visibility: visible; animation-name: fadeInDown;">
                <img class="rotate" src="assets/img/icon/people.png" alt="Generic placeholder image">
                <h3>Viaje em grupo</h3>
                <p class="lead">Sonha em viajar para um lugar e não tem com quem ir? Junte-se com outras pessoas que estão querendo fazer a mesma viagem que você!</p>
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

<!-- DOWNLOAD -->
<section id="download" class="content-section text-center">
    <div class="download-section">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <h2>Download Grayscale</h2>
                <p>You can download Grayscale for free on the download page at Start Bootstrap. You can also get the source code directly from GitHub if you prefer. Additionally, Grayscale is the first Start Bootstrap theme to come with a LESS file for easy color customization!</p>
                <a href="http://startbootstrap.com/grayscale" class="btn btn-default btn-lg">Visit Download Page</a>
            </div>
        </div>
    </div>
</section>

<!-- FILL INFO -->
<section id="fill" class="container content-section text-center">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Fui roubado!</h2>
            <p>Informe aqui os dados do seu roubo.</p>
            <ul class="list-inline banner-social-buttons">
                <li><a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                </li>
                <li><a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                </li>
                <li><a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="contact" class="content-section content-section-c text-center">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Contact Start Bootstrap</h2>
            <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
            <p>feedback@startbootstrap.com</p>
            <ul class="list-inline banner-social-buttons">
                <li><a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                </li>
                <li><a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                </li>
                <li><a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>
    
<!-- Footer -->
<?php $this->load->view('templates/footer');?>