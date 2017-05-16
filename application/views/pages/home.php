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
                    <a href="#howitworks">Como funciona</a>
                </li>
                <li class="page-scroll menu-item">
                    <a href="#theft">Reportar um crime</a>
                </li>
                <!--<li class="page-scroll menu-item">
                    <a href="#contact">Contato</a>
                </li>-->
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
        <div class="intro-container col-xs-12 text-center absolute-20 no-padding-margin">
            <div class="col-xs-12 title-intro no-padding-margin animated bounceInLeft">
                <img class="centered-inline img-intro rotate" src="assets/img/icon/thief.png">
                <h1 class="h1-intro centered-inline">SiAPP</h1>
            </div>
            <div class="col-xs-12 subtitle-intro no-padding-margin animated bounceInLeft">
            	<h3 class="h3-intro">Um Sistema para Análise de Ocorrências de Crimes em Niterói</h3>
            </div>
            <ul class="col-xs-12 list-inline">
                <li class="page-scroll uppercase"><a href="#theft" class="btn btn-lg btn-red animated bounceInLeft" style="visibility: visible; animation-delay: 1.2s;"><span class="network-name">Reportar um crime</span></a>
                </li>
            </ul>
        </div>
        <div class="col-xs-12 text-center absolute-8">
            <div class="page-scroll">
                <a href="#about" class="btn btn-circle">
                    <i class="fa fa-hand-o-down animated"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="container content-section text-center margin-bottom-50" style="border-top: 0px; margin-top: 0px;">
    <div class="container">
    	<!-- ABOUT TITLE -->
        <div class="col-md-8 col-md-offset-2 text-center wrap_title animated animated" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-md-12"><h2>Quem somos?</h2></div>
            <p class="lead" style="margin-top:0">O SiAPP é um Sistema para Análise de Ocorrências de Crimes Baseado em Aprendizado Lógico-Relacional.</p>
        </div>
        
        <!-- ABOUT FIRST ROW -->
        <div class="row">
            <div class="col-md-8 fadeInDown text-center animated animated" style="visibility: visible; animation-name: fadeInDown;">
        		<img class="width-100" src="assets/img/niteroi_map.jpg">
            </div>
            <div class="col-md-4 fadeInDown text-center animated animated" style="visibility: visible; animation-name: fadeInDown;">
        		<p>Você pode ajudar a previnir próximos crimes!</p>
                <p>O SiAPP utiliza inteligência artificial para calcular e prever crimes em certas áreas e horários, de acordo com os dados recebidos. Ou seja, quanto mais dados, melhor a predição!</p>
                <p>Forneça dados sobre crimes que já aconteceram com VOCÊ e nos ajude previnir próximos crimes! Você certamente será beneficiado também!</p>
            </div>					
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section id="howitworks" class="content-section content-section-c text-center">
    <div class="container">
        <!-- HOW IT WORKS TITLE -->
        <div class="col-md-8 col-md-offset-2 text-center wrap_title">
            <h2>Como funciona o SiAPP?</h2>
            <p class="lead" style="margin-top:0">O SiAPP funciona de maneira muito simples! Explicaremos a seguir o processo.</p>
        </div>
        
        <!-- HOW IT WORKS ICONS FIRST ROW -->
        <div class="row">
            <div class="col-sm-6 fadeInDown text-center animated animated margin-bottom-20" style="visibility: visible; animation-name: fadeInDown;">
                <img class="rotate" src="assets/img/icon/map.png" alt="Encontrar o local">
                <h3>Encontre o local em que houve o crime</h3>
            </div>
            <div class="col-sm-6 fadeInDown text-center animated animated margin-bottom-20" style="visibility: visible; animation-name: fadeInDown;">
                <img class="rotate" src="assets/img/icon/retina.png" alt="Confirmar endereÃ§o">
                <h3>Confirme o endereço escolhido</h3>
            </div>
        </div>
        
        <!-- HOW IT WORKS ICONS SECOND ROW -->
        <div class="row tworow">
            <div class="col-sm-6 fadeInDown text-center animated animated margin-bottom-20" style="visibility: visible; animation-name: fadeInDown;">
                <img class="rotate" src="assets/img/icon/clipboard.png" alt="Informar os dados do crime">
                <h3>Forneça informações sobre o crime, como a data, hora e objetos perdidos.</h3>
            </div>
            <div class="col-sm-6 fadeInDown text-center animated animated margin-bottom-20" style="visibility: visible; animation-name: fadeInDown;">
                <img class="rotate" src="assets/img/icon/like.png" alt="Generic placeholder image">
                <h3>O resto é com a gente! Suas informações serão enviadas em sigilo para o nosso sistema.</h3>
            </div>
        </div>
    </div>
</section>

<!-- FILL INFO -->
<section id="theft" class="container content-section text-center">
    <div class="container">
        <div class="col-md-8 col-md-offset-2 margin-bottom-50">
            <div class="col-md-2"><img class="rotate" src="assets/img/icon/thief.png"></div>
            <div class="col-md-10"><h2>Reporte o crime aqui!</h2></div>
            <p>Ajude-nos a coletar informações sobre os dados do crime que ocorreu com você clicando no botão abaixo.</p>
            <a href="confirm.php" class="btn wow tada btn-danger animated animated uppercase" style="visibility: visible;">Preencher informações</a>
        </div>
    </div>
</section>

<!-- CONTACT -->
<!--<section id="contact" class="content-section content-section-c text-center">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 margin-bottom-20">
            	<div class="col-md-2"><img class="rotate" src="assets/img/icon/mail.png"></div>
                <div class="col-md-10"><h2>Entre em contato!</h2></div>
            </div>
            <div class="col-md-8 col-md-offset-2 margin-bottom-50">
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
                                <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                            </div>
                        </div>
                        <input type="submit" name="submit" id="submit" value="Enviar" class="btn wow tada btn-primary pull-right animated animated uppercase" style="visibility: visible;">
                    </div>
                </form>
                <hr class="featurette-divider hidden-lg">
                    <div class="col-md-5 col-md-push-1 address">
                        <address>
                        	<h3>Onde estamos</h3>
                        	<p class="lead">
                            	<a href="https://www.google.com.br/maps/search/campus+da+praia+vermelha+uff/@-22.9049549,-43.1335398,18z/data=!3m1!4b1">UFF - Campus da Praia Vermelha<br>NiterÃ³i - RJ - Brasil</p>
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
</section>-->