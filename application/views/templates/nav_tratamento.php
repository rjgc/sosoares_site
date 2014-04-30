<div class="navbar navbar-default yamm">
    <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div id="navbar-collapse-grid" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="menu-title <?php echo ( isset($current) && $current === 'home' ) ? 'curr' : ''?>"><a href="<?=site_url('tratamento/home')?>"><?=lang('home')?></a></li>
            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'grupo_sosoares' || $current === 'grupos_sosoares') ? 'curr' : ''?>"><a href="<?=site_url('tratamento/grupos_sosoares') ?>" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('grupo')?></a>
                <ul class="dropdown-menu">
                    <li class="grid-demo">
                        <div class="row">
                            <?php if (!empty($grupo_sosoares[0])) {
                                $value = array_values($grupo_sosoares[0]);?>
                                <div class="col-sm-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3 class="menu-h3 links"><a href="<?=site_url('tratamento/grupo_sosoares/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                echo $value[1];
                                            } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                echo $value[3];
                                            } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                echo $value[5];
                                            } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                echo $value[7];
                                            }?></a></h3>
                                        </div>
                                        <?php if (!empty($grupo_sosoares[1])) {
                                            $value = array_values($grupo_sosoares[1]);?>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3 links"><a href="<?=site_url('tratamento/grupo_sosoares/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                    echo $value[1];
                                                } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                    echo $value[3];
                                                } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                    echo $value[5];
                                                } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                    echo $value[7];
                                                }?></a></h3>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php if (!empty($grupo_sosoares[2])) {
                                        $value = array_values($grupo_sosoares[2]);?>
                                        <div class="col-sm-3">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3 class="menu-h3 links"><a href="<?=site_url('tratamento/grupo_sosoares/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                        echo $value[1];
                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                        echo $value[3];
                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                        echo $value[5];
                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                        echo $value[7];
                                                    }?></a></h3>
                                                </div>
                                                <?php if (!empty($grupo_sosoares[3])) {
                                                    $value = array_values($grupo_sosoares[3]);?>
                                                    <div class="col-sm-6">
                                                        <h3 class="menu-h3 links"><a href="<?=site_url('tratamento/grupo_sosoares/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                            echo $value[1];
                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                            echo $value[3];
                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                            echo $value[5];
                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                            echo $value[7];
                                                        }?></a></h3>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <?php if (!empty($grupo_sosoares[4])) {
                                                $value = array_values($grupo_sosoares[4]);?>
                                                <div class="col-sm-3">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h3 class="menu-h3 links"><a href="<?=site_url('tratamento/grupo_sosoares/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                echo $value[1];
                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                echo $value[3];
                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                echo $value[5];
                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                echo $value[7];
                                                            }?></a></h3>
                                                        </div>
                                                        <?php } ?>
                                                        <div class="col-sm-6">
                                                            <h3 class="menu-h3 links"><a href="<?=site_url('tratamento/areas_comerciais')?>"><?=lang('comerciais')?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-3">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h3 class="menu-h3 links"><a href="<?=site_url('tratamento/noticias')?>"><?=lang('noticias')?></a></h3>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h3 class="menu-h3 links"><a href="<?=site_url('tratamento/candidaturas')?>"><?=lang('candidaturas')?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <?php if (!empty($lacagem)) { ?>
                                <li class="menu-title <?php echo ( isset($current) && $current === 'lacagem' ) ? 'curr' : ''?>"><a href="<?=site_url('tratamento/lacagem')?>"><?=lang('lacagem')?></a></li>
                                <?php } if (!empty($lacagem)) { ?>
                                <li class="menu-title <?php echo ( isset($current) && $current === 'anodizacao' ) ? 'curr' : ''?>"><a href="<?=site_url('tratamento/anodizacao')?>"><?=lang('anodizacao')?></a></li>
                                <?php } if (!empty($lacagem)) { ?>
                                <li class="menu-title <?php echo ( isset($current) && $current === 'imitacao_madeira' ) ? 'curr' : ''?>"><a href="<?=site_url('tratamento/imitacao_madeira')?>"><?=lang('imitacao')?></a></li>
                                <?php } ?>
                                <li class="menu-title <?php echo ( isset($current) && $current === 'contactos' ) ? 'curr' : ''?>"><a href="<?=site_url('tratamento/contactos')?>"><?=lang('contactos')?></a></li>
                            </ul>
                        </div>
                    </div>