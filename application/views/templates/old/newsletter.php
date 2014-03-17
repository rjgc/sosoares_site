<?php 
	function newsletter(){ ?>
		   <!-- Modal -->
			<div id="subscribe" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel"><?php echo lang('indelague.modalHeader') ?></h3>
			  </div>
			  <div class="modal-body">
			    <form class="form-horizontal form-newsletter">
				  <div class="control-group">
				    <label class="control-label"  for="inputNome"><?php echo lang('indelague.name') ?></label>
				    <div class="controls">
				      <input type="text" class="nome" id="inputNome" placeholder="<?php echo lang('indelague.name') ?>">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputEmail"><?php echo lang('indelague.email') ?></label>
				    <div class="controls">
				      <input type="text" class="email" id="inputEmail"  placeholder="<?php echo lang('indelague.email') ?>">
				    </div>
				  </div>
				  <div class="control-group">
				    <div class="controls">
				      <button type="submit" class="submit"><?php echo lang('indelague.subscribe') ?></button>
				    </div>
				  </div>
				</form>
			  </div>
			  <div id="newsletter-lang-javascript">
			  	<span id="newsletter-err_email"><?php echo lang('indelague.err_email'); ?></span>
			  	<span id="newsletter-err_empty"><?php echo lang('indelague.err_empty'); ?></span>
			  	<span id="newsletter-err_exists"><?php echo lang('indelague.err_exists'); ?></span>
			  	<span id="newsletter-success"><?php echo lang('indelague.err_success'); ?></span>
			  	<span id="newsletter-err_error"><?php echo lang('indelague.err_email'); ?></span>			  	
			  </div>
			</div>
	 

<?php } ?>