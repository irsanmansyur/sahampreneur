<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view($thema_load . "components/head.php"); ?>
</head>

<body>
  <?php $this->load->view($thema_load . "components/header.php") ?>

  <main id="main" style="margin-top:110px">
    <div class="container">
      <!--Author      : @arboshiki-->
      <div class="card mb-4">
        <div class="card-header">
          <header>
            <div class="row">
              <div class="col">
                <a target="_blank" href="<?= base_url(); ?>">
                  <img style="height: 105px" src="<?= base_url("assets/img/logo/sahampreneur1.png"); ?>" data-holder-rendered="true" />
                </a>
              </div>
              <div class="col company-details">
                <h2 class="name">
                  <a target="_blank" href="<?= base_url(); ?>">
                    <b> <?= $settings->name_app; ?> </b>
                  </a>
                </h2>
                <div><?= $settings->Alamat; ?></div>
                <!-- <div>(123) 456-789</div> -->
                <!-- <div>company@example.com</div> -->
              </div>
            </div>
          </header>
        </div>
        <div class="card-body bg-light">
          <div class="row contacts">
            <div class="col invoice-to ">
              <div class="text-gray-light"><b>INVOICE TO</b></div>
              <h2 class="to"><?= user()->name; ?></h2>
              <!-- <div class="address"><?= ''; ?></div> -->
              <div class="email"><a href="mailto:john@example.com"><?= user()->email; ?></a></div>
            </div>
            <div class="col invoice-details">
              <h1 class="invoice-id">INVOICE</h1>
              <div class="date">Tanggal Pembayaran : <?= date("d/m/Y", isset($pembayaran->created_at) ? strtotime($pembayaran->created_at) : time()); ?></div>
              <!-- <div class="date">Due Date: 30/10/2018</div> -->
            </div>
          </div>
          <hr>
          <div class="row details">
            <div class="col">
              <h4 class="card-title"><b>Online Course & Kalkulator Sahampreneur</b></h4>
            </div>
            <div class="col">
              <h4><b>Jumlah Bayar : <?= rupiah($settings->harga_member); ?></b>
              </h4>
            </div>
          </div>
          <hr>
          </hr>
          <div class="row details">
            <div class="col">
              <h6 class="card-title">
                <center>Kirim Pembayaran ke : (Pilih Salah Satu)</center>
              </h6>
            </div>
          </div>

          <div class="table-responsive">
            <table id="basic-datatables" class="table table-hover display table table-striped table-hover">
              <tbody>
                <tr>
                  <td scope="col" style="vertical-align: middle;">Nama Bank</td>
                  <td scope="col" style="vertical-align: middle;">No. Rekening | Atas Nama (A/N)</td>
                  <td> </td>
                </tr>
                <?php foreach ($banks as $bank) : ?>
                  <tr>
                    <td scope="col" style="vertical-align: middle;"><?= $bank->rek; ?></td>
                    <td scope="col" style="vertical-align: middle;"><?= $bank->name; ?></td>
                    <td><img src="<?= $bank->takeImage(); ?>" alt="" style="width:100px;height:100px"> </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <hr>
          <?php if ($pembayaran) : ?>
            <center>Status Pesanan
              <?php if ($pembayaran->status == 2) : ?>
                <p class="pt-4"><button class="btn btn-danger">Pembayaran di Tolak</button></p>

                <p class="py-1">Dengan Alasan : <b><?= $pembayaran->alasan; ?></b></p>
                <p class="text-danger">Mohon Ganti Bukti Pembayaran</p>
              <?php elseif ($pembayaran->status === "1") :; ?>
                <p class="py-4"><button class="btn btn-success">Telah Diverifikasi</button></p>
              <?php else :; ?>
                <p class="py-4"><button class="btn btn-warning">Sedang Diverifikasi</button></p>
              <?php endif; ?>
            </center>

          <?php endif; ?>
          <?php if (!$pembayaran || $pembayaran->status !== "1") : ?>
            <hr>
            <?php $this->load->view($thema_load . "components/dropzone/bootstrap.php"); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </main>

  <?php $this->load->view($thema_load . "components/footer.php"); ?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <div id="preloader"></div>

  <?php $this->load->view($thema_load . "components/js_library.php"); ?>

</body>

</html>