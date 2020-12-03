<!--==========================
    Services Section
  ============================-->
<section x-data="{ open: false }" id="services" class="section-bg">
  <div class="container">

    <header class="section-header">
      <h3>Kategori Video</h3>
      <!-- <p>Beberapa kategori video menarik yang bisa anda dapatkan ketika menjadi anggota premiun di situs kami..!</p> -->
    </header>
    <div class="row justify-content-center">
      <?php
      $background_colors = array('#00A4CCFF', '#F95700FF', '#ADEFD1FF', '#00203FFF', '#D6ED17FF', "#ED2B33FF", "#97BC62FF", "#2C5F2D", "#00539CFF");
      foreach ($kategories as $key => $kategori) : ?>
        <?php if ($key < 6) : ?>
          <div class="col-md-6 col-lg-4  wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <img src="<?= $kategori->takeImage(); ?>" style="margin: 0 auto 15px auto;padding: 12px;display: inline-block;text-align: center;border-radius: 50%;width: 90px;height: 90px;background-color:<?= $background_colors[array_rand($background_colors)]; ?>">
              <h4 class="title"><a href=""><?= $kategori->name; ?></a></h4>
              <p class="description"><?= $kategori->keterangan; ?></p>
            </div>
          </div>
        <?php else :; ?>
          <div x-show="open" class="col-md-6 col-lg-4  wow bounceInUp" data-wow-duration="1.4s"=>
            <div class="box">
              <img src="<?= $kategori->takeImage(); ?>" style="margin: 0 auto 15px auto;padding: 12px;display: inline-block;text-align: center;border-radius: 50%;width: 90px;height: 90px;background-color:<?= $background_colors[array_rand($background_colors)]; ?>">
              <h4 class="title"><a href=""><?= $kategori->name; ?></a></h4>
              <p class="description"><?= $kategori->keterangan; ?></p>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <div class="text-right">
      <button @click="open=true" x-show="!open" class="btn btn-secondary btn-rounded">Lihat Kategori Selengkapnya</button>
      <button @click="open=false" x-show="open" class="btn btn-secondary btn-rounded">Tampilkan Lebih Sedikit</button>
      <a href="<?= base_url("video"); ?>" class="btn btn-primary btn-rounded">Cek Video Selengkapnya</a>
    </div>
  </div>
</section><!-- #services -->