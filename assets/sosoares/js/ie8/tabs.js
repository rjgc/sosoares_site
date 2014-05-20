$( document ).ready(function() {
	$(function(){
		if (document.getElementById("tab-1")) {
			$('.content-1').css('display', 'block');
			$('.content-2').css('display', 'none');
			$('.tab-label-2').css('background-color', '#fff');
			$('.tab-label-2').css('color', '#076e93');
		}
		else if (document.getElementById("tab-2")) {
			$('.content-1').css('display', 'none');
			$('.content-2').css('display', 'block');
		}

		$("#tab-1").click(function(){
			$('.content-1').css('display', 'block');
			$('.tab-label-1').css('background-color', '#076e93');
			$('.tab-label-1').css('color', '#fff');

			$('.content-2').css('display', 'none');
			$('.tab-label-2').css('background-color', '#fff');
			$('.tab-label-2').css('color', '#076e93');
		});		

		$("#tab-2").click(function(){
			$('.content-2').css('display', 'block');
			$('.tab-label-2').css('background-color', '#076e93');
			$('.tab-label-2').css('color', '#fff');

			$('.content-1').css('display', 'none');
			$('.tab-label-1').css('background-color', '#fff');
			$('.tab-label-1').css('color', '#076e93');
		});	 
	});
});