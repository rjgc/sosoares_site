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
            <li class="menu-title <?php /*echo ( isset($current) && $current === 'home_caixilharia' ) ? 'curr' : ''*/?>"><a href="<?=site_url('pages/home_caixilharia')?>"><?=lang('home')?></a></li>
            <li class="dropdown yamm-fw menu-title"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="100" data-close-others="false"><?=lang('grupo')?></a></li>
            <li class="menu-title"><a href="#">Lacagem</a></li>
            <li class="menu-title"><a href="#">Anodização</a></li>
            <li class="menu-title"><a href="#">Imitação Madeira</a></li>
            <li class="menu-title"><a href="#"><?=lang('contactos')?></a></li>
        </ul>
    </div>
</div>