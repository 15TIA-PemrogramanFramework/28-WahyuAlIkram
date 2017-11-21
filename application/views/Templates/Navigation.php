<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li><a href="<?php echo site_url('home'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon"></i>Home</a></li>
            
            <li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-users nav_icon"></i> <span class="nav-label">Dealer</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php if($this->session->userdata('status') == 'dealer') { ?>
                    <li><a href="<?php echo site_url('dealer'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-database nav_icon"></i>Data Dealer</a></li><?php } ?>
                    <?php if($this->session->userdata('status') == 'dealer') { ?>
                    <li><a href="<?php echo site_url('dealer/tambah_Dealer'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-user-plus nav_icon"></i>Tambah Dealer</a></li><?php } ?>
                </ul>
            </li>

            <li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">Supplier</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php if($this->session->userdata('status') == 'dealer') { ?>
                    <li><a href="<?php echo site_url('supplier'); ?>" class=" hvr-bounce-to-right"> <i class="fa fa-database nav_icon"></i>Data Supplier</a></li><?php } ?>
                    <?php if($this->session->userdata('status') == 'dealer') { ?>
                    <li><a href="<?php echo site_url('supplier/tambah_Supplier'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-user-plus nav_icon"></i>Tambah Supplier</a></li><?php } ?>
                </ul>
            </li>

            <li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">Pembeli</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php if($this->session->userdata('status') == 'dealer') { ?>
                    <li><a href="<?php echo site_url('pembeli'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-database nav_icon"></i>Data Pembeli</a></li><?php } ?>
                    <?php if($this->session->userdata('status') == 'dealer') { ?>
                    <li><a href="<?php echo site_url('pembeli/tambah_Pembeli'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-user-plus nav_icon"></i>Tambah Pembeli</a></li><?php } ?>
                </ul>
            </li>

            <li><a href="<?php echo site_url('mobil'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-car nav_icon"></i>Data Mobil</a></li>

            <li><a href="<?php echo site_url('pemasukkan'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-cart-plus nav_icon"></i>Data Pemasukan</a></li>

            <li><a href="<?php echo site_url('pembelian'); ?>" class=" hvr-bounce-to-right"> <i class="fa  fa-cart-arrow-down nav_icon"></i>Data Pembelian</a></li>
        </ul>
    </div>
</div>