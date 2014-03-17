<?php  function get_sel_search($class = "",$applications, $type_mounting_indust , $type_mounting_ar,$this) {  ?>
	 <form id="search_form" action="<?php echo site_url('products/search_result'); ?>" method="POST" class="<?php echo $class;  ?>">
				<div id="dc" class="wrapper-dropdown-4"><?=lang('indelague.applications')?>
				<ul class="dropdown">

           <?php foreach ($applications as $applications_item): ?>
					   <li><input type="radio" class="styled" id="aplicacao_<?=$applications_item['name_'.$this->lang->lang()] ?>" name="app" value="app_<?=$applications_item['application_id'] ?>"><label for="aplicacao_<?=$applications_item['name_'.$this->lang->lang()] ?>"><?=$applications_item['name_'.$this->lang->lang()] ?></label></li>
				   <?php endforeach ?>
        </ul>
			</div>
			<div id="di" style="display:none" class="wrapper-dropdown-4"><?=lang('indelague.mountingType')?>
       
				<ul class="dropdown clone">
           <?php foreach ($type_mounting_indust as $type_mounting_item): ?>
					    <li style="z-index:7000"><input type="checkbox" class="styled" id="tmi_<?=$type_mounting_item['name_'.$this->lang->lang()] ?>" name="tm1_<?=$type_mounting_item['category_id'] ?>" value="tm"><label for="tmi_<?=$type_mounting_item['name_'.$this->lang->lang()] ?>"><?=$type_mounting_item['name_'.$this->lang->lang()] ?></label></li>
				    <?php endforeach ?>
				</ul>
        
			</div>
      <div id="da" style="display:none" class="wrapper-dropdown-4"><?=lang('indelague.mountingType')?>
       
        <ul class="dropdown clone">
           <?php foreach ($type_mounting_arc as $type_mounting_item): ?>
              <li style="z-index:7000"><input type="checkbox" class="styled" id="tma_<?=$type_mounting_item['name_'.$this->lang->lang()] ?>" name="tm2_<?=$type_mounting_item['category_id'] ?>" value="tm"><label for="tma_<?=$type_mounting_item['name_'.$this->lang->lang()] ?>"><?=$type_mounting_item['name_'.$this->lang->lang()] ?></label></li>
            <?php endforeach ?>
        </ul>
        
      </div>
      

			<input type="submit" class="submit" value="Show Results" />
		  </form>

<?php } ?>