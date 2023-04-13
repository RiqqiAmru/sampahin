<?php
$this->extend('template');
$this->section('content');
?>

<section>
  <h1>Setor Sampah</h1>
  <p>ini akan menampilkan proses setor sampah dari penyetor</p>
  <a href="../dashboard">beck</a> <br>


  <form action="../penyetor/store" method="post" id="form">

    <label for="kecil">kecil:</label>
    <div>
      <button class="minus" data-target="kecil">-</button>
      <input type="number" id="kecil" name="kecil" value="0" min="0" required>
      <button class="plus" data-target="kecil">+</button>
    </div>

    <label for="sedang">sedang:</label>
    <div>
      <button class="minus" data-target="sedang">-</button>
      <input type="number" id="sedang" name="sedang" value="0" min="0">
      <button class="plus" data-target="sedang">+</button>
    </div>

    <label for="besar">besar:</label>
    <div>
      <button class="minus" data-target="besar">-</button>
      <input type="number" id="besar" name="besar" value="0" min="0">
      <button class="plus" data-target="besar">+</button>
    </div>

    <label for="gelas">gelas:</label>
    <div>
      <button class="minus" data-target="gelas">-</button>
      <input type="number" id="gelas" name="gelas" value="0" min="0">
      <button class="plus" data-target="gelas">+</button>
    </div>

    <span><b>Total</b></span>
    <span id="total"></span>
    <span><b>item</b></span>
    <br>

    <label for='info'>info:</label>
    <input type="text" name="info" id="info"><br>

    <label for="waktu">Waktu Penjemputan</label>
    <input type="datetime-local" name="waktu" id="waktu"><br>

    <label for="deskripsi">deskripsi </label>
    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea><br>

    <label for="pemulung">Pilih pemulung </label>
    <select name="pemulung" id="pemulung">
      <?php foreach ($pemulung as $p) : ?>
      <option value="<?= $p['user_id']; ?>"><?= $p['username'] . ' : ' . $p['alamat'] ?></option>
      <?php endforeach ?>
    </select>

    <button type="submit">panggil</button>
  </form>
</section>




<script>
var plusBtns = document.querySelectorAll(".plus");
var minusBtns = document.querySelectorAll(".minus");
var totalEl = document.getElementById("total");

plusBtns.forEach(function(btn) {
  btn.addEventListener("click", function() {
    var target = this.dataset.target;
    var input = document.getElementById(target);
    input.value = parseInt(input.value) + 1;
    updateTotal();
  });
});

minusBtns.forEach(function(btn) {
  btn.addEventListener("click", function() {
    var target = this.dataset.target;
    var input = document.getElementById(target);
    if (parseInt(input.value) > 0) {
      input.value = parseInt(input.value) - 1;
      updateTotal();
    }
  });
});

function updateTotal() {
  var kecil = document.getElementById("kecil").value;
  var sedang = document.getElementById("sedang").value;
  var besar = document.getElementById("besar").value;
  var gelas = document.getElementById("gelas").value;
  var total = parseInt(kecil) + parseInt(sedang) + parseInt(besar) + parseInt(gelas);
  totalEl.innerHTML = total;
}

var form = document.getElementById("form");
form.addEventListener("submit", function(event) {
  event.preventDefault();
});
</script>



<?php $this->endSection(); ?>