<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/noticias.css">
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
                <li><?=lang('noticias')?></li>
            </ul>
        </div>
    </div>
    <div class="noticias">
        <ul>
           <?php foreach($noticias as $noticia) { ?>
           <li>
            <div class="row">
                <div class="col-md-3">
                    <img class="noticias-img" src="<?php echo base_url(); ?>assets/uploads/noticias/<?php echo $noticia['foto'] ?>">
                </div>
                <div class="col-md-9">
                    <h3><?php echo $noticia['titulo_'.$this->lang->lang()] ?></h3>
                    <p class="date"><b><?=lang('publicado')?>:</b> <?= $noticia['data_noticia'] ?></p>
                    <div class="news-text"><?php echo substr($noticia['texto_'.$this->lang->lang()], 0, 150); if (strlen($noticia['texto_'.$this->lang->lang()]) > 150) echo '...' ?></div>
                    <a href="<?php if (strpos($_SERVER['REQUEST_URI'], 'caixilharia')) {
                        echo site_url('caixilharia/noticia/'.$noticia['id_noticia']);
                    } else if (strpos($_SERVER['REQUEST_URI'], 'vidro')) {
                        echo site_url('vidro/noticia/'.$noticia['id_noticia']);
                    } else if (strpos($_SERVER['REQUEST_URI'], 'extrusao')) {
                        echo site_url('extrusao/noticia/'.$noticia['id_noticia']);
                    } else if (strpos($_SERVER['REQUEST_URI'], 'tratamento')) {
                        echo site_url('tratamento/noticia/'.$noticia['id_noticia']);
                    } ?>"><button class="btn button grow"><?=lang('ler')?></button></a>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>
</div>
<script src="<?php echo base_url() ?>assets/sosoares/js/noticias.js"></script>