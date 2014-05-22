$( document ).ready(function() {
	$(function() {
		document.getElementById("botoes").style.width = document.getElementById("confirmar").offsetWidth + "px";
		document.getElementById("divCodigo").style.width = document.getElementById("morada").offsetWidth + "px";
	});

	$('#pais').bind('input', function() { 
        if ($(this).val() == 'Portugal' || $(this).val() == 'portugal') {
            document.getElementById('labelDistrito').style.display = "inherit";
            document.getElementById('labelConcelho').style.display = "inherit";
            document.getElementById('distrito').style.display = "inherit";
            document.getElementById('concelho').style.display = "inherit";
        }
    });
	
	$(window).resize(function () 
	{
		$(function() {
			document.getElementById("botoes").style.width = document.getElementById("confirmar").offsetWidth + "px";
			document.getElementById("divCodigo").style.width = document.getElementById("morada").offsetWidth + "px";
		});
	});
});
