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
                    <a href="<?=$baseURL?>inform">Informar Dados</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- DADOS -->
<section id="data" class="container content-section text-center">
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