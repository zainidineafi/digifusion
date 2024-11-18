<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div id="app-sidepanel" class="app-sidepanel">
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
        <div class="app-branding">
            <a class="app-logo" href="<?= base_url('/') ?>"></a>
            <h1 class="m-0 display-6 text-uppercase text-primary1 font-weight-bold" style="font-size: 30px;">
                DF<span class="text-white font-weight-normal"> - Admin</span>
            </h1>
            </a>
        </div><!--//app-branding-->

        <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                <li class="nav-item">
                    <a class="nav-link <?= (current_url() == base_url('admin/meta/index')) ? 'active' : '' ?>" href="<?= base_url('admin/meta/index') ?>">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                                <path d="M9.828 1.5A.5.5 0 0 1 10.5 2h3a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .354.146l1.414 1.414a.5.5 0 0 0 .354.146h2.5z" />
                            </svg>
                        </span>
                        <span class="nav-link-text">Meta</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->

                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link <?= (current_url() == base_url('admin/founder/index')) ? 'active' : '' ?>" href="<?= base_url('admin/founder/index') ?>">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                <path fill-rule="evenodd" d="M0 14s1-3 7-3 7 3 7 3V1H0v13z" />
                            </svg>
                        </span>
                        <span class="nav-link-text">Founder</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->

                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link <?= (current_url() == base_url('admin/link_founder/index')) ? 'active' : '' ?>" href="<?= base_url('admin/link_founder/index') ?>">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link" viewBox="0 0 16 16">
                                <path d="M6.354 0a2 2 0 0 1 1.414.586l1.5 1.5a2 2 0 0 1 0 2.828l-1.5 1.5a2 2 0 0 1-2.828 0l-1.5-1.5A2 2 0 0 1 0 4.828l1.5-1.5A2 2 0 0 1 2.828 0h3.526zM4.828 2.828a1 1 0 0 0 0 1.414l1.5 1.5a1 1 0 0 0 1.414 0l1.5-1.5a1 1 0 0 0 0-1.414l-1.5-1.5a1 1 0 0 0-1.414 0l-1.5 1.5zM16 11.172a2 2 0 0 1-1.414.586H10.586a2 2 0 0 1-1.414-.586l-1.5-1.5a2 2 0 0 1 0-2.828l1.5-1.5a2 2 0 0 1 2.828 0l1.5 1.5A2 2 0 0 1 16 11.172zM10.586 12a1 1 0 0 0 0-1.414l-1.5-1.5a1 1 0 0 0-1.414 0l-1.5 1.5a1 1 0 0 0 0 1.414l1.5 1.5a1 1 0 0 0 1.414 0l1.5-1.5z" />
                            </svg>
                        </span>
                        <span class="nav-link-text">Link Founder</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->

                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                </li><!--//nav-item-->
            </ul><!--//app-menu-->
        </nav><!--//app-nav-->
    </div><!--//sidepanel-inner-->
</div><!--//app-sidepanel-->