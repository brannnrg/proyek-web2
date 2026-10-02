<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h1>Selamat Datang</h1>
<p>Ini demo CodeIgniter 4: satu layout, satu navbar, tiga halaman.</p>
<p>Alur request: Route &rarr; Controller &rarr; View.</p>
<a class="btn" href="<?= site_url('about') ?>">Tentang Kami</a>
<?= $this->endSection() ?>