<nav class="sidebar">
    <div class="menu_content">
        <ul class="menu_items">
            <div class="menu_title menu_dahsboard"></div>
            <li class="item">
                <a href="<?= BASEURL; ?>" class="nav_link">
                    <span class="navlink_icon">
                        <i class="bx bx-home-alt"></i>
                    </span>
                    <span class="navlink">Home</span>
                </a>

            <li class="item">
                <div href="home/index" class="nav_link submenu_item">
                    <span class="navlink_icon">
                        <i class='bx bx-joystick'></i>
                    </span>
                    <span class="navlink">game</span>
                    <i class="bx bx-chevron-right arrow-left"></i>
                </div>

                <ul class="menu_items submenu">
                    <a href="<?= BASEURL; ?>/game" class="nav_link sublink">List</a>
                </ul>
            </li>
        </ul>
        <div class="menu_title menu_editor"></div>


        <div class="bottom_content">
            <div class="bottom expand_sidebar">
                <span>locked</span>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="bottom collapse_sidebar">
                <span>unlocked</span>
                <i class='bx bx-lock-open-alt'></i>
            </div>
        </div>
    </div>
</nav>