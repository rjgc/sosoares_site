$(document).ready(function(){

  var ctrl_message = false;

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


 $(document).on("click", "a.duplicate-item.crud-action",function(){

  popUp("on");

  var href = $(this).attr("href").split("/");
  var id_item = href[href.length - 1];
  console.log("duplicate item: "+id_item);

  send_request(id_item);

  return false;
   
  
 
  
  //$("#ajax_refresh_and_loading").trigger("click");
  //$(this).attr('href').split('/')
 
 });

$('#filtering_form').ajaxStart(function(){
 
    
});
 $('#filtering_form').ajaxStop(function(){
 
  popUp("off");
  if (ctrl_message === true) {
    $("#report-success").html("<p>produto duplicado com sucesso</p>").fadeIn();
    ctrl_message  = false;
  };
 
 }); 

  function send_request(el){



    var return_result = "";
    $.ajax({
            type: "POST",
            url: "/index.php/en/duplicate_item/duplicate",
            // dataType: 'json',
            data: {el:el},
            beforeSend: function(){
               
              
            },
            success: function(result) {
              
              if (result == "success") {
                $("#ajax_refresh_and_loading").trigger("click");
                ctrl_message = true;
              }else{
                alert("Error (please try again)");
              }
              
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


 
   

});// end document ready