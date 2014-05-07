<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/tabs.css">
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="<?=site_url('extrusao/home')?>"><?=lang('home')?></a></li>
                    <li><a href="<?=site_url('extrusao/produtos')?>"><?=lang('eprodutos')?></a></li>
                    <?php if(empty($id)) { ?>
                </ul>
            </div>
        </div>
        <div style="padding-left: 15px;">
            <div class="alert alert-warning">
                <h5><strong>Atenção!</strong> Tem de seleccionar um produto. <a href="<?=site_url('extrusao/produtos')?>">Voltar atrás.</a></h5>
            </div>
        </div>
    </div>
</main>
<?php } else { ?>
<li><a href="<?=site_url('extrusao/produtos/'.$produto['id_tipo_produto_extrusao'])?>"><?=$produto['tipo']?></a></li>
<?php if (!empty($produto['caracteristica'])) { ?>
<li><?=$produto['caracteristica']?></li>
<?php } ?>
<li><?=$produto['nome_'.$this->lang->lang()]?></li>
</ul>
<h1 class="title3"><?=$produto['nome_'.$this->lang->lang()]?></h1>
</div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12" id="carousel-bounding-box">
                <div id="myCarousel" class="carousel slide">
                    <div class="carousel-inner" style="max-height: 400px;">
                        <?php   $i=1;
                        while ($i<5) {
                            if (!empty($produto['foto_'.$i])){
                                if ($i==1){ ?>
                                <div class="active item" data-slide-number="<?php echo $i ?>">
                                    <img src="<?php echo base_url();?>assets/uploads/produtos/normal/<?php echo $produto['foto_'.$i];?>" class="img-responsive">
                                </div>
                                <?php   } else { ?>
                                <div class="item" data-slide-number="<?php echo $i ?>">
                                    <img src="<?php echo base_url();?>assets/uploads/produtos/normal/<?php echo $produto['foto_'.$i];?>" class="img-responsive">
                                </div>
                                <?php   }
                            }
                            $i++;
                        } ?>
                    </div>
                    <?php   if (!empty($produto['foto_2']) || !empty($produto['foto_3']) || !empty($produto['foto_4'])){ ?>
                    <a class="left carousel-control control-try3" href="#myCarousel" data-slide="prev"><span class="glyphicon icon-back"></span></a>
                    <a class="right carousel-control control-try3" href="#myCarousel" data-slide="next"><span class="glyphicon icon-front"></span></a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs" style="padding: 20px 0px 10px 15px !important;">
                <ul class="list-inline">
                    <?php $i=1;
                    $y=0;
                    while ($i<5) {
                        if (!empty($produto['foto_'.$i])) {
                            if ($i==1) { ?>
                            <li>
                                <a id="carousel-selector-<?php echo $y ?>" class="selected">
                                    <img src="<?php echo base_url();?>assets/uploads/produtos/thumb/<?php echo $produto['foto_'.$i];?>" class="img-responsive" style="width: 80px; height: 80px; border-radius: 10px;">
                                </a>
                            </li>
                            <?php } else { ?>
                            <li> 
                                <a id="carousel-selector-<?php echo $y ?>">
                                    <img src="<?php echo base_url();?>assets/uploads/produtos/thumb/<?php echo $produto['foto_'.$i];?>" class="img-responsive" style="width: 80px; height: 80px; border-radius: 10px;">
                                </a>
                            </li>
                            <?php }
                        }
                        $i++;
                        $y++;
                    } ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-left: 30px;">
                <div class="facebook"><div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-type="button"></div></div>
                <div class="twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a></div>
                <div class="google"><div class="g-plusone" data-size="tall" data-annotation="none"></div></div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="descricao">
            <h3 class="title4"><?=lang('descricao')?></h3>
            <div>
                <p><?php echo $produto['descricao_'.$this->lang->lang()]; ?></p>
            </div>
        </div>
    </div>
</div>
<?php 
$cortes = True;
$downloads = True;

if (empty($produto['corte_1']) && empty($produto['corte_2']) && empty($produto['corte_3']) && empty($produto['corte_4'])){
    $cortes = False; 
}
if (empty($catalogos)){
    $downloads = False;
}

if ($cortes || $downloads) { ?>
<div class="row">
    <div class="col-md-12" style="margin-left: 15px;">
        <h2 class="title4"><?=lang('info')?></h2>
        <div class="tabs">
            <?php if ($cortes) { ?>
            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" onclick="tab(this)"/>
            <label for="tab-1" class="tab-label-1"><?=lang('corte')?></label>
            <?php } ?>
            <?php if ($downloads) { 
                if (!$cortes) { ?>
                <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" checked="checked" onclick="tab(this)"/>
                <?php } else { ?>
                <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" onclick="tab(this)"/>            
                <?php } ?>
                <label for="tab-2" class="tab-label-2">Downloads</label>
                <?php } ?>
                <div class="clear-shadow"></div>
                <div class="tab-content">
                    <?php if ($cortes) { ?>
                    <div class="content-1" style="width: 100%;">
                        <ul>
                            <?php $i=1;
                            while ($i<5) {
                                if (!empty($produto['corte_'.$i])) {
                                    if ($i==1) { ?>
                                    <li style="margin: 0;float: left;display: block;">
                                        <a href="<?php echo base_url();?>assets/uploads/files/<?php echo $produto['corte_'.$i];?>" target="_blank">
                                            <img src="<?php echo base_url();?>assets/uploads/files/<?php echo $produto['corte_'.$i];?>" alt="unfortunately your browser doesn't display PDF's" style="width: 180px;margin:2px 0 2px 0;">
                                        </a>
                                    </li>
                                    <?php } else { ?>
                                    <li style=" margin: 0 0 0 15px; float: left;display: block;">
                                        <a href="<?php echo base_url();?>assets/uploads/files/<?php echo $produto['corte_'.$i];?>" target="_blank">
                                            <img src="<?php echo base_url();?>assets/uploads/files/<?php echo $produto['corte_'.$i];?>" alt="unfortunately your browser doesn't display PDF's" style="width: 180px;margin:2px 0 2px 0;">
                                        </a>
                                    </li>
                                    <?php }
                                }
                                $i++;
                            } ?>
                        </ul>
                    </div>
                    <?php } ?>
                    <?php if ($downloads) { ?>
                    <div class="content-2" style="width: 100%;">
                        <ul>
                            <?php } if (!empty($catalogos)) { ?>
                            <li style="margin: 0 0 0 40px;float: left;display: block;">
                                <h3><?=lang('catalogo')?></h3>
                                <ul style="list-style-type: none;">
                                    <?php foreach ($catalogos as $catalogo) { 
                                        if ($catalogo['restrito'] == 0) { ?>
                                        <li><span class="glyphicon glyphicon-download" style="padding-right: 5px;"></span><a href="<?php echo base_url();?>assets/uploads/catalogos/extrusao/<?php echo $catalogo['ficheiro'];?>" target="_blank"><?=$catalogo['nome_'.$this->lang->lang()]?></a></li>
                                        <?php } else { ?>
                                        <li><span class="glyphicon glyphicon-file" style="padding-right: 5px;"></span><p><?=$catalogo['nome_'.$this->lang->lang()]?></p></li>
                                        <?php }
                                    } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<?php } ?>
</main>