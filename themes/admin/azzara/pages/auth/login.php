<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?= $page_title; ?></title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

  <link rel="icon" href="<?= base_url("assets/img/logo/sahampreneur.ico"); ?>" type="image/x-icon" />


  <!-- Fonts and icons -->
  <script src="<?= $thema_folder; ?>assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        "families": ["Open+Sans:300,400,600,700"]
      },
      custom: {
        "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
        urls: ['<?= $thema_folder; ?>assets/css/fonts.css']
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?= $thema_folder; ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $thema_folder; ?>assets/css/azzara.min.css">
</head>

<body class="login">

  <div class="wrapper wrapper-login flex-column">

    <div class="container text-center">
      <img src="/assets/img/logo/sahampreneur1.png" alt="" class="img-fluid" style="padding: 0;margin-top: -20px;max-height: 91px;">
    </div>
    <div class="container container-login animated fadeIn">
      <div class="d-flex align-items-center">
        <a href="<?= base_url(); ?>" class="d-flex align-items-center">
          <svg style=" width: 30px;height:30px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
          </svg><b class="pl-2">Beranda</b>
        </a>
      </div>
      <h3 class="text-center">SIGN IN</h3>

      <?php $this->load->view($thema_load . "partials/_alert.php"); ?>

      <form action="<?= $form['action_login']; ?>" method="post">
        <div class="login-form">
          <div class="form-group form-floating-label">
            <input id="email" name="email" type="text" class="form-control input-border-bottom" required value="<?= set_value('email'); ?>">
            <label for="email" class="placeholder">Email</label>
            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group form-floating-label">
            <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
            <label for="password" class="placeholder">Password</label>
            <div class="show-password">
              <i class="flaticon-interface"></i>
            </div>
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="row form-sub m-0">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="rememberme">
              <label class="custom-control-label" for="rememberme">Ingat Saya</label>
            </div>

            <!-- <a href="#" class="link float-right">Forget Password ?</a> -->
          </div>
          <div class="form-action mb-3">
            <button type="submit" class="btn btn-primary btn-rounded btn-login">Masuk</button>
          </div>
          <div class="login-account">
            <span class="msg">Tidak Punya Akun ? </span>
            <a href="<?= base_url('register/user'); ?>" id="show-signup" class="link">Daftar Disini</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="<?= $thema_folder; ?>assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="<?= $thema_folder; ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="<?= $thema_folder; ?>assets/js/core/popper.min.js"></script>
  <script src="<?= $thema_folder; ?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?= $thema_folder; ?>assets/js/ready.js"></script>
  <script src="<?= $thema_folder; ?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 3000);
  </script>
</body>

</html>