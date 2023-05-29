<section class="home-section">
    <div class="text">List Game</div>
    <?php foreach ($data['game'] as $game) : ?>
        <ul>
            <li><?= $game['judul']; ?></li>
            <li><?= $game['release']; ?></li>
            <li><?= $game['Genre']; ?></li>
            <li><?= $game['Platform']; ?></li>
            <li><?= $game['Pengembang']; ?></li>
            <li><?= $game['Penerbit']; ?></li>
            <li><?= $game['Gambar']; ?></li>
            <li><?= $game['Metascore']; ?></li>
        </ul>
    <?php endforeach ?>
</section>