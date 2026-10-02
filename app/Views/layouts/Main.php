<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Web II') ?> | Web II</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <?= $this->include('partials/navbar') ?>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="footer">&copy; 2026 Pemrograman Web II</footer>
</body>
</html>