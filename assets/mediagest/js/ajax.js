jQuery(document).ready(function() {

// Ajax page loading - www.designchemical.com/blog/index.php/jquery/simple-tabs-with-ajax-and-jquery	
	jQuery("nav li a").click(function() { 
        jQuery(".content").empty().append("<div class='loading' />");
        jQuery("nav li a").removeClass('section');
        jQuery(this).addClass('section');

        jQuery.ajax({ url: this.href, success: function(html) {
            jQuery(".content").empty().append(html);
            }
    });
    return false;
    });
 
    jQuery("#ajax-content").empty().append("<div class='loading' />");
    jQuery.ajax({ url: 'dashboard.html', success: function(html) {
            jQuery(".content").empty().append(html);
    }
    });	
});