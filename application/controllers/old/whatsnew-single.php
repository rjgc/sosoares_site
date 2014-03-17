8<?php
    $currentLang = $this->lang->lang();
    $name = 'name_'.$currentLang;
    $content = 'text_'.$currentLang;
?>
<div class="container body-left">
      <div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?=anchor('home', lang('indelague.home'))?> <span class="divider">»</span></li>
				<li><?=anchor('whatsnew', lang('indelague.whatsnews'))?> <span class="divider">»</span></li>
				<li class="active"><?php echo $info[$name]; ?></li>
			</ul>
		</div>
	</div>
      <div class="row">
		<div class="span12 fullWidthNews">
			<div class="entry row-fluid caseStudie">
				<div class="span3">
					<?php 
						$currentLang = $this->lang->lang();
					 ?>
					<h2><?php echo $info[$name]; ?></h2>
					<img src="<?php echo base_url(); ?>assets/uploads/news/<?php echo $info['foto_url_'.$currentLang]; ?>" alt="<?php echo $info[$name]; ?>" />
				</div>
				<div class="span9">
					<?php echo $info[$content]; ?>
				</div>
			</div>
		</div>
      </div><!-- /.row -->    
    </div><!-- /.container -->