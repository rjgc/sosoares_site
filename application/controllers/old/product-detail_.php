<div class="container body-left detalhe-produto">
      <div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?=anchor('home', lang('indelague.home'))?> <span class="divider">»</span></li>
                <li><?=anchor('products', lang('indelague.products'))?> <span class="divider">»</span></li>
                <li><?=anchor('products/category/'.$cat, $cat)?> <span class="divider">»</span></li>
               <!-- <li><a href="<?=base_url('index.php/'.$this->lang->lang().'/products/category/'.$cat.'/'.$product)?>"><?=$product?></a> <span class="divider">»</span></li>-->
				<li class="active"><?=$product ?></li>
			</ul>
		</div>
	</div>
    <div class="container marketing">
      <div class="row">
		<div class="span9">
			<div class="entry">
				<div class="icons2">
				<?php 
					if(isset($relative_data['icons2'])){
						foreach($relative_data['icons2'] as $icons2){
							echo '<img src="'.base_url().'assets/uploads/icons2/'.$icons2['icon'].'" alt="'.$icons2['name'].'" />';
						} 
					}
				?>
				</div>
				<div>
                    <h1><?=$product?></h1>
                </div>
                <div class="icons">
                	<?php 
                		if(isset($relative_data['icons1'])){
                			foreach($relative_data['icons1'] as $icons1){
                				echo '<img src="'.base_url().'assets/uploads/icons1/'.$icons1['icon'].'" alt="'.$icons1['name'].'" />';
                			} 
                		}
                	 ?>
                </div>
                <div>
                    <h3>NORMS</h3>
                    <p>Normas do produto</p>
                </div>

                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                APPLICATIONS
                            </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <div class="metade_product">
                                    <h3>BODY</h3>
                                    <p>
                                    	<?php 
                                    		if($this->lang->lang() == 'pt') echo($products->corpo_pt);
                                    		else echo($products->corpo_en);
                                    	?>
                                    </p>
                                </div>
                                <div class="metade_product">
                                    <h3>OPTIONS</h3>
                                    <p>
                                    	<?php 
                                    		if($this->lang->lang() == 'pt') echo($products->options_pt);
                                    		else echo($products->options_en);
                                    	?>
                                    </p>
                                </div>
                                <div >
                                    <h3>ELECTRIC PART</h3>
                                    <p>
                                    	<?php 
                                    		if($this->lang->lang() == 'pt') echo($products->electric_part_pt);
                                    		else echo($products->electric_part_en);
                                    	?>
                                    </p>
                                </div>
                                <div><img src="<?=base_url() ?>assets/uploads/dimensoes/<?=$products->table_dimensoes_photo?>"/></div>
                                 <div><img src="<?=base_url() ?>assets/uploads/dimensoes/<?=$products->dimensoes_photo?>"/></div>
                                 <div><img src="<?=base_url() ?>assets/uploads/photometry/<?=$products->photometry_photo?>"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                DIMENSIONS
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div><img src="<?=base_url() ?>assets/uploads/dimensoes/<?=$products->dimensoes_photo?>"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapse4">
                                DETAILS
                            </a>
                        </div>
                        <div id="collapse4" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div><img src="<?=base_url() ?>assets/uploads/photometry/<?=$products->photometry_photo?>"/></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<div class="span3">
          <h2><?=lang('indelague.productFilter')?></h2>
          <form action="#" type="POST">
			<div id="dc" class="wrapper-dropdown-4"><?=lang('indelague.applications')?>
				<ul class="dropdown">
                   <?php foreach ($applications as $applications_item): ?>
					   <li><input type="checkbox" class="styled" id="<?=$applications_item['name_'.$this->lang->lang()] ?>" name="<?=$applications_item['name_'.$this->lang->lang()] ?>" value="donut"><label for="<?=$applications_item['name_'.$this->lang->lang()] ?>"><?=$applications_item['name_'.$this->lang->lang()] ?></label></li>
				   <?php endforeach ?>
                </ul>
			</div>
			<div id="dd" class="wrapper-dropdown-4"><?=lang('indelague.mountingType')?>
				<ul class="dropdown">
                     <?php foreach ($type_mounting as $type_mounting_item): ?>
					   <li><input type="checkbox" class="styled" id="<?=$type_mounting_item['name_'.$this->lang->lang()] ?>" name="<?=$type_mounting_item['name_'.$this->lang->lang()] ?>" value="donut"><label for="<?=$type_mounting_item['name_'.$this->lang->lang()] ?>"><?=$type_mounting_item['name_'.$this->lang->lang()] ?></label></li>
				    <?php endforeach ?>
				</ul>
			</div>
			<input type="submit" class="submit" value="Show Results" />
		  </form>
            <h2>Stay Tuned</h2>
			<p>Lorem ipsum dolor sit dolor amet, consectetur adipiscing Indelaguet. Nulla leo rutrum  adipiscing posuere purus, <a href="#">subscribe our newsletter.</a></p>
			<h2>Any Questions?</h2>
			<p>Lorem ipsum dolor sit dolor amet, consectetur adipiscing Indelaguet. Nulla leo rutrum  adipiscing posuere purus, <a href="#">subscribe our newsletter.</a></p>
        </div><!-- /.span3 -->
      </div><!-- /.row -->
    </div> <!-- /.marketing -->
    </div><!-- /.container -->