$( document ).ready(function() {
	$('[id^=carousel-selector-]').click( function(){
		var id_selector = $(this).attr("id");
		var id = id_selector.replace('carousel-selector-','');
		id = parseInt(id);
		$('#myCarousel').carousel(id);
		$('[id^=carousel-selector-]').removeClass('selected');
		$(this).addClass('selected');
	});

	$('#myCarousel').on('slid.bs.carousel', function () {
		var id = $('.item.active').data('slide-number');
		id = parseInt(id);
		$('[id^=carousel-selector-]').removeClass('selected');
		$('#carousel-selector-'+id+'').addClass('selected');         
		
		$('[id^=title-]').removeClass('hidden');
		for (var i = 0; i < 20; i++) {
			if (id != i) {
				$('[id^=title-'+i+']').addClass('hidden');  
			}
		};    
	});      

	$(document).ready(function() {
		$('#myCarousel2').carousel({
			interval: 10000
		})

		$('#myCarousel2').on('slid.bs.carousel', function() {
		});
	});
});