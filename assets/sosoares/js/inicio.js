$( document ).ready(function() {
	if (document.getElementById('mensagem').innerHTML != '') {
		setTimeout(function () {$('#mensagem').slideUp('slow')}, 3000); 
	}
});