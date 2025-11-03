<?php
require_once 'server/database.php';
require_once 'controller/GuestBookController.php';

$controller = new GuestBookController();
$controller->read();
