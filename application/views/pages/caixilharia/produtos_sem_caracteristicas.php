<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('caixilharia/home')?>"><?=lang('home')?></a></li>
                <li><a href="<?=site_url('caixilharia/produtos')?>"><?=lang('cprodutos')?></a></li>
                <li><?php echo $tipo['nome_'.$this->lang->lang()] ?></li>
            </ul>
            <h1 class="title3"><?=lang('produtos')?></h1>
        </div>
    </div>

    <div>
        <h4 style="padding-left: 15px;"><?php echo $tipo['nome_'.$this->lang->lang()] ?></h4>
        <!-- /row -->
        <div class="row">
            <div class="col-md-12">
                <div class="obras-container">
                    <?php 
                    if (!empty($produtos)) {
                        foreach ($produtos as $produto){
                            ?>
                            <a href="<?=site_url('caixilharia/produto/'.$produto['id_produto_aluminio'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/produtos/list/<?php echo $produto['foto_1'] ?>"/><p> <?php echo $produto['nome_'.$this->lang->lang()] ?></p></div></a> 
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
    </div>
</div>