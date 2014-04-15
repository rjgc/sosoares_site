<!doctype html>
<html>
<?php ?>
<head>
    <title>GRUPO SOSOARES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/css/hover.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/styles_fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sosoares/styles.css">
    <style type="text/css">
        body
        {
            background:url("<?php echo base_url() ?>assets/uploads/background/<?php echo $background_image['foto'];?>") #e8e8e8 no-repeat fixed center;
            background-size: cover;
        }
    </style>        
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logotipo grow">
                    <a href="<?php echo base_url() ?>"><h1>Grupo Sosoares</h1></a>
                </div>
                <div id="bd">
                    <a style="padding-right: 5px;" href="<?=site_url($this->lang->switch_uri('pt')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_pt.png" width="22" height="15" alt="Portugal" title="Portugal" class="grow"></a>
                    <a style="padding-right: 5px;" href="<?=site_url($this->lang->switch_uri('en')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_uk.png" width="22" height="15" alt="United Kingdom" title="United Kingdom" class="grow"></a>
                    <a style="padding-right: 5px;" href="<?=site_url($this->lang->switch_uri('fr')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_fr.png" width="22" height="15" alt="France" title="France" class="grow"></a>
                    <a href="<?=site_url($this->lang->switch_uri('es')) ?>"><img src="<?php echo base_url() ?>assets/sosoares/img/bd_sp.png" width="22" height="15" alt="Spain" title="Spain" class="grow"></a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container" style="position: relative">
            <div class="center">
                <a href="<?php echo site_url('caixilharia/home')?>">
                    <div class="box shrink" id="caixilharia">
                        <i class="icon-produtos_caixilharia font"></i>
                        <h3><?=lang('caixilharia')?></h3>
                    </div>
                </a>
                <a href="<?php echo site_url('vidro/home')?>">
                    <div class="box shrink" id="vidro">
                        <i class="icon-produtos_vidro font"></i>
                        <h3><?=lang('vidro')?><br>&nbsp;</h3>
                    </div>
                </a>
                <hr id="separador">
                <a href="<?php echo site_url('extrusao/home')?>">
                    <div class="box shrink" id="extrusao">
                        <i class="icon-extrusao_new font"></i>
                        <h3><?=lang('extrusao')?><br>&nbsp;</h3>
                    </div>
                </a>
                <a href="<?php echo site_url('tratamento/home')?>">
                    <div class="box shrink" id="abrasivos">
                        <i class="icon-tratamento_new font"></i>
                        <h3 ><?=lang('tratamento')?></h3>
                    </div>
                </a>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="rights">
                    <i class="icon-sosoares" style="font-size: 25px"></i>
                    <h4>&nbsp;&copy; GRUPO SOSOARES</h4><p> <?=lang('direitos')?> </p>
                </div>
                <div class="telefone">
                    <p>+351 <b>226 096 709</b></p>
                </div>
                <div class="email">
                    <p>comercial@sosoares.pt</p>
                </div>
                <div class="imgSistemas">
                    <img src="<?php echo base_url() ?>assets/sosoares/img/euro2000.jpg" width="165" height="43" alt="Sistemas Euro2000" title="Sistemas Euro2000">
                </div>
                <div class="areaReservada">
                    <a href="#">
                        <button class="btn button shrink"><?=lang('area_privada')?></button>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
