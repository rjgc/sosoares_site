$( document ).ready(function() {
	$(function() {
		document.getElementById("botoes").style.width = document.getElementById("contribuinte").offsetWidth + "px";
		document.getElementById("divCodigo").style.width = document.getElementById("morada").offsetWidth + "px";
		document.getElementById("jq_msg2").style.width = (document.getElementById("col1").offsetWidth + document.getElementById("col2").offsetWidth - 178) + "px";
	});

	var newOptions = getNewOptions('paises');

	load('pais', pais);

	if (pais == '')
		document.getElementById('pais').selectedIndex = 0;

	var newOptions = getNewOptions('distritos');

	load('distrito', distrito);

	if (distrito == '')
		document.getElementById('distrito').selectedIndex = 0;

	var newOptions = getNewOptions('distritos');

	load('concelho', concelho);

	if (concelho == '')
		document.getElementById('concelho').selectedIndex = 0;

	function load(id, val){
		$.each(newOptions,function(i,o){
			var select = document.getElementById(id);
			var option = document.createElement("option");
			option.text = o;
			option.value = o;

			if (o.indexOf(val) > -1)
				option.selected = true;

			select.add(option);
		});
	}

	if ($('select#pais').val().indexOf('Portugal') > -1) {
		document.getElementById('labelDistrito').style.display = "inherit";
		document.getElementById('labelConcelho').style.display = "inherit";
		document.getElementById('distrito').style.display = "inherit";
		document.getElementById('concelho').style.display = "inherit";
	}

	$('select#pais').change(function(e){
		if ($(this).val().indexOf('Portugal') > -1) {
			document.getElementById('labelDistrito').style.display = "inherit";
			document.getElementById('labelConcelho').style.display = "inherit";
			document.getElementById('distrito').style.display = "inherit";
			document.getElementById('concelho').style.display = "inherit";
		} else {
			document.getElementById('labelDistrito').style.display = "none";
			document.getElementById('labelConcelho').style.display = "none";
			document.getElementById('distrito').style.display = "none";
			document.getElementById('concelho').style.display = "none";
		}
	});

	$('select#distrito').change(function(e){            
		newOptions = getNewOptions($(this).val());
		$('select#concelho').html('');

		$.each(newOptions,function(i,o){
			selectConcelho = document.getElementById("concelho");
			option = document.createElement("option");
			option.text = o;
			option.value = o;
			selectConcelho.add(option);
		});            
	});

	function getNewOptions(val){
		var array = [];
		var url = "";
		var tmpUrl = window.location.href.split('/');

		for (var i = 0; i < tmpUrl.length - 4 ; i++) {
			url += tmpUrl[i] + "/";
		}

		var rawFile = new XMLHttpRequest();
		rawFile.open("GET", url + "assets/uploads/"+val+".txt", false);
		rawFile.onreadystatechange = function ()
		{
			if(rawFile.readyState === 4)
			{
				if(rawFile.status === 200 || rawFile.status == 0)
				{
					var allText = rawFile.responseText;
					var lines = allText.split("\n");

					if (val != 'paises' && val != 'distritos') {
						array.push(item);
						array.push(' ');
					}

					for(var i = 0; i < lines.length; i ++)
					{
						array.push(lines[i]);
					}
				}
			}
		}
		rawFile.send(null);

		return array;
	}

	if (serralharia == 'Serralharia') {
		document.getElementById("serralharia").checked = true;
	}

	if (vidraria == 'Vidraria') {
		document.getElementById("vidraria").checked = true;
	}

	if (armazenista == 'Armazenista') {
		document.getElementById("armazenista").checked = true;
	}

	if (arquitectura == 'Arquitectura') {
		document.getElementById("arquitectura").checked = true;
	}

	if (construtora == 'Construtora') {
		document.getElementById("construtora").checked = true;
	}

	if (cfinal == 'Cliente Final') {
		document.getElementById("cfinal").checked = true;
	}

	if (outros == 'Outros') {
		document.getElementById("outros").checked = true;
	}

	$(window).resize(function () 
	{
		$(function() {
			document.getElementById("botoes").style.width = document.getElementById("contribuinte").offsetWidth + "px";
			document.getElementById("divCodigo").style.width = document.getElementById("morada").offsetWidth + "px";
			document.getElementById("jq_msg2").style.width = (document.getElementById("col1").offsetWidth + document.getElementById("col2").offsetWidth - 178) + "px";
		});
	});
});
