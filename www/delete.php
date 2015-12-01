<?php
require_once __DIR__. "/models/news.php";
if (!empty($_POST)) {

    $data_delete = array();
    if (!empty($_POST['delete_news'])) {   //1 час 27 Geekbrains урок 8
        $data_delete['news'] = $_POST['delete_news'];

    }
    if (isset($data_delete['news'])) {
        News_delete($data_delete);
        header('Location: index.php');
        die;
    }
}

include __DIR__ . '/views/delete.php';