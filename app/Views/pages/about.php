<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h1><?= esc($title) ?></h1>
<p>Kami tim kecil yang belajar membangun aplikasi web dengan CodeIgniter 4.</p>
<h2>Tim</h2>
<ul>
<?php foreach ($tim as $nama): ?>
    <li><?= esc($nama) ?></li>
<?php endforeach ?>
</ul>
<?= $this->endSection() ?>