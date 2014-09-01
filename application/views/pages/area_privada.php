<?php $array = array("Super Admin", "Administrator", "Mediagest", "Comercial", "Logistica", "Promotor", "Orcamentista", "Desenvolvimento", "Producao", "Geral"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/area-privada.css">
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
				} else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
					echo site_url('tratamento/home');
				} ?>"><?=lang('home')?></a></li>
				<li><?=lang('area_privada')?></li>
			</ul>
			<h1 class="title3"><?=lang('area_privada')?></h1>
		</div>
	</div>
	<?php if (!$_SESSION['logged_in'] && !$_SESSION['notAllowed']) { ?>
	<div class="alerta">
		<div class="alert alert-warning">
			<h5><strong><?=lang('atencao')?></strong><?=lang('efectuar')?></h5>
		</div>
	</div>
	<?php } else { ?>
	<div class="botoes">
		<?php if (in_array($_SESSION['profile']['cizacl_role_name'], $array)) { ?>
		<a class="btn button grow ui-corner-all botao" href="www.sosoares.pt/intranet">Intranet</a>
		<?php } ?>
		<a class="btn button grow ui-corner-all botao2" href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
			echo site_url('caixilharia/editar_perfil');
		} else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
			echo site_url('vidro/editar_perfil');
		} else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
			echo site_url('extrusao/editar_perfil');
		} else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
			echo site_url('tratamento/editar_perfil');
		} ?>">Editar Perfil</a>
		<?php if ($_SESSION['logged_in'] && !$_SESSION['notAllowed']) { ?>
		<a class="btn button grow ui-corner-all botao3" href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
			echo site_url('caixilharia/logout');
		} else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
			echo site_url('vidro/logout');
		} else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
			echo site_url('extrusao/logout');
		} else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
			echo site_url('tratamento/logout');
		} ?>">Logout</a>    
	</div>
	<div class="dados">
		<h3><?=lang('dados')?></h3>
		<div><b><?=lang('nome')?>: </b><?=$_SESSION['profile']['user_profile_name'];?></div>
		<div><b>E-mail: </b><?=$_SESSION['profile']['user_profile_email'];?></div>
		<div><b><?=lang('role')?>: </b><?=$_SESSION['profile']['cizacl_role_name'];?></div>		
		<h3>Downloads</h3>
		<div class="tabbable">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#1" data-toggle="tab"><?=lang('todos')?></a></li>
				<li><a href="#2" data-toggle="tab"><?=lang('perfis')?></a></li>
				<li><a href="#3" data-toggle="tab"><?=lang('pormenores')?></a></li>
				<li><a href="#4" data-toggle="tab"><?=lang('catalogo')?></a></li>
				<li><a href="#5" data-toggle="tab"><?=lang('ensaios')?></a></li>
				<li><a href="#6" data-toggle="tab"><?=lang('folhetos')?></a></li>
				<li><a href="#7" data-toggle="tab"><?=lang('ferragens')?></a></li>
			</ul>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="1">
				<div class="row account">
					<div class="col-md-8 tabela">
						<?php if (!empty($todos)) { ?>
						<div id="DefaultDable"></div>                        
						<?php } else { ?>
						<p><?=lang('nficheiros')?></p>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="2">
				<div class="row account">
					<div class="col-md-8 tabela">
						<?php if (!empty($perfis)) { ?>
						<div id="DefaultDable2"></div>
						<?php } else { ?>
						<p><?=lang('nficheiros')?></p>
						<?php } ?>
					</div>
				</div>
			</div> 
			<div class="tab-pane" id="3">
				<div class="row account">
					<div class="col-md-8 tabela">
						<?php if (!empty($pormenores)) { ?>
						<div id="DefaultDable3"></div>
						<?php } else { ?>
						<p><?=lang('nficheiros')?></p>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="4">
				<div class="row account">
					<div class="col-md-8 tabela">
						<?php if (!empty($catalogos)) { ?>
						<div id="DefaultDable4"></div>                                  
						<?php } else { ?>
						<p><?=lang('nficheiros')?></p>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="5">
				<div class="row account">
					<div class="col-md-8 tabela">
						<?php if (!empty($ensaios)) { ?>
						<div id="DefaultDable5"></div>
						<?php } else { ?>
						<p><?=lang('nficheiros')?></p>
						<?php } ?>
					</div>
				</div>
			</div> 
			<div class="tab-pane" id="6">
				<div class="row account">
					<div class="col-md-8 tabela">
						<?php if (!empty($folhetos)) { ?>
						<div id="DefaultDable6"></div>
						<?php } else { ?>
						<p><?=lang('nficheiros')?></p>
						<?php } ?>
					</div>
				</div>
			</div> 
			<div class="tab-pane" id="7">
				<div class="row account">
					<div class="col-md-8 tabela">
						<?php if (!empty($ferragens_vidro)) { ?>
						<div id="DefaultDable7"></div>
						<?php } else { ?>
						<p><?=lang('nficheiros')?></p>
						<?php } ?>
					</div>
				</div>
			</div>   
		</div>
	</div>
</div>
<?php } else if ($_SESSION['notAllowed']) { ?>
<div class="alerta">
	<div class="alert alert-warning">
		<h5><strong><?=lang('atencao')?></strong><?=lang('permissao')?><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
			echo site_url('caixilharia/home');
		} else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
			echo site_url('vidro/home');
		} else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
			echo site_url('extrusao/home');
		} else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
			echo site_url('tratamento/home');
		} ?>"><?=lang('voltar')?></a></h5>
	</div>
</div>
<?php } 
}?>
<?php require_once('assets/sosoares/php/area-privada.php'); ?>
<script src="<?php echo base_url() ?>assets/sosoares/js/Dable.js"></script>
<script src="<?php echo base_url() ?>assets/sosoares/js/area-privada.js"></script>