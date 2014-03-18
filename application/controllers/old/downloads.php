 <div class="container body-left">
      <div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?=anchor('home', lang('indelague.home'))?> <span class="divider">»</span></li>
				<li class="active"><?=lang('indelague.downloads')?></li>
			</ul>
		</div>
	</div>
    <div class="container marketing">
      <div class="row">
		<div class="span9">
			<div class="entry">
				<h1><?=lang('indelague.downloads')?></h1>
                 <div class="accordion" id="accordion">
                
                     <?php $i = 0; $num = 1; ?>
                     
                    <?php foreach ($downloads2 as $download_item): ?>
					<?php
						if ($i == 1) {
							$download_item["content"] = array_reverse($download_item["content"]);
						}
						$i++;
					 ?>
                    <?php if ($num == 5){  ?>
                        <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php  echo  $num;  ?>">
                               <?=lang('indelague.downloads.certificates') ?> 

                            </a>
                        </div>
                        <div id="collapse<?php echo $num; ?>" class="accordion-body collapse ">
                            <?php $num++; ?>
                            <div class="accordion-inner">
                                
                       <div class="row-fluid">
                        
                        <div class="span6">

                        <h1><?php echo $tipo_certif_declar[6]['name_'.$this->lang->lang()] ?></h1>
                        <?php foreach ($blocos_certif as $bc): ?>
                        <?php if (isset($downloads_certif["certif"])): ?>
                               <?php foreach ($downloads_certif["certif"] as $key =>  $bloco) { ?>
                                    <?php if ($bc["id"] == $key){ ?>
                                    
                                        <h5><?php echo $bc['name_'.$this->lang->lang()]; ?></h5>
                                        <?php foreach ($bloco["content"] as  $ct) { 
                                                $file = "assets/uploads/downloads/".$ct['attach_url_'.$this->lang->lang()];
                                                $ext = pathinfo($file, PATHINFO_EXTENSION);
                                                $file_size = filesize($file);
                                                $base = log($file_size) / log(1024);
                                                $suffixes = array('', ' kb', ' mb', ' G', ' T');   
                                                $size = round(pow(1024, $base - floor($base)), 2) . $suffixes[floor($base)];
                                                $available = (!$ct['attach_url_'.$this->lang->lang()])?", ".lang('indelague.declar-certif-nao-disponivel'):"";
                                            ?>
                                                <div class="block <?php echo $this->lang->lang(); ?>"><a target="_blank" href="<?=base_url()?>assets/uploads/downloads/<?=$ct['attach_url_'.$this->lang->lang()]?>"><?php echo $ct["name"]; ?> (<?php echo strtoupper($ext); ?> Format <?php echo $size; echo $available?>)</a> - <?php echo $ct["certificados"]; ?></div>
                                        <? } ?>
                                   
                                    <?php } ?>
                                <? } ?>
                                   
                            <?php endif ?>
                            
                         <?php endforeach ?> 
                        </div>

                        
                        <div class="span6">
                        <h1><?php echo $tipo_certif_declar[7]['name_'.$this->lang->lang()] ?></h1>
                        <?php foreach ($blocos_certif as $bc): ?>
                         <?php if (isset($downloads_certif["declar"]) ): ?>
                               <?php foreach ($downloads_certif["declar"] as $key =>  $bloco) { ?>
                                    <?php if ($bc["id"] == $key){ ?>
                                     <h5><?php echo $bc['name_'.$this->lang->lang()]; ?></h5>
                                        <?php foreach ($bloco["content"] as  $ct) { 
                                                $file = "assets/uploads/downloads/".$ct['attach_url_'.$this->lang->lang()];
                                                $ext = @pathinfo($file, PATHINFO_EXTENSION);
                                                $file_size = @filesize($file);
                                                $base = @log($file_size) / log(1024);
                                                $suffixes = array('', ' kb', ' mb', ' G', ' T');   
                                                $size = @round(@pow(1024, @$base - @floor(@$base)), 2) . @$suffixes[@floor(@$base)];
                                                $available = (!$ct['attach_url_'.$this->lang->lang()])?", ".lang('indelague.declar-certif-nao-disponivel'):"";
                                            ?>
                                                <div class="block"><a target="_blank" href="<?=base_url()?>assets/uploads/downloads/<?=$ct['attach_url_'.$this->lang->lang()]?>">
                                                    <?php echo $ct["name"]; ?> (<?php echo strtoupper($ext); ?> Format <?php echo $size; echo $available; ?>)</a> - <?php echo $ct["certificados"]; ?>
                                                </div>
                                        <? } ?>
                                    
                                    <?php } ?>
                                <? } ?>
                                   
                            <?php endif ?>
                            
                         <?php endforeach ?>


                        </div>
                        </div> 
                            </div>
                        </div>
                    </div>  
                    <?php } ?> 
                    
                     
                      <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?=$num?>">
                                <?=$download_item['name_'.$this->lang->lang()]?>
                            </a>
                        </div>
                        <div id="collapse<?=$num?>" class="accordion-body collapse <?php if($num == 1) echo' in';?>">
                            <div class="accordion-inner">
                                <?php foreach ($download_item['content'] as $download_content): ?>

                                <?php 
                                    $site = explode(",", $download_content['site']);

                                if ($download_content['type_id'] == 2 && in_array("1", $site)) $show = true; ?>

                                    
                                <?php if($download_content['type_id'] != 2 || isset($show)){
                                        if ($download_content['attach_url_'.$this->lang->lang()]) {
                                            
                                 ?>
                                    <div class="item_download"><img src="<?php echo base_url() ?>assets/uploads/downloads/<?=$download_content['foto_url_'.$this->lang->lang()]?>"/><h2><?=$download_content['name_'.$this->lang->lang()]?></h2>
                                    
                                    <?php 
                                        if ($download_content['attach_url_'.$this->lang->lang()]) {
                                            $file = "assets/uploads/downloads/".$download_content['attach_url_'.$this->lang->lang()];
                                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                                            $file_size = filesize($file);
                                            $base = log($file_size) / log(1024);
                                            $suffixes = array('', ' kb', ' mb', ' G', ' T');   
                                            $size = round(pow(1024, $base - floor($base)), 2) . $suffixes[floor($base)];
                                        ?>
    
                                    <?php } ?>  
                                     


                                    <p><?php echo strtoupper($ext); ?> Format <?php echo $size; ?></p>
                                    <a download="<?php echo $download_content['attach_url_'.$this->lang->lang()]; ?>" href="<?php echo base_url() ?>assets/uploads/downloads/<?=$download_content['attach_url_'.$this->lang->lang()]?>">DOWNLOAD</a>
                                    <?php 
                                        // $file_url = base_url().'assets/uploads/downloads/'.$download_content['attach_url'];
                                        // echo get_file_info($file_url, 'size');
                                    ?>
                                    </div>
                                 <?php }} ?>   
                        
                                <?php endforeach ?> 
                            </div>
                        </div>
                    </div>
                          
                    <?php $num ++; ?>  
                    <?php endforeach ?>
                    
               <!--     
                    <?php function certif_declar($this){ ?>
                    
               <?php  }   ?>            --> 
                </div>
            </div>
		</div>
		<div class="span3">
            <h2><?php echo lang('indelague.staytunedTitle') ?></h2>
            <?php echo lang('indelague.staytunedText') ?>
            <h2><?php echo lang('indelague.questionsTitle') ?></h2>
            <?php echo lang('indelague.questionsText') ?>
        </div><!-- /.span3 -->
      </div><!-- /.row -->
    </div> <!-- /.marketing -->
    </div><!-- /.container -->
    