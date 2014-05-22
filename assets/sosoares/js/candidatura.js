$( document ).ready(function() {
	$(function() {
		document.getElementById("jq_msg2").style.width = document.getElementById("nome").offsetWidth + "px";
	});
	
	$(window).resize(function () 
	{
		$(function() {
			document.getElementById("jq_msg2").style.width = document.getElementById("nome").offsetWidth + "px";
		});
	});
});