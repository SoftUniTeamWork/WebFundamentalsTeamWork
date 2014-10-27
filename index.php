<?php

    $pages  = [
        'home' => 'Home',
        'events' => 'Events',
        'staff' => 'Staff',
        'gallery' => 'Gallery',
        'contact-us' => 'Contact us',
    ];
    $currentPage = (!empty($_GET['p'])) ? $_GET['p'] : '';


    if(!array_key_exists($currentPage, $pages)) {
        $currentPage = 'home';
    }

    require_once 'inc/layout/header.php';
    require_once 'inc/pages/' . $currentPage . '.php';
    require_once 'inc/layout/footer.php';
