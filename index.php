<h1>Mahasiswa</h1>
<ul>
    <?php foreach ($mahasiswa as $m) : ?>
        <li><?= esc($m['nama']) ?> (<?= esc($m['nim']) ?>, <?= esc($m['jurusan']) ?>, <?= esc($m['angkatan']) ?>)</li>
    <?php endforeach; ?>
</ul>
<a href="<?php echo site_url('mahasiswa/create'); ?>">Create new mahasiswa</a>
