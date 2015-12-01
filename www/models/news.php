<?php
require_once __DIR__ . '/../files/DB.php';

function getAll()
{
    $db = new DB ();
    $sql = 'SELECT * FROM messages ORDER BY dt DESC';
    return $db->getAlldb($sql);
}

function News_insert($data)
{
    $db = new DB ();
    $sql = "INSERT INTO messages (dt, news, text) VALUES
	('" . date('Y-m-d H:i:s') . "', '" . $data['news'] . "', '" . $data['text'] . "')";
    return $db->insert($sql);
}

function Selection_id($get)
{
    $db  =  new  DB ();
    $sql = "SELECT id, text FROM messages WHERE id='" . $get . "'";
    return $db->onlyChosen($sql);

}

function News_delete($data_delete)
{
    $db  =  new  DB ();
    $sql = "DELETE FROM messages WHERE  news='" . $data_delete['news'] . "'";
    return $db->delete($sql);
}

function News_update($data_update)
{
    $db  =  new  DB ();
    $sql = "UPDATE messages SET text='" . $data_update['text'] . "'  WHERE news='" . $data_update['news'] .  "'";
    return $db->update($sql);
}