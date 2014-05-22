<?php 
if (!empty($todos)) {
	$arrayTodos;
	unset($arrayTodos);

	$z = 0;

	for ($i=0; $i < count($categoria_ficheiros); $i++) { 
		for ($y=0; $y < count($todos); $y++) {
			if ($todos[$y]['id_categoria_ficheiro'] == $categoria_ficheiros[$i]['id_categoria_ficheiro']) {
				$arrayTodos[$z][0] = $categoria_ficheiros[$i]['nome'];
				$arrayTodos[$z][1] = $todos[$y]['nome_pt'];
				$arrayTodos[$z][2] = $todos[$y]['ficheiro'];
				$z++;
			}                                
		}
	}

	echo "<script>var arrayTodos = ".json_encode($arrayTodos)."</script>";
}

if (!empty($perfis)) {
	$arrayPerfis;
	unset($arrayPerfis);

	$z = 0;

	for ($i=0; $i < count($categoria_ficheiros); $i++) { 
		for ($y=0; $y < count($perfis); $y++) {
			if ($perfis[$y]['id_categoria_ficheiro'] == $categoria_ficheiros[$i]['id_categoria_ficheiro']) {
				$arrayPerfis[$z][0] = $categoria_ficheiros[$i]['nome'];
				$arrayPerfis[$z][1] = $perfis[$y]['nome_pt'];
				$arrayPerfis[$z][2] = $perfis[$y]['ficheiro'];
				$z++;
			}                                
		}
	}

	echo "<script>var arrayPerfis = ".json_encode($arrayPerfis)."</script>";
}

if (!empty($pormenores)) {
	$arrayPormenores;
	unset($arrayPormenores);

	$z = 0;

	for ($i=0; $i < count($categoria_ficheiros); $i++) { 
		for ($y=0; $y < count($pormenores); $y++) {
			if ($pormenores[$y]['id_categoria_ficheiro'] == $categoria_ficheiros[$i]['id_categoria_ficheiro']) {
				$arrayPormenores[$z][0] = $categoria_ficheiros[$i]['nome'];
				$arrayPormenores[$z][1] = $pormenores[$y]['nome_pt'];
				$arrayPormenores[$z][2] = $pormenores[$y]['ficheiro'];
				$z++;
			}                                
		}
	}

	echo "<script>var arrayPormenores = ".json_encode($arrayPormenores)."</script>";
}

if (!empty($catalogos)) {
	$arrayCatalogos;
	unset($arrayCatalogos);

	$z = 0;

	for ($i=0; $i < count($categoria_ficheiros); $i++) { 
		for ($y=0; $y < count($catalogos); $y++) {
			if ($catalogos[$y]['id_categoria_ficheiro'] == $categoria_ficheiros[$i]['id_categoria_ficheiro']) {
				$arrayCatalogos[$z][0] = $categoria_ficheiros[$i]['nome'];
				$arrayCatalogos[$z][1] = $catalogos[$y]['nome_pt'];
				$arrayCatalogos[$z][2] = $catalogos[$y]['ficheiro'];
				$z++;
			}                                
		}
	}

	echo "<script>var arrayCatalogos = ".json_encode($arrayCatalogos)."</script>";
}

if (!empty($ensaios)) {
	$arrayEnsaios;
	unset($arrayEnsaios);

	$z = 0;

	for ($i=0; $i < count($categoria_ficheiros); $i++) { 
		for ($y=0; $y < count($ensaios); $y++) {
			if ($ensaios[$y]['id_categoria_ficheiro'] == $categoria_ficheiros[$i]['id_categoria_ficheiro']) {
				$arrayEnsaios[$z][0] = $categoria_ficheiros[$i]['nome'];
				$arrayEnsaios[$z][1] = $ensaios[$y]['nome_pt'];
				$arrayEnsaios[$z][2] = $ensaios[$y]['ficheiro'];
				$z++;
			}                                
		}
	}

	echo "<script>var arrayEnsaios = ".json_encode($arrayEnsaios)."</script>";
}

if (!empty($folhetos)) {
	$arrayFolhetos;
	unset($arrayFolhetos);

	$z = 0;

	for ($i=0; $i < count($categoria_ficheiros); $i++) { 
		for ($y=0; $y < count($folhetos); $y++) {
			if ($folhetos[$y]['id_categoria_ficheiro'] == $categoria_ficheiros[$i]['id_categoria_ficheiro']) {
				$arrayFolhetos[$z][0] = $categoria_ficheiros[$i]['nome'];
				$arrayFolhetos[$z][1] = $folhetos[$y]['nome_pt'];
				$arrayFolhetos[$z][2] = $folhetos[$y]['ficheiro'];
				$z++;
			}                                
		}
	}

	echo "<script>var arrayFolhetos = ".json_encode($arrayFolhetos)."</script>";
}

if (!empty($ferragens_vidro)) {
	$arrayFerragens;
	unset($arrayFerragens);

	$z = 0;

	for ($i=0; $i < count($categoria_ficheiros); $i++) { 
		for ($y=0; $y < count($ferragens_vidro); $y++) {
			if ($ferragens_vidro[$y]['id_categoria_ficheiro'] == $categoria_ficheiros[$i]['id_categoria_ficheiro']) {
				$arrayFerragens[$z][0] = $categoria_ficheiros[$i]['nome'];
				$arrayFerragens[$z][1] = $ferragens_vidro[$y]['nome_pt'];
				$arrayFerragens[$z][2] = $ferragens_vidro[$y]['ficheiro'];
				$z++;
			}                                
		}
	}

	echo "<script>var arrayFerragens = ".json_encode($arrayFerragens)."</script>";
}
?>

<script type="text/javascript">
	<?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) { ?>
		var columns = [ "Categoria", "Nome", "Ficheiro" ];
		<?php } else if (strpos($_SERVER['REQUEST_URI'], 'en')) { ?>
			var columns = [ "Category", "Name", "File" ];
			<?php } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) { ?>
				var columns = [ "Catégorie", "Non", "Dossier" ];
				<?php } else if (strpos($_SERVER['REQUEST_URI'], 'es')) { ?>
					var columns = [ "Categoría", "Nombre", "Expediente" ];
					<?php } ?>
				</script>