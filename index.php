<?php
require_once 'server/database.php';
require_once 'controller/GuestBookController.php';

$controller = new GuestBookController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->create();
}
$controller->read();
