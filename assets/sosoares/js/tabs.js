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

	function tab(elem){
		var content1 = $('.content-1').height();
		var content2 = $('.content-2').height();

		if (elem.getAttribute('id') == 'tab-1') {
			$('.tab-content').css('height', content1+40);
		} else {
			$('.tab-content').css('height', content2+40);
		}
	}
});