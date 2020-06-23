<nav class="navbar stick-top navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?= site_url()?>">
        <img src="<?= base_url()?>images/SVNHSLogo.png" width="50" height="50" alt="">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php site_url();?>/admin/dashboard">Home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Manage
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Applications</a>
                    <a class="dropdown-item" href="#">Students</a></a>
                    <a class="dropdown-item" href="#">Accounts</a>
                    <a class="dropdown-item" href="#">Analytics</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Strands Offered
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <h6 class="dropdown-header">Academic Stands</h6>
                    <a class="dropdown-item" href="#">STEM</a>
                    <a class="dropdown-item" href="#">ABM</a>
                    <a class="dropdown-item" href="#">HUMSS</a>
                    <a class="dropdown-item" href="#">GAS</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Tech-Voc Strands</h6>
                    <a class="dropdown-item" href="#">ICT</a>
                    <a class="dropdown-item" href="#">CAREGIVING</a>
                    <a class="dropdown-item" href="#">EIM</a>
                    <a class="dropdown-item" href="#">HOME ECONOMICS</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About SVNHS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Mission And Vision</a>
                    <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Signal Hymn</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('admin/dashboard/logout')?>">Log Out<span class="sr-only"></span></a> 
            </li>
        </ul>
    </div>
</nav>