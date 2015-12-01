<?php
//КОНТРОЛЛЕР формы
require __DIR__ . '/models/news.php';

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

if (isset($_GET['id'])) {
    $get = $_GET['id'];
    $show = Selection_id($get);
}
include __DIR__ . '/views/show_news.php';
?>