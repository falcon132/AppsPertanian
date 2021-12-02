<main id="main">
  <!-- ======= Contact Section ======= -->
  <div class="container">
    <div class="row mt-5">
      <h1><strong>BERITA TERKINI</strong></h1>
      <?php foreach ($berita as $berita) { ?>
        <div class="col-md-4">
          <div class="card" style="margin-bottom: 20px;">
            <img src="<?php echo base_url('assets/upload/image/' . $berita['gambar']) ?>">
            <div class="card-body">
              <h3><?php echo $berita['judul_berita'] ?></h3>
              <p class="card-text">
                <?php echo $berita['ringkasan'] ?>
              </p>
              <p>
                <a href="<?php echo base_url('berita/read/' . $berita['slug_berita']) ?>" class="btn btn-success">
                  <i class="fa fa-chevron-right"></i> Baca...
                </a>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

</main><!-- End #main -->