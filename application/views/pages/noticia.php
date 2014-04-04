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
                } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                    echo site_url('tratamento/home');
                } ?>"><?=lang('home')?></a></li>
                <li><a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                    echo site_url('caixilharia/noticias');
                } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                    echo site_url('vidro/noticias');
                } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                    echo site_url('extrusao/noticias');
                } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                    echo site_url('tratamento/noticias');
                } ?>"><?=lang('noticias')?></a></li>
                <?php if(empty($id)) { ?>
            </ul>
        </div>
    </div>
    <div class="alert alert-warning">
        <h5><strong>Atenção!</strong> Tem de seleccionar uma notícia. <a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
            echo site_url('caixilharia/noticias');
        } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
            echo site_url('vidro/noticias');
        } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
            echo site_url('extrusao/noticias');
        } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
            echo site_url('tratamento/noticias');
        } ?>">Voltar atrás.</a></h5>
    </div>
</div>
<?php } else { ?>
<li><?=$noticia['titulo_'.$this->lang->lang()]?></li>
</ul>
</div>
</div>
<div class="noticia">
    <div class="row">
        <div class="col-md-10">
            <h3><?php echo $noticia['titulo_'.$this->lang->lang()] ?></h3>
            <p class="date"><b>Publicado:</b> <?= $noticia['data_noticia'] ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <img src="<?php echo base_url(); ?>assets/uploads/noticias/<?php echo $noticia['foto'] ?>" width="300" height="200">
        </div>
        <div class="col-md-7">
            <div class="news-text"><?php echo $noticia['texto_'.$this->lang->lang()] ?></div>
        </div>
    </div>
</div>
</div>
<?php } ?>