 <div class="container body-left">
      <div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?=anchor('home', lang('indelague.home'))?> <span class="divider">»</span></li>
				<li><?=anchor('products', lang('indelague.products'))?> <span class="divider">»</span></li>
				<li class="active"><?=$title ?></li>
			</ul>
		</div>
	</div>
     <div class="row">
		<div class="span12">
			 <h2 class="align"><?=lang('indelague.productFilter')?></h2>
              <form id="search_form" action="<?php echo site_url('products/search_result'); ?>" method="POST" class="forms-dropdowns">
		            <div id="dc" class="wrapper-dropdown-4"><span class="dw-sl-op"><?=lang('indelague.applications')?></span>
		              <ul class="dropdown">

		                 <?php foreach ($applications as $applications_item): ?>
		                   <li><input type="radio" class="styled" id="aplicacao_<?=$applications_item['name_'.$this->lang->lang()] ?>" name="app" value="app_<?=$applications_item['application_id'] ?>"><label for="aplicacao_<?=$applications_item['name_'.$this->lang->lang()] ?>"><?=$applications_item['name_'.$this->lang->lang()] ?></label></li>
		                 <?php endforeach ?>
		              </ul>
		            </div>
		            <div id="di" style="display:none" class="wrapper-dropdown-4">
		             <span class="dw-sl-op2"><?=lang('indelague.mountingType')?></span>
		              <ul class="dropdown clone">
		                 <?php foreach ($type_mounting_indust as $type_mounting_item): ?>
		                    <li style="z-index:7000"><input type="radio" class="styled" id="tmi_<?=$type_mounting_item['name_'.$this->lang->lang()] ?>" name="tm1_" value="<?=$type_mounting_item['category_id'] ?>"><label for="tmi_<?=$type_mounting_item['name_'.$this->lang->lang()] ?>"><?=$type_mounting_item['name_'.$this->lang->lang()] ?></label></li>
		                  <?php endforeach ?>
		              </ul>
		              
		            </div>
		            <div id="da" style="display:none" class="wrapper-dropdown-4">
		             <span class="dw-sl-op3"><?=lang('indelague.mountingType')?></span>
		              <ul class="dropdown clone">
		                 <?php foreach ($type_mounting_arc as $type_mounting_item): ?>
		                    <li style="z-index:7000"><input type="radio" class="styled" id="tma_<?=$type_mounting_item['name_'.$this->lang->lang()] ?>" name="tm2_" value="<?=$type_mounting_item['category_id'] ?>"><label for="tma_<?=$type_mounting_item['name_'.$this->lang->lang()] ?>"><?=$type_mounting_item['name_'.$this->lang->lang()] ?></label></li>
		                  <?php endforeach ?>
		              </ul>
		              
		            </div>
		          
		            <input type="submit" class="submit" value="Show Results" />
            <span style="display:none" id="current-lang"><?=$this->lang->lang()  ?></span>
		       </form>
		</div>
	</div>
      <div class="row">
		<div class="span12">
			<div class="entry products-listing">
				<h1 class="align"><?=$title ?></h1>
                <div class="industrial">
        			<h3><?=lang('indelague.industrial')?></h3>
        			<ul>
                <?php foreach ($cat_industrial as $categorys_item): ?>
                
                   				<li>
                   					<a href="<?=base_url().$this->lang->lang();?>/products/industrial/<?php echo $categorys_item['name_en'];?>/">
                   						<img src="<?php echo base_url();?>assets/uploads/categorys/<?php echo $categorys_item['foto_url'];?>" alt="<?php echo $categorys_item['name_'.$this->lang->lang()]; ?>" />
                   						<span class="cat-name"><?php echo $categorys_item['name_'.$this->lang->lang()]; ?></span>
                   					</a>
                   				</li>
	             <?php endforeach ?>
        			</ul>
        		</div>

        		<div class="arquitectural">
        			<h3><?=lang('indelague.arquitectural')?></h3>
        			<div class="interior">
	        			<h4>Interior</h4>
	        			<ul>
		             <?php foreach ($cat_arquitectural as $categorys_item): ?>
	                    <?php
	                    
	                       if ( $categorys_item['local'] == '1'){
	                        	?>
	                   				<li>
	                   					<a href="<?php echo base_url();?>products/architectural/<?php echo $categorys_item['name_en'];?>/">
	                   						<img src="<?php echo base_url();?>assets/uploads/categorys/<?php echo $categorys_item['foto_url'];?>" alt="<?php echo $categorys_item['name_'.$this->lang->lang()]; ?>" />
	                   						<span class="cat-name"><?php echo $categorys_item['name_'.$this->lang->lang()]; ?></span>
	                   					</a>
	                   				</li>
	                        	<?php
	                    	}
	                	?>
		             <?php endforeach ?>
	        			</ul>
        			</div>
        			<div class="exterior">
	        			<h4>Exterior</h4>
	        			<ul>
		             <?php foreach ($cat_arquitectural as $categorys_item): ?>
	                    <?php
	                       if ($categorys_item['local'] == '2'){
	                        	?>
	                   				<li>
	                   					<a href="<?php echo base_url();?>products/architectural/<?php echo $categorys_item['name_en'];?>/">
	                   						<img src="<?php echo base_url();?>assets/uploads/categorys/<?php echo $categorys_item['foto_url'];?>" alt="<?php echo $categorys_item['name_'.$this->lang->lang()]; ?>" />
	                   						<span class="cat-name"><?php echo $categorys_item['name_'.$this->lang->lang()]; ?></span>
	                   					</a>
	                   				</li>
	                        	<?php
	                    	}
	                	?>
		             <?php endforeach ?>
	        			</ul>
        			</div>
        		</div>
                
            </div>
		</div>
      </div><!-- /.row -->
    
    </div><!-- /.container -->