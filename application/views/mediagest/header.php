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
	<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/mediagest/css/form_tabs.css" media="all" /> -->
	<?php foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/sosoares/css/change_order.css" />
    <script type="text/javascript" src="<?php echo base_url() ?>assets/sosoares/js/change_order.js" ></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/duplicate_item/js/duplicate_item.js" ></script>
    <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/mediagest/js/form_tabs.js" ></script> -->
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
            <li <?php if ($data['titulo'] == 'Imagem de Fundo' ||
                $data['titulo'] == 'Banners' ||
                $data['titulo'] == 'Newsletter' ||
                $data['titulo'] == 'Destinatários'||
                $data['titulo'] == 'Áreas Comerciais'||
                $data['titulo'] == 'Contactos'||
                $data['titulo'] == 'Contactos Mapa') echo 'class="section"'; ?>>
                <a href='#'><span class="icon">&#128196;</span> Definições</a>
                <ul class="submenu">
                    <li><a href='<?php echo site_url("mediagest/background_image_management")?>'> Imagem de Fundo</a></li>
                    <li><a href='<?php echo site_url("mediagest/banners_management")?>'> Banners</a></li>
                    <li><a href='<?php echo site_url("mediagest/newsletter_management")?>'> Newsletter</a></li>
                    <li><a href='<?php echo site_url("mediagest/destinatarios_management")?>'> Destinatários</a></li>
                    <li><a href='<?php echo site_url("mediagest/areas_comerciais_management")?>'> Áreas Comerciais</a></li>
                    <li><a href='<?php echo site_url("mediagest/contactos_management")?>'> Contactos</a></li>
                    <li><a href='<?php echo site_url("mediagest/contactos_mapa_management")?>'> Contactos do Mapa</a></li>
                </ul>
            </li>
            <li <?php if ($data['titulo'] == 'Notícias') echo 'class="section"'; ?>>
                <a href='<?php echo site_url("mediagest/noticias_management")?>'><span class="icon">&#59176;</span> Notícias</a>
            </li>
            <li <?php if ($data['titulo'] == 'Produtos Alumínio' ||
                $data['titulo'] == 'Produtos Vidro' ||
                $data['titulo'] == 'Produtos Extrusão' ||
                $data['titulo'] == 'Tipos de Produto Alumínio' ||
                $data['titulo'] == 'Tipos de Produto Extrusão' ||
                $data['titulo'] == 'Categorias Produtos Vidro'||
                $data['titulo'] == 'Caract. de Produto Alumínio' ||
                $data['titulo'] == 'Caract. de Produto Extrusão' ||
                $data['titulo'] == 'Ficheiros') echo 'class="section"'; ?> >
                <a href='#'><span class="icon">&#128196;</span> Produtos</a>
                <ul class="submenu">
                    <li><a href='<?php echo site_url("mediagest/produtos_aluminio_management")?>'>Produtos Alumínio</a></li>
                    <li><a href='<?php echo site_url("mediagest/tipos_produto_aluminio_management")?>'>Tipos de Produto Alumínio</a></li>
                    <li><a href='<?php echo site_url("mediagest/caracteristicas_produto_aluminio_management")?>'>Caract. de Produto Alumínio</a></li>
                    <hr>
                    <li><a href='<?php echo site_url("mediagest/produtos_vidro_management")?>'>Produtos Vidro</a></li>
                    <li><a href='<?php echo site_url("mediagest/tipos_produto_vidro_management")?>'>Tipos de Produto Vidro</a></li>
                    <hr>
                    <li><a href='<?php echo site_url("mediagest/produtos_extrusao_management")?>'>Produtos Extrusão</a></li>
                    <li><a href='<?php echo site_url("mediagest/tipos_produto_extrusao_management")?>'>Tipos de Produto Extrusão</a></li>
                    <li><a href='<?php echo site_url("mediagest/caracteristicas_produto_extrusao_management")?>'>Caract. de Produto Extrusão</a></li>
                    <hr>
                    <li><a href='<?php echo site_url("mediagest/ficheiros_management")?>'> Ficheiros</a></li>
                </ul>
            </li>
            <li <?php if ($data['titulo'] == 'Obras') echo 'class="section"'; ?>>
                <a href='<?php echo site_url("mediagest")?>'><span class="icon">&#59176;</span> Obras</a>
            </li>
            <li <?php if ($data['titulo'] == 'Serviços Alumínio' ||
               $data['titulo'] == 'Serviços Vidro' ||
               $data['titulo'] == 'Serviços Extrusão') echo 'class="section"'; ?> >
               <a href='#'><span class="icon">&#128196;</span> Serviços</a>
               <ul class="submenu">
                <li><a href='<?php echo site_url("mediagest/servicos_aluminio_management")?>'> Serviços Alumínio</a></li>
                <li><a href='<?php echo site_url("mediagest/servicos_vidro_management")?>'> Serviços Vidro</a></li>
                <li><a href='<?php echo site_url("mediagest/servicos_extrusao_management")?>'> Serviços Extrusão</a></li>
            </ul>
        </li>
        <li <?php if ($data['titulo'] == 'Páginas') echo 'class="section"'; ?>>
            <a href='<?php echo site_url("mediagest/paginas_management")?>'><span class="icon">&#59176;</span> Páginas</a>
        </li>
        <li <?php if ($data['titulo'] == 'Apoio ao Cliente') echo 'class="section"'; ?>>
            <a href='<?php echo site_url("mediagest/apoio_cliente_management")?>'><span class="icon">&#59176;</span> Apoio ao Cliente</a>
        </li>
        <li <?php if ($data['titulo'] == 'Área Técnica') echo 'class="section"'; ?>>
            <a href='<?php echo site_url("mediagest/area_tecnica_management")?>'><span class="icon">&#59176;</span> Área Técnica</a>
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
