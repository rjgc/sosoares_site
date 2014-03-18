$(document).ready(function(){

  // var position_up = 3;
  // var position_down = 4;

  var class_up = "order-position-product-up";
  var class_down = "order-position-product-down";

  
  

  function get_id_by_href(href){
    var hrefClick = href.attr("href").split("/");
       return hrefClick[hrefClick.length - 1];
  }

  function check_last(){
    var cur_page = $("#crud_page").val();
    var last_page = $("#last-page-number").text();
    // console.log("cur:"+cur_page + " last-page:"+last_page);
     
     if (cur_page == last_page) {
      // $("#flex1 tbody tr").eq($("#flex1 tbody tr").length - 1).find("div.tools a").eq(position_down).css("opacity",0);
      $("#flex1 tbody tr").eq($("#flex1 tbody tr").length - 1).find("div.tools a."+class_down).css("opacity",0);
     };
  }
   function check_first(){
    var cur_page = $("#crud_page").val();
    if(cur_page == 1)
     // $("#flex1 tbody tr").eq(0).find("div.tools a").eq(position_up).css("opacity",0.0);
      $("#flex1 tbody tr").eq(0).find("div.tools a."+class_up).css("opacity",0.0);
   
  }

  var change_order = false;
  var control_transfer_page = false , control_transfer_page = false , transfer_id = 0 ; 

  jQuery.fn.center = function () {
    this.css("position","fixed");
    this.css("top", Math.max(0, (($(window).height() - 55 - $(this).outerHeight()) / 2) + 
                                                $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 
                                                $(window).scrollLeft()) + "px");
    return this;
  }



  $("body").prepend("<div id='change-order-alert-box'  style=''><p></p></div>");
  $("#change-order-alert-box").center();

  function popUp(enable,msg){
    if (enable == "on") {
      $("#change-order-alert-box").fadeIn(0);
    };
      if (enable == "off") {
      $("#change-order-alert-box").fadeOut(500);
    };

  }

// $("#flex1 tbody tr").eq(0).find("div.tools a").eq(3).children("img").delay(5000).hide();
check_last() ; 
check_first() ; 

   $(document).on("click", "a.order-position-product-up",function(){
    // alert(" Esta funcionalidade encontrasse em desenvolvimento ");
    // $("#alert-box").fadeIn(500);

    popUp("on");

    var cur_page = $("#crud_page").val();

    if (!change_order) {
        
       if (($("#flex1 tbody tr").eq(0).find("div.tools a."+class_up).attr("href") != $(this).attr("href")) ) {
        move("up",$(this));
        // console.log("mover para cima");
      }else if(cur_page != 1){
        control_transfer_page_up = true;
        transfer_id = $(this) ; 
        // console.log("transfer-page-cima");

        $(".pPrev.pButton.prev-button").trigger("click");
        
          $('#filtering_form').ajaxStop(function(){
              if(control_transfer_page_up){

                // console.log("func 2");     
                 // console.log("ura:"+$("#flex1 tbody tr").eq(0).find("div.tools a").eq(2).attr("href") + "guardado : " +  transfer_id.attr("href") )

                var clicked =  get_id_by_href(transfer_id) ; 
                var el =  get_id_by_href( $("#flex1 tbody tr").eq($("#flex1 tbody tr").length - 1).find("div.tools a."+class_up)) ; 
                 // console.log("clicked: "+clicked + "el : "+ el )
                
                  send_request("up",clicked,el)
                control_transfer_page_up = false ;   
                transfer_id = 0 ; 
                $("#ajax_refresh_and_loading").trigger("click");
               }
           }); 
       
      }


    };//fim change order
    
   
    return false;
   });


   $(document).on("click", "a.order-position-product-down",function(){

     popUp("on");

     var cur_page = $("#crud_page").val();
     var last_page = $("#last-page-number").text();
    //alert(" Esta funcionalidade encontrasse em desenvolvimento ");

    if (!change_order ) {
      if (($("#flex1 tbody tr").eq($("#flex1 tbody tr").length - 1).find("div.tools a."+class_down).attr("href") != $(this).attr("href")) ) {
        move("down",$(this));  
        // console.log("mover para baixo");
      }else if(cur_page != last_page){
        control_transfer_page_down = true;
        transfer_id = $(this) ; 
        // console.log("transfer-page");

        $(".pNext.pButton.next-button").trigger("click");
        
          $('#filtering_form').ajaxStop(function(){
              if(control_transfer_page_down){

                // console.log("func ");     
                 // console.log("ura:"+$("#flex1 tbody tr").eq(0).find("div.tools a").eq(2).attr("href") + "guardado : " +  transfer_id.attr("href") )

                var clicked =  get_id_by_href(transfer_id) ; 
                var el =  get_id_by_href($("#flex1 tbody tr").eq(0).find("div.tools a."+class_down)) ; 
                 // console.log("clicked: "+clicked + "el : "+ el )

                  send_request("down",clicked,el)
                control_transfer_page_down = false ;   
                transfer_id = 0 ; 
                $("#ajax_refresh_and_loading").trigger("click");
               }
           }); 
       
      }
     
    }
   
    
    //$("#ajax_refresh_and_loading").trigger("click");
    //$(this).attr('href').split('/')
    return false;
   });

   function move(direction,elt){
    var hrefClick = elt.attr("href").split("/");
    var elClickId = hrefClick[hrefClick.length - 1];
    var href = "";
    var elId = "";

    
    if (direction == "up") {
      href = elt.parent().parent().parent().prev("tr").find("div.tools a."+class_down).attr('href').split("/");
      elId = href[href.length - 1];
      // console.log("elId: "+elId + " elClickId:"+elClickId);
      send_request("up",elClickId,elId);
      // console.log("sendRequest");
      
    };

    if (direction == "down") {
       // .prop("tagName")
       href = elt.parent().parent().parent().next("tr").find("div.tools a."+class_down).attr('href').split("/");
       elId = href[href.length - 1];
       // console.log("elId: "+elId + " elClickId:"+elClickId);
       send_request("down",elClickId,elId);
       // $("#flex1 tbody tr").eq(0).find("div.tools a").eq(3).attr("href")
       // console.log("sendRequest");
    };

   }  
        
//    $('#ajax_refresh_and_loading').click(function(){
// $('#filtering_form').trigger('submit');
// }); 

  

  $('#filtering_form').on("submit",function(){
     // console.log("submitTrigger");
     
  })

   $('#filtering_form').ajaxStart(function(){
    
    check_first();
     
     check_last();
     
    
    
   });
   $('#filtering_form').ajaxStop(function(){
    
    check_first(); 

    check_last();
    popUp("off");
   
   }); 
  // refresh();

  function send_request(eventRow,clickEl,el){
    var return_result = "";
    $.ajax({
            type: "POST",
            url: "/index.php/mediagest/change_order",
            // dataType: 'json',
            data: {eventRow:eventRow,clickEl:clickEl,el:el},
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
            error: function(){
            // $("#"+type).html(msgError);
            change_order = false;
            alert("error")
            },
            async: false
        });
      return return_result ; 
  }


 
   

});// fim do document ready