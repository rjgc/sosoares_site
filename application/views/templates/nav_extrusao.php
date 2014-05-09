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
            <li class="menu-title <?php echo ( isset($current) && $current === 'home' ) ? 'curr' : ''?>"><a href="<?=site_url('extrusao/home')?>"><?=lang('home')?></a></li>
            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'grupo_sosoares' || $current === 'grupos_sosoares') ? 'curr' : ''?>"><a href="<?=site_url('extrusao/grupos_sosoares') ?>" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('grupo')?></a>
                <ul class="dropdown-menu">
                    <li class="grid-demo">
                        <div class="row">
                            <?php $i = 0;

                            $count = count($grupo_sosoares) % 2;

                            if ($count == 0) {
                                while ($i < count($grupo_sosoares)) { ?>
                                <div class="col-sm-3">
                                    <div class="row">
                                        <?php if (array_key_exists($i, $grupo_sosoares)) { 
                                            $value = array_values($grupo_sosoares[$i]);?>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/grupo_sosoares/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                    echo $value[1];
                                                } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                    echo $value[3];
                                                } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                    echo $value[5];
                                                } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                    echo $value[7];
                                                }?></a></h3>
                                            </div>
                                            <?php } $i++;
                                            if (array_key_exists($i, $grupo_sosoares)) { 
                                                $value = array_values($grupo_sosoares[$i]);?>
                                                <div class="col-sm-6">
                                                    <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/grupo_sosoares/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                        echo $value[1];
                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                        echo $value[3];
                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                        echo $value[5];
                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                        echo $value[7];
                                                    }?></a></h3>                                                                    
                                                </div>
                                                <?php } $i++; ?>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <div class="col-sm-3">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/areas_comerciais')?>"><?=lang('comerciais')?></a></h3>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/noticias')?>"><?=lang('noticias')?></a></h3>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/candidaturas')?>"><?=lang('candidaturas')?></a></h3>
                                                </div>
                                            </div>
                                        </div> 
                                        <?php } else {
                                            while ($i < count($grupo_sosoares)) { ?>
                                            <div class="col-sm-3">
                                                <div class="row">
                                                    <?php if (array_key_exists($i, $grupo_sosoares)) { 
                                                        $value = array_values($grupo_sosoares[$i]);?>
                                                        <div class="col-sm-6">
                                                            <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/grupo_sosoares/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                echo $value[1];
                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                echo $value[3];
                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                echo $value[5];
                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                echo $value[7];
                                                            }?></a></h3>
                                                        </div>
                                                        <?php } $i++;
                                                        if (array_key_exists($i, $grupo_sosoares)) { 
                                                            $value = array_values($grupo_sosoares[$i]);?>
                                                            <div class="col-sm-6">
                                                                <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/grupo_sosoares/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                    echo $value[1];
                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                    echo $value[3];
                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                    echo $value[5];
                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                    echo $value[7];
                                                                }?></a></h3>                                                                    
                                                            </div>
                                                            <?php } else { ?>
                                                            <div class="col-sm-6">
                                                                <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/areas_comerciais')?>"><?=lang('comerciais')?></a></h3>
                                                            </div>
                                                            <?php } $i++; ?>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <div class="col-sm-3">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/noticias')?>"><?=lang('noticias')?></a></h3>
                                                            </div>   
                                                            <div class="col-sm-6">
                                                                <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/candidaturas')?>"><?=lang('candidaturas')?></a></h3>
                                                            </div>                                             
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'produto' || $current === 'produtos') ? 'curr' : ''?>"><a href="<?=site_url('extrusao/produtos') ?>" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('eprodutos')?></a>
                                        <ul class="dropdown-menu">
                                            <li class="grid-demo">
                                                <?php   $i = 0;
                                                $div = 1;
                                                $caracteristica = '';
                                                $count = count($tipos)/6;

                                                if (is_float(round($count))) {
                                                    $count++;
                                                }

                                                while ($div < $count) {
                                                    if ($div==1) { ?>
                                                    <div class="row">
                                                        <?php while ($i < 8) { ?>
                                                        <div class="col-sm-3">
                                                            <div class="row">
                                                                <?php if (array_key_exists($i, $tipos)) { ?>
                                                                <div class="col-sm-6">
                                                                    <h3 class="menu-h3"><?=$tipos[$i]['nome_'.$this->lang->lang()]?></h3>
                                                                    <ul>                                            
                                                                        <?php foreach ($array as $produto) {
                                                                            if ($produto[0] == $tipos[$i]['nome_pt']) {
                                                                                if ($produto[1] != '' && $caracteristica == '' || $caracteristica != $produto[1]) { 
                                                                                    $caracteristica = $produto[1]; ?> 
                                                                                    <li><b class="li-b"><?=$produto[1]?></b>
                                                                                        <ul>
                                                                                            <li><a href="<?=site_url('extrusao/produto/'.$produto[3])?>"><?php echo $produto[2] ?></a></li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <?php }
                                                                                    else { ?>
                                                                                    <ul>
                                                                                        <li><a href="<?=site_url('extrusao/produto/'.$produto[3])?>"><?php echo $produto[2] ?></a></li>
                                                                                    </ul>
                                                                                    <?php } 
                                                                                }
                                                                            } ?>
                                                                        </ul>
                                                                    </div>
                                                                    <?php }
                                                                    $i++;

                                                                    if (array_key_exists($i, $tipos)) { ?>
                                                                    <div class="col-sm-6">
                                                                        <h3 class="menu-h3"><?=$tipos[$i]['nome_'.$this->lang->lang()]?></h3>
                                                                        <ul>                                            
                                                                            <?php foreach ($array as $produto) {
                                                                                if ($produto[0] == $tipos[$i]['nome_pt']) {
                                                                                    if ($produto[1] != '' && $caracteristica == '' || $caracteristica != $produto[1]) { 
                                                                                        $caracteristica = $produto[1]; ?> 
                                                                                        <li><b class="li-b"><?=$produto[1]?></b>
                                                                                            <ul>
                                                                                                <li><a href="<?=site_url('extrusao/produto/'.$produto[3])?>"><?php echo $produto[2] ?></a></li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <?php }
                                                                                        else { ?>
                                                                                        <ul>
                                                                                            <li><a href="<?=site_url('extrusao/produto/'.$produto[3])?>"><?php echo $produto[2] ?></a></li>
                                                                                        </ul>
                                                                                        <?php } 
                                                                                    }
                                                                                } ?>
                                                                            </ul>
                                                                        </div>
                                                                        <?php } $i++; ?>
                                                                    </div>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <?php } else { ?>
                                                            <div class="row">
                                                                <?php $y = $i + 8;
                                                                while ($i < $y) { ?>
                                                                <div class="col-sm-3">
                                                                    <div class="row">
                                                                        <?php if (array_key_exists($i, $tipos)) { ?>
                                                                        <div class="col-sm-6">
                                                                            <h3 class="menu-h3"><?=$tipos[$i]['nome_'.$this->lang->lang()]?></h3>
                                                                            <ul>                                            
                                                                                <?php foreach ($array as $produto) {
                                                                                    if ($produto[0] == $tipos[$i]['nome_pt']) {
                                                                                        if ($produto[1] != '' && $caracteristica == '' || $caracteristica != $produto[1]) { 
                                                                                            $caracteristica = $produto[1]; ?> 
                                                                                            <li><b class="li-b"><?=$produto[1]?></b>
                                                                                                <ul>
                                                                                                    <li><a href="<?=site_url('extrusao/produto/'.$produto[3])?>"><?php echo $produto[2] ?></a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <?php }
                                                                                            else { ?>
                                                                                            <ul>
                                                                                                <li><a href="<?=site_url('extrusao/produto/'.$produto[3])?>"><?php echo $produto[2] ?></a></li>
                                                                                            </ul>
                                                                                            <?php } 
                                                                                        }
                                                                                    } ?>
                                                                                </ul>
                                                                            </div>
                                                                            <?php }
                                                                            $i++;

                                                                            if (array_key_exists($i, $tipos)) { ?>
                                                                            <div class="col-sm-6">
                                                                                <h3 class="menu-h3"><?=$tipos[$i]['nome_'.$this->lang->lang()]?></h3>
                                                                                <ul>                                            
                                                                                    <?php foreach ($array as $produto) {
                                                                                        if ($produto[0] == $tipos[$i]['nome_pt']) {
                                                                                            if ($produto[1] != '' && $caracteristica == '' || $caracteristica != $produto[1]) { 
                                                                                                $caracteristica = $produto[1]; ?> 
                                                                                                <li><b class="li-b"><?=$produto[1]?></b>
                                                                                                    <ul>
                                                                                                        <li><a href="<?=site_url('extrusao/produto/'.$produto[3])?>"><?php echo $produto[2] ?></a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <?php }
                                                                                                else { ?>
                                                                                                <ul>
                                                                                                    <li><a href="<?=site_url('extrusao/produto/'.$produto[3])?>"><?php echo $produto[2] ?></a></li>
                                                                                                </ul>
                                                                                                <?php } 
                                                                                            }
                                                                                        } ?>
                                                                                    </ul>
                                                                                </div>
                                                                                <?php } $i++; ?>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <?php }
                                                                    $div++;
                                                                } ?>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'servico' ) ? 'curr' : ''?>"><a href="<?=site_url('extrusao/servico')?>" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('servicos')?></a>
                                                        <ul class="dropdown-menu">
                                                            <li class="grid-demo">
                                                                <div class="row">
                                                                    <?php if (!empty($servicos[0])) {
                                                                        $value = array_values($servicos[0]);?>
                                                                        <div class="col-sm-4">
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/servico/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                                        echo $value[1];
                                                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                                        echo $value[2];
                                                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                                        echo $value[3];
                                                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                                        echo $value[4];
                                                                                    }?></a></h3>
                                                                                </div>
                                                                                <?php if (!empty($servicos[1])) {
                                                                                    $value = array_values($servicos[1]);?>
                                                                                    <div class="col-sm-6">
                                                                                        <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/servico/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                                            echo $value[1];
                                                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                                            echo $value[2];
                                                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                                            echo $value[3];
                                                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                                            echo $value[4];
                                                                                        }?></a></h3>
                                                                                    </div>
                                                                                    <?php } ?>
                                                                                </div>
                                                                            </div>
                                                                            <?php } ?>
                                                                            <?php if (!empty($servicos[2])) {
                                                                                $value = array_values($servicos[2]);?>
                                                                                <div class="col-sm-4">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/servico/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                                                echo $value[1];
                                                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                                                echo $value[2];
                                                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                                                echo $value[3];
                                                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                                                echo $value[4];
                                                                                            }?></a></h3>
                                                                                        </div>
                                                                                        <?php if (!empty($servicos[3])) {
                                                                                            $value = array_values($servicos[3]);?>
                                                                                            <div class="col-sm-6">
                                                                                                <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/servico/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                                                    echo $value[1];
                                                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                                                    echo $value[2];
                                                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                                                    echo $value[3];
                                                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                                                    echo $value[4];
                                                                                                }?></a></h3>
                                                                                            </div>
                                                                                            <?php } ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php } ?>
                                                                                    <?php if (!empty($servicos[4])) {
                                                                                        $value = array_values($servicos[4]);?>
                                                                                        <div class="col-sm-4">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-6">
                                                                                                    <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/servico/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                                                        echo $value[1];
                                                                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                                                        echo $value[2];
                                                                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                                                        echo $value[3];
                                                                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                                                        echo $value[4];
                                                                                                    }?></a></h3>
                                                                                                </div>
                                                                                                <?php if (!empty($servicos[5])) {
                                                                                                    $value = array_values($servicos[5]);?>
                                                                                                    <div class="col-sm-6">
                                                                                                        <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/servico/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                                                            echo $value[1];
                                                                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                                                            echo $value[2];
                                                                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                                                            echo $value[3];
                                                                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                                                            echo $value[4];
                                                                                                        }?></a></h3>
                                                                                                    </div>
                                                                                                    <?php } ?>
                                                                                                </div>
                                                                                            </div>
                                                                                            <?php } ?>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <?php if (!empty($apoios)) { ?>  
                                                                            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'apoio_cliente' || $current === 'apoios_cliente') ? 'curr' : ''?>"><a href="<?=site_url('extrusao/apoios_cliente')?>" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('apoio')?></a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li class="grid-demo">
                                                                                        <div class="row">
                                                                                            <?php $i = 0;

                                                                                            while ($i < count($apoios)) { ?>
                                                                                            <div class="col-sm-3">
                                                                                                <div class="row">
                                                                                                    <?php if (array_key_exists($i, $apoios)) { 
                                                                                                        $value = array_values($apoios[$i]);?>
                                                                                                        <div class="col-sm-6">
                                                                                                            <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/apoio_cliente/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                                                                echo $value[1];
                                                                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                                                                echo $value[3];
                                                                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                                                                echo $value[5];
                                                                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                                                                echo $value[7];
                                                                                                            }?></a></h3>
                                                                                                        </div>
                                                                                                        <?php } $i++;
                                                                                                        if (array_key_exists($i, $apoios)) { 
                                                                                                            $value = array_values($apoios[$i]);?>
                                                                                                            <div class="col-sm-6">
                                                                                                                <h3 class="menu-h3 links"><a href="<?=site_url('extrusao/apoio_cliente/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                                                                    echo $value[1];
                                                                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                                                                    echo $value[3];
                                                                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                                                                    echo $value[5];
                                                                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                                                                    echo $value[7];
                                                                                                                }?></a></h3>                                                                    
                                                                                                            </div>
                                                                                                            <?php } $i++; ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <?php } ?>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <?php } ?>
                                                                                    <li class="menu-title <?php echo ( isset($current) && $current === 'contactos' ) ? 'curr' : ''?>"><a href="<?=site_url('extrusao/contactos')?>"><?=lang('contactos')?></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>