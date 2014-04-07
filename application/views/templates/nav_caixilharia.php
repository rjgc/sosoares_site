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
            <li class="menu-title <?php echo ( isset($current) && $current === 'home' ) ? 'curr' : ''?>"><a href="<?=site_url('caixilharia/home')?>"><?=lang('home')?></a></li>
            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'candidaturas' || $current === 'grupo_sosoares' || $current === 'areas_comerciais') ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('grupo')?></a>
                <ul class="dropdown-menu">
                    <li class="grid-demo">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/grupo_sosoares/3')?>"><?=lang('grupo')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/grupo_sosoares/5')?>"><?=lang('quem')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/grupo_sosoares/2')?>"><?=lang('missao')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/grupo_sosoares/4')?>"><?=lang('responsabilidade')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/grupo_sosoares/1')?>"><?=lang('mercados')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/areas_comerciais')?>"><?=lang('comerciais')?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/noticias')?>"><?=lang('noticias')?></a></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/candidaturas')?>"><?=lang('candidaturas')?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'produto' || $current === 'produtos') ? 'curr' : ''?>"><a href="<?=site_url('caixilharia/produtos') ?>" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('cprodutos')?></a>
                <ul class="dropdown-menu">
                    <li class="grid-demo">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3"><?=lang('batente')?></h3>
                                        <ul>
                                            <li><b class="li-b"><?=lang('com_corte')?></b>
                                                <ul>
                                                    <?php foreach ($batentes_com_corte as $batente){
                                                        ?>
                                                        <li><a href="<?=site_url('caixilharia/produto/'.$batente['id_produto_aluminio'])?>"><?php echo $batente['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                            <li><b class="li-b"><?=lang('sem_corte')?></b>
                                                <ul>
                                                    <?php foreach ($batentes_sem_corte as $batente){
                                                        ?>
                                                        <li><a href="<?=site_url('caixilharia/produto/'.$batente['id_produto_aluminio'])?>"><?php echo $batente['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3"><?=lang('correr')?></h3>
                                        <ul>
                                            <li><b class="li-b"><?=lang('com_corte')?></b>
                                                <ul>
                                                    <?php foreach ($correres_com_corte as $correr){
                                                        ?>
                                                        <li><a href="<?=site_url('caixilharia/produto/'.$correr['id_produto_aluminio'])?>"><?php echo $correr['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                            <li><b class="li-b"><?=lang('sem_corte')?></b>
                                                <ul>
                                                    <?php foreach ($correres_sem_corte as $correr){
                                                        ?>
                                                        <li><a href="<?=site_url('caixilharia/produto/'.$correr['id_produto_aluminio'])?>"><?php echo $correr['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3"><?=lang('madeira')?></h3>
                                        <ul>
                                            <li><b class="li-b"><?=lang('com_corte')?></b>
                                                <ul>
                                                    <?php foreach ($aluminios_madeira_com_corte as $madeira){
                                                        ?>
                                                        <li><a href="<?=site_url('caixilharia/produto/'.$madeira['id_produto_aluminio'])?>"><?php echo $madeira['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                            <li><b class="li-b"><?=lang('sem_corte')?></b>
                                                <ul>
                                                    <?php foreach ($aluminios_madeira_sem_corte as $madeira){
                                                        ?>
                                                        <li><a href="<?=site_url('caixilharia/produto/'.$madeira['id_produto_aluminio'])?>"><?php echo $madeira['nome_'.$this->lang->lang()] ?></a></li>
                                                        <?php
                                                    }?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3"><?=lang('gradeamentos')?></h3>
                                        <ul>
                                            <?php foreach ($gradeamentos as $gradeamento){
                                                ?>
                                                <li><a href="<?=site_url('caixilharia/produto/'.$gradeamento['id_produto_aluminio'])?>"><?php echo $gradeamento['nome_'.$this->lang->lang()] ?></a></li>
                                                <?php
                                            }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3"><?=lang('fachadas')?></h3>
                                        <ul>
                                            <?php foreach ($fachadas as $fachada){
                                                ?>
                                                <li><a href="<?=site_url('caixilharia/produto/'.$fachada['id_produto_aluminio'])?>"><?php echo $fachada['nome_'.$this->lang->lang()] ?></a></li>
                                                <?php
                                            }?>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3"><?=lang('portadas')?></h3>
                                        <ul>
                                            <?php foreach ($portadas as $portada){
                                                ?>
                                                <li><a href="<?=site_url('caixilharia/produto/'.$portada['id_produto_aluminio'])?>"><?php echo $portada['nome_'.$this->lang->lang()] ?></a></li>
                                                <?php
                                            }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3"><?=lang('portoes')?></h3>
                                        <ul>
                                            <?php foreach ($portoes as $portao){
                                                ?>
                                                <li><a href="<?=site_url('caixilharia/produto/'.$portao['id_produto_aluminio'])?>"><?php echo $portao['nome_'.$this->lang->lang()] ?></a></li>
                                                <?php
                                            }?>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3"><?=lang('standards')?></h3>
                                        <ul>
                                            <?php foreach ($standards as $standard){
                                                ?>
                                                <li><a href="<?=site_url('caixilharia/produto/'.$standard['id_produto_aluminio'])?>"><?php echo $standard['nome_'.$this->lang->lang()] ?></a></li>
                                                <?php
                                            }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3"><?=lang('guilhotina')?></h3>
                                        <ul>
                                            <?php foreach ($guilhotinas as $guilhotina){
                                                ?>
                                                <li><a href="<?=site_url('caixilharia/produto/'.$guilhotina['id_produto_aluminio'])?>"><?php echo $guilhotina['nome_'.$this->lang->lang()] ?></a></li>
                                                <?php
                                            }?>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="menu-h3"><?=lang('resguardos')?></h3>
                                        <ul>
                                            <?php foreach ($resguardos as $resguardo){
                                                ?>
                                                <li><a href="<?=site_url('caixilharia/produto/'.$resguardo['id_produto_aluminio'])?>"><?php echo $resguardo['nome_'.$this->lang->lang()] ?></a></li>
                                                <?php
                                            }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="menu-title <?php echo ( isset($current) && $current === 'obras' ) ? 'curr' : ''?>"><a href="<?=site_url('caixilharia/obras')?>"><?=lang('portfolio')?></a></li>
            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'servico' ) ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('servicos')?></a>
                <ul class="dropdown-menu">
                    <li class="grid-demo">
                        <div class="row">
                            <?php if (!empty($servicos[0])) {
                                $value = array_values($servicos[0]);?>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/servico/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                echo $value[1];
                                            } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                echo $value[2];
                                            } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                $value[3];
                                            } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                $value[4];
                                            }?></a></h3>
                                        </div>
                                        <?php if (!empty($servicos[1])) {
                                            $value = array_values($servicos[1]);?>
                                            <div class="col-sm-6">
                                                <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/servico/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                    echo $value[1];
                                                } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                    echo $value[2];
                                                } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                    $value[3];
                                                } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                    $value[4];
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
                                                    <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/servico/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                        echo $value[1];
                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                        echo $value[2];
                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                        $value[3];
                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                        $value[4];
                                                    }?></a></h3>
                                                </div>
                                                <?php if (!empty($servicos[3])) {
                                                    $value = array_values($servicos[3]);?>
                                                    <div class="col-sm-6">
                                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/servico/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                            echo $value[1];
                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                            echo $value[2];
                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                            $value[3];
                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                            $value[4];
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
                                                            <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/servico/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                echo $value[1];
                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                echo $value[2];
                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                $value[3];
                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                $value[4];
                                                            }?></a></h3>
                                                        </div>
                                                        <?php if (!empty($servicos[5])) {
                                                            $value = array_values($servicos[5]);?>
                                                            <div class="col-sm-6">
                                                                <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/servico/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                    echo $value[1];
                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                    echo $value[2];
                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                    $value[3];
                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                    $value[4];
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
                                    <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'marcacao' ) ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('marcacao')?></a>
                                        <ul class="dropdown-menu">
                                            <li class="grid-demo">
                                                <div class="row">
                                                    <?php if (!empty($marcacoes[0])) {
                                                        $value = array_values($marcacoes[0]);?>
                                                        <div class="col-sm-4">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/marcacao/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                        echo $value[1];
                                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                        echo $value[2];
                                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                        $value[3];
                                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                        $value[4];
                                                                    }?></a></h3>
                                                                </div>
                                                                <?php if (!empty($marcacoes[1])) {
                                                                    $value = array_values($marcacoes[1]);?>
                                                                    <div class="col-sm-6">
                                                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/marcacao/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                            echo $value[1];
                                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                            echo $value[2];
                                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                            $value[3];
                                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                            $value[4];
                                                                        }?></a></h3>
                                                                    </div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                            <?php if (!empty($marcacoes[2])) {
                                                                $value = array_values($marcacoes[2]);?>
                                                                <div class="col-sm-4">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/marcacao/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                                echo $value[1];
                                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                                echo $value[2];
                                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                                $value[3];
                                                                            } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                                $value[4];
                                                                            }?></a></h3>
                                                                        </div>
                                                                        <?php if (!empty($marcacoes[3])) {
                                                                            $value = array_values($marcacoes[3]);?>
                                                                            <div class="col-sm-6">
                                                                                <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/marcacao/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                                    echo $value[1];
                                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                                    echo $value[2];
                                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                                    $value[3];
                                                                                } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                                    $value[4];
                                                                                }?></a></h3>
                                                                            </div>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                    <?php } ?>
                                                                    <?php if (!empty($marcacoes[4])) {
                                                                        $value = array_values($marcacoes[4]);?>
                                                                        <div class="col-sm-4">
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/marcacao/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                                        echo $value[1];
                                                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                                        echo $value[2];
                                                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                                        $value[3];
                                                                                    } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                                        $value[4];
                                                                                    }?></a></h3>
                                                                                </div>
                                                                                <?php if (!empty($marcacoes[5])) {
                                                                                    $value = array_values($marcacoes[5]);?>
                                                                                    <div class="col-sm-6">
                                                                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/marcacao/'.$value[0])?>"><?php if (strpos($_SERVER['REQUEST_URI'], 'pt')) {
                                                                                            echo $value[1];
                                                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'en')) {
                                                                                            echo $value[2];
                                                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'fr')) {
                                                                                            $value[3];
                                                                                        } else if (strpos($_SERVER['REQUEST_URI'], 'es')) {
                                                                                            $value[4];
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
                                                            <li class="dropdown yamm-fw menu-title <?php echo ( isset($current) && $current === 'apoio_cliente' || $current === 'apoios_cliente') ? 'curr' : ''?>"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('apoio')?></a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="grid-demo">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/apoio_cliente/1')?>"><?=lang('comercial')?></a></h3>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/apoio_cliente/2')?>"><?=lang('orcamentacao')?></a></h3>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/apoio_cliente/3')?>"><?=lang('tecnico')?></a></h3>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/apoio_cliente/4')?>"><?=lang('estudo')?></a></h3>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/apoio_cliente/5')?>"><?=lang('software')?></a></h3>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <h3 class="menu-h3 links"><a href="<?=site_url('caixilharia/apoio_cliente/6')?>"><?=lang('cfaqs')?></a></h3>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-title <?php echo ( isset($current) && $current === 'contactos' ) ? 'curr' : ''?>"><a href="<?=site_url('caixilharia/contactos')?>"><?=lang('contactos')?></a></li>
                                                        </ul>
                                                    </div>
                                                </div>