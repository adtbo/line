        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a href="<?php echo site_url('dasbor'); ?>" class="brand"><i class="icon-leaf">&nbsp;EARTH HOUR Surabaya</i></a>
                    <div class="nav-collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> <?php echo $username; ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('dasbor/logout'); ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="subnavbar">
            <div class="subnavbar-inner">
            	<div class="container">                    
                    <ul class="mainnav">
                        <li class="<?php if ($judulLaman=="dasborhome") echo 'active'; ?>">
                            <a href="<?php echo site_url('dasbor'); ?>">
                                <i class="icon-dashboard icon-large"></i> <span>Dasbor</span>
                            </a>
                        </li>
                        <li class="<?php if ($judulLaman=="dasbordasar") echo 'active'; ?>">
                            <a href="<?php echo site_url('dasbor/dasar'); ?>">
                                <i class="icon-cogs icon-large"></i> <span>Dasar</span>
                            </a>
                        </li>
                        <li class="<?php if ($judulLaman=="dasborgaleri") echo 'active'; ?>">
                            <a href="<?php echo site_url('dasbor/galeri'); ?>">
                                <i class="icon-list-alt icon-large"></i> <span>Galeri</span>
                            </a>
                        </li>
                        <li class="<?php if ($judulLaman=="dasborkegiatan") echo 'active'; ?>">
                            <a href="<?php echo site_url('dasbor/kegiatan'); ?>">
                                <i class="icon-calendar icon-large"></i> <span>Kegiatan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>