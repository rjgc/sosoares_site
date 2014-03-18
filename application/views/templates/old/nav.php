    <!-- NAVBAR
    ================================================== -->
    <!-- Modal -->
    <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel"><?=lang('indelague.alert_application_header')?></h3>
      </div>
      <div class="modal-body">
      <p></p>
      </div>
    </div>
    <div class="navbar-wrapper mast-head">

      

      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">
		<div class="row-fluid">
			<div class="span3">
				<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url() ?>assets/indelague/img/logo.png" /></a>
			</div>
			<div class="span3 offset6 visible-desktop">
				<div class="row">
					<div class="span6 center roxo-logo">
						<a href="http://www.roxolighting.com/"><img src="<?php echo base_url() ?>assets/indelague/img/roxo.png" /></a>
					</div>
					<div class="span6 center iea-logo">
						<img src="<?php echo base_url() ?>assets/indelague/img/logo-small.png" />
					</div>
				</div>
			</div>
		</div>
        <div class="navbar">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                  
                  
                <li <?php echo ( isset($current) && $current === 'home' ) ? 'class="active"' : ''?>><?=anchor('home', lang('indelague.home'))?></a></li>
                <li  class="hidden-desktop<?php echo ( isset($current) && $current === 'company' ) ? ' active' : ''?>"><?=anchor('company', lang('indelague.company'))?></a></li>
                <li  class="visible-desktop dropdown <?php echo ( isset($current) && $current === 'company' ) ? ' active' : ''?>"><a href="#<?=lang('indelague.company')?>" class="dropdown-toggle" data-toggle="dropdown"><?=lang('indelague.company')?></a>
                    <ul class="dropdown-menu">
          						<li><?=anchor('company/who_we_are', lang('indelague.who-we-are'))?></li>
          						<li><?=anchor('company/how_we_do_it', lang('indelague.How-we-do-it'))?></li>
          						<li><?=anchor('company/certification', lang('indelague.certification'))?></li>
          						<li><?=anchor('company/case_studies', lang('indelague.case-studies'))?></li>
          					</ul>
                </li>
                <li class="hidden-desktop<?php echo ( isset($current) && $current === 'products' ) ? ' active' : ''?>"><?=anchor('products', lang('indelague.products'))?></a></li>
                <li class="dropdown visible-desktop<?php echo ( isset($current) && $current === 'products' ) ? ' active' : ''?>"><a href="#products" class="dropdown-toggle" data-toggle="dropdown"><?=lang('indelague.products')?></a>
                    <div class="dropdown-menu products-submenu">
                		<div class="industrial">
                			<h3><?=lang('indelague.industrial')?></h3>
                			<ul>
                        <?php foreach ($cat_industrial as $categorys_item): ?>
                           				<li>
                           					<a href="<?=base_url().$this->lang->lang();?>/products/industrial/<?php echo $categorys_item['name_en'];?>/">
                           						<img src="<?php echo base_url();?>assets/uploads/categorys/<?php echo $categorys_item['foto_url'];?>" alt="<?php echo $categorys_item['name_'.$this->lang->lang()]; ?>" />
                           						<span class="cat-name"><?php echo $categorys_item['name_'.$this->lang->lang()]; ?></span>
                           					</a>
                           				</li>
			             <?php endforeach ?>
                			</ul>
                		</div>

                		<div class="arquitectural">
                			<h3><?=lang('indelague.arquitectural')?></h3>
                			<div class="interior">
                			<h4>Interior</h4>
                			<ul>
			             <?php foreach ($cat_arquitectural as $categorys_item): ?>
                            <?php
                            
	                           if ($categorys_item['local'] == '1'){
	                            	?>
                           				<li>
                           					<a href="<?php echo base_url().$this->lang->lang();?>/products/architectural/<?php echo $categorys_item['name_en'];?>/">
                           						<img src="<?php echo base_url();?>assets/uploads/categorys/<?php echo $categorys_item['foto_url'];?>" alt="<?php echo $categorys_item['name_'.$this->lang->lang()]; ?>" />
                           						<span class="cat-name"><?php echo $categorys_item['name_'.$this->lang->lang()]; ?></span>
                           					</a>
                           				</li>
	                            	<?php
	                        	}
                        	?>
			             <?php endforeach ?>
                			</ul>
                			</div>
                			<div class="exterior">
                			<h4>Exterior</h4>
                			<ul>
			             <?php foreach ($cat_arquitectural as $categorys_item): ?>
                            <?php
	                           if ($categorys_item['local'] == '2'){
	                            	?>
                           				<li>
                           					<a href="<?php echo base_url().$this->lang->lang();?>/products/architectural/<?php echo $categorys_item['name_en'];?>/">
                           						<img src="<?php echo base_url();?>assets/uploads/categorys/<?php echo $categorys_item['foto_url'];?>" alt="<?php echo $categorys_item['name_'.$this->lang->lang()]; ?>" />
                           						<span class="cat-name"><?php echo $categorys_item['name_'.$this->lang->lang()]; ?></span>
                           					</a>
                           				</li>
	                            	<?php
	                        	}
                        	?>
			             <?php endforeach ?>
                			</ul>
                			</div>
                		</div>
					</div>
				</li>
                <li <?php echo ( isset($current) && $current === 'whatsnew' ) ? 'class="active"' : ''?>><?=anchor('whatsnew', lang('indelague.whatsnews'))?></li>
                <li <?php echo ( isset($current) && $current === 'downloads' ) ? 'class="active"' : ''?>><?=anchor('downloads', lang('indelague.downloads'))?></li>
                <li <?php echo ( isset($current) && $current === 'contacts' ) ? 'class="active"' : ''?>><?=anchor('contacts', lang('indelague.contacts'))?></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> -->
              </ul>
			<div class="navbar-form pull-right">
				<div class="span2">
				<form action="<?php echo base_url($this->lang->lang().'/products/search_result'); ?>" method="post"> 
					       <input type="text" class="search-field" value="<?=lang('indelague.search')?>" onfocus="if(this.value == '<?=lang('indelague.search')?>') { this.value = ''; }" onblur="if(this.value == '') { this.value = '<?=lang('indelague.search')?>'; }" name="top_search" autocomplete="off" />
                 <input type="submit" value="" />
                </form>
          <input type="hidden" name=""  id="alert_search_select" value="<?=lang('indelague.alert_search_select')?>">
				</div>
				<div class="span1 visible-desktop">
					<ul>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->lang();?> <b class="caret"></b></a>
						  <ul class="dropdown-menu">
							<li><?=anchor($this->lang->switch_uri('pt'), 'PT')?></li>
              				<li><?=anchor($this->lang->switch_uri('en'), 'EN')?></li>
              				<li><?=anchor($this->lang->switch_uri('fr'), 'FR')?></li>
              				<!-- <li><?=anchor($this->lang->switch_uri('de'), 'DE')?></li> -->
						  </ul>
						</li>
					</ul>
				</div>
			</div>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->