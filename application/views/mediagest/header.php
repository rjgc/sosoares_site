<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<title>Sosoares - MediaGest</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/mediagest/css/style.css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/mediagest/css/form_tabs.css" media="all" />
	<?php foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/duplicate_item/js/duplicate_item.js" ></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/mediagest/js/form_tabs.js" ></script>
</head>
<body>
	<div class="testing">
		<section class="user">
			<div class="profile-img">
				<p><img src="<?php echo base_url() ?>assets/mediagest/images/logo.png" alt="" width="174" /> </p>
			</div>
			<div class="buttons">
				<button class="ico-font">&#59157;</button>
				<span class="button blue"><a href='<?php echo site_url("login/logout")?>'>Logout</a></span>
			</div>
		</section>
	</div>
	<nav>
		<ul>
			<li <?php if ($data['titulo'] == 'Obras') echo 'class="section"'; ?>>
				<a href='<?php echo site_url("mediagest")?>'><span class="icon">&#128196;</span> Obras</a>
			</li>
			<li <?php if ($data['titulo'] == 'Noticias') echo 'class="section"'; ?>>
				<a href='<?php echo site_url("mediagest/noticias_management")?>'><span class="icon">&#128196;</span> Noticias</a>
			</li>
			<li <?php if ($data['titulo'] == 'Paginas') echo 'class="section"'; ?>>
				<a href='<?php echo site_url("mediagest/paginas_management")?>'><span class="icon">&#128196;</span> Páginas</a>
			</li>
			<li <?php if ($data['titulo'] == 'Perfis Alumínio' || 				
				$data['titulo'] == 'Pormenores Alumínio' ||
				$data['titulo'] == 'Catálogo Alumínio'||
				$data['titulo'] == 'Ensaios Alumínio' ||
				$data['titulo'] == 'Resumos Alumínio' ||
				$data['titulo'] == 'Ensaios de Produto Extrusão') echo 'class="section"'; ?>>
				<a href='#'><span class="icon">&#128196;</span> Ficheiros</a>
				<ul class="submenu">
					<li><a href='<?php echo site_url("mediagest/perfis_aluminio_management")?>'>Perfis Alumínio</a></li>
					<li><a href='<?php echo site_url("mediagest/pormenores_aluminio_management")?>'>Pormenores Alumínio</a></li>
					<li><a href='<?php echo site_url("mediagest/catalogo_aluminio_management")?>'>Catálogo Alumínio</a></li>
					<li><a href='<?php echo site_url("mediagest/ensaios_aluminio_management")?>'>Ensaios Alumínio</a></li>								
					<li><a href='<?php echo site_url("mediagest/resumos_aluminio_management")?>'>Resumos Alumínio</a></li>
					<hr>
					<li><a href='<?php echo site_url("mediagest/ensaios_extrusao_management")?>'>Ensaios de Produto Extrusão</a></li>	
				</ul>
			</li>
			<li <?php if ($data['titulo'] == 'Instaladores') echo 'class="section"'; ?>>
				<a href='<?php echo site_url("mediagest/instaladores_management")?>'><span class="icon">&#128196;</span> Instaladores</a>
			</li> 
			<li <?php if ($data['titulo'] == 'Produtos Alumínio' || 
				$data['titulo'] == 'Produtos Extrusao'||
				$data['titulo'] == 'Tipos de Produto Alumínio' ||
				$data['titulo'] == 'Tipos de Produto Extrusão' ||
				$data['titulo'] == 'Caracteristicas de Produto Alumínio' ||
				$data['titulo'] == 'Caracteristicas de Produto Extrusão') echo 'class="section"'; ?> >
				<a href='#'><span class="icon">&#59176;</span> Produtos</a>
				<ul class="submenu">
					<li><a href='<?php echo site_url("mediagest/produtos_aluminio_management")?>'>Produtos Alumínio</a></li>
					<li><a href='<?php echo site_url("mediagest/tipos_produto_aluminio_management")?>'>Tipos de Produto Alumínio</a></li>
					<li><a href='<?php echo site_url("mediagest/caracteristicas_produto_aluminio_management")?>'>Caract. de Produto Alumínio</a></li>
					<hr>
					<li><a href='<?php echo site_url("mediagest/produtos_extrusao_management")?>'>Produtos Extrusão</a></li>
					<li><a href='<?php echo site_url("mediagest/tipos_produto_extrusao_management")?>'>Tipos de Produto Extrusão</a></li>						
					<li><a href='<?php echo site_url("mediagest/caracteristicas_produto_extrusao_management")?>'>Caract. de Produto Extrusão</a></li>
				</ul>	
			</li>
			<li <?php if ($data['titulo'] == 'Serviços Extrusão' ||
				$data['titulo'] == 'Serviços Vidro') echo 'class="section"'; ?> >
				<a href='#'><span class="icon">&#59176;</span> Serviços</a>
				<ul class="submenu">
					<li><a href='<?php echo site_url("mediagest/servicos_extrusao_management")?>'>Serviços Extrusão</a></li>
					<hr>
					<li><a href='<?php echo site_url("mediagest/servicos_vidro_management")?>'>Serviços Vidro</a></li>		
				</ul>	
			</li>
		</li>
	</ul>
</nav>
<section class="content" style="margin-top: 0px;">	
	<section class="widget">
		<header>
			<span class="icon">&#128200;</span>
			<hgroup>
				<h1><?=$data['titulo'];?></h1>
				<h2><?=$data['sub-titulo'];?></h2>
			</hgroup>
		</header>
