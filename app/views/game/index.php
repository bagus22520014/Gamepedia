<section class="home-section">
    <div class="home-content">
        <div class="wrapper">

            <h2><strong>All Games</strong></h2>

            <div class="cards">
                <?php foreach ($data['game'] as $game) : ?>
                    <a href="">
                        <figure class="card">
                            <img src=" <?= $game['Gambar']; ?>" />
                            <figcaption><?= $game['judul']; ?></figcaption>
                        </figure>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</section>