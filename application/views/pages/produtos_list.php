<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url();?>index.php/pages/home_caixilharia">Início</a></li>
                <li>Produtos Alumínio</li>
            </ul>
            <h1 class="title3">Produtos Alumínio</h1>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <?php 
                    if (!empty($tipos)) {
                        foreach ($tipos as $tipo){
                            ?>
                            <a href="<?=base_url('index.php/pages/produtos_list/'.$tipo['id_tipo_produto_aluminio'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/produtos/3a0ca-3d---os-triple.png?>"/><p> <?php echo $tipo['nome'] ?></p></div></a> 
                            <?php }
                        }
                        else {?>
                        <h6 style="margin: 2px 0 2px 10px;">Sem categorias</h6>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
</div>