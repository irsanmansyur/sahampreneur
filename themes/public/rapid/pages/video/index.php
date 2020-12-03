<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view($thema_load . "components/head.php"); ?>

</head>

<body>
  <?php $this->load->view($thema_load . "components/header.php") ?>
  <!--==========================
    Intro Section
  ============================-->

  <main id="main" class='mt-5 mn-vh-100'>
    <div class="container">
      <div class="row">
        <div class="col-md-8 my-5">
          <div class="card">
            <!--Card image-->
            <video controlsList="nodownload" class="img-fluid video-here" controls autoplay id="videoPlay" data-current="video<?= $kategories[0]->videos()[0]->id; ?>">
              <source src="<?= base_url("assets/video/{$kategories[0]->videos()[0]->file}"); ?>" type="video/mp4">
            </video>
          </div>
        </div>
        <div class="col-md-4 my-5">
          <!--Accordion wrapper-->
          <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true" style="max-height: 75vh;overflow-y: scroll;">

            <?php foreach ($kategories as $kategori) : ?>
              <!-- Accordion card -->
              <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingOne1">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collaps<?= $kategori->id; ?>" aria-expanded="true" aria-controls="collaps<?= $kategori->id; ?>">
                    <span class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">
                        <?= $kategori->name; ?>
                      </h5>
                      <span class="badge badge-primary badge-pill"><?= $kategori->countVideo(); ?></span>
                    </span>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collaps<?= $kategori->id; ?>" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                  <ul class="list-group">
                    <?php foreach ($kategori->videos() as $video) : ?>
                      <a id="video<?= $video->id; ?>" data-start="0" class="video-select list-group-item d-flex align-items-center" href="#videoPlay" data-url="<?= base_url("assets/video/{$video->file}"); ?>">
                        <!-- <svg style="width: 35px;height:35px" viewBox="0 0 135 140" xmlns="http://www.w3.org/2000/svg">
                          <rect y="10" width="15" height="120" rx="6">
                            <animate attributeName="height" begin="0.5s" dur="2s" values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear" repeatCount="indefinite"></animate>
                            <animate attributeName="y" begin="0.5s" dur="2s" values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear" repeatCount="indefinite"></animate>
                          </rect>
                          <rect x="30" y="10" width="15" height="120" rx="6">
                            <animate attributeName="height" begin="0.25s" dur="2s" values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear" repeatCount="indefinite"></animate>
                            <animate attributeName="y" begin="0.25s" dur="2s" values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear" repeatCount="indefinite"></animate>
                          </rect>
                          <rect x="60" width="15" height="140" rx="6">
                            <animate attributeName="height" begin="0s" dur="2s" values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear" repeatCount="indefinite"></animate>
                            <animate attributeName="y" begin="0s" dur="2s" values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear" repeatCount="indefinite"></animate>
                          </rect>
                          <rect x="90" y="10" width="15" height="120" rx="6">
                            <animate attributeName="height" begin="0.25s" dur="2s" values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear" repeatCount="indefinite"></animate>
                            <animate attributeName="y" begin="0.25s" dur="2s" values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear" repeatCount="indefinite"></animate>
                          </rect>
                          <rect x="120" y="10" width="15" height="120" rx="6">
                            <animate attributeName="height" begin="0.5s" dur="2s" values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear" repeatCount="indefinite"></animate>
                            <animate attributeName="y" begin="0.5s" dur="2s" values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear" repeatCount="indefinite"></animate>
                          </rect>
                        </svg> -->
                        <img src="<?= base_url("assets/img/icon/play.png"); ?>" alt="play" class="rounded rounded-cirle mr-2" style="width: 30px;height:30px;">
                        <!-- <span style="width: 45px;height:45px;border-radius:50%;background:black;text-align:center;padding-left:5px;margin-right:10px" class="d-flex align-items-center justify-content-center">
                          <i class="fa fa-play" style="font-size:30px;color:blue ;margin-left:10px"></i>
                        </span> -->
                        <?= $video->title; ?>
                      </a>
                    <?php endforeach; ?>
                  </ul>
                </div>

              </div>

            <?php endforeach; ?>
          </div>
          <!-- Accordion wrapper -->
        </div>
      </div>
    </div>

  </main>
  <div class="row">
    <div class=""></div>
  </div>

  <?php $this->load->view($thema_load . "components/footer.php"); ?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <div id="preloader"></div>

  <?php $this->load->view($thema_load . "components/js_library.php"); ?>
  <script src="<?= $thema_folder . "pages/video/partials/main.js"; ?>"></script>

</body>

</html>