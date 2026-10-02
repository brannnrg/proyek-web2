<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h1><?= esc($title) ?></h1>
<table class="info">
    <tr><th>Email</th><td><?= esc($email) ?></td></tr>
    <tr><th>Telepon</th><td><?= esc($telp) ?></td></tr>
    <tr><th>Alamat</th><td><?= esc($alamat) ?></td></tr>
</table>
<?= $this->endSection() ?>