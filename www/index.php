<?php
require_once __DIR__. "/models/news.php";
$items = getAll();

include __DIR__ . '/views/index.php';

?>