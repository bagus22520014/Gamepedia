<nav class="navbar">
    <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="<?= BASEURL; ?>/img/logo/logo.png" alt=""></i>GamePedia
    </div>

    <form action="<?= BASEURL; ?>/game/cari" method="post">
        <div class="search_bar">
            <input type="text" placeholder="Search" name="keyword" id="keyword" autocomplete="off">
            <button class="search_button" type="submit" id="tombolCari">
                <i class="bx bx-search"></i>
            </button>
        </div>
    </form>

    <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-bell'></i>
        <img src="<?= BASEURL; ?>/img/profile/profile.png" alt="" class="profile" />
    </div>
</nav>