<section>
    <div class="home-section">
        <div class="home-content">
            <div class="alert-content">
                <?php Flasher::flash(); ?>
            </div>
            <div class="wrapper">
                <h2><strong><?= $data['game']['judul']; ?></strong></h2>
                <div class="aksi">
                    <a href="<?= BASEURL; ?>/game/hapus/<?= $data['game']['id']; ?>">
                        <div id="" class="button-hapus" onclick="return confirm('Are you sure you want to delete this game?');">
                            <i class='bx bxs-trash-alt'></i>
                        </div>
                    </a>
                    <div id="hireBtn" class="button-ubah">
                        <i class='bx bx-edit-alt'></i>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="popup-outer">
        <div class="popup-box">
            <header>GamePedia</header>
            <i id="close" class="bx bx-x close"></i>

            <form action="<?= BASEURL; ?>/game/tambah" method="post">

                <div class="form first">
                    <div class="details personal">
                        <span class="title">Add Games</span>

                        <div class="fields">

                            <div class="input-field">
                                <label>Game Titles</label>
                                <input type="text" id="judul" name="judul" placeholder="Enter Game Titles" required>
                            </div>

                            <div class="input-field">
                                <label>Release Date</label>
                                <input type="date" id="release" name="release" placeholder="Enter Release Date" required>
                            </div>

                            <div class="input-field">
                                <label>Genre</label>
                                <input type="text" id="Genre" name="Genre" placeholder="Enter Genre">
                            </div>

                            <div class="input-field">
                                <label>Platform</label>
                                <input type="text" id="Platform" name="Platform" placeholder="Enter Platform">
                            </div>

                            <div class="input-field">
                                <label>Developer</label>
                                <input type="text" id="Pengembang" name="Pengembang" placeholder="Enter Developer" required>
                            </div>

                            <div class="input-field">
                                <label>Publisher</label>
                                <input type="text" id="Penerbit" name="Penerbit" placeholder="Enter Publisher" required>
                            </div>

                            <div class="input-field">
                                <label>Image</label>
                                <input type="text" id="Gambar" name="Gambar" placeholder="Enter Image" required>
                            </div>

                            <div class="input-field">
                                <label>Score</label>
                                <input type="text" id="Metascore" name="Metascore" placeholder="Enter Score" required>
                            </div>

                        </div>
                    </div>

                    <div class="button">
                        <button id="close" class="cancel">Cancel</button>
                        <button type="submit" class="send">Send</button>
                    </div>
            </form>
        </div>
    </div>
</section>

<script>
    const section = document.querySelector("section"),
        hireBtn = section.querySelector("#hireBtn"),
        closeBtn = section.querySelectorAll("#close");

    hireBtn.addEventListener("click", () => {
        section.classList.add("show");
    });

    closeBtn.forEach(cBtn => {
        cBtn.addEventListener("click", () => {
            section.classList.remove("show");
        });
    });
</script>