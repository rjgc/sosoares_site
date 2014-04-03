<div class="container">
    <div class="noticias">
        <ul>

<?php   foreach($noticias as $noticia) {?>
            <li>
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?php echo base_url(); ?>assets/uploads/noticias/<?php echo $noticia['foto'] ?>" width="230" height="160">
                    </div>
                    <div class="col-md-9">
                        <h3><?php echo $noticia['titulo_'.$this->lang->lang()] ?></h3>
                        <p class="date"><b>Publicado:</b> <?= $noticia['data'] ?></p>
                        <p class="news-text"><?php echo $noticia['texto_'.$this->lang->lang()] ?></p>
                        <a href="<?php echo site_url('caixilharia/noticia/'.$noticia['id_noticia']); ?>">
                            <button class="btn button shrink">Ler Mais</button>
                        </a>
                    </div>
                </div>
            </li>
<?php       }
?>
        </ul>
    </div>
</div>