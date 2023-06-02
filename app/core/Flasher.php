<?php

class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe, $icon)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe,
            'icon' => $icon
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-white rounded">
            <i id="close" class="bx bx-x close"></i>
            <div class="icon"><i class="' . $_SESSION['flash']['icon'] . '"></i></div>
            <strong>' . $_SESSION['flash']['pesan'] . '!</strong> ' . $_SESSION['flash']['aksi'] . '
        </div>';

            unset($_SESSION['flash']);
        }
    }
}
