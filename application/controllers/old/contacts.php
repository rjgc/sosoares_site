<!--<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.pt/maps?f=q&amp;source=s_q&amp;hl=pt-PT&amp;geocode=&amp;q=indelague&amp;aq=&amp;sll=39.754062,-8.805959&amp;sspn=0.174995,0.352249&amp;t=m&amp;ie=UTF8&amp;hq=indelague&amp;hnear=&amp;radius=15000&amp;ll=40.601948,-8.451446&amp;spn=0.071946,0.071946&amp;output=embed"></iframe>-->
<div id="map-canvas"></div>
<div class="container body-left" style="margin-top:0;">
      <div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?=anchor('home', lang('indelague.home'))?> <span class="divider">»</span></li>
				<li class="active"><?=lang('indelague.contacts');?></li>
			</ul>
		</div>
	</div>
      <div class="row">
          <div class="span2 left-contact">
			<h2><?=lang('indelague.contact_us');?></h2>
			<p>INDELAGUE </p>
			<p class="exception-justify">INDÚSTRIA ELÉCTRICA DE ÁGUEDA, S.A. </p>
            <p>Rua da mina 465 | Covão </p>
            <p>Zona Industrial EN1 Norte </p>
            <p>Apartado 106 / 3754-909  </p>
            <p>3750-792 Trofa   </p>
            <p>ÁGUEDA | PORTUGAL   </p>
            </br>
            <p>T. +351 234 612 310 </p>
            <p>F. +351 234 624 058 </p>
           </br>
            <p><a href="mailto:indelague@indelague.pt">indelague@indelague.pt</a></p>
            <p><a href="mailto:indelague@indelague.com">indelague@indelague.com</a></p>
            </br>
            <p>GPS. <br/> N 40º3600.54 | W 008º27' 11.76" </p>

		</div>
		<div class="span5">
			<div class="entry">
                
                
                <div class="accordion" id="accordion2">

                    <?php $i = 1; $active = ""; foreach ($dep_contacts as $dep_contact) {  
                     //($i == 0)?$active = "in" : $active = "" ; $i++; ?>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?=$i?>">
                                <?php echo  $dep_contact['title_'.$this->lang->lang()]?>
                            </a>
                        </div>

                        <div id="collapse<?=$i?>" class="accordion-body collapse <?=$active; ?>">
                        <?php echo  $dep_contact['content_'.$this->lang->lang()]?>
                        </div>
                    </div>
                    
                       
                    <?php $i++; } ?>
                    
                </div>
                
                
            </div>
		</div>
		<div class="span3">
			<h2><?php echo lang('indelague.staytunedTitle') ?></h2>
            <?php echo lang('indelague.staytunedText') ?>
		</div>
      </div><!-- /.row -->
    
    </div><!-- /.container -->

       