<?php

class Flasher 
{
    public static function setFlash($mesej, $aksi, $jenis) 
    {
        $_SESSION['flash'] = [
            'mesej' => $mesej,
            'aksi' => $aksi,
            'jenis' => $jenis
        ];
    }

    public static function flash() 
    {
        if(isset($_SESSION['flash'])) {
            echo '<div class="alert alert-'. $_SESSION['flash']['jenis'] . ' alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>'. $_SESSION['flash']['mesej'] .'</strong> '. $_SESSION['flash']['aksi'] .'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            unset($_SESSION['flash']);     
        }
    }
}