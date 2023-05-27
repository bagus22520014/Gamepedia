<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>List Game</h3>
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
        </div>
    </div>
</div>