<?php
function url_amigavel($string) { 
    $palavra = strtr($string, "ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ", "SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy");
    $palavranova = str_replace("_", " ", $palavra);
    $pattern = '|[^a-zA-Z0-9\-]|';    $palavranova = preg_replace($pattern, ' ', $palavranova);
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
				<li class="active"><?php echo lang('indelague.whatsnews'); ?></li>
			</ul>
		</div>
	</div>
      <div class="row">
		<div class="span12 fullWidthNews">
			<div class="entry row-fluid">
				<h1 class="pull-left"><?php echo lang('indelague.whatsnews') ?></h1>
				<div class="pull-right caseStudiesNav">
					<?php echo $links; ?>
				</div>
			</div>
            <?php
            $this->load->helper('text');
            $currentLang = $this->lang->lang();
            $name = 'name_'.$currentLang;
            $content = 'text_'.$currentLang;
            
			foreach($results as $data) {
				if ($currentLang == "pt")$img = $data->foto_url_pt;	
				if ($currentLang == "en")$img = $data->foto_url_en;	
				if ($currentLang == "fr")$img = $data->foto_url_fr;	
				if ($currentLang == "de")$img = $data->foto_url_de;	
            	
            	if (trim($img) != "") {
            		$imageSrc = 'assets/uploads/news/'. $img ;
            		$img = base_url() . $imageSrc; // thumb($imageSrc,'220','140'); 
            	}else{
            		$img = "";
            	}
            	
				?>
				<div class="row-fluid caseStudie">
					<div class="span3">
						<a href="<?php echo site_url('whatsnew/index') ?>/<?php echo $data->news_id; ?>-<?php echo url_amigavel($data->name_en); ?>"><img src="<?php echo $img ; ?>" alt="<?php echo $data->$name; ?>" /></a>
					</div>
					<div class="span9">
						<a href="<?php echo site_url('whatsnew/index') ?>/<?php echo $data->news_id; ?>-<?php echo url_amigavel($data->name_en); ?>"><h2><?php echo $data->date; ?> - <?php echo $data->$name; ?></h2></a>
						
						<?php echo word_limiter($data->$content,40);; ?>
						<a href="<?php echo site_url('whatsnew/index') ?>/<?php echo $data->news_id; ?>-<?php echo url_amigavel($data->name_en); ?>" class="caseStudie_Link"><?php echo lang('indelague.readmore') ?></a>
					</div>
				</div>
			<?php
			}
			?>
		</div>
      </div><!-- /.row -->
    
    </div><!-- /.container -->