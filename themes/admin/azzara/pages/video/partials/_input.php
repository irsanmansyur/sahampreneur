<div class="form-group">
  <label for="kategori_id">Kategori Video</label>
  <?php if (isset($kategori) && $kategori) : ?>
    <input hidden value="<?= $kategori->id; ?>" name="kategori_id">
    <input readonly value="<?= $kategori->name; ?>" class="form-control" />
  <?php else :; ?>
    <select class="form-control" name="kategori_id" id="kategori_id">
      <option value="">Select Kategori</option>
      <?php foreach ($kategories as $kategori) : ?>
        <option value="<?= $kategori->id; ?>" <?= set_value("kategori_id") ==  $kategori->id ? " selected" : ($video->kategori_id ==  $kategori->id ? " selected" : ''); ?>><?= $kategori->name; ?></option>
      <?php endforeach; ?>
    </select>
  <?php endif; ?>
  <?= form_error("kategori_id", "<div class='danger text-danger'>", "</div>"); ?>

</div>
<div class="form-group">
  <label for="title">Title Video</label>
  <input class="form-control" id="title" placeholder="Enter Title Video" name="title" value="<?= set_value("title", null) ?? $video->title ?>">
  <?= form_error("title", "<div class='danger text-danger'>", "</div>"); ?>
</div>
<div class="form-group">
  <label for="description">Keterangan Video</label>
  <input class="form-control" id="description" placeholder="Enter Keterangan Video" name="description" value="<?= set_value("description", null) ?? $video->description ?>">
  <?= form_error("description", "<div class='danger text-danger'>", "</div>"); ?>
</div>
<div class="form-group">
  <label for="no_urut">No. Urut Video</label>
  <input type="number" class="form-control" id="no_urut" placeholder="Enter No. Urut Video" name="no_urut" value="<?= set_value("no_urut", null) ?? $video->no_urut ?>">
  <?= form_error("no_urut", "<div class='danger text-danger'>", "</div>"); ?>
</div>
<div class="form-check">
  <label>Pilih Video atau Pdf</label><br>
  <label class="form-radio-label">
    <input class="form-radio-input" type="radio" name="optionsRadios" value="video" checked="">
    <span class="form-radio-sign">Video</span>
  </label>
  <label class="form-radio-label ml-3">
    <input class="form-radio-input" type="radio" name="optionsRadios" value="pdf">
    <span class="form-radio-sign">Pdf</span>
  </label>
</div>

<div class="form-group">
  <div class="col-md-7">
    <div class="" id="vid-input">
      <input type="text" name="video" class="form-control" placeholder="Id Video Youtube" value="<?= set_value("video", null) ?? @$video->file; ?>" id="video-inp">
      <?= form_error("video", "<div class='danger text-danger'>", "</div>"); ?>

    </div>
    <div class="form-group d-none" id="pdf-upload">
      <input type="file" name="video" class="change-video" id="customFile">
      <label class="custom-file-label" for="customFile">Pilih Pdf</label>
    </div>
  </div>

</div>
<?= $this->session->flashdata("video"); ?>
</div>

<script>
  var radios = document.getElementsByName('optionsRadios');

  for (var i = 0, length = radios.length; i < length; i++) {
    radios[i].addEventListener("change", (e) => {
      radioSelected(e.target);
    })
    if (radios[i].checked) {
      radioSelected(radios[i]);
    }


  }

  function radioSelected(radio) {
    if (radio.value === "pdf") {
      document.querySelector("#vid-input").classList.add("d-none");

      document.querySelector("#pdf-upload").classList.remove("d-none");
      document.querySelector("#video-inp").disabled = true;
      document.querySelector("#customFile").disabled = false;
    } else {
      document.querySelector("#pdf-upload").classList.add("d-none");
      document.querySelector("#vid-input").classList.remove("d-none");
      document.querySelector("#video-inp").disabled = false;
      document.querySelector("#customFile").disabled = true;
    }
  }
</script>