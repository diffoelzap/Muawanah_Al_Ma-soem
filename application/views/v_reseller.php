   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>Reseller</h2>
            <p>Isi Form di bawah untuk menjadi reseller</p>
          </div>

          <div class="row mt-5 justify-content-center">
            <div class="col-lg-12">
              <?php 
                    //notifikasi form kosong
            echo validation_errors(' <div class="alert alert-warning alert-dismissible" role="alert">
                                                
            <strong>Peringatan! </strong>','</div>');
            
            if ($this->session->flashdata('error')) 
            {
            echo ' <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>Sukses! </strong>'.$this->session->flashdata('error');
            echo '</div>';
            }
            if ($this->session->flashdata('pesan')) 
            {
            echo ' <div class="alert alert-success alert-dismissible" role="alert">
            <strong>Sukses! </strong>'.$this->session->flashdata('pesan');
            echo '</div>';
            }
              echo form_open('user/reseller');
              ?>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="nama_reseller" class="form-control" id="name" placeholder="Your Name">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email_reseller" id="email" placeholder="Your Email">
                  </div>
                </div>
                <div class="row"><br>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="telepon_reseller" class="form-control" id="phone" placeholder="Your Phone">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="Address" class="form-control" name="alamat_reseller" id="Address" placeholder="Your Address">
                    </div>
                </div>
                
                <div class="form-group mt-3">
                  <textarea class="form-control" name="pesan_reseller" rows="5" placeholder="Message"></textarea>
                </div>
                <hr>
                <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
                <?php echo form_close() ?>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <script>
     window.setTimeout(function() {
        $(".alert").fadeTo(500,0).slideUp(500,function() {
            $(this).remove();
            });
    },2000)
</script>