<?php
//КОНТРОЛЛЕР формы,
require __DIR__ . '/models/news.php';

//бизнес- логика
if (!empty($_POST)) {

    $data_update = array();
    if (!empty($_POST['news_update'])) {
        $data_update['news'] = $_POST['news_update'];

    }

    if (!empty($_POST['text_update'])) {
        $data_update['text'] = $_POST['text_update'];

    }
    if (isset($data_update['news']) && isset($data_update['text'])) {
        News_update( $data_update );
        header('Location: index.php');
        die;
    }
}
include __DIR__ . '/views/update.php';
?>