 <!-- FOOTER -->
              </section>
        <footer>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/gs.jpg" width="29" height="28" alt="GS" /> &nbsp;&copy; <b id="group">GRUPO SOSOARES</b> Todos os Direitos Reservados
                        </div>
                        <div class="col-md-3">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/euro2000.jpg" width="165" height="43" alt="Sistemas Euro2000" title="Sistemas Euro2000">
                            <img src="<?php echo base_url() ?>assets/sosoares/img/critec.jpg" width="70" height="23" alt="Critec.pt" title="Critec.pt">
                        </div>
                    </div>
                    <div class="row">
                        <div id="contacts">
                            <div class="col-md-1">
                                <img src="<?php echo base_url() ?>assets/sosoares/img/35anos.jpg" width="68" height="77" alt="35 Anos">
                            </div>
                            <div class="col-md-3">
                                <p><b>RUA DO CAMPO ALEGRE, 474</p>
                                <p>4150-170 PORTO - PORTUGAL</b></p>
                            </div>
                            <div class="col-md-2">
                                <p>Tel +351 <b>226 096 709</b></p>
                                <p> Tel +351 <b>226 005 642</b></p>
                            </div>
                            <div class="col-md-3">
                                <p>geral@sosoares.pt</p>
                                <p>comercial@sosoares.pt</p>
                            </div>
                            <div class="col-md-3">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?php echo base_url() ?>assets/sosoares/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/sosoares/js/docs.min.js"></script>
	<script>
	   $('#myCarousel').carousel({
	      interval: 4000
	   });
	  
	  // handles the carousel thumbnails
	  $('[id^=carousel-selector-]').click( function(){
	    var id_selector = $(this).attr("id");
	    var id = id_selector.substr(id_selector.length -1);
	    id = parseInt(id);
	    $('#myCarousel').carousel(id);
	    $('[id^=carousel-selector-]').removeClass('selected');
	    $(this).addClass('selected');
	  });
	  
	  // when the carousel slides, auto update
	  $('#myCarousel').on('slid', function (e) {
	    var id = $('.item.active').data('slide-number');
	    id = parseInt(id);
	    $('[id^=carousel-selector-]').removeClass('selected');
	    $('[id^=carousel-selector-'+id+']').addClass('selected');
	  });
	  </script>
	  <script>
	  $(document).ready(function() {
		  $('#myCarousel2').carousel({
		  interval: 10000
		  })
	      
	      $('#myCarousel2').on('slid.bs.carousel', function() {
		  //alert("slid");
		  });
	  });
	  </script>
    </body>
</html>