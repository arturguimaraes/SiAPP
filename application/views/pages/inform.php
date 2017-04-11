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
                    <a href="<?=$baseURL?>confirm">Procurar Outro Endereço</a>
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
            <form class="form-horizontal col-md-12" method="post">
                            
                <!-- DADOS DO CRIME -->
                <fieldset>   
                	<legend>Dados do Crime</legend>
                    <div class="form-group col-md-12">
                        <label class="control-label col-md-4" for="placeName">Descrição do Local</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control text-align-center" id="placeName" name="placeName" value="<?=$desc?>" disabled>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label col-md-4" for="occurrence_type">Tipo de Ocorrência</label>
                        <div class="col-md-5">
                            <select class="form-control" id="occurrence_type" name="occurrence_type">
                                <option value="">-</option>
                                <option <?php if(set_value('occurrence_type') == '1'){echo("selected");}?> value="1">Assalto sem arma</option>
                                <option <?php if(set_value('occurrence_type') == '2'){echo("selected");}?> value="2">Assalto à mão armada</option>
                                <option <?php if(set_value('occurrence_type') == '3'){echo("selected");}?> value="3">Furto</option>
                                <option <?php if(set_value('occurrence_type') == '4'){echo("selected");}?> value="4">Sequestro</option>			
                            </select>
                        </div>
                    </div>
                    <?php echo form_error('occurrence_type'); ?>
                    <div class="form-group col-md-12">
                    	<label class="control-label col-md-4" for="date">Data / Hora</label>
                        <div class="col-md-5 input-group date padding-left-right-15" id="datetimepicker">
                            <input type="text" class="form-control text-align-center" id="date" name="date" value="<?=set_value('date')?>" >
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <?php echo form_error('date'); ?>
				</fieldset>
                
                <!-- DADOS DOS OBJETOS -->
                <fieldset>
                    <legend>Objetos Perdidos / Furtados</legend>
                    <div class="form-group col-md-12">
                        <label class="control-label col-md-4" for="obj_number">Quantidade de Objetos</label>
                        <div class="col-md-2">
                            <select class="form-control" id="obj_number" name="obj_number" onchange="updateObjects()">
                                <?php for($i = 1; $i <= 10; $i++) { ?>
									<option <?php if(set_value('obj_number') == $i){echo("selected");}?> value="<?=$i?>"><?=$i?></option>			
								<?php } ?>		
                            </select>
                        </div>
                    </div> 
                    
                    <? /* OBJETOS VISÍVEIS */ ?>
                    <div id="objectDiv1" class="form-group col-md-12">
                        <label class="control-label col-md-4" for="object1">Descrição do objeto 1</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="object1" name="object1" value="<?=set_value('object1')?>">
                        </div>
                    </div>
                    <?php echo form_error('object1'); 
                    $objNumber = set_value('obj_number') != "" ? intval(set_value('obj_number')) : 0;
					if ($objNumber > 1) { 
							for($i = 2; $i <= $objNumber; $i++) { ?>
                    			<div id="objectDiv<?=$i?>" class="form-group col-md-12">
                                    <label class="control-label col-md-4" for="object<?=$i?>">Descrição do objeto <?=$i?></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="object<?=$i?>" name="object<?=$i?>"  value="<?=set_value('object' . $i)?>">
                                    </div>
                                </div>
								<?php echo form_error('object' . $i); 
							} 
					} else { 
						$objNumber = 2; 
					}
					
					/* OBJETOS INVISÍVEIS */
					for($i = $objNumber; $i <= 10; $i++) { ?>
                    	<div id="objectDiv<?=$i?>" class="form-group col-md-12 hidden">
                            <label class="control-label col-md-4" for="object<?=$i?>">Descrição do objeto <?=$i?></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="object<?=$i?>" name="object<?=$i?>" disabled>
                            </div>
                        </div>	
                    <?php } ?>
                    
                    <div class="col-md-12 margin-bottom-20">
                        <input type="submit" name="submit" id="submit" value="Enviar Dados" class="btn wow tada btn-success uppercase animated animated" style="visibility: visible;">
                    </div>
                	<input type="hidden" class="form-control" id="latitude" name="latitude" value="<?=$lat?>">
                    <input type="hidden" class="form-control" id="longitude" name="longitude" value="<?=$lng?>">
                    <input type="hidden" class="form-control" id="description" name="description" value="<?=$desc?>">
                </fieldset>
        	</form>
		</div>
	</div>
</section>