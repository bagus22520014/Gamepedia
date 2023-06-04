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
                    <div id="ubahbtn" class="button-ubah ubahbtn" data-id="<?= $data['game']['id']; ?>">
                        <i class='bx bx-edit-alt'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup-outer">
        <div class="popup-box">
            <header>GamePedia</header>

            <form action="<?= BASEURL; ?>/game/ubah" method="post" id="form-ubah">
                <input type="hidden" name="id" id="id">

                <div class="form first">
                    <div class="details personal">
                        <span class="title">Change Data Games</span>

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
                        <button type="button" id="close" class="cancel">Cancel</button>
                        <button type="submit" class="send">Change</button>
                    </div>
            </form>
        </div>
    </div>
</section>

<script>
    const section = document.querySelector("section");
    const ubahbtn = section.querySelector("#ubahbtn");
    const closeBtn = section.querySelector("#close");

    ubahbtn.addEventListener("click", () => {
        section.classList.add("show");

        const id = ubahbtn.getAttribute("data-id");

        $.ajax({
            url: 'http://localhost/list_game/public/game/getubah',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#judul').val(data.judul);
                $('#release').val(data.release);
                $('#Genre').val(data.Genre);
                $('#Platform').val(data.Platform);
                $('#Pengembang').val(data.Pengembang);
                $('#Penerbit').val(data.Penerbit);
                $('#Gambar').val(data.Gambar);
                $('#Metascore').val(data.Metascore);
                $('#id').val(data.id);
            }
        });
    });

    closeBtn.addEventListener("click", () => {
        section.classList.remove("show");
    });

    const form = document.getElementById("form-ubah");
    form.addEventListener("submit", (event) => {
        event.preventDefault();

        const formData = new FormData(form);
        const formAction = form.getAttribute("action");

        $.ajax({
            url: formAction,
            method: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });

        section.classList.remove("show");
    });

    const cancelBtn = section.querySelector(".cancel");
    cancelBtn.addEventListener("click", () => {
        section.classList.remove("show");
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>