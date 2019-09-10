<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="side-header side-content bg-white-op">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                <div class="btn-group pull-right">
                    <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                        <i class="si si-drop"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                        <li>
                            <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="<?php echo base_url()?>assets/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="<?php echo base_url()?>assets/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="<?php echo base_url()?>assets/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="<?php echo base_url()?>assets/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="<?php echo base_url()?>assets/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <a class="h5 text-white" href="<?php echo base_url()?>">
                    <i class="fa fa-glide-g" style="color:#5c90d2"></i> <span class="h4 font-w600 sidebar-mini-hide">svéhicules</span>
                </a>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content">
                <ul class="nav-main">
                    <li>
                        <a href="<?php echo base_url()?>"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>

                    <?php if($this->ion_auth->is_admin()):?>
                    <li class="nav-main-heading"><span class="sidebar-mini-hide">Gestion des utilisateurs</span></li>
                    <li>
                        <a href="<?php echo base_url().'users'; ?>"><i class="fa fa-users" aria-hidden="true"></i><span class="sidebar-mini-hide">Liste des utilisateurs</span></a>
                    </li>
                    <?php endif;?>

                    <?php $group = 1;
                    if (!$this->ion_auth->in_group($group)):?>
                    <li class="nav-main-heading"><span class="sidebar-mini-hide">Gestion des véhicules</span></li>
                    <?php $group = 3;
                    if ($this->ion_auth->in_group($group)):?>
                    <li>
                        <a href="<?php echo base_url().'operations/index'; ?>"><i class="fa fa-users" ></i><span class="sidebar-mini-hide">Liste des Operations</span></a>
                    </li>
                    <?php endif;?>
                    <li>
                        <a href="<?php echo base_url().'vehicule/index'; ?>"><i class="fa fa-users" ></i><span class="sidebar-mini-hide">Liste des véhicules</span></a>
                    </li>
                    <?php endif;?>
                  </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
