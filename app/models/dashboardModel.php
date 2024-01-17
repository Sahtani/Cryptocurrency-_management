<?php
class dashboardModel{    

private $db;

public function __construct()
{
$this->db = new Database;
}
    public function displayCoin()
    {
<<<<<<< HEAD
        $this->db->query("SELECT * FROM coins");
=======
        $this->db->query("SELECT * FROM cryptomonnaies");
>>>>>>> 659e9ba46788e273e1bb1f8c9d7678ab50f2e067
        $row = $this->db->resultSet();
        return $row;
    }
    




}
?>