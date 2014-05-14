$( document ).ready(function() {
	$(function(){
		var content1 = $('.content-1').height();
		var content2 = $('.content-2').height();

		if (content1 != null) {
			document.getElementById("tab-1").checked=true;

			$('.tab-content').css('height', content1+40);
		}
		else if (content2 != null) {
			document.getElementById("tab-2").checked=true;

			$('.tab-content').css('height', content2+40);
		}    
	});

	var mql = window.matchMedia("screen and (max-width: 992px)")
	if (mql.matches) {       
		$("div.col-md-5").addClass("col-md-4");
		$("div.col-md-5").removeClass("col-md-5");
		document.getElementById("descricao").style.width = "60%";
	}
	
	$(window).resize(function () 
	{
		$(function(){
			var content1 = $('.content-1').height();
			var content2 = $('.content-2').height();

			if (content1 != null) {
				document.getElementById("tab-1").checked=true;

				$('.tab-content').css('height', content1+40);
			}
			else if (content2 != null) {
				document.getElementById("tab-2").checked=true;

				$('.tab-content').css('height', content2+40);
			}    
		});
	});
});

function tab(elem) {
	var content1 = $('.content-1').height();
	var content2 = $('.content-2').height();

	if (elem.getAttribute('id') == 'tab-1') {
		$('.tab-content').css('height', content1+40);
	} else {
		$('.tab-content').css('height', content2+40);
	}
}
