 <div class="container body-left">
      <div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?=anchor('home', lang('indelague.home'))?> <span class="divider">»</span></li>
				<li><?=anchor('company', lang('indelague.company'))?> <span class="divider">»</span></li>
				<li class="active">Who we are</li>
			</ul>
		</div>
	</div>
      <div class="row">
		<div class="span9">
			<div class="entry">
				<h1>Who We Are</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rutrum adipiscing posuere. Nulla facilisi. Ut vel dolor lorem. Sed eleifend nibh id lacus facilisis vehicula. Nulla leo purus, vulputate a tincidunt eu, dignissim at est. Etiam bibendum enim et nisi adipiscing interdum. Etiam in erat nec neque rhoncus consequat id in arcu. </p>
				<p>Aenean consectetur, ipsum eu lobortis volutpat, metus mi elementum tortor, a blandit lacus lorem nec dui. Aliquam ut dolor mollis mi semper faucibus ac id tellus. Aenean fringilla dolor ac lacus elementum pellentesque. Aenean ac nibh porttitor massa rutrum condimentum sit amet sed velit. </p>
				<img class="alignleft" data-src="holder.js/309x203">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rutrum adipiscing posuere. Nulla facilisi. Ut vel dolor lorem. Sed eleifend nibh id lacus facilisis vehicula. Nulla leo purus, vulputate a tincidunt eu, dignissim at est. Etiam bibendum enim et nisi adipiscing interdum. Etiam in erat nec neque rhoncus consequat id in arcu. </p>
				<p><strong>Etiam in erat nec neque rhoncus consequat id in arcu. </strong></p>
				<p>Aenean consectetur, ipsum eu lobortis volutpat, metus mi elementum tortor, a blandit lacus lorem nec dui. Aliquam ut dolor mollis mi semper faucibus ac id tellus. Aenean fringilla dolor ac lacus elementum pellentesque. Aenean ac nibh porttitor massa rutrum condimentum sit amet sed velit. </p>
			</div>
		</div>
		<div class="span3">
		  <div class="sidebar-nav">
			<h2><?=lang('indelague.company')?></h2>
            <ul class="nav nav-list">
              	<li class="active"><?=anchor('company/who_we_are', lang('indelague.who-we-are'))?></li>
			 	<li><?=anchor('company/how_we_do_it', lang('indelague.How-we-do-it'))?></li>
				<li><?=anchor('company/environment', lang('indelague.environment'))?></li>
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