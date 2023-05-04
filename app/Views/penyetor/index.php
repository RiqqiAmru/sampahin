<?php
$this->extend('template');
$this->section('content');
?>

<small><img src="/img/pin.png" alt="pin"> Jemput di Rumah <?= $user['username']; ?></small>
<!-- buat card rounded border -->
<div class="blok">
  <table class="table">
    <tr>
      <td>
        a
      </td>
    </tr>
  </table>
</div>
<p>Saldo anda : Rp<?= number_format($user['saldo'], 0, ',', '.'); ?></p>
<p>sampah anda : (nanti ambil data dari total transaksi yang telah dicapai)</p>

<a href="penyetor/collectSampah">Setor</a>
<?php $this->endSection(); ?>