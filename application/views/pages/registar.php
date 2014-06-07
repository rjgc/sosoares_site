<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/registar.css">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/ie8/registar.css">
<![endif]-->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
					echo site_url('caixilharia/home');
				} else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
					echo site_url('vidro/home');
				} else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
					echo site_url('extrusao/home');
				} ?>"><?=lang('home')?></a></li>
				<li><?=lang('registar')?></li>
			</ul>
			<h1 class="title3"><?=lang('registar')?></h1>
			<div class="mensagem alert alert-warning" id="jq_msg2"></div>
		</div>
	</div>
	<form class="mensagem" method="post" role="form" id="form2"> 
		<div class="row">
			<div class="col-md-4" id="col1">                            
				<label><?=lang('nome')?>:*</label>
				<input class="form-control caixa-texto" type="text" id="nome" name="nome" placeholder="<?=lang('nome')?>" value="<?php echo set_value('nome'); ?>">
				<p></p>
				<label><?=lang('morada')?>:*</label>
				<input class="form-control caixa-texto" type="text" id="morada" name="morada" placeholder="<?=lang('morada')?>" value="<?php echo set_value('morada'); ?>">
				<p></p>
				<label><?=lang('codigo')?>:*</label>
				<div class="codigo" id="divCodigo">
					<input class="form-control caixa-texto" type="text" id="codigo" name="codigo" placeholder="<?=lang('codigo')?>" value="<?php echo set_value('codigo'); ?>">
					<p class="hifen">-</p>
					<input class="form-control caixa-texto" type="text" id="codigo2" name="codigo2" placeholder="<?=lang('codigo')?>" value="<?php echo set_value('codigo2'); ?>">
				</div>
				<p></p>
				<label><?=lang('pais')?>:*</label>
				<select class="form-control caixa-texto" id="pais" name="pais" placeholder="<?=lang('pais')?>" value="<?php set_value('pais'); ?>">
					<option selected value="-1"><?=lang('spais')?></option>
					<?php foreach ($paises as $pais) { ?>
					<option value="<?=$pais?>"><?=$pais?></option>
					<?php } ?>
				</select>
				<p></p>
				<label><?=lang('localidade')?>:*</label>
				<input class="form-control caixa-texto" type="text" id="localidade" name="localidade" placeholder="<?=lang('localidade')?>" value="<?php echo set_value('localidade'); ?>">
				<p></p>
				<label id="labelDistrito"><?=lang('distrito')?>:*</label>
				<select class="form-control caixa-texto" id="distrito" name="distrito" placeholder="<?=lang('distrito')?>" value="<?php set_value('distrito'); ?>">
					<option selected value="-1"><?=lang('sdistrito')?></option>
					<?php foreach ($distritos as $distrito) { ?>
					<option value="<?=$distrito?>"><?=$distrito?></option>
					<?php } ?>
				</select>
				<p></p>
				<label id="labelConcelho"><?=lang('concelho')?>:*</label>
				<select class="form-control caixa-texto" id="concelho" name="concelho" placeholder="<?=lang('concelho')?>" value="<?php set_value('concelho'); ?>">
					<option selected value="-1"><?=lang('sdistrito')?></option>
				</select>
				<p></p>
				<label><?=lang('telefone')?>:*</label>
				<input class="form-control caixa-texto" type="text" id="telefone" name="telefone" placeholder="<?=lang('telefone')?>" value="<?php echo set_value('telefone'); ?>">            
				<p></p>
				<label><?=lang('contribuinte')?>:*</label>
				<input class="form-control caixa-texto" type="text" id="contribuinte" name="contribuinte" placeholder="<?=lang('contribuinte')?>" value="<?php echo set_value('contribuinte'); ?>">        
			</div>
			<div class="col-md-4" id="col2">
				<p></p>
				<div class="row">
					<div class="col-md-2">  
						<label><?=lang('area')?>:*</label>
					</div>
					<div class="col-md-6">  
						<input class="area" type="checkbox" name="serralharia" value="Serralharia" <?php echo set_checkbox('serralharia', 'Serralharia'); ?> /><?=lang('serralharia')?><br>
						<input class="area" type="checkbox" name="vidraria" value="Vidraria" <?php echo set_checkbox('vidraria', 'Vidraria'); ?> /><?=lang('rvidraria')?><br>
						<input class="area" type="checkbox" name="armazenista" value="Armazenista" <?php echo set_checkbox('armazenista', 'Armazenista'); ?> /><?=lang('armazenista')?><br>
						<input class="area" type="checkbox" name="arquitectura" value="Arquitectura" <?php echo set_checkbox('arquitectura', 'Arquitectura'); ?> /><?=lang('arquitectura')?><br>
						<input class="area" type="checkbox" name="construtora" value="Construtora" <?php echo set_checkbox('construtora', 'Construtora'); ?> /><?=lang('construtora')?><br>
						<input class="area" type="checkbox" name="cfinal" value="Cliente Final" <?php echo set_checkbox('cfinal', 'Cliente Final'); ?> /><?=lang('cfinal')?><br>
						<input class="area" type="checkbox" name="outros" value="Outros" <?php echo set_checkbox('outros', 'Outros'); ?> /><?=lang('outros')?><br>
					</div>
				</div>
				<p></p>
				<label>E-mail:*</label>
				<input class="form-control caixa-texto" type="text" id="email" name="email" placeholder="E-mail" value="<?php echo set_value('email'); ?>">
				<p></p>
				<label>Password:*</label>
				<input class="form-control caixa-texto" type="password" id="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
				<p></p>
				<label><?=lang('confirmar')?>:*</label>
				<input class="form-control caixa-texto" type="password" id="confirmar" name="confirmar" placeholder="<?=lang('confirmar')?>" value="<?php echo set_value('confirmar'); ?>">
				<p></p>
				<span class="obrigatorio">* <?=lang('obrigatorio')?></span>
				<div class="botoes" id="botoes">
					<input class="btn btn-primary" type="submit" id="registar" name="registar" value="<?=lang('registar')?>">
					<input class="btn btn-default" type="reset" data-dismiss="modal" id="cancel" name="cancel" value="<?=lang('cancelar')?>">
				</div>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">var item = '<?=lang("sconcelho")?>'</script>
<script src="<?php echo base_url() ?>assets/sosoares/js/registo.js"></script>

