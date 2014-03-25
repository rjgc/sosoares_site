<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('pages/home_caixilharia')?>">Início</a></li>
                <li><a href="<?=site_url('pages/produtos_list')?>">Produtos Alumínio</a></li>
                <li><?php echo $tipo['nome_pt'] ?></li>
            </ul>
            <h1 class="title3">Produtos Alumínio</h1>
        </div>
    </div>

    <div>
        <h4><?php echo $tipo['nome_pt'] ?></h4>
        <?php foreach ($caracteristicas as $caracteristica) {            
            ?>
            <h5><?php echo $caracteristica['nome_pt'] ?></h5>
            <!-- /row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <?php
                        if (!empty($produtos[$caracteristica['nome_pt']])) {
                            foreach ($produtos[$caracteristica['nome_pt']] as $produto){
                                ?>
                                <a href="<?=site_url('pages/produto_caixilharia/'.$produto['id_produto_aluminio'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/produtos/<?php echo $produto['foto_1'] ?>"/><p> <?php echo $produto['nome_pt'] ?></p></div></a> 
                                <?php }
                            }
                            else {?>
                            <h6 style="margin: 2px 0 2px 10px;">Categoria sem produtos</h6>
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