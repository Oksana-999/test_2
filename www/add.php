<?php
//КОНТРОЛЛЕР формы
require __DIR__ . '/models/news.php';
if (!empty($_POST)) {

    $data = array();
    if (!empty($_POST['news'])) {
        $data['news'] = $_POST['news'];

    }

    if (!empty($_POST['text'])) {
        $data['text'] = $_POST['text'];

    }

    if (isset($data['news']) && isset($data['text'])) {
        News_insert($data);
        header('Location: index.php');
        die;
    }
}

include __DIR__ . '/views/add.php';
?>