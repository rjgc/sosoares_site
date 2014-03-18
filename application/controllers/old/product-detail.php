 <?php
function url_amigavel($string) { 
    $palavra = strtr($string, "ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ", "SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy");
    $palavranova = str_replace("_", " ", $palavra);
    $pattern = '|[^A-ZA-Z0-9\-]|';    $palavranova = preg_replace($pattern, ' ', $palavranova);
    $string = str_replace(' ', '-', $palavranova);
    $string = str_replace('---', '-', $string);
    $string = str_replace('--', '-', $string);
    return strtolower($string);
}






function invertion($src){
  $image = 'assets/uploads/configuracoes/'.$src;
  
  $path = "/index.php/en/products/get_image/";

  return $path.str_replace( "=" , "" , base64_encode($image) );
}

?>

<div class="container body-left detalhe-produto product-detail">
      <div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?=anchor('home', lang('indelague.home'))?> <span class="divider">»</span></li>
                <li><?=anchor('products', lang('indelague.products'))?> <span class="divider">»</span></li>
                <li><?=anchor('products/'.$tipo_cat.'/'.$cat, $cat_lang)?> <span class="divider">»</span></li>
               <!-- <li><a href="<?=base_url('index.php/'.$this->lang->lang().'/products/category/'.$cat.'/'.$product)?>"><?=$product?></a> <span class="divider">»</span></li>-->
				<li class="active"><?=$product ?></li>
			</ul>
		</div>
	</div>
    <div class="container marketing">
      
      <div class="row">
		<div class="span9">
			<div class="entry">
				<div class="icons2 img-center">
				<?php 
					if(isset($relative_data['icons2'])){
						foreach($relative_data['icons2'] as $icons2){
							echo '<img src="'.base_url().'assets/uploads/icons2/'.$icons2['icon'].'" alt="'.$icons2['name'].'" />';
						} 
					}
				?>
				</div>
				<div>
                <?php $currentLang = $this->lang->lang(); ?>
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
                  <?php 
                    if(isset($relative_data['norm'])){?>
                <div>
                    <h3><?php echo lang('indelague.norms') ?></h3>
                    <?php
                      foreach($relative_data['norm'] as $key => $norm){
                        if(count($relative_data['norm']) - 1 == $key ){
                          echo $norm['name_'.$currentLang];
                        }
                        else{echo $norm['name_'.$currentLang].', ';}
                      } 
                   ?>
                </div><?php } ?>

                <?php 
                    if(isset($relative_data['icons3'])){ ?>
                    <div class="row-fluid">
                      <div class="icons span9">
                           <div class="indelague-division"></div>
                           <h2><?php echo lang('indelague.characteristics') ?></h2>
                
                 <?         foreach($relative_data['icons3'] as $icons3){
                            echo '<img src="'.base_url().'assets/uploads/icons3/'.$icons3['icon'].'" alt="'.$icons3['name'].'" />';
                        } ?> 
                            </div>
                            </div>
                   <?php } ?> 
    
                <?php 
                   $corpo = 'corpo_'.$currentLang;
                   $electricPart = 'electric_part_'.$currentLang;
                   $options = 'options_'.$currentLang;
                 ?>
                 <?php if($products->$corpo != "" || $products->$electricPart != "" ||  $products->$options != ""){ ?>
                  <div class="indelague-division exception"></div>
                  <h2><?php echo lang('indelague.description') ?></h2>
                  <div class="row-fluid">
                    <?php if($products->$corpo != "" || $products->$electricPart != ""){ ?>
  	                <div class="span6">
                      <?php if($products->$corpo != ""){ ?>
  	                	<h3><?php echo lang('indelague.descriptionBody') ?></h3>
  	                	<p>
  	                		<?php 
                                 
  	                			echo($products->$corpo);
  	                		?>
  	                	</p>
                      <?php } ?>
  	                	
                      <?php if($products->$electricPart != ""){ ?>
  	                	<h3><?php echo lang('indelague.descriptionPart') ?></h3>
  	                	<p>
  	                		<?php 
                                  
  	                			echo($products->$electricPart);
  	                		?>
  	                	</p>
                      <?php } ?>
  	                </div>
                    <?php } ?>
  	                
                    <?php if ($products->$options != "") { ?>
  	                <div class="span6">
  	                	<h3><?php echo lang('indelague.options') ?></h3>
  	                	<p>
  	                		<?php 
                            
  	                			echo($products->$options);
  	                		?>
  	                	</p>
  	                </div>
                    <?php } ?>
                  </div>
                  
                  <?php } ?>

                 </div><!-- /.entry -->
              </div><!-- /.span9 -->
            
          

            <div class="span3 products-sidebar visible-desktop">
              
              <h2><?=lang('indelague.productFilter')?></h2>
              <form id="search_form" action="<?php echo site_url('products/search_result'); ?>" method="POST" >
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
            
             <?php 
                      $tableDimensions = 'table_dimensoes_'.$currentLang;
                      $performance = 'performance_'.$currentLang;
                      $configuration = 'esquema_'.$currentLang;
                ?>

            <div class="span12 spaced-titles">
            
            
            <?php if($products->$configuration != ''){ ?>
                <div class="indelague-division exception"></div>
                <h2><?php echo lang('indelague.module') ?></h2>
                <div><img src="<?=base_url() ?>assets/uploads/esquema/<?=$products->$configuration?>"/></div>
            <?php } ?>
            
                            
                
             
             <?php 

              ?>
                <div class="row">
                  <?php 
                    if(isset($relative_data['product_radiation_angle'])){
                      ?>
                <div class="span9 products-sidebar">
                  <div class="indelague-division exception aside"></div>
                  <h2><?php echo lang('indelague.product_radiation_angle') ?></h2>
                  <div class="reflectors">
                              <?php
                                foreach($relative_data['product_radiation_angle'] as $angle){
                                    echo '<div class="radiation-block">';
                                     echo '<h5 class="radiation-desc1">'.$angle['radiation_desc1'].'</h5>';
    echo "<a href='#' data-placement='bottom' data-toggle='tooltip' title='' data-original-title='". lang('indelague.radiation_code')." ".$angle['radiation_desc2']."'><img src='".base_url()."assets/uploads/radiation_angle/".$angle['icon']."' alt='".$angle['radiation_desc2']."' /></a>";
                                      // echo '<h5 class="radiation-desc2">'.$angle['radiation_desc2'].'</h5>';
                                    echo '</div>';
                                } ?>
                  </div>
                </div>
                <?php } ?>
                </div>
        

                <?php 
                  $show = false;
                  
                  if(isset($products->$tableDimensions))($products->$tableDimensions != "")?$show = true:"";
                  if(isset($products->dimensoes))($products->dimensoes != "")?$show = true:"";
                  if(isset($products->photometry_photo))($products->photometry_photo != "")?$show = true:"";

                  if ($show === true) {

                 ?>      
                <div class="span9" style="margin-left: 0;">
                    <div class="indelague-division exception"></div>
                  
                    
                    <?php if($products->$tableDimensions != ''){ ?>
                      <h2><?php echo lang('indelague.type') ?></h2>
                    <div><img src="<?=base_url() ?>assets/uploads/dimensoes/<?=$products->$tableDimensions?>"/></div>
                     <!-- <div><img src="<?=invertion($products->$tableDimensions)?>"/></div>  -->
                    <?php } ?>
                    <?php if(isset($products->dimensoes) || isset($products->photometry_photo)){ ?>
                    <div class="row-fluid">
                      <?php if(isset($products->dimensoes)){ 
                       if ($products->dimensoes != "") {
                      ?>
                    	<div class="span8">
                    		<h2><?php echo lang('indelague.dimensions') ?></h2>
                    		<div><img src="<?=base_url() ?>assets/uploads/dimensoes/<?=$products->dimensoes?>"/></div>
                    	</div>
                      <?php }} ?>
                      <?php if(isset($products->photometry_photo)){ 
                          if ($products->photometry_photo != "") {
                        ?>
                    	<div class="span3">
                    		<h2><?php echo lang('indelague.photometry') ?></h2>
                    		<div><img src="<?=base_url() ?>assets/uploads/photometry/<?=$products->photometry_photo?>"/></div>
                    	</div>
                      <?php }} ?>
                    </div>
                    <?php }} ?>
                    
            	<?php 
                  $configScheme = 'configuracoes_'.$currentLang;
                  if($products->$configScheme != ''){
                ?>
                <div class="indelague-division exception"></div>
                <h2><?php echo lang('indelague.configScheme') ?></h2>
                <img src="<?=base_url() ?>assets/uploads/configuracoes/<?=$products->$configScheme?>"/>
                 <!-- <img src="<?=invertion($products->$configScheme);?>"/>      -->
                <?php
                  }
                ?>

                </div>
                <?php 
                    if(isset($relative_data['reflector'])){
                      ?>
                <div class="span3 products-sidebar">
                  <div class="indelague-division exception"></div>
                  <h2><?php echo lang('indelague.reflectors') ?></h2>
                  <div class="reflectors">
                              <?php
                                foreach($relative_data['reflector'] as $reflector){
                                    echo '<div class="reflector-block">';
                                    echo '<h5>'.$reflector['name'].'</h5>';
    //echo "<a href='#' data-placement='bottom' data-toggle='tooltip' title='' data-original-title='".$reflector['text_'.$this->lang->lang()]."'><img src='".base_url()."assets/uploads/reflectors/".file_core_name($reflector['photo'])."-71x71.".file_extension($reflector['photo'])."' alt='".$reflector['name']."' /></a>";
                                     echo "<a href='#' data-placement='bottom' data-toggle='tooltip' title='' data-original-title='".$reflector['text_'.$this->lang->lang()]."'><img src='".base_url().thumb("assets/uploads/reflectors/".$reflector['photo'],71,71)."' alt='".$reflector['name']."' /></a>";
                                    echo '</div>';
                                } ?>
                  </div>
                </div>
                <?php } ?>

                 <?php 
                    if(isset($relative_data['product_colors'])){
                      ?>
                <div class="span3 products-sidebar">
                  <div class="indelague-division exception aside"></div>
                  <h2><?php echo lang('indelague.product_colors') ?></h2>
                  <div class="reflectors">
                              <?php
                                foreach($relative_data['product_colors'] as $color){
                                    echo '<div class="cores-block">';
                                    $title = $color['color_name_en'];
                                    if (trim($title != "")) {
                                      $title = $title[0];
                                    }

                                     echo '<h5>'.$title.'</h5>';
    echo "<a href='#' data-placement='bottom' data-toggle='tooltip' title='' data-original-title='".$color['color_name_'.$this->lang->lang()]."'><img src='".base_url()."assets/uploads/product_colors/".$color['color_file']."' alt='".$color['color_name_'.$this->lang->lang()]."' /></a>";
                                    echo '</div>';
                                } ?>
                  </div>
                </div>
                <?php } ?>


                 
                 

            </div>
        </div><!-- /.row -->
        <div class="row">
        	<div class="span12 spaced-titles">
                <?php if($products->$performance != ''){ ?>
                <div class="indelague-division exception"></div>
                <h2><?php echo lang('indelague.performance') ?></h2>
                <div><img src="<?=base_url() ?>assets/uploads/fonte_luz/<?=$products->$performance?>"/></div>
                <?php } ?>
                

              <?php 
                $show2 = false;
                if(isset($products->photo_detalhe_1))($products->photo_detalhe_1 != "")?$show2 = true:"";
                if(isset($products->photo_detalhe_2))($products->photo_detalhe_2 != "")?$show2 = true:"";
                if(isset($products->photo_detalhe_3))($products->photo_detalhe_3 != "")?$show2 = true:"";
                if(isset($products->photo_detalhe_4))($products->photo_detalhe_4 != "")?$show2 = true:"";
                if(isset($products->photo_detalhe_5))($products->photo_detalhe_5 != "")?$show2 = true:"";
              if($show2 === true){ ?>
              <div class="indelague-division exception"></div>

              <h2><?php echo lang('indelague.details') ?></h2>
            	<div class="photo-detail-block">
                	<?php
                		if($products->photo_detalhe_1 != ''){
                	?>
                	<div class="image-block">
                		<a href="<?=base_url() ?>assets/uploads/products/<?=$products->photo_detalhe_1?>" class="lightbox" data-fancybox-group="gallery">
                			<img src="<?php echo base_url(); echo thumb('assets/uploads/products/'.$products->photo_detalhe_1,'133','133'); ?>" />
                		</a>
                	</div>
                	<?php } ?>
                	<?php
                		if($products->photo_detalhe_2 != ''){
                	?>
                	<div class="image-block">
                		<a href="<?php echo base_url() ?>assets/uploads/products/<?=$products->photo_detalhe_2?>" class="lightbox" data-fancybox-group="gallery">
                			<img src="<?php echo base_url(); echo thumb('assets/uploads/products/'.$products->photo_detalhe_2,'133','133'); ?>" />
                		</a>
                	</div>
                	<?php } ?>
                	<?php
                		if($products->photo_detalhe_3 != ''){
                	?>
                	<div class="image-block">
                		<a href="<?=base_url() ?>assets/uploads/products/<?=$products->photo_detalhe_3?>" class="lightbox" data-fancybox-group="gallery">
                			<img src="<?php echo base_url(); echo thumb('assets/uploads/products/'.$products->photo_detalhe_3,'133','133'); ?>" />
                		</a>
                	</div>
                	<?php } ?>
                	<?php
                		if($products->photo_detalhe_4 != ''){
                	?>
                	<div class="image-block">
                		<a href="<?=base_url() ?>assets/uploads/products/<?=$products->photo_detalhe_4?>" class="lightbox" data-fancybox-group="gallery">
                			<img src="<?php echo base_url(); echo thumb('assets/uploads/products/'.$products->photo_detalhe_4,'133','133'); ?>" />
                		</a>
                	</div>
                	<?php } ?>
                	<?php
                		if($products->photo_detalhe_5 != ''){
                	?>
                	<div class="image-block"> 
         							
                		<a href="<?=base_url() ?>assets/uploads/products/<?=$products->photo_detalhe_5?>" class="lightbox" data-fancybox-group="gallery">
                			<img src="<?php echo base_url(); echo thumb('assets/uploads/products/'.$products->photo_detalhe_5,'133','133'); ?>" />
                		</a>
                	</div>
                	<?php } ?>
            	</div>
              <?php } ?>
              <?php $tf = "tecnical_data_file_".$this->lang->lang();if (trim($products->$tf) != ""){  ?>
            	<a href="<?=base_url() ?>assets/uploads/files/<?=$products->$tf; ?>" class="btn technical-file btn-margin-top" target="_blank"><i class="technical-icon"></i><?php echo lang('indelague.techData') ?></a>
              
              <?php } if (trim($products->lighting_plug_in_file) != "" ) { ?>              
            	<a href="<?=base_url() ?>assets/uploads/files/<?=$products->lighting_plug_in_file?>" class="btn lighting-plugin btn-margin-top"><i class="lighting-icon"></i><?php echo lang('indelague.plugin') ?></a>
              <?php } ?>
             </div>
         </div>
         
          <?php 
            if(isset($relative_data['product_related'])){
         ?>
         <div class="row related-products">
         	<div class="row-heading">
            <div class="indelague-division"></div>
         		<h2><?php echo lang('indelague.related') ?></h2>
         	</div>
         	<div class="span12 related-slider">
              <?php
         				foreach($relative_data['product_related'] as $related_product){
                 $name = url_amigavel($related_product['name']);
         				 if($related_product['cat_industrial_id'] != '0'){
                    $main_cat = 'industrial';
                    $subcat = $related_product['name1'];
                 }
                 else{
                    $main_cat = 'architectural';
                    $subcat = $related_product['name2'];
                 }
                 if($related_product['photo_lista'] != ''){
         				?>
         					<div class="span2">
         						<a href="<?=base_url('index.php/'.$this->lang->lang().'/products/'.$main_cat.'/'.$subcat.'/'.$related_product['product_id'].'-'.$name)?>" class="related_product_link">
         						
         							<img src="<?php echo base_url(); echo thumb('assets/uploads/products/'.$related_product['photo_lista'],'133','133'); ?>" />
         							
         							<h5><?=$related_product['name']?></h5>
         							<span class="category"><?=$subcat;?></span>
         						</a>
         					</div>
         				<?php
                  }else{ ?>
                    <div class="span2">
                    <a href="<?=base_url('index.php/'.$this->lang->lang().'/products/'.$main_cat.'/'.$subcat.'/'.$related_product['product_id'].'-'.$name)?>" class="related_product_link">
                    
                      <!-- <img src="<?php //echo base_url(); //echo thumb('assets/uploads/products/'.$related_product['photo_lista'],'133','133'); ?>" /> -->
                      
                      <h5><?=$related_product['name']?></h5>
                      <span class="category"><?=$subcat;?></span>
                    </a>
                  </div>
         				<?php }} ?>
         	</div>
         </div>
         <?php } ?>
    </div> <!-- /.marketing -->
</div><!-- /.container -->