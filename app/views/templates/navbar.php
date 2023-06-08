<nav class="navbar">
    <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <a href="<?= BASEURL; ?>">
            <img src="<?= BASEURL; ?>/img/logo/logo.png" alt="">GamePedia
        </a>
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
        <i><img src="<?= BASEURL; ?>/img/profile/profile.png" alt="" class="profile" /></i>
    </div>
</nav>


<div class="profile-card" id="profileCard">
    <div class="image">
        <img src="<?= BASEURL; ?>/img/profile/profile.png" alt="" class="profile-img" />
    </div>

    <div class="text-data">
        <span class="name">Admin</span>
    </div>

    <div class="buttons">
        <a href="<?= BASEURL; ?>/Log/logout" onclick="return confirm('Please confirm your intention to log out.');">
            <button class="button">Logout</button>
        </a>
        <button class="button-cancel">Cancel</button>
    </div>
</div>