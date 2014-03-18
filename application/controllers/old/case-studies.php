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
				<li><?=anchor('company', lang('indelague.company'))?> <span class="divider">»</span></li>
				<li class="active"><?php echo lang('indelague.case-studies') ?></li>
			</ul>
		</div>
	</div>
      <div class="row">
		<div class="span9">
			<div class="entry row-fluid">
				<h1 class="pull-left"><?php echo lang('indelague.case-studies') ?></h1>
				<div class="pull-right caseStudiesNav">
					<?php echo $links; ?>
				</div>
			</div>
			<?php $this->load->helper('text'); ?>
            <?php
			foreach($results as $data) {
				$conteudo = "conteudo_".$this->lang->lang();
				$strippedContent = strip_tags($data->$conteudo);
            	$imageSrc = 'assets/uploads/casestudies/'.$data->url;
            	$nome = "nome_".$this->lang->lang();
				?>
				<div class="caseStudie row-fluid">
					<div class="span5">

							<?php if (!is_null($data->url) ) { ?>
								<a href="<?php echo site_url('company/case_study') ?>/<?php echo $data->id; ?>-<?php echo url_amigavel($data->$nome); ?>"><img  src="<?php echo base_url(); echo thumb($imageSrc,'260','140'); ?>" alt="<?php echo $data->$nome; ?>" /></a>
							<?php } ?>
								
					</div>
					<div class="span7">
						<a href="<?php echo site_url('company/case_study') ?>/<?php echo $data->id; ?>-<?php echo url_amigavel($data->$nome); ?>"><h2><?php echo $data->$nome; ?></h2></a>
						<p><?php echo word_limiter($strippedContent,10); ?></p>
						<a href="<?php echo site_url('company/case_study') ?>/<?php echo $data->id; ?>-<?php echo url_amigavel($data->$nome); ?>" class="caseStudie_Link"><?php echo lang('indelague.moreInfo') ?></a>
					</div>
				</div>
			<?php
			}
			?>
			<div class="entry row-fluid">
				<div class="pull-right caseStudiesNav">
					<?php echo $links; ?>
				</div>
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
    
    </div><!-- /.container -->

 <?php newsletter(); ?>