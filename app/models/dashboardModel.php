<?php
class dashboardModel{    

private $db;

public function __construct()
{
$this->db = new Database;
}
    public function displayCoin()
    {
        $this->db->query("SELECT * FROM cryptomonnaies");
        $row = $this->db->resultSet();
        return $row;
    }
    




}
?>