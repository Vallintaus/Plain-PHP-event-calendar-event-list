<?php

require_once '../config/config.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        require '../src/home.php';
        break;
    case 'add_event':
        require '../src/add_event.php';
        break;
    default:
        echo "Page not found.";
}
