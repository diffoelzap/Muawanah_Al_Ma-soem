<nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <ul>
                        <li><a class="nav-link scrollto <?php if($this->uri->segment(1) == 'user' && $this->uri->segment(2) != 'profile' && $this->uri->segment(2) != 'product' && $this->uri->segment(2) != 'contact' && $this->uri->segment(2) != 'reseller'){echo 'active';}?>" href="<?= base_url('user')?>">HOME</a></li>
                        <li><a class="nav-link scrollto <?php if($this->uri->segment(1) == 'user' && $this->uri->segment(2) == 'profile'){echo 'active';}?>" href="<?= base_url('user/profile')?>">PROFILE</a></li>
                        <li><a class="nav-link scrollto <?php if($this->uri->segment(1) == 'user' && $this->uri->segment(2) == 'product'){echo 'active';}?>" href="<?= base_url('user/product')?>">PRODUK</a></li>
                        <li><a class="nav-link scrollto <?php if($this->uri->segment(1) == 'user' && $this->uri->segment(2) == 'contact'){echo 'active';}?>" href="<?= base_url('user/contact')?>">CONTACT</a></li>
                        <li><a class="nav-link scrollto <?php if($this->uri->segment(1) == 'user' && $this->uri->segment(2) == 'reseller'){echo 'active';}?>" href="<?= base_url('user/reseller')?>">RESELER</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url('karyawan')?>">KARYAWAN</a></li>
                    </ul>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <div class="header-social-links d-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>

        </div>
    </header>
    <!-- End Header -->