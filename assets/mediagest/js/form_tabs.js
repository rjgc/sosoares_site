(function($) {
	// Your jQuery code here, using the $
	Myproject = $.extend((typeof Myproject == 'undefined') ? {} : Myproject, {
		toggle_field_box : function(targets) {
			if (typeof targets == 'string')
				$(targets).toggle();
			else if (typeof targets == 'object')
				$.each(targets, function(k, v) {
					$('#'+v+'_field_box').toggle();
				});
		}
	});
	$(document).ready(function() {
		/**
		 * HTML cleaning
		 */
		$(this).find('.form-field-box ~ br').remove(); // Remove br beetwen fields group
		// Move tabs as first child of form tag
		$(this).find('[data-toggle="myproject.tabs.fields_box"]').each(function() {
			form = $(this); i = 0;
			while(form.prop("tagName").toUpperCase() != 'FORM' && (++i < 10)) {
				form = form.parent();
				console.log(form.prop("tagName") );
			}
			$(this).prependTo(form);
		});
		
		/**
		 * myproject.tabs.fields_box
		 */
		$(this).find('.nav[data-toggle="myproject.tabs.fields_box"] a[href^="#"]').each(function() {
			$(this).click(function(e) {
				e.preventDefault();
				$(document).find('.form-field-box').hide();
				tabs = $(this).parent();
				while(!tabs.hasClass('nav'))
					tabs = tabs.parent();
				tabs.find('.active').removeClass('active');
				$(this).parent().addClass('active');
				$.each($(this).attr('href').replace('#', '').split(','), function(i, id) {
					Myproject.toggle_field_box([ $.trim(id) ]);
				});
			});
		});
		$(this).find('[data-toggle="myproject.tabs.fields_box"] li.active a').trigger('click');
	});
})(jQuery);
