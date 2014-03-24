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
                            <a href="<?=base_url('index.php/pages/produtos_list/'.$tipo['id_tipo_produto_aluminio'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/produtos/3a0ca-3d---os-triple.png?>"/><p> <?php echo $tipo['nome_pt'] ?></p></div></a> 
                            <?php }
                        }
                        else {?>
                        <div class="alert alert-info">
                        <h5><strong>Atenção!</strong> Páginas dos produtos indisponíveis.</br></br> Pedimos desculpa pelo incómodo. <a href="<?php echo base_url();?>index.php/pages/home_caixilharia">Voltar atrás.</a></h5>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
</div>