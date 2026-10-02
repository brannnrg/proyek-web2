<?php $uri = service('uri')->getPath(); ?>
<nav class="navbar">
    <a class="brand" href="<?= site_url('/') ?>">Web II</a>
    <ul>
        <li><a href="<?= site_url('/') ?>" class="<?= ($uri === '/' || $uri === '') ? 'active' : '' ?>">Home</a></li>
        <li><a href="<?= site_url('about') ?>" class="<?= ($uri === 'about') ? 'active' : '' ?>">About</a></li>
        <li><a href="<?= site_url('produk') ?>" class="<?= (str_contains($uri, 'produk')) ? 'active' : '' ?>">Produk</a></li>
        <li><a href="<?= site_url('kontak') ?>" class="<?= ($uri === 'kontak') ? 'active' : '' ?>">Kontak</a></li>
    </ul>
</nav>