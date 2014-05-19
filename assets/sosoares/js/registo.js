$( document ).ready(function() {
	$(function() {
		document.getElementById("botoes").style.width = document.getElementById("confirmar").offsetWidth + "px";
	});
	
	$(window).resize(function () 
	{
		$(function() {
			document.getElementById("botoes").style.width = document.getElementById("confirmar").offsetWidth + "px";
		});
	});
});
