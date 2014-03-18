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
	</div>
     <div class="row">
		<div class="span12">
			 <h2 class="align"><?=lang('indelague.productFilter')?></h2>
              <!-- <form action="<?php echo site_url('products/search_result'); ?>" method="POST" class="forms-dropdowns">
                <div id="dc" class="wrapper-dropdown-4"><?=lang('indelague.applications')?>
                    <ul class="dropdown">
                       <?php foreach ($applications as $applications_item): ?>
                           <li><input type="checkbox" class="styled" id="<?=$applications_item['name_'.$this->lang->lang()] ?>" name="app_<?=$applications_item['application_id'] ?>" value="app"><label for="<?=$applications_item['name_'.$this->lang->lang()] ?>"><?=$applications_item['name_'.$this->lang->lang()] ?></label></li>
                       <?php endforeach ?>
                    </ul>
                </div>
                <div id="dd" class="wrapper-dropdown-4"><?=lang('indelague.mountingType')?>
                    <ul class="dropdown">
                         <?php foreach ($type_mounting as $type_mounting_item): ?>
                          <li><input type="checkbox" class="styled" id="<?=$type_mounting_item['name_'.$this->lang->lang()] ?>" name="tm_<?=$type_mounting_item['type_mounting_id'] ?>" value="tm"><label for="<?=$type_mounting_item['name_'.$this->lang->lang()] ?>"><?=$type_mounting_item['name_'.$this->lang->lang()] ?></label></li>                           
                        <?php endforeach ?>
                    </ul>
                </div>
                <input type="submit" class="submit" value="Show Results" />
              </form> -->

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
            <span style="display:none" id="current-lang"><?=$this->lang->lang()  ?></span>
       </form>
		</div>
	</div>
      <div class="row">
		<div class="span12">
			<div class="entry search_result">
				<h1 class="align"><?=lang('indelague.search_results')?></h1>
               <?php if ($type_search == "main"){ ?>
                 <?php if ($products){
                    $i = 0;
                  ?>
                    <?php foreach ($products as $product): $i++; ?>
                     <!--  <?php
                      $name = url_amigavel($product['name']);
                      $title = ($title == lang('indelague.search_results'))?$product['cat_name']:$title ; 
                      ?>
                      <a href="<?=base_url('index.php/'.$this->lang->lang().'/products/'.$tipo_cat.'/'.$title.'/'.$product['product_id'].'-'.$name)?>">
                        <div class="products-list num_<?php echo $i; ?>">
                          <img src="<?php echo base_url() ?>assets/uploads/products/<?=file_core_name($product['photo_lista']) ?>.<?=file_extension($product['photo_lista']) ?>"/>
                          <p><?=$product['name'] ?></p>
                        </div>
                      </a> -->
                  
                    <?php endforeach ?>
                 <?php }else{ ?>
                      <div class="sem-resultados">
                        <p><?=lang('indelague.search_without_results')?></p>
                      </div>
                 <?php } ?>
               <?php }elseif ($type_search == "top") { ?>
                 <!--  product
                  case_studies
                  news -->
                  <input type="hidden" id="top_search" / > 
                  <?php if (count($products)>0) {  $i = 0; ?>
                    <h2 class="search_type align"><?=lang('indelague.products')?></h2>
                    <?php foreach ($products as $product) {  
                      if ($product["cat_industrial_id"] != "0") {
                        $tipo_cat = "industrial";
                        $cat_name = $product['name1'];
                      }else{
                        $tipo_cat = "architectural";
                        $cat_name = $product['name2'];
                      }
                      $name = url_amigavel($product['name']);
                      $title = ($title == lang('indelague.search_results'))?$tipo_cat:$title ; 
                      ?>
                      <a href="<?=base_url('index.php/'.$this->lang->lang().'/products/'.$tipo_cat.'/'.$cat_name.'/'.$product['product_id'].'-'.$name)?>">
                        <div class="products-list num_<?php echo $i; ?>">
                          <img src="<?php echo base_url() ?>assets/uploads/products/<?=file_core_name($product['photo_lista']) ?>.<?=file_extension($product['photo_lista']) ?>"/>
                          <p><?=$product['name'] ?></p>
                        </div>
                      </a>
                   <?php } ?>
                  <?php } ?>
                  <?php if (count($case_studies)>0 && $case_studies ) {  ?>
                      <h2 class="align"><?=lang('indelague.case-studies')?></h2>
                  <?  // exit(var_dump($case_studies));
                     foreach($case_studies as $data) {
                            $strippedContent = strip_tags($data->conteudo);
                            $imageSrc = 'assets/uploads/casestudies/'.$data->url;
                      ?>
                      <div class="caseStudie row-fluid">
                        <div class="span5">

                            <?php if (!is_null($data->url) ) { ?>
                              <a href="<?php echo site_url('company/case_study') ?>/<?php echo $data->id; ?>-<?php echo url_amigavel($data->nome); ?>"><img  src="<?php echo base_url(); echo thumb($imageSrc,'280','140'); ?>" alt="<?php echo $data->nome; ?>" /></a>
                            <?php } ?>
                              
                        </div>
                        <div class="span7">
                          <a href="<?php echo site_url('company/case_study') ?>/<?php echo $data->id; ?>-<?php echo url_amigavel($data->nome); ?>"><h2><?php echo $data->nome; ?></h2></a>
                          <p><?php echo word_limiter($strippedContent,10); ?></p>
                          <a href="<?php echo site_url('company/case_study') ?>/<?php echo $data->id; ?>-<?php echo url_amigavel($data->nome); ?>" class="caseStudie_Link"><?php echo lang('indelague.moreInfo') ?></a>
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                  <?php } ?>
                  <?php if (count($news)>0 && $news ) { ?>
                      <h2 class="search_type"><?=lang('indelague.news')?></h2>
                     <?php
                          $this->load->helper('text');
                          $currentLang = $this->lang->lang();
                          $name = 'name_'.$currentLang;
                          $content = 'text_'.$currentLang;
                          foreach($news as $data) {
                            $imageSrc = 'assets/uploads/news/'.$data->foto_url;
                        ?>
                        <div class="row-fluid caseStudie">
                          <div class="span3">
                            <a href="<?php echo site_url('whatsnew/index') ?>/<?php echo $data->news_id; ?>-<?php echo url_amigavel($data->name_en); ?>"><img src="<?php echo base_url(); echo thumb($imageSrc,'220','140'); ?>" alt="<?php echo $data->$name; ?>" /></a>
                          </div>
                          <div class="span9">
                            <a href="<?php echo site_url('whatsnew/index') ?>/<?php echo $data->news_id; ?>-<?php echo url_amigavel($data->name_en); ?>"><h2><?php echo $data->date; ?> - <?php echo $data->$name; ?></h2></a>
                            
                            <?php echo word_limiter($data->$content,40);; ?>
                            <a href="<?php echo site_url('whatsnew/index') ?>/<?php echo $data->news_id; ?>-<?php echo url_amigavel($data->name_en); ?>" class="caseStudie_Link"><?php echo lang('indelague.moreInfo') ?></a>
                          </div>
                        </div>
                      <?php
                      }
                      ?>
                  <?php } ?>
                  <?php if (count($products)< 1 && count($case_studies)< 1 && count($news)< 1) { ?> 
                    <div class="sem-resultados">
                        <p><?=lang('indelague.search_without_results')?></p>
                    </div>
                 <?php } ?>
               <?php } ?>
                    
                
            </div>
            <!--  <p id="more" de=""  ><i></i> </p> -->
             <div id="hidden_values">
              
                 <?php 
                    foreach ($_POST as $key => $value) { ?> 
                      <input type="hidden" name="<?php echo $key;  ?>" value="<?php echo $value; ?>" >

                  <?php } ?>
             </div>

             <input type="hidden" name="" id="control-ajax-products-button" value="<?=lang('indelague.show_more_products')?>" >                  
             <input type="hidden" name="" id="control-ajax-products-button-status" value="<?=lang('indelague.show_more_products_status')?>" >                  

  
		</div>
      </div><!-- /.row -->
    
    </div><!-- /.container -->