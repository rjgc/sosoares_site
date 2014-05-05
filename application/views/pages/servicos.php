<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                    echo site_url('caixilharia/home');
                } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                    echo site_url('vidro/home');
                } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                    echo site_url('extrusao/home');
                } ?>"><?=lang('home')?></a></li>
                <li><?=lang('servicos')?></li>
            </ul>
            <h1 class="title3"><?=lang('servicos')?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="obras-container">
                <?php if (!empty($servicos)) {
                    foreach ($servicos as $servico) {
                        ?>
                        <a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                            echo site_url('caixilharia/servico/'.$servico['id_servico_aluminio']);
                        } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                            echo site_url('vidro/servico/'.$servico['id_servico_vidro']);
                        } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                            echo site_url('extrusao/servico/'.$servico['id_servico_extrusao']);
                        } ?>">
                        <div class="obras-list grow">
                            <?php if(empty($servico['imagem'])) { ?>
                            <img src="<?php echo base_url() ?>assets/uploads/servicos/servicos.jpg"/>
                            <?php } else { ?>
                            <img src="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                                echo base_url().'assets/uploads/servicos/aluminio/'.$servico['imagem'];
                            } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                                echo base_url().'assets/uploads/servicos/vidro/'.$servico['imagem'];
                            } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                                echo base_url().'assets/uploads/servicos/extrusao/'.$servico['imagem'];
                            } ?>"/>
                            <?php } ?>
                            <p> <?php if (strpos($servico['nome_'.$this->lang->lang()], '</a>')) {
                                $nome = strip_tags($servico['nome_'.$this->lang->lang()]);

                                echo $nome;
                            } else {
                                echo $servico['nome_'.$this->lang->lang()];
                            } ?></p>
                        </div>
                    </a>
                    <?php
                }
            }
            else { ?>
            <div class="alert alert-info">
                <h5><strong>Atenção!</strong> Páginas de serviço indisponíveis.</br></br> Pedimos desculpa pelo incómodo. <a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                    echo site_url('caixilharia/home');
                } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                    echo site_url('vidro/home');
                } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                    echo site_url('extrusao/home');
                } ?>">Voltar atrás.</a></h5>
            </div>
            <?php } ?>
        </div>
    </div>
</div><!-- /row -->
</div>