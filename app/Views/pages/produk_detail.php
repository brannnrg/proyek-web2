<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<p><a href="<?= site_url('produk') ?>" style="color: #2563eb; text-decoration: none; font-weight: 500;">&larr; Kembali ke Katalog Produk</a></p>

<h1><?= esc($item['nama']) ?></h1>

<table class="info" style="margin-top: 16px; margin-bottom: 24px; width: 100%;">
    <tr>
        <th style="width: 25%;">Kategori</th>
        <td><span class="badge"><?= esc($item['kategori']) ?></span></td>
    </tr>
    <tr>
        <th>Harga</th>
        <td><b style="color: #1e3a8a; font-size: 1.2rem;"><?= esc($item['harga']) ?></b></td>
    </tr>
    <tr>
        <th>Stok Tersedia</th>
        <td><?= esc((string)$item['stok']) ?> unit</td>
    </tr>
    <tr>
        <th>Deskripsi Lengkap</th>
        <td><?= esc($item['deskripsi']) ?></td>
    </tr>
</table>

<a class="btn" href="<?= site_url('kontak') ?>">Pesan Sekarang / Tanya via Kontak</a>
<?= $this->endSection() ?>
