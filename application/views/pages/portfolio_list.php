<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?=site_url('pages/home_caixilharia')?>">Início</a></li>
                <li>Portfolio Obras</li>
            </ul>
            <h1 class="title3">Portfolio Obras</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="obras-container">
                <?php if (!empty($obras)) {
                    foreach ($obras as $obra){
                        ?>
                        <a href="<?=site_url('pages/portfolio_caixilharia/'.$obra['id_obra'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/obras/<?php echo $obra['url'] ?>"/><p> <?php echo $obra['nome_pt'] ?></p></div></a> 
                        <?php
                    }
                } else {?>
                <div class="alert alert-info">
                    <h5><strong>Atenção!</strong> Página do portfólio indisponível.</br></br> Pedimos desculpa pelo incómodo. <a href="<?=site_url('pages/home_caixilharia')?>">Voltar atrás.</a></h5>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div><!-- /row -->
</div>
