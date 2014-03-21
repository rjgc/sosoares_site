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
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url() ?>assets/indelague/js/html5shiv.js"></script>
    <![endif]-->
    
	<!--[if IE]><link rel="stylesheet" href="<?php echo base_url() ?>assets/mediagest/css/ie.css" media="all" /><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="<?php echo base_url() ?>assets/mediagest/css/lt-ie-9.css" media="all" /><![endif]-->
<?php foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<!--<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/indelague/css/change_order.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/indelague/js/change_order.js" ></script>-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/duplicate_item/js/duplicate_item.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/mediagest/js/form_tabs.js" ></script>
</head>
<body>
<div class="testing">
<!--<header class="main">
	<h1><strong>Media</strong> Gest</h1>
	<input type="text" value="search" />
</header>-->
<section class="user">
	<div class="profile-img">
		<p><img src="<?php echo base_url() ?>assets/mediagest/images/logo.png" alt="" width="174" /> </p>
	</div>
	<div class="buttons">
		<button class="ico-font">&#59157;</button>
			<!--<span class="button dropdown">
			<a href="#">Notifications <span class="pip">4</span></a>
			<ul class="notice">
				<li>
					<hgroup>
						<h1>You have a new task</h1>
						<h2>Report web statistics week by week.</h2> 
					</hgroup>
					<p><span>14:24</span></p>
				</li>
				<li>
					<hgroup>
						<h1>New comment</h1>
						<h2>Comment on <em>About page</em> by Darren.</h2> 
					</hgroup>
					<p><span>11:04</span></p>
				</li>
				<li>
					<hgroup>
						<h1>Broken link</h1>
						<h2>We've spotted a broken link on the <em>Blog page</em>.</h2> 
					</hgroup>
					<p><span>10:46</span></p>
				</li>
				<li>
					<hgroup>
						<h1>User report</h1>
						<h2><em>Lee Grant</em> has been promoted to admin.</h2> 
					</hgroup>
					<p><span>09:57</span></p>
				</li>
			</ul>
		</span> 
		<span class="button dropdown">
			<a href="#">Inbox <span class="pip">6</span></a>
			<ul class="notice">
				<li>
					<hgroup>
						<h1>Hi, I need a favour</h1>
						<h2>John Doe</h2>
						<h3>Lorem ipsum dolor sit amet, consectetuer sed aidping putamus delo de sit felume...</h3>
					</hgroup>
					<p><span>11:24</span></p>
				</li>
				<li>
					<hgroup>
						<h1><span class="icon">&#59154;</span>Hi, I need a favour</h1>
						<h2>John Doe</h2>
						<h3>Lorem ipsum dolor sit amet, consectetuer sed aidping putamus delo de sit felume...</h3>
					</hgroup>
					<p><span>11:24</span></p>
				</li>
				<li>
					<hgroup>
						<h1><span class="icon">&#59154;</span>Hi, I need a favour</h1>
						<h2>John Doe</h2>
						<h3>Lorem ipsum dolor sit amet, consectetuer sed aidping putamus delo de sit felume...</h3>
					</hgroup>
					<p><span>11:24</span></p>
				</li>
			</ul>
		</span> 
		<span class="button">Live</span>
		 <span class="button">Help</span>-->
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
	<li <?php if ($data['titulo'] == 'Ficheiros') echo 'class="section"'; ?>>
		  <a href='<?php echo site_url("mediagest/ficheiros_management")?>'><span class="icon">&#128196;</span> Ficheiros</a>
	</li>
	<li <?php if ($data['titulo'] == 'Instaladores') echo 'class="section"'; ?>>
		  <a href='<?php echo site_url("mediagest/instaladores_management")?>'><span class="icon">&#128196;</span> Instaladores</a>
	</li> 
		<li <?php if ($data['titulo'] == 'Produtos' ||
                      $data['titulo'] == 'Produtos Aluminio' || 
                      $data['titulo'] == 'Produtos Extrusao' /*||
                      $data['titulo'] == 'Produtos Vidro' ||
                      $data['titulo'] == 'Reflectores' ||
                      $data['titulo'] == 'Características' ||
                      $data['titulo'] == 'Luz Tipo/Lâmpada/Casquilho' ||
                      $data['titulo'] == 'Fonte luz (LED)'*/) echo 'class="section"'; ?> >
			<a href='<?php echo site_url("mediagest/produtos_aluminio_management")?>'><span class="icon">&#59176;</span> Produtos</a>
			<ul class="submenu">
				<li><a href='<?php echo site_url("mediagest/produtos_aluminio_management")?>'>Produtos Aluminio</a></li>
				<li><a href='<?php echo site_url("mediagest/produtos_extrusao_management")?>'>Produtos Extrusão</a></li>
				<!--<li><a href='<?php echo site_url("mediagest/produtos_vidro_management")?>'>Produtos Vidro</a></li>
				<li><a href='<?php echo site_url("mediagest/cat_industrial_management")?>'>Categorias Industrial</a></li>
                <li><a href='<?php echo site_url("mediagest/reflectors_management")?>'>Reflectores</a></li>
                <li><a href='<?php echo site_url("mediagest/norm_management")?>'>Normas</a></li>
                <li><a href='<?php echo site_url("mediagest/icons1_management")?>'>Características</a></li>
                <li><a href='<?php echo site_url("mediagest/icons2_management")?>'>Luz Tipo/Lâmpada/Casquilho</a></li>
                <li><a href='<?php echo site_url("mediagest/icons3_management")?>'>Fonte luz (LED)</a></li>
                <li><a href='<?php echo site_url("mediagest/radiation_angle_management")?>'>Angulo de radiação</a></li>
                <li><a href='<?php echo site_url("mediagest/product_colors_management")?>'>Cores dos produtos</a></li>-->
			</ul>	
		</li>
		
		<li <?php if ($data['titulo'] == 'Tipos de Produto' ||
                      $data['titulo'] == 'Tipos de Produto Aluminio' ||
                      $data['titulo'] == 'Tipos de Produto Extrusão') echo 'class="section"'; ?> >
			<a href='<?php echo site_url("mediagest/tipos_produto_aluminio_management")?>'><span class="icon">&#59176;</span> Tipos de Produto</a>
			<ul class="submenu">
				<li><a href='<?php echo site_url("mediagest/tipos_produto_aluminio_management")?>'>Tipos de Produto Aluminio</a></li>
				<li><a href='<?php echo site_url("mediagest/tipos_produto_extrusao_management")?>'>Tipos de Produto Extrusão</a></li>		
			</ul>	
		</li>
		
		<li <?php if ($data['titulo'] == 'Caracteristicas de Produto' ||
                      $data['titulo'] == 'Caracteristicas de Produto Aluminio' ||
                      $data['titulo'] == 'Caracteristicas de Produto Extrusão') echo 'class="section"'; ?> >
			<a href='<?php echo site_url("mediagest/caracteristicas_produto_aluminio_management")?>'><span class="icon">&#59176;</span> Caract. de Produto</a>
			<ul class="submenu">
				<li><a href='<?php echo site_url("mediagest/caracteristicas_produto_aluminio_management")?>'>Caract. de Produto Aluminio</a></li>
				<li><a href='<?php echo site_url("mediagest/caracteristicas_produto_extrusao_management")?>'>Caract. de Produto Extrusão</a></li>		
			</ul>	
		</li>
		
		<li <?php if ($data['titulo'] == 'Ensaios de Produto' ||
                      $data['titulo'] == 'Ensaios de Produto Aluminio' ||
                      $data['titulo'] == 'Ensaios de Produto Extrusão') echo 'class="section"'; ?> >
			<a href='<?php echo site_url("mediagest/ensaios_aluminio_management")?>'><span class="icon">&#59176;</span> Ensaios de Produto</a>
			<ul class="submenu">
				<li><a href='<?php echo site_url("mediagest/ensaios_aluminio_management")?>'>Ensaios de Produto Aluminio</a></li>
				<li><a href='<?php echo site_url("mediagest/ensaios_extrusao_management")?>'>Ensaios de Produto Extrusão</a></li>		
			</ul>	
		</li>
		
		<li <?php if ($data['titulo'] == 'Servicos' ||
                      $data['titulo'] == 'Serviços Extrusão' ||
                      $data['titulo'] == 'Serviços Vidro') echo 'class="section"'; ?> >
			<a href='<?php echo site_url("mediagest/servicos_extrusao_management")?>'><span class="icon">&#59176;</span> Serviços</a>
			<ul class="submenu">
				<li><a href='<?php echo site_url("mediagest/servicos_extrusao_management")?>'>Serviços Extrusão</a></li>
				<li><a href='<?php echo site_url("mediagest/servicos_vidro_management")?>'>Serviços Vidro</a></li>		
			</ul>	
		</li>
		
		
        <!--<li <?php if ($data['titulo'] == 'Obras') echo 'class="section"'; ?>>
            <a href='<?php echo site_url("mediagest/obras_management")?>'><span class="icon">&#128196;</span> Obras</a>
        </li>
		<li <?php if ($data['titulo'] == 'Downloads' || $data['titulo'] == 'Tipos de Downloads'|| $data['titulo'] == 'Certificados') echo 'class="section"'; ?>>
			<a href='<?php echo site_url("mediagest/downloads_management")?>'><span class="icon">&#127748;</span> Downloads</a>
			<ul class="submenu">
				<li><a href='<?php echo site_url("mediagest/type_downloads_management")?>'>Tipos de Downloads</a></li>
				<li><a href='<?php echo site_url("mediagest/downloads_certif_management")?>'>Downloads dos certificados</a></li>
			</ul>
		</li>
		 <li <?php if ($data['titulo'] == 'Case Studies') echo 'class="section"'; ?>>
            <a href='<?php echo site_url("mediagest/casestudies_management")?>'><span class="icon">&#128196;</span> Case Studies</a>
        </li>
         <li <?php if ($data['titulo'] == 'Newsletter') echo 'class="section"'; ?>>
            <a href='<?php echo site_url("mediagest/newsletter_management")?>'><span class="icon">&#128196;</span> Newsletter Ind</a>
        </li>
         <li <?php if ($data['titulo'] == 'Newsletter Roxo') echo 'class="section"'; ?>>
            <a href='<?php echo site_url("mediagest/newsletter_roxo_management")?>'><span class="icon">&#128196;</span> Newsletter Roxo</a>
        </li>
        <li <?php if ($data['titulo'] == 'Page Management') echo 'class="section"'; ?>>
            <a href='#' style="cursor:default;" ><span class="icon">&#128196;</span> Gestão de Páginas</a>
            <ul class="submenu">
				<li><a href='<?php echo site_url("mediagest/page_management")?>'>Páginas Indelague</a></li>
				<li><a href='<?php echo site_url("mediagest/page_management_roxo")?>'>Páginas Roxo</a></li>
			</ul>
        </li>
         <li <?php if ($data['titulo'] == 'Contactos dos Departamentos (Indelague)' ||
         	$data['titulo'] == 'Contactos dos Departamentos (Roxo)'
         ) echo 'class="section"'; ?>>
            <!-- <a href='<?php //echo site_url("mediagest/dep_contacts_management")?>'><span class="icon">&#128196;</span> Gestão de Contactos</a> -->
           <!-- <a href='#' style="cursor:default;"><span class="icon">&#128196;</span> Gestão de Contactos</a>
            <ul class="submenu">
				<li><a href='<?php echo site_url("mediagest/dep_contacts_management_indelague")?>'>Contactos Indelague</a></li>
				<li><a href='<?php echo site_url("mediagest/dep_contacts_management_roxo")?>'>Contactos Roxo</a></li>
			</ul>-->
        </li>
	</ul>
</nav>


<!--<section class="alert">
	<div class="green">	
		<p>Bem vindo! Isto é um alerta de teste. Clique <a href="#">aqui</a> para aceder.</p>
		<span class="close">&#10006;</span>
	</div>
</section>-->
<section class="content" style="margin-top: 0px;">
	
	<section class="widget">
		<header>
			<span class="icon">&#128200;</span>
			<hgroup>
				<h1><?=$data['titulo'];?></h1>
				<h2><?=$data['sub-titulo'];?></h2>
			</hgroup>
		</header>
        