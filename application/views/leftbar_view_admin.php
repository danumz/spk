<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url(<?= base_url('assetss/');?>assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="<?= base_url('assetss/');?>assets/images/users/profile.png" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Fordza Shop</a>
                <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a> <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div> <a href="<?= base_url('Auth/logout')?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">ADMINISTRATOR</li>
                <li> <a class="waves-effect waves-dark" href="<?= site_url('Admin/Dashboard')?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                </li>
                  <li class="nav-devider"></li>
                  <li class="nav-small-cap">MANAGEMENT PRODUCT</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span class="hide-menu">Products</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= site_url('Admin/Product/publish')?>">Publish Product</a></li>
                        <li><a href="<?= site_url('Admin/product')?>">Produk</a></li>
                        <li><a href="<?= site_url('Admin/kategori')?>">Kategori</a></li>
                        <li><a href="<?= site_url('Admin/Brands')?>">Brand</a></li>
                        <li><a href="<?= site_url('Admin/Promo')?>">Promo</a></li>
                        <li><a href="<?= site_url('Admin/Vouchers')?>">Voucher</a></li>
                        <li><a href="<?= site_url('Admin/Size')?>">Ukuran dan Warna</a></li>

                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li class="nav-small-cap">MANAGEMENT FORDZA</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">WEBSITE FORDZA</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= site_url('Admin/Banner')?>">Banner</a></li>
                        <li><a href="<?= site_url('Admin/Banner/web')?>">Nine Banner V. Web</a></li>
                        <li><a href="<?= site_url('Admin/Banner/hp')?>">Nine Banner V. Hp</a></li>
                        <li><a href="<?= site_url('Admin/Banner')?>">Product Slide</a></li>
                        <li><a href="<?= site_url('Admin/Social') ?>">Sosial Media</a></li>
                        <li><a href="app-ticket.html">Others</a></li>
                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li class="nav-small-cap">TRANSAKSI</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">DATA TRANSAKSI</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= site_url('Admin/Product/transaksi')?>">Transaksi</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
    <!-- End Bottom points-->
</aside>
