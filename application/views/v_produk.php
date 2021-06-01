<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container-fluid">
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

    

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio ">
      <div class="container">

        <div class="section-title">
          <h1>Produk Air Mineral Al Masoem dalam Kemasan</h1>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">fist brand</li>
              <li data-filter=".filter-card">second brand</li>
            </ul>
          </div>
        </div>

       <?php foreach ($first_brand as $key => $value) { ?> 
        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?= base_url('assets/brand/'.$value->foto_brand) ?>" class="img-fluid" alt="">
                <a href="<?= base_url('assets/brand/'.$value->foto_brand) ?>" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html"><?= $value->nama_brand ?></a></h4>
                <p><?= $value->deskripsi_brand ?></p>
              </div>
            </div>
          </div>
        <?php } ?>

        <?php foreach ($second_brand as $key => $value) { ?>  
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?= base_url('assets/brand/'.$value->foto_brand) ?>" class="img-fluid" alt="">
                <a href="<?= base_url('assets/brand/'.$value->foto_brand) ?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html"><?= $value->nama_brand ?></a></h4>
                <p><?= $value->deskripsi_brand ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->