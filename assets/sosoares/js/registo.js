$( document ).ready(function() {
	$(function() {
		document.getElementById("botoes").style.width = document.getElementById("confirmar").offsetWidth + "px";
		document.getElementById("divCodigo").style.width = document.getElementById("morada").offsetWidth + "px";
		document.getElementById("jq_msg2").style.width = (document.getElementById("col1").offsetWidth + document.getElementById("col2").offsetWidth - 178) + "px";
	});

	$('#pais').bind('input', function() { 
        if ($(this).val() == 'Portugal' || $(this).val() == 'portugal') {
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
	
	$(window).resize(function () 
	{
		$(function() {
			document.getElementById("botoes").style.width = document.getElementById("confirmar").offsetWidth + "px";
			document.getElementById("divCodigo").style.width = document.getElementById("morada").offsetWidth + "px";
			document.getElementById("jq_msg2").style.width = (document.getElementById("col1").offsetWidth + document.getElementById("col2").offsetWidth - 178) + "px";
		});
	});
});
