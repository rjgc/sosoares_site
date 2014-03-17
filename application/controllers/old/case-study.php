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
				<li><?=anchor('company', lang('indelague.company'))?> <span class="divider">»</span></li>
				<li class="active"><?php echo lang('indelague.case-studies') ?></li>
			</ul>
		</div>
	</div>
      <div class="row">
		<div class="span9">
			<div class="entry row-fluid">
				<h1><?php echo $info["nome_".$this->lang->lang()]; ?></h1>
				<?php 
					if(count($galeria) < '1'){
						echo '';
					}			
					else{	
				?>
				<div id="case_study" class="carousel slide">
					    <!-- Carousel items -->
					    <div class="carousel-inner">
					     <?php 
					    	foreach ($galeria as  $imagem) { ?>
					    	<?php if ($imagem == reset($galeria)){ ?>
					    		 <div class="active item">
									<?php echo '<img src="'.base_url().'/assets/uploads/casestudies/'.$imagem['url'].'" />'; ?>
									<?php //echo '<img src="'.base_url() . thumb("assets/uploads/casestudies/" . $imagem['url'],'67','67').'" />'; ?>
					    		</div>
					    	<?php }else{ ?>
								<div class="item">
									<?php echo '<img src="'.base_url().'/assets/uploads/casestudies/'.$imagem['url'].'" />'; ?>
									<?php //echo '<img src="'.base_url() . thumb("assets/uploads/casestudies/" . $imagem['url'],'67','67').'" />'; ?>
					    		</div>					    		
					    	<?php } 
					    } ?>
					
					    
					    </div>
					    <a class="carousel-control left" href="#case_study" data-slide="prev">&lsaquo;</a>
					    <a class="carousel-control right" href="#case_study" data-slide="next">&rsaquo;</a>
					    <ol class="carousel-indicators">
					    <?php 
					    	error_reporting(E_ALL ^ E_NOTICE);
					    	$index = 0;
					    	foreach ($galeria as  $imagem) { ?>
					    	<?php if ($imagem == reset($galeria)){ ?>
					    		 <li data-target="#case_study" data-slide-to="<?php echo $index;?>" class="active">
							    	<?php// echo '<img src="'.base_url().'/assets/uploads/casestudies/'.$imagem['url'].'" />'; ?>
							    	<?php echo '<img alt="'.$imagem['url'].'" src="'.base_url() . @thumb("assets/uploads/casestudies/" . trim($imagem['url']),'67','67').'" />'; ?>
							    </li>
					    	<?php }else{ ?>
					    		 <li data-target="#case_study" data-slide-to="<?php echo $index;?>">
							    	<?php //echo '<img src="'.base_url().'/assets/uploads/casestudies/'.$imagem['url'].'" />'; ?>
							    	<?php echo '<img alt="'.$imagem['url'].'" src="'.base_url() . @thumb("assets/uploads/casestudies/" . trim($imagem['url']),'67','67').'" />'; ?>
							    </li>				    		
					    	<?php }
					    		$index++;
					    	} ?>
					   
		
					    </ol>
				    </div>
				    <?php } ?>
				    <br/>
				    <br/>
				    <br/>
				    <br/>
				<?php echo $info["conteudo_".$this->lang->lang()]; ?>
				
			</div>
		</div>
		<div class="span3">
		  <div class="sidebar-nav">
			<h2><?=lang('indelague.company')?></h2>
            <ul class="nav nav-list">
              	<li><?=anchor('company/who_we_are', lang('indelague.who-we-are'))?></li>
			 	<li><?=anchor('company/how_we_do_it', lang('indelague.How-we-do-it'))?></li>
				<li><?=anchor('company/certification', lang('indelague.certification'))?></li>
				<li class="active"><?=anchor('company/case_studies', lang('indelague.case-studies'))?></li>
            </ul>
			<h2><?php echo lang('indelague.staytunedTitle') ?></h2>
			<?php echo lang('indelague.staytunedText') ?>
			<h2><?php echo lang('indelague.questionsTitle') ?></h2>
			<?php echo lang('indelague.questionsText') ?>
          </div>
		</div>
      </div><!-- /.row -->

          <?php 
            if(isset($related)){
         ?>
         <div class="row related-products" id="slider-edit">
         	<div class="row-heading">
         		<h2><?php echo lang('indelague.relatedCase') ?></h2>
         	</div>
         	<div class="span12 related-slider" >
              <?php
         				foreach($related as $arr){
                   			$name = url_amigavel($arr['name']);
                   			if($arr['cat_industrial_id'] != 0){
                   				$tipo_cat = 'industrial';
                   			}
                   			else{$tipo_cat = 'architectural';}
         				?>
         				<div class="span2">
         					<a href="<?=base_url('index.php/'.$this->lang->lang().'/products/'.$tipo_cat.'/'.$arr['name_en'].'/'.$arr['product_id'].'-'.$name)?>" class="related_product_link">
         						<img src="<?=base_url()?>assets/uploads/products/<?=$arr['photo_lista']?>" alt="<?=$arr['name']?>" />
         						
         						<h5><?=$arr['name']?></h5>
         						<span class="category"><?=$arr['name_'.$this->lang->lang()] ?></span>
         					</a>
         				</div>
         				<?php
         				} ?>
         	</div>
         </div>
         <?php } ?>
    
    </div><!-- /.container -->

    <!-- Modal -->
<div id="subscribe" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo lang('indelague.modalHeader') ?></h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal">
	  <div class="control-group">
	    <label class="control-label" for="inputNome"><?php echo lang('indelague.name') ?></label>
	    <div class="controls">
	      <input type="text" id="inputNome" placeholder="<?php echo lang('indelague.name') ?>">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="inputEmail"><?php echo lang('indelague.email') ?></label>
	    <div class="controls">
	      <input type="text" id="inputEmail" placeholder="<?php echo lang('indelague.email') ?>">
	    </div>
	  </div>
	  <div class="control-group">
	    <div class="controls">
	      <button type="submit" class="btn"><?php echo lang('indelague.subscribe') ?></button>
	    </div>
	  </div>
	</form>
  </div>
</div>