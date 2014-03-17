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
?>
<div class="container body-left">
      <div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?=anchor('home', lang('indelague.home'))?> <span class="divider">»</span></li>
				<li><?=anchor('products', lang('indelague.products'))?> <span class="divider">»</span></li>
				<li class="active"><?=$title ?></li>
			</ul>
		</div>
         <span style="display:none" id="current-lang"><?=$this->lang->lang()  ?></span>
	</div>
    <!--  <div class="row">
		<div class="span12">
			 <h2 class="align"><?=lang('indelague.productFilter')?></h2>
              <form id="search_form" action="<?php echo site_url('products/search_result'); ?>" method="POST" class="forms-dropdowns">
                  <div id="dc" class="wrapper-dropdown-4"><?=lang('indelague.applications')?>
                    <ul class="dropdown">

                       <?php foreach ($applications as $applications_item): ?>
                         <li><input type="radio" class="styled" id="aplicacao_<?=$applications_item['name_'.$this->lang->lang()] ?>" name="app" value="app_<?=$applications_item['application_id'] ?>"><label for="aplicacao_<?=$applications_item['name_'.$this->lang->lang()] ?>"><?=$applications_item['name_'.$this->lang->lang()] ?></label></li>
                       <?php endforeach ?>
                    </ul>
                  </div>
                  <div id="di" style="display:none" class="wrapper-dropdown-4"><?=lang('indelague.mountingType')?>
                   
                    <ul class="dropdown clone">
                       <?php foreach ($type_mounting_indust as $type_mounting_item): ?>
                          <li style="z-index:7000"><input type="checkbox" class="styled" id="tmi_<?=$type_mounting_item['name_'.$this->lang->lang()] ?>" name="tm1_<?=$type_mounting_item['category_id'] ?>" value="tm"><label for="tmi_<?=$type_mounting_item['name_'.$this->lang->lang()] ?>"><?=$type_mounting_item['name_'.$this->lang->lang()] ?></label></li>
                        <?php endforeach ?>
                    </ul>
                    
                  </div>
                  <div id="da" style="display:none" class="wrapper-dropdown-4"><?=lang('indelague.mountingType')?>
                   
                    <ul class="dropdown clone">
                       <?php foreach ($type_mounting_arc as $type_mounting_item): ?>
                          <li style="z-index:7000"><input type="checkbox" class="styled" id="tma_<?=$type_mounting_item['name_'.$this->lang->lang()] ?>" name="tm2_<?=$type_mounting_item['category_id'] ?>" value="tm"><label for="tma_<?=$type_mounting_item['name_'.$this->lang->lang()] ?>"><?=$type_mounting_item['name_'.$this->lang->lang()] ?></label></li>
                        <?php endforeach ?>
                    </ul>
                    
                  </div>
                
                  <input type="submit" class="submit" value="<?=lang('indelague.show_results')?>" />
            <span style="display:none" id="current-lang"><?=$this->lang->lang()  ?></span>
             </form>

           
		</div>
	</div> -->
      <div class="row">
		<div class="span12">
			<div class="entry">
				<h1 class="align"><?=$title ?></h1>
                <?php if (isset($products) && $get_by_ajax == 0 ):?>
                  <?php if (count($products) > 0){ ?>
                      <?php foreach ($products as $product): ?>
                          <?php
                          $name = url_amigavel($product['name']);
                          if (isset($control_page)) { 
                             if ($control_page == "no_cat_product") { ?> 
                              <a href="<?=base_url('index.php/'.$this->lang->lang().'/products/'.$tipo_cat.'/'.$product['cat_name'].'/'.$product['product_id'].'-'.$name)?>"><div class="products-list"><img src="<?php echo base_url() ?>assets/uploads/products/<?=file_core_name($product['photo_lista']) ?>.<?=file_extension($product['photo_lista']) ?>"/><p> <?=$product['name'] ?></p></div></a>
                            <?php }else if($control_page == "cat"){ ?>
                                <a href="<?=base_url('index.php/'.$this->lang->lang().'/products/'.$tipo_cat.'/'.$title.'/'.$product['product_id'].'-'.$name)?>"><div class="products-list"><img src="<?php echo base_url() ?>assets/uploads/products/<?=file_core_name($product['photo_lista']) ?>.<?=file_extension($product['photo_lista']) ?>"/><p> <?=$product['name'] ?></p></div></a>
                            <?php } ?>
                         <?php  }else{ ?>
                               <a href="<?=base_url('index.php/'.$this->lang->lang().'/products/'.$tipo_cat.'/'.$title.'/'.$product['product_id'].'-'.$name)?>"><div class="products-list"><img src="<?php echo base_url() ?>assets/uploads/products/<?=file_core_name($product['photo_lista']) ?>.<?=file_extension($product['photo_lista']) ?>"/><p> <?=$product['name'] ?></p></div></a>
                          <?php } ?>
                         

                      
                      <?php endforeach ?>
                    <?php }else{ ?>
                   <!--  <p>Pagina não encontrada</p> -->
                    <?php } ?>
                <?php endif ?>

                <?php //if (isset($get_by_ajax) && $control_page == "no_cat_product" ): ?>
                <?php if ($get_by_ajax != 0  ): ?>
                  <input type="hidden" name="" id="control-ajax-products" value="<?=$get_by_ajax; ?>" >                  
                  <input type="hidden" name="" id="control-ajax-products-button" value="<?=lang('indelague.show_more_products')?>" >                  
                  <input type="hidden" name="" id="control-ajax-products-button-status" value="<?=lang('indelague.show_more_products_status')?>" >                  
                  <?php if (isset($id_cat_ajax)) { ?>
                    <input type="hidden" name="" id="control-ajax-products-cat" value="<?=$title2; ?>" >                  
                    <input type="hidden" name="" id="control-ajax-products-cat-id" value="<?=$id_cat_ajax; ?>" >                  
                  <?php } ?>
                  <input type="hidden" name="" id="current-lang" value="<?=$this->lang->lang(); ?>" >                  
                  
                <?php endif ?>
                
            </div>
		</div>

      </div><!-- /.row -->
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
                
                  <input type="submit" class="submit" value="<?=lang('indelague.show_results')?>" />
       
             </form>

           
    </div>
  </div>
    
    </div><!-- /.container -->