<!-- ======= About Section ======= -->
<section id="about" class="about" >
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" style="background: none;">
          <video width="700" height="700" controls>
              <source src="<?= base_url('assets/video/'.$video->video_profile)?>" type="video/mp4">
              <source src="movie.ogg" type="video/ogg">
            </video>
          </div>
          <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

         <!-- ======= Team Section ======= -->
         <section id="team" class="team section-bg">
          <div class="container-fluid">
    
            <div class="section-title">
              <h2>PT. AL MASOEM MUAMALAH MADANI</h2>
              <h3>Foto Keluarga Besar Al Ma'soem</h3>
              <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>
    
            <div class="row justify-content-center">
              <div class="col-xl-4">
                <div class="row justify-content-center">
                  <div class="col-xl-12 col-lg-6 col-md-6">
                    <div class="member">
                      <img src="<?= base_url() ?>assets/img/team/keluarga.jpg" class="img-fluid justify-content-center" alt="">
                    </div>
                  </div> <!-- End Member Item -->
                </div>
              </div>
            </div>
    
          </div>
        </section><!-- End Team Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container-fluid">

        <div class="section-title">
          <h2>PT. AL MASOEM MUAMALAH MADANI</h2>
          <h3>Gudang dan Pabrik</h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member">
                  <img src="<?= base_url() ?>assets/img/team/mesin1.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Walter White</h4>
                      <span>Chief Executive Officer</span>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

              <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                <div class="member">
                  <img src="<?= base_url() ?>assets/img/team/mesin2.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Sarah Jhonson</h4>
                      <span>Product Manager</span>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

              <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                <div class="member">
                  <img src="<?= base_url() ?>assets/img/team/kardus.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>William Anderson</h4>
                      <span>CTO</span>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

              <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                <div class="member">
                  <img src="<?= base_url() ?>assets/img/team/galon.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Amanda Jepson</h4>
                      <span>Accountant</span>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

         <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container-fluid">
        <div class="section-title">
          <h2>PT. AL MASOEM MUAMALAH MADANI</h2>
          <h3>Struktur Organisasi</h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row justify-content-center">

          <?php foreach ($pegawai as $key => $value) {
           ?>
              <div class="col-xl-2 col-lg-4 col-md-6" data-wow-delay="0.1s">
                <div class="member">
                  <img src="<?= base_url('assets/pegawai/'.$value->foto_pegawai) ?>" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4><?= $value->nama_pegawai?></h4>
                      <span><?= $value->divisi_pegawai?></span>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->
          
          <?php } ?>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->



  </main><!-- End #main -->