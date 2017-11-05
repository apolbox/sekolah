<?php

// Fungsi untuk menampilkan content
function setContentView($view)
{
    if (defined('APP_DIR_VIEW')) {
        require APP_DIR_VIEW . $view . ".php";
    }
    define('APP_DIR_VIEW','view' . DIRECTORY_SEPARATOR);
    
    // Deklarasi file
    $filename = APP_DIR_VIEW . $view . ".php";
    
    // cek keberadaan file
    if (file_exists($filename)) {
        require $filename;
    }
    else if (file_exists(__DIR__."/../{$filename}")) {
        require __DIR__."/../{$filename}";
    }
    else {
        // Kamu dapat menambahkan pesan atau apapun jika terjadi galat
    }
}
