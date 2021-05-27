   <!-- ======= Hero Section ======= -->
   <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

            <?php
            foreach ($slide as $key => $value) {
            ?>
                <!-- Slide 1 -->
                <div class="carousel-item <?php if($value->id_slide == 1){echo 'active';}else{echo '';} ?>" style="background-image: url(<?php base_url()?>assets/slide/<?= $value->foto_slide ?>)">
                    <div class="carousel-container">
                        <div class="container">
                        </div>
                    </div>
                </div>

            <?php } ?>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container-fluid">

                <div class="section-title">
                    <h2>PT. Al Ma'soem Muawanah Madani</h2>
                    <h3>Air Minum Al Ma'soem dalam Kemasan</h3>
                    <p>100% Air mineral asli dari pegunungan ciremai yang di suling dengan menggunakan teknologi ramah lingkungan.</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 icon-box">
                                <div class="icon"><i class="ri-building-4-line"></i></div>
                                <h4 class="title"><a>DISTRIBUSI DAN PEMASARAN</a></h4>
                                <p class="description">Produk PT. Mu’awanah Al Ma’soem telah dikonsumsi oleh masyarakat umum dan instansi-instansi baik swasta maupun pemerintahan, dengan wilayah pemasaran sampai dengan saat ini baru mencakup seluruh Propinsi Jawa Barat, Banten
                                    dan Jakarta.</p>
                            </div>
                            <div class="col-lg-4 col-md-6 icon-box">
                                <div class="icon"><i class="ri-stack-line"></i></div>
                                <h4 class="title"><a>SISTEM PERGUDANGAN</a></h4>
                                <p class="description">PT. Muawanah Al Ma’soem menganut prinsip FIFO (First In First Out) untuk menjamin sirkulasi produk dalam gudang. Gudang memakai Hand Lift dan Conveyor yang dirancang untuk sistem In Line Loading – Un Loading. Gudang material
                                    terpisah dari area produksi dan area gudang produk jadi.</p>
                            </div>
                            <div class="col-lg-4 col-md-6 icon-box">
                                <div class="icon"><i class="ri-store-line"></i></div>
                                <h4 class="title"><a>SISTEM PEMASARAN</a></h4>
                                <p class="description">Lebih mengutamakan jaringan distribusi outlet intern yang tersebar di seluruh wilayah Jawa Barat, tetapi kami sangat membuka diri bekerja sama dengan pihak yang berhendak bermitra. Inovasi kami lakukan adalah dengan memajangkan
                                    produk kami di kanopi SPBU dan penawaran kerja sama pada para agen.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Services Section -->
    </main>
    <!-- End #main -->