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
                    <a href="#theft">Reportar um crime</a>
                </li>
                <li class="page-scroll menu-item">
                    <a href="#contact">Contato</a>
                </li>
            </ul>
        </div>
        <script>
        	$(window).scroll(function() {
				if ($(".navbar").offset().top > 50) {
					$(".navbar-fixed-top").addClass("top-nav-collapse");
				} else {
					$(".navbar-fixed-top").removeClass("top-nav-collapse");
				}
			});
        </script>
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
            <ul class="col-xs-12 list-inline">
                <li class="page-scroll uppercase"><a href="#theft" class="btn btn-lg btn-red animated fadeIn" style="visibility: visible; animation-delay: 1.2s;"><span class="network-name">Reportar um crime</span></a>
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
<section id="about" class="container content-section text-center margin-bottom-50" style="border-top: 0px; margin-top: 0px;">
    <div class="container">
    	<!-- ABOUT TITLE -->
        <div class="col-md-7 col-md-offset-2 text-center wrap_title animated animated" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-md-2"><img class="rotate" src="assets/img/icon/qmark.png"></div>
            <div class="col-md-10"><h2>Quem somos?</h2></div>
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
        <!--<div
          class="row tworow fb-like"
          data-share="true"
          data-width="450"
          data-show-faces="true">
        </div>-->
    </div>
</section>

<!-- FILL INFO -->
<section id="theft" class="content-section content-section-c text-center">
    <div class="container">
        <div class="col-md-8 col-md-offset-2 margin-bottom-50">
            <div class="col-md-2"><img class="rotate" src="assets/img/icon/thief.png"></div>
            <div class="col-md-10"><h2>Reporte o crime aqui!</h2></div>
            <p>Ajude-nos a coletar informações sobre os dados do crime que ocorreu com você clicando no botão abaixo.</p>
            <a href="inform" class="btn wow tada btn-embossed btn-success animated animated uppercase" style="visibility: visible;">Preencher informações</a>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="container content-section text-center">
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