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

                <div class="detail-video">
                    <div id="player"></div>
                </div>

                <div class="detail-content">
                    <div class="detail-header">
                        <p><strong>Detail</strong></p>
                    </div>
                    <div class="detail">
                        <p><strong>Release Date:</strong> <?= $data['game']['release_date']; ?></p>
                        <p><strong>Developer:</strong> <?= $data['game']['Pengembang']; ?></p>
                        <p><strong>Publisher:</strong> <?= $data['game']['Penerbit']; ?></p>
                        <p><strong>Score:</strong> <?= $data['game']['Metascore']; ?>/10</p>
                    </div>
                </div>

                <div class="detail-content">
                    <div class="detail-header">
                        <p><strong>Genre</strong></p>
                    </div>
                    <div class="detail">
                        <p><?= $data['game']['Genre']; ?></p>
                    </div>

                </div>
                <div class="detail-content">
                    <div class="detail-header">
                        <p><strong>Platform</strong></p>
                    </div>
                    <div class="detail">
                        <p><?= $data['game']['Platform']; ?></p>
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
                                        <input type="date" id="release_date" name="release_date" placeholder="Enter Release Date" required>
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
                                        <label>Trailer</label>
                                        <input type="text" id="Video" name="Video" placeholder="Enter Trailer" required>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
                $('#release_date').val(data.release_date);
                $('#Genre').val(data.Genre);
                $('#Platform').val(data.Platform);
                $('#Pengembang').val(data.Pengembang);
                $('#Penerbit').val(data.Penerbit);
                $('#Gambar').val(data.Gambar);
                $('#Video').val(data.Video);
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


    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '472.5',
            width: '840',
            videoId: getYouTubeVideoId('<?= $data['game']['Video']; ?>'),
            playerVars: {
                playsinline: 1,
                autoplay: 1,
                controls: 1,
                modestbranding: 1,
                rel: 0,
                showinfo: 0
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function getYouTubeVideoId(url) {
        var videoId = '';
        var regex = /^https:\/\/youtu\.be\/([\w-]+)$/;
        var match = regex.exec(url);
        if (match && match[1]) {
            videoId = match[1];
        }
        return videoId;
    }

    function onPlayerReady(event) {
        event.target.playVideo();
    }

    var done = false;

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 6000);
            done = true;
        }
    }

    function stopVideo() {
        player.stopVideo();
    }
</script>