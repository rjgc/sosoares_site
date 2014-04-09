$(document).ready(function() {
  var class_up = "order-position-product-up";

  var class_down = "order-position-product-down";

  function get_id_by_href(href) {
    var hrefClick = href.attr("href").split("/");

    return hrefClick[hrefClick.length - 1];
  }

  function check_last() {
    var cur_page = $("#crud_page").val();

    var last_page = $("#last-page-number").text();

    if (cur_page == last_page) {
      $("#flex1 tbody tr").eq($("#flex1 tbody tr").length - 1).find("div.tools a." + class_down).css("opacity", 0);
    };
  }

  function check_first() {
    var cur_page = $("#crud_page").val();

    if(cur_page == 1)
      $("#flex1 tbody tr").eq(0).find("div.tools a." + class_up).css("opacity", 0.0); 
  }

  var change_order = false;

  var control_transfer_page = false, control_transfer_page = false, transfer_id = 0;

  jQuery.fn.center = function () {
    this.css("position", "fixed");

    this.css("top", Math.max(0, (($(window).height() - 55 - $(this).outerHeight()) / 2) + 

      $(window).scrollTop()) + "px");

    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 

      $(window).scrollLeft()) + "px");

    return this;
  }

  $("body").prepend("<div id='change-order-alert-box' style=''><p></p></div>");

  $("#change-order-alert-box").center();

  function popUp(enable, msg){
    if (enable == "on") {
      $("#change-order-alert-box").fadeIn(0);
    };

    if (enable == "off") {
      $("#change-order-alert-box").fadeOut(500);
    };
  }

  check_last(); 

  check_first(); 

  $(document).on("click", "a.order-position-product-up", function() {

    popUp("on");

    var cur_page = $("#crud_page").val();

    if (!change_order) {      
     if (($("#flex1 tbody tr").eq(0).find("div.tools a." + class_up).attr("href") != $(this).attr("href"))) {
      move("up", $(this));
    } else if(cur_page != 1) {
      control_transfer_page_up = true;

      transfer_id = $(this); 

      $(".pPrev.pButton.prev-button").trigger("click");        

      $('#filtering_form').ajaxStop(function() {
        if(control_transfer_page_up) {
          var clicked =  get_id_by_href(transfer_id); 

          var el = get_id_by_href($("#flex1 tbody tr").eq($("#flex1 tbody tr").length - 1).find("div.tools a." + class_up)); 

          send_request("up", clicked, el)

          control_transfer_page_up = false;   

          transfer_id = 0; 

          $("#ajax_refresh_and_loading").trigger("click");
        }
      }); 
    }
    };//fim change order

    return false;
  });

  $(document).on("click", "a.order-position-product-down", function() {
   popUp("on");

   var cur_page = $("#crud_page").val();

   var last_page = $("#last-page-number").text();

   if (!change_order ) {
    if (($("#flex1 tbody tr").eq($("#flex1 tbody tr").length - 1).find("div.tools a." + class_down).attr("href") != $(this).attr("href"))) {
      move("down", $(this));  
    } else if(cur_page != last_page) {
      control_transfer_page_down = true;

      transfer_id = $(this); 

      $(".pNext.pButton.next-button").trigger("click");

      $('#filtering_form').ajaxStop(function() {
        if(control_transfer_page_down) {
          var clicked = get_id_by_href(transfer_id); 

          var el = get_id_by_href($("#flex1 tbody tr").eq(0).find("div.tools a." + class_down)); 

          send_request("down", clicked, el)

          control_transfer_page_down = false;   

          transfer_id = 0; 

          $("#ajax_refresh_and_loading").trigger("click");
        }
      }); 
    }
  }

  return false;
});

function move(direction, elt) {
  var hrefClick = elt.attr("href").split("/");

  var elClickId = hrefClick[hrefClick.length - 1];

  var href = "";

  var elId = "";

  if (direction == "up") {
    href = elt.parent().parent().parent().prev("tr").find("div.tools a." + class_down).attr('href').split("/");

    elId = href[href.length - 1];

    send_request("up", elClickId, elId);

    alert('up-moce')
  };

  if (direction == "down") {
   href = elt.parent().parent().parent().next("tr").find("div.tools a." + class_down).attr('href').split("/");

   elId = href[href.length - 1];

   send_request("down", elClickId, elId);

   alert('down-move')
 };
}  

$('#filtering_form').on("submit",function() {
})

$('#filtering_form').ajaxStart(function() {
  check_first();

  check_last();
});

$('#filtering_form').ajaxStop(function() {
  check_first(); 

  check_last();

  popUp("off");
}); 

function send_request(eventRow, clickEl, el) {
  var return_result = "";

  $.ajax({
    type: "POST",

    url: "/index.php/mediagest/change_order_extrusao",

    data: {eventRow:eventRow, clickEl:clickEl, el:el},

    beforeSend: function(){
     popUp("on");

     change_order = true;
   },

   success: function(result) {
    change_order = false;

    if (result == "success") {
      $("#ajax_refresh_and_loading").trigger("click");
    };
  },

  error: function() {
    change_order = false;

    alert("error")
  },

  async: false
});
  
  return return_result  ; 
}
});// fim do document ready