  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide carousel-edit">
      <?php
        $number = 0;
        if($products->novo != 0 || $products->garantia != 0):
      ?>
      <ol class="carousel-product-icon">
        <?php if($products->novo == 1): ?>
        <li class="new">NEW</li>
        <?php endif; ?>
        <?php if($products->garantia == 1): ?>
        <li class="warranty"><span>5 Years Warranty</span></li>
        <?php endif; ?>
      </ol>
    <?php endif; ?>
    <div class="container">
	<ol class="carousel-indicators visible-desktop">
    <?php
      if($products->photo1 != ''){
    ?> 
		<li data-target="#myCarousel" data-slide-to="<?=$number++; ?>" class="active"><!--<img src="<?php echo base_url(); echo thumb('assets/uploads/products/'.$products->photo1,'67','67'); ?>" />--></li>
    <?php }
      if($products->photo2 != ''){?>
		<li data-target="#myCarousel" data-slide-to="<?=$number++; ?>"><!--<img src="<?php echo base_url(); echo thumb('assets/uploads/products/'.$products->photo2,'67','67'); ?>" />--></li>
    <?php }
      if($products->photo3 != ''){?>
		<li data-target="#myCarousel" data-slide-to="<?=$number++; ?>"><!--<img src="<?php echo base_url(); echo thumb('assets/uploads/products/'.$products->photo3,'67','67'); ?>" />--></li>
    <?php }
      if($products->photo_aplicacao_1 != ''){?>
		<li data-target="#myCarousel" data-slide-to="<?=$number++; ?>"><!--<img src="<?php echo base_url(); echo thumb('assets/uploads/products/'.$products->photo_aplicacao_1,'67','67'); ?>" />--></li>
    <?php }
      if($products->photo_aplicacao_2 != ''){?>
		<li data-target="#myCarousel" data-slide-to="<?=$number++; ?>"><!--<img src="<?php echo base_url(); echo thumb('assets/uploads/products/'.$products->photo_aplicacao_2,'67','67'); ?>" />--></li>
    <?php } ?>
	</ol>
	</div>
      <div class="carousel-inner">
        <?php
          if($products->photo1 != ''){
        ?>
        <div class="item active">
          <img src="<?=base_url() ?>assets/uploads/products/<?=$products->photo1?>"/>
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
            </div>
          </div>
        </div>
        <?php }
          if($products->photo2 != ''){?>
        <div class="item">
          <img src="<?=base_url() ?>assets/uploads/products/<?=$products->photo2?>"/>
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
            </div>
          </div>
        </div>
        <?php }
          if($products->photo3 != ''){?>
        <div class="item">
          <img src="<?=base_url() ?>assets/uploads/products/<?=$products->photo3?>"/>
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
            </div>
          </div>
        </div>
        <?php }
          if($products->photo_aplicacao_1 != ''){?>
         <div class="item">
          <img src="<?=base_url() ?>assets/uploads/products/<?=$products->photo_aplicacao_1?>"/>
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
            </div>
          </div>
        </div>
        <?php }
          if($products->photo_aplicacao_2 != ''){?>
         <div class="item">
          <img src="<?=base_url() ?>assets/uploads/products/<?=$products->photo_aplicacao_2?>"/>
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
            </div>
          </div>
        </div>
        <?php }?>
      </div>
    </div><!-- /.carousel -->