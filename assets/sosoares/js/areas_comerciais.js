$( document ).ready(function() {
	$('map area').hover(function() {
		for (var i = 0; i < area.length; i++) {
			if ($(this).attr('alt') == area[i].id_zona)
			{
				$('.col-md-3 h1').text(area[i].titulo);
				$('.col-md-3 p#morada').text(area[i].morada);
				$('.col-md-3 p#nome').text(area[i].nome);
				$('.col-md-3 p#telefone').text(area[i].telefone);
				$('.col-md-3 p#email').text(area[i].email);
			}
		};
	},function() {
		$('.col-md-3 h1').text('');
		$('.col-md-3 p#morada').text('');
		$('.col-md-3 p#nome').text('');
		$('.col-md-3 p#telefone').text('');
		$('.col-md-3 p#email').text('');
	});

	$("map area").on("tap",function(){
		for (var i = 0; i < area.length; i++) {
			if ($(this).attr('alt') == area[i].id_zona)
			{
				$('.col-md-3 h1').text(area[i].titulo);
				$('.col-md-3 p#morada').text(area[i].morada);
				$('.col-md-3 p#nome').text(area[i].nome);
				$('.col-md-3 p#telefone').text(area[i].telefone);
				$('.col-md-3 p#email').text(area[i].email);
			}
		};
	});
});