  <!-- Carousel
    ================================================== 

        <li data-target="#myCarousel" data-slide-to="<?php //echo $i; ?>" class="<?php //echo $active; ?>"><img src="<?php //echo base_url() ?>assets/uploads/products/<?php //echo $src_img; ?>" /><?php //echo $thumbs[$i]['photo1']; ?></li>
      -->
    <div id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators visible-desktop">
    <?php for($i=0;$i<count($thumbs);$i++){
        $active = ($i==0)?'active':'';
        $imageSrc = 'assets/uploads/products/'.$thumbs[$i]['photo1'];
        $split = pathinfo( $thumbs[$i]['photo1']);
        $src_img = $split['filename'] . "-67x67." . $split['extension'];
     ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>"><img src="<?php echo base_url(); echo thumb($imageSrc,'67','67'); ?>" /></li>
    <?php } ?>
	</ol>
      <div class="carousel-inner">
        <?php 
          for($i=0;$i<count($thumbs);$i++){ 
            $active = ($i==0)?'active':'';
            // $thumbs[$i]['name_en'] = str_replace('%20',' ',$thumbs[$i]['name_en']);
            // $thumbs[$i]['name_en'] = str_replace('%C3%A1','á',$thumbs[$i]['name_en']);
            // $thumbs[$i]['name_en'] = str_replace('%C3%AD','í',$thumbs[$i]['name_en']);
            // $thumbs[$i]['name_en'] = str_replace('%C3%A9','é',$thumbs[$i]['name_en']);
        ?>
           <div class="item <?php echo $active; ?>" style="background-image:url(<?php echo base_url() ?>assets/uploads/products/<?php echo $thumbs[$i]['photo1'] ?>);">
           	<?php if ($thumbs[$i]['cat_industrial_id'] != 0) { ?>
            		<a href="<?=base_url().$this->lang->lang();?>/products/industrial/<?php echo $thumbs[$i]['name1'];?>/<?php echo $thumbs[$i]['product_id'];?>-<?php echo $thumbs[$i]['name'];?>">
             <?php } else if($thumbs[$i]['cat_arquitect_id'] != 0) { ?>
             		<a href="<?=base_url().$this->lang->lang();?>/products/architectural/<?php echo $thumbs[$i]['name2'];?>/<?php echo $thumbs[$i]['product_id'];?>-<?php echo $thumbs[$i]['name'];?>">
             <?php } else { ?>
               		<a href="#">
               <?php } ?>
              <!--<img src="<?php echo base_url() ?>assets/uploads/products/<?php echo $thumbs[$i]['photo1'] ?>" alt="">-->
              <div class="container visible-desktop">
                <div class="carousel-caption">
                  <h1><?php echo $thumbs[$i]['name'];?></h1>
                </div>
              </div>
               </a> 
            </div>
         <?php } ?>
        
        
      </div>
    </div><!-- /.carousel -->