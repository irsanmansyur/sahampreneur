<div class="row">
  <form action="<?= base_url("kalkulator/cagr"); ?>" method="post" id="cagr">
    <div class="col-12">
      <div class="card ">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr class="text-white bg-dark">
                  <th colspan="2" style="text-align: center;">Date</th>
                  <th></th>
                  <th>Value</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="bg-dark text-white">Start Value</td>
                  <td>
                    <select name="start_date" id="start_date" class="form-control" required>
                      <option value="" selected disabled>Pilih Tahun</option>
                      <?php for ($i = 1997; $i <= date("Y"); $i++) :; ?>
                        <option value="<?= $i; ?>" <?= set_value("start_date") == $i ? " selected" : ''; ?>><?= $i; ?></option>
                      <?php endfor; ?>
                    </select>
                    <?= form_error("start_date", "<small class='text-danger'>", "</small>"); ?>
                  </td>
                  <td style="text-align: right;"> </td>

                  <td>
                    <!-- <input type="text" class="form-control twoDgt" name="start_date_value" value="<?= set_value("start_date_value") ?>"> -->
                    <input type="text" class="form-control  rupiah" name="start_date_value" value="<?= set_value("start_date_value") ?>">
                    <?= form_error("start_date_value", "<small class='text-danger'>", "</small>"); ?>

                  </td>
                </tr>
                <tr>
                  <td class="bg-dark text-white">End Value</td>
                  <td>
                    <select name="end_date" id="end_date" class="form-control" required>
                      <option selected disabled value="">Pilih Tahun</option>
                      <?php if (set_value("start_date", false)) : ?>
                        <?php for ($i = set_value("start_date") + 1; $i <= date("Y") + 10; $i++) :; ?>
                          <option value="<?= $i; ?>" <?= set_value("end_date") == $i ? " selected" : ''; ?>><?= $i; ?></option>
                        <?php endfor; ?>
                      <?php endif; ?>
                    </select>
                    <?= form_error("end_date", "<small class='text-danger'>", "</small>"); ?>
                  </td>
                  <td style="text-align: right;"> </td>

                  <td>
                    <!-- <input type="number" class="form-control twoDgt" name="end_date_value" value="<?= set_value("end_date_value") ?>"> -->
                    <input class="form-control rupiah" name="end_date_value" value="<?= set_value("end_date_value") ?>">
                    <?= form_error("end_date_value", "<small class='text-danger'>", "</small>"); ?>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" class="bg-dark text-white">Years</td>
                  <td class="bg-danger text-white" id="cagr_year">
                    <?= @$yearss; ?>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" class="bg-dark text-white">Growth Rate</td>
                  <td class="bg-danger text-white">
                    <?= @$growthRate . "%"; ?>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" class="bg-dark text-white">Compound Annual Growth Rate (CAGR)</td>
                  <td class="bg-danger text-white align-right">
                    <?= @$compoundAnnual . "%"; ?>
                  </td>
                </tr>
                <tr>
                  <td colspan="4">
                    <input type="submit" class="form-control bg-primary text-white"" name=" cagr" value="Hitung">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<script>
  let elStartCagr = document.querySelector("#start_date");
  let elEndCagr = document.querySelector("#end_date");
  let elYearCagr = document.querySelector("#cagr_year");
  elStartCagr.addEventListener("change", () => {
    if (elStartCagr.value !== '') {
      let html = '<option selected disabled>Pilih Tahun</option>';
      for (let i = parseInt(elStartCagr.value) + 1; i <= parseInt(new Date().getFullYear()) + 10; i++) {
        html += `<option value="${i}">${i}</option>`;
      }
      elEndCagr.innerHTML = html;
    } else {
      elEndCagr.innerHTML = `<option selected disabled>Pilih Tahun</option>`;
    }
    elYearCagr.innerHTML = "0";
  });
  elEndCagr.addEventListener("change", () => {
    if (elEndCagr.value !== '') {
      elYearCagr.innerHTML = (parseInt(elEndCagr.value) - parseInt(elStartCagr.value)) + "";
    } else {
      elYearCagr.innerHTML = "0";
      console.log("kosong");
    }

  });



  let rupiahs = document.querySelectorAll(".rupiah");
  rupiahs.forEach(rup => {
    rup.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rup.value = formatRupiah(this.value, "Rp. ");
    });
  })
</script>