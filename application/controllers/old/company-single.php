 <div class="container body-left">
      <div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?=anchor('home', lang('indelague.home'))?> <span class="divider">»</span></li>
				<li><?=anchor('company', lang('indelague.company'))?> <span class="divider">»</span></li>
				<li class="active"><?php echo $gest_page['title_'.$this->lang->lang()]; ?></li>
			</ul>
		</div>
	</div>
      <div class="row">
		<div class="span9">
			<div class="entry">
				<h1><?php echo $gest_page['title_'.$this->lang->lang()]; ?></h1>
				<?php echo $gest_page['content_'.$this->lang->lang()]; ?>
			</div>
		</div>
		<div class="span3">
		  <div class="sidebar-nav">
			<h2><?=lang('indelague.company')?></h2>
            <ul class="nav nav-list">
            	<?php
        		if($gest_page['id'] == '1'){
        			?>
          			<li class="active"><?=anchor('company/who_we_are', lang('indelague.who-we-are'))?></li>
          			<?php
          		}
          		else{
          			?>
          			<li><?=anchor('company/who_we_are', lang('indelague.who-we-are'))?></li>
          		<?php
          			}
        		if($gest_page['id'] == '2'){
        			?>
          			<li class="active"><?=anchor('company/how_we_do_it', lang('indelague.How-we-do-it'))?></li>
          		<?php
          			}
          		else{
          			?>
          			<li><?=anchor('company/how_we_do_it', lang('indelague.How-we-do-it'))?></li>
          		<?php
          			}
        		if($gest_page['id'] == '3'){
        			?>
          			<li class="active"><?=anchor('company/certification', lang('indelague.certification'))?></li>
          		<?php
          			}
          		else{
          			?>
          			<li><?=anchor('company/certification', lang('indelague.certification'))?></li>
          		<?php
          		}
          		?>
				<li><?=anchor('company/case_studies', lang('indelague.case-studies'))?></li>
            </ul>
			<h2><?php echo lang('indelague.staytunedTitle') ?></h2>
			<?php echo lang('indelague.staytunedText') ?>
			<h2><?php echo lang('indelague.questionsTitle') ?></h2>
			<?php echo lang('indelague.questionsText') ?>
          </div>
		</div>
      </div><!-- /.row -->
    
    </div><!-- /.container -->

