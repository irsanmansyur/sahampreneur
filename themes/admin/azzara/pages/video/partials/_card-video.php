<!--Card-->
<div class="card">
  <!--Card image-->
  <div class="card-header flex align-items-center justify-content-center text-center">
    <?php if (strpos($video->file, ".pdf") === false) : ?>
      <!-- <video class="img-fluid video-here" controls playsinline muted loop>
      <source src="<?= base_url("assets/video/{$video->file}"); ?>" type="video/mp4">
    </video> -->
      <span>
        <img src="<?= base_url("assets/img/icon/video.png"); ?>" alt="" style="height:200px">
      </span>
    <?php else :; ?>
      <!-- <embed src="<?= base_url("assets/video/{$video->file}") ?>" class="img-fluid video-here"> -->
      <span>
        <img src="<?= base_url("assets/img/icon/pdf.png"); ?>" alt="" style="height:200px">
      </span>
    <?php endif; ?>
  </div>
  <!--Card content-->
  <div class="card-body">
    <!--Title-->
    <h4 class="card-title"><?= $video->title; ?></h4>
    <!--Text-->
    <p class="card-text"><?= $video->description; ?></p>
    <?php if (!isset($kategori)) : ?>
      <b>Kategori : </b> <a href="<?= base_url("admin/video/kategori/{$video->kategori()->id}"); ?>" class="badge badge-primary"><?= $video->kategori()->name; ?></a>
    <?php endif; ?>
  </div>
  <div class="card-footer">
    <a href="<?= base_url("admin/video/edit/{$video->id}" . (isset($kategori) && $kategori ? "/{$kategori->id}" : '')); ?>" class="btn btn-secondary">Edit</a>
    <a href="<?= base_url("admin/video/delete/{$video->id}"); ?>" class="delete btn btn-danger">Delete</a>
  </div>
</div>
<!--/.Card-->