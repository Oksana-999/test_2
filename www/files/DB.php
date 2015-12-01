<?php
class  DB
{
    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('newsline');
        //Языковая настройка: кирилица
        mysql_query ("set_client='utf8'");
        mysql_query ("set character_set_results='utf8'");
        mysql_query ("set collation_connection='utf8_general_ci'");
        mysql_query ("SET NAMES utf8");
    }
    protected function query($sql)
    {
        $result = mysql_query($sql);
        $data = array();
        while (false !== ($row = mysql_fetch_assoc($result))) {
            $data[] = $row;
        }
        return $data;
    }
    protected function exec($sql)
    {
        $result = mysql_query($sql);
        return $result;
    }
    public function getAlldb($sql)
    {
        return $this->query($sql);
    }
    public function onlyChosen($sql)
    {
        return $this->query($sql);
    }
    public function insert($sql)
    {
        return $this->exec($sql);
    }
    public function delete($sql)
    {
        return $this->exec($sql);
    }
    public function update($sql)
    {
        return $this->exec($sql);
    }
}
?>