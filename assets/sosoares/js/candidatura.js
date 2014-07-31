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

	$("form").submit(function() { 
	    localStorage.setItem('nome', $('#nome').val());
	    localStorage.setItem('email', $('#email').val());
	    localStorage.setItem('telefone', $('#telefone').val());
	    localStorage.setItem('telemovel', $('#telemovel').val());
	    localStorage.setItem('apresentacao', $('#apresentacao').val());
	});

	window.onload = function() {
    	var nome = localStorage.getItem('nome');

	    if (nome !== null) 
	    	$('#nome').val(nome);

	    var email = localStorage.getItem('email');

	    if (email !== null) 
	    	$('#email').val(email);

	    var telefone = localStorage.getItem('telefone');

	    if (telefone !== null) 
	    	$('#telefone').val(telefone);

	    var telemovel = localStorage.getItem('telemovel');

	    if (telemovel !== null) 
	    	$('#telemovel').val(telemovel);

	    var apresentacao = localStorage.getItem('apresentacao');

	    if (apresentacao !== null) 
	    	$('#apresentacao').val(apresentacao);
	}
});