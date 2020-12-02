<div class="form-group">
  <label for="name">Nama Statistic</label>
  <input class="form-control" id="name" placeholder="Enter Nama Statistic" name="name" value="<?= set_value("name", null) ?? $whyUs->name ?>">
  <?= form_error("name", "<div class='danger text-danger'>", "</div>"); ?>
</div>
<div class="form-group">
  <label for="val">Value</label>
  <input class="form-control" id="val" placeholder="Enter Value" name="val" value="<?= set_value("val", null) ?? $whyUs->val ?>">
  <?= form_error("val", "<div class='danger text-danger'>", "</div>"); ?>
</div>