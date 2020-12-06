<!--==========================
    Footer
  ============================-->
<footer id="footer" class="section-bg">
  <div class="footer-top">
    <div class="container">

      <div class="row">

        <div class="col-lg-6">

          <div class="row">

            <div class="col-sm-6">

              <div class="footer-info">
                <h3>Earnings Disclaimer</h3>

                Disclaimer : Tidak ada Proyeksi, Janji, atau Pernyataan Penghasilan.
                <hr>
                <p>
                  Anda mengakui dan setuju bahwa kami tidak memberikan implikasi, jaminan, janji, saran, proyeksi, representasi atau jaminan apapun kepada Anda tentang prospek atau pendapatan di masa depan, atau bahwa Anda akan mendapatkan uang, sehubungan dengan pembelian produk Sahampreneur, dan itu kami tidak mengizinkan proyeksi, janji, atau representasi seperti itu dari orang lain.</p>
              </div>

            </div>

            <div class="col-sm-6">

              <div class="footer-links">
                <h4>Hubungi kami</h4>
                <p>
                  <strong>Phone : </strong><?= @$settings->phone_number; ?><br>
                  <strong>Email : </strong> <?= @$settings->email; ?><br>
                </p>
              </div>

              <div class="social-links">
                <a href="<?= @$settings->facebook_link; ?>" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="<?= @$settings->instagram_link; ?>" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="<?= @$settings->telegram_link; ?>" class="telegram" target="_blank"><i class="fa fa-telegram"></i></a>
              </div>

            </div>

          </div>

        </div>

        <div class="col-lg-6">

          <div class="form">

            <h4>Apa ada keluhan atau masukan anda?</h4>
            <p>Kirim Keluhan atau Masukan anda disini.</p>
            <form action="api/kirim/masukan" method="post" id="myForm" name="myForm" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4|maxlen:50" data-msg="Nama tidak boleh melebihi 50 karakter" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email|maxlen:100" data-msg="Email harus valid dan tidak boleh melebihi 100 karakter" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4|maxlen:100" data-msg="Subject tidak boleh melebihi 100 karakter" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="minlen:4|maxlen:100" data-msg="Pesan tidak boleh melebihi 1000 karakter" placeholder="Pesan"></textarea>
                <div class="validation"></div>
              </div>

              <div id="sendmessage" style="background-color: green;">Masukan Telah di kirim!</div>
              <div id="errormessage"></div>
              <div class="text-center"><button type="submit" title="Send Message">Kirim Pesan</button></div>
            </form>
          </div>

        </div>



      </div>

    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>Sahampreneur</strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
      <!-- Designed by <a>Sahampreneur</a> -->
      <a href="https://instagram.com/acien.id?igshid=1jj4590k4edzv">Acien Global Indonesia ©️ 2020 Custom WEB Developer</a>
    </div>
  </div>
</footer><!-- #footer -->