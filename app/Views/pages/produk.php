<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h1><?= esc($title) ?></h1>
<p>Temukan berbagai perangkat dan aksesoris komputer terbaik untuk kebutuhan belajar dan kerja Anda.</p>

<div class="produk-grid">
    <?php foreach ($produk as $item): ?>
        <div class="produk-card">
            <h3><?= esc($item['nama']) ?></h3>
            <span class="badge"><?= esc($item['kategori']) ?></span>
            <p class="harga"><?= esc($item['harga']) ?></p>
            <p class="deskripsi-singkat"><?= esc(mb_strimwidth($item['deskripsi'], 0, 75, '...')) ?></p>
            <a class="btn" href="<?= site_url('produk/' . $item['id']) ?>">Lihat Detail &rarr;</a>
        </div>
    <?php endforeach ?>
</div>
<?= $this->endSection() ?>
