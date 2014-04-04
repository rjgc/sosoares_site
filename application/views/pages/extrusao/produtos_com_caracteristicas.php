<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('extrusao/home')?>"><?=lang('home')?></a></li>
                <li><a href="<?=site_url('extrusao/produtos')?>"><?=lang('produtos')?></a></li>
                <li><?php echo $tipo['nome_'.$this->lang->lang()] ?></li>
            </ul>
            <h1 class="title3"><?=lang('produtos')?></h1>
        </div>
    </div>

    <div>
        <h4><?php echo $tipo['nome_'.$this->lang->lang()] ?></h4>
        <?php foreach ($caracteristicas as $caracteristica) {            
            ?>
            <h5><?php echo $caracteristica['nome_'.$this->lang->lang()] ?></h5>
            <!-- /row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="obras-container">
                        <?php
                        if (!empty($produtos[$caracteristica['nome_'.$this->lang->lang()]])) {
                            foreach ($produtos[$caracteristica['nome_'.$this->lang->lang()]] as $produto){
                                ?>
                                <a href="<?=site_url('extrusao/produto/'.$produto['id_produto_extrusao'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/produtos/<?php echo $produto['foto_1'] ?>"/><p> <?php echo $produto['nome_'.$this->lang->lang()] ?></p></div></a> 
                                <?php }
                            }
                            else {?>
                            <h6 style="margin: 2px 0 2px 10px;">Sem produtos</h6>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- /row -->
            <?php
        }
        ?>
    </div>
</div>