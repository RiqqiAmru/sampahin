<?php
$this->extend('template');
$this->section('content');
?>


<p>ini nanti nampilin dashboard milik penyetor</p>

<p>jemput di rumah <?= $user['username']; ?></p>
<p>Saldo anda : Rp<?= number_format($user['saldo'], 0, ',', '.'); ?></p>
<p>sampah anda : (nanti ambil data dari total transaksi yang telah dicapai)</p>

<a href="penyetor/collectSampah">Setor</a>
<?php $this->endSection(); ?>