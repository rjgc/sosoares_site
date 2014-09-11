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
				<li><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
					echo site_url('caixilharia/area_privada');
				} else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
					echo site_url('vidro/area_privada');
				} else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
					echo site_url('extrusao/area_privada');
				} ?>"><?=lang('area_privada')?></a></li>
				<li><?=lang('editar')?></li>
			</ul>
			<h1 class="title3"><?=lang('editar')?></h1>
			<div class="mensagem alert alert-warning" id="jq_msg2"></div>
		</div>
	</div>
	<form class="mensagem" method="post" role="form" id="form7"> 
		<div class="row">
			<div class="col-md-4" id="col1">                            
				<label><?=lang('nome')?>:*</label>
				<input class="form-control caixa-texto" type="text" id="nome" name="nome" placeholder="<?=lang('nome')?>" value="<?=$_SESSION['profile']['user_profile_name']?>">
				<p></p>
				<label><?=lang('morada')?>:*</label>
				<input class="form-control caixa-texto" type="text" id="morada" name="morada" placeholder="<?=lang('morada')?>" value="<?=$_SESSION['profile']['user_profile_morada']?>">
				<p></p>
				<label><?=lang('codigo')?>:*</label>
				<div class="codigo" id="divCodigo">
					<?php 
					$codigo = '';
					$codigo2 = '';

					if (!empty($_SESSION['profile']['user_profile_codigo_postal'])) {
						$array = explode("-", $_SESSION['profile']['user_profile_codigo_postal']);
						$codigo = $array[0];

						if (count($array) > 1)
							$codigo2 = $array[1];
					}
					?>
					<input class="form-control caixa-texto" type="text" id="codigo" name="codigo" placeholder="<?=lang('codigo')?>" value="<?=$codigo?>">
					<p class="hifen">-</p>
					<input class="form-control caixa-texto" type="text" id="codigo2" name="codigo2" placeholder="<?=lang('codigo')?>" value="<?=$codigo2?>">
				</div>
				<p></p>
				<label><?=lang('pais')?>:*</label>
				<select class="form-control caixa-texto" id="pais" name="pais" placeholder="<?=lang('pais')?>" value="<?=$_SESSION['profile']['user_profile_pais']?>?>">					
					<option selected value="-1"><?=lang('spais')?></option>
				</select>
				<p></p>
				<label><?=lang('localidade')?>:*</label>
				<input class="form-control caixa-texto" type="text" id="localidade" name="localidade" placeholder="<?=lang('localidade')?>" value="<?=$_SESSION['profile']['user_profile_localidade']?>">
				<p></p>
				<label id="labelDistrito"><?=lang('distrito')?>:*</label>
				<select class="form-control caixa-texto" id="distrito" name="distrito" placeholder="<?=lang('distrito')?>" value="<?=$_SESSION['profile']['user_profile_distrito']?>">
					<option selected value="-1"><?=lang('sdistrito')?></option>
				</select>
				<p></p>
				<label id="labelConcelho"><?=lang('concelho')?>:*</label>
				<select class="form-control caixa-texto" id="concelho" name="concelho" placeholder="<?=lang('concelho')?>" value="<?=$_SESSION['profile']['user_profile_concelho']?>">
					<option selected value="-1"><?=lang('sdistrito')?></option>
				</select>
				<p></p>
				<label><?=lang('telefone')?>:*</label>
				<input class="form-control caixa-texto" type="text" id="telefone" name="telefone" placeholder="<?=lang('telefone')?>" value="<?=$_SESSION['profile']['user_profile_telefone']?>">            
				<p></p>
				<label><?=lang('contribuinte')?>:*</label>
				<input class="form-control caixa-texto" type="text" id="contribuinte" name="contribuinte" placeholder="<?=lang('contribuinte')?>" value="<?=$_SESSION['profile']['user_profile_contribuinte']?>">        
			</div>
			<div class="col-md-4" id="col2">
				<p></p>
				<div class="row">
					<div class="col-md-2">  
						<label><?=lang('area')?>:*</label>
					</div>
					<div class="col-md-6">  
						<input class="area" type="checkbox" id="serralharia" name="serralharia" value="Serralharia" <?php echo set_checkbox('serralharia', 'Serralharia'); ?> /><?=lang('serralharia')?><br>
						<input class="area" type="checkbox" id="vidraria" name="vidraria" value="Vidraria" <?php echo set_checkbox('vidraria', 'Vidraria'); ?> /><?=lang('rvidraria')?><br>
						<input class="area" type="checkbox" id="armazenista" name="armazenista" value="Armazenista" <?php echo set_checkbox('armazenista', 'Armazenista'); ?> /><?=lang('armazenista')?><br>
						<input class="area" type="checkbox" id="arquitectura" name="arquitectura" value="Arquitectura" <?php echo set_checkbox('arquitectura', 'Arquitectura'); ?> /><?=lang('arquitectura')?><br>
						<input class="area" type="checkbox" id="construtora" name="construtora" value="Construtora" <?php echo set_checkbox('construtora', 'Construtora'); ?> /><?=lang('construtora')?><br>
						<input class="area" type="checkbox" id="cfinal" name="cfinal" value="Cliente Final" <?php echo set_checkbox('cfinal', 'Cliente Final'); ?> /><?=lang('cfinal')?><br>
						<input class="area" type="checkbox" id="outros" name="outros" value="Outros" <?php echo set_checkbox('outros', 'Outros'); ?> /><?=lang('outros')?><br>
					</div>
				</div>
				<p></p>
				<span class="obrigatorio">* <?=lang('obrigatorio')?></span>
				<div class="botoes" id="botoes">
					<input class="btn btn-primary" type="submit" id="guardar" name="guardar" value="<?=lang('guardar')?>">
					<input class="btn btn-default" type="reset" data-dismiss="modal" id="cancel" name="cancel" value="<?=lang('cancelar')?>">
				</div>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	var item = '<?=lang("sconcelho")?>'; 
	var paises = '<?php echo json_encode($paises); ?>';
	var pais = '<?=$_SESSION["profile"]["user_profile_pais"]?>'; 
	var distrito = '<?=$_SESSION["profile"]["user_profile_distrito"]?>'; 
	var concelho = '<?=$_SESSION["profile"]["user_profile_concelho"]?>';
	var serralharia = '<?=$_SESSION["profile"]["user_profile_serralharia"]?>';
	var vidraria = '<?=$_SESSION["profile"]["user_profile_vidraria"]?>';
	var armazenista = '<?=$_SESSION["profile"]["user_profile_armazenista"]?>';
	var arquitectura = '<?=$_SESSION["profile"]["user_profile_arquitectura"]?>';
	var construtora = '<?=$_SESSION["profile"]["user_profile_construtora"]?>';
	var cfinal = '<?=$_SESSION["profile"]["user_profile_cliente_final"]?>';
	var outros = '<?=$_SESSION["profile"]["user_profile_outros"]?>';
</script>
<script src="<?php echo base_url() ?>assets/sosoares/js/editar_perfil.js"></script>

